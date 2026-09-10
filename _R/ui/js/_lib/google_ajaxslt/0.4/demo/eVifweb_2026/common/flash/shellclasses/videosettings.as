//
// open up holes for tracking and external services
System.security.allowDomain("*");
System.security.allowDomain("*.*");
//
// set devmode
devmode = System.capabilities.playerType == "External";
//
// define _root level of app
_global.mi_applicationRoot = this;
//
// hide flash player menu
fscommand("showmenu", false);
//
// set playback quality to best
_quality = "BEST";
//
// prevent the site from scaling
Stage.scaleMode = "noScale";
//
// determine if the site comes in with any variable to jump to a specific product
fromBanner = "red";
_global.fromBanner = fromBanner;
//
// set up debug function
_global.debug = function(msg) {
	debug_txt.text += msg+chr(13);
	trace(msg);
}
_global.mi_defaultCallback = function() {
	mi_applicationRoot.play();
}
