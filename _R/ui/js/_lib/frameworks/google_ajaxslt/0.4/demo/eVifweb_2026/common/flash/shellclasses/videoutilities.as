import mx.transitions.*;
import mx.transitions.easing.*;
import TextField.StyleSheet;
//
// easing functions
function mi_easeIn(t:Number, b:Number, c:Number, d:Number):Number {
	return c*(t /= d)*t*t*t*t+b;
}
function mi_easeOut(t:Number, b:Number, c:Number, d:Number):Number {
	return c*((t=t/d-1)*t*t*t*t+1)+b;
}
function mi_easeInOut(t:Number, b:Number, c:Number, d:Number):Number {
	if ((t /= d/2)<1) {
		return c/2*t*t*t*t*t+b;
	}
	return c/2*((t -= 2)*t*t*t*t+2)+b;
}
//
// Commonly used functions and prototypes for all RLP's
//
// Created own transition manager
function mi_initTransitionManager() {
	mi_transitionArray = new Array();
}
//
// adds transitions to the transition manager
_global.mi_addTransition = function(type, clip, start, target, speed, vFlag, callback) {
	var duration = speed*30;
	switch (type) {
		//
		// Most commonly used transition, alpha fade
	case "fade" :
		if (start == null) {
			start = clip._alpha;
		} else {
			clip._alpha = start;
		}
		clip.mi_tweenClip("_alpha", mi_easeOut, start, target, duration, vFlag, callback);
		break;
		//
		// the "play" transition basically relies on timeline animations to transition in the asset
	case "play" :
		clip._alpha = 100;
		clip.play();
		//
		// set up so that the callback can be called from within the clip if needed
		clip.callback = callback;
		break;
		//
		// self explanatory
	case "none" :
		clip._alpha = 100;
		callback();
		break;
		//
		// transitions in element, but hides it for later use
	case "hide" :
		clip._alpha = 0;
		clip._visible = false;
		callback();
		break;
	}
};
//
// wrote my own tween function due to issues I had with Macromedia's tween class
MovieClip.prototype.mi_tweenClip = function(prop, func, begin, finish, duration, vFlag, callback, targetScale) {
	this.func = func;
	this.prop = prop;
	this.begin = begin;
	this[prop] = begin;
	this.finish = finish;
	this.change = this.finish-this.begin;
	this.duration = duration;
	this.callback = callback;
	this.currentScale = this._xscale;
	this.targetScale = targetScale;
	this.changeInScale = this.targetScale-this.currentScale;
	this.time = 0;
	this.mi_pulseUpdate = function() {
		with (this) {
			this[this.prop] = func(time++, begin, change, duration);
			//
			// added this in as a bit of a hack to scale any item up or down as well
			if (targetScale) {
				_xscale = _yscale=func(time, currentScale, changeInScale, duration);
			}
			if (vFlag) {
				this._visible = (this._alpha>0);
			}
			if (time>duration) {
				this[this.prop] = this.finish;
				this.callback();
				mi_removePulseListener(this);
			}
		}
	};
	mi_addPulseListener(this);
};
//
// used to do a color trasnform tween, used most often in the feature list for changing colors of lines and text
MovieClip.prototype.mi_fadeColor = function(finalColor, finalAlpha, speed, callback) {
	this.percentage = 0;
	clearInterval(this.fadeInt);
	this.tmpColor = new Color(this);
	this.startColor = this.tmpColor.getRGB();
	this.deltaAlpha = finalAlpha-this._alpha;
	this.startAlpha = this._alpha;
	this.fade = function(target_MC) {
		if (target_MC.percentage>=1) {
			if (finalColor != null) {
				target_MC.startColor = Number(finalColor);
			}
			target_MC._alpha = finalAlpha;
			clearInterval(target_MC.fadeInt);
			callback();
		} else {
			target_MC.percentage += speed;
			if (finalColor != null) {
				target_MC.tmpColor.mi_blendRGB(target_MC.startColor, Number(finalColor), target_MC.percentage);
			}
			if (target_MC.deltaAlpha != 0) {
				target_MC._alpha = target_MC.startAlpha+(target_MC.deltaAlpha*target_MC.percentage);
			}
		}
	};
	this.fadeInt = setInterval(this.fade, 30, this);
};
//
// prototype function used only by the fade mi_fadeColor function above
Color.prototype.mi_blendRGB = function(c1, c2, t) {
	if (arguments.length == 2) {
		t = c2;
		c2 = this.getRGB();
	}
	if (t<-1) {
		t = -1;
	} else if (t>1) {
		t = 1;
	}
	if (t<0) {
		t = 1+t;
	}
	c1 = c1.mi_HEXtoRGB();
	c2 = c2.mi_HEXtoRGB();
	var ct = (c1.rb+(c2.rb-c1.rb)*t) << 16 | (c1.gb+(c2.gb-c1.gb)*t) << 8 | (c1.bb+(c2.bb-c1.bb)*t);
	this.setRGB(ct);
	return ct;
};
Number.prototype.mi_HEXtoRGB = function() {
	return {rb:this >> 16, gb:(this >> 8) & 0xff, bb:this & 0xff};
};
//
// used to remove non-web ready chars from any string, helpful for incoming vars
String.prototype.mi_removeUnusableChars = function() {
	//
	// array of usable chars
	var usableCharArray = new Array("_", ":", "/", ".");
	var retStr = "";
	for (var i = 0; i<this.length; ++i) {
		var char = this.substr(i, 1);
		var charNum = ord(char);
		if ((charNum>=48 and charNum<=57) or (charNum>=65 and charNum<=90) or (charNum>=97 and charNum<=122) or (charNum == 32)) {
			if (charNum == 32) {
				retStr += "_";
			} else {
				retStr += char;
			}
		} else {
			for (var k = 0; k<usableCharArray.length; ++k) {
				if (char == usableCharArray[k]) {
					retStr += char;
					break;
				}
			}
		}
	}
	return retStr;
};
//
// instead of using onEnterFrames all over the place, everything is triggered from one central onEnterFrame event
// which fires off events, and movieClips then subscribe to the pulse event
function mi_initPulse() {
	_global.mi_pulseState = true;
	//
	// creates random clip on a level that has the onEnterFrame event attached to it
	_global.mi_gPulseClip = mi_applicationRoot.createEmptyMovieClip("mi_pc", 2000000);
	AsBroadcaster.initialize(mi_gPulseClip);
	mi_gPulseClip.onEnterFrame = mi_sendPulse;
}
//
// sendPulse send the "mi_pulseUpdate" event to all listeners
function mi_sendPulse() {
	if (mi_pulseState) {
		mi_gPulseClip.broadcastMessage("mi_pulseUpdate");
	}
}
_global.mi_addPulseListener = function(clip) {
	mi_gPulseClip.addListener(clip);
};
_global.mi_removePulseListener = function(clip) {
	mi_gPulseClip.removeListener(clip);
};
//
// used in case for some reason we want to switch ALL onEnterFrame animations off or on
// would be useful if we wanted to turn off the site while the user views off site flash content
_global.mi_setPulseState = function(bool) {
	_global.mi_pulseState = bool;
};
//
// all exit links are rooted through this function
_global.mi_launchURL = function(linkObj) {
	switch (linkObj.window) {
	case "_new" :
		//
		// launch sized window
		break;
	default :
		getURL(linkObj.url, linkObj.window);
		break;
	}
};
//
// prototype for object tracing
Object.prototype.toString = function(s) {
	var looped = false;
	s += "{";
	for (var p in this) {
		if (!looped) {
			looped = true;
		}
		if (this[p] instanceof Array) {
			s += p+this[p];
		} else if (typeof this[p] == "object") {
			s += this[p].toString(p);
		} else if (typeof this[p] == "function") {
			s += p;
		} else {
			s += p+this[p];
		}
	}
	if (looped) {
		return s;
	}
	return s;
};
//
//
mi_initTransitionManager();
mi_initPulse();
