/***********************************
* Additional MovieClip Prototypes
***********************************/

// Get the url relative to the swf minus the file name
MovieClip.prototype.__getBaseUrl = function(){
	var index1 = this._url.lastIndexOf("/");
	// BUG FIX:
	// Added index2 for support in IE on network folders -JW
	var index2 = this._url.lastIndexOf("\\");
	var lastIndex = index1>index2 ? index1 : index2;
	var theURL = this._url.substring(0, lastIndex+1);
	return theURL;
}

// Make _baseUrl a property
MovieClip.prototype.addProperty("_baseUrl", MovieClip.prototype.__getBaseUrl, null);

// Same as loadMovie but relative to the swf and not the host page
MovieClip.prototype.loadMovieRelativeToSwf = function(url,targetClip){
	var targetClip = arguments.length > 1 ? targetClip : this;
	targetClip.loadMovie(this._baseUrl + url);
}

// Movie sound control
MovieClip.prototype.__soundController;
MovieClip.prototype.__unmutedVolume;

MovieClip.prototype.__initializeSound = function(){
	if(!this.__soundController){
		this.__soundController = new Sound(this);
	}
}
MovieClip.prototype.__setVolume = function(volume){
	this.__initializeSound();
	this.__soundController.setVolume(volume);
}
MovieClip.prototype.__getVolume = function(){
	this.__initializeSound();
	return this.__soundController.getVolume();
}
MovieClip.prototype.__muteSound = function(bool){
	this.__initializeSound();
	if(bool){
		if(!this.__isSoundMuted()){
			this.__unmutedVolume = this.__soundController.getVolume();
			this.__soundController.setVolume(0);
		}
	}else{
		if(this.__isSoundMuted()){
			this.__soundController.setVolume(this.__unmutedVolume);
		}
	}	
}
MovieClip.prototype.__isSoundMuted = function(){
	return this.__soundController.getVolume() == 0;
}
MovieClip.prototype.addProperty("_mute", MovieClip.prototype.__isSoundMuted, MovieClip.prototype.__muteSound);
MovieClip.prototype.addProperty("_volume", MovieClip.prototype.__getVolume, MovieClip.prototype.__setVolume);

// ***** Add members you want to hide and protect in the array below *******
ASSetPropFlags(MovieClip.prototype,["_baseUrl","__getBaseUrl","loadMovieRelativeToSwf", "__soundController", "__unmutedVolume", "__isSoundMuted", "__muteSound", "__getVolume", "__setVolume", "_mute", "_volume"],7,1);


/**************************************
* Additional MovieClipLoader Prototypes
**************************************/
MovieClipLoader.prototype.loadRelativeClip = function(url, target){
	trace("++++++++++++++++++++++++++++"+target._parent._baseUrl + url);
	this.loadClip(target._parent._baseUrl + url,target);
}

/***********************************
* Additional XML Prototypes
***********************************/
XML.prototype.loadXmlAsObjectRelativeToSwf = function(url){
	this.loadXmlAsObject(_baseUrl + url);
}
XML.prototype.loadXmlAsObject = function(url){
	this.onLoad = function(valid){
		if(valid){
			var dataObj = this.makeXMLSA();
			this.onObjectLoad(dataObj);
		}else{
			trace("Xml failed to load: Please check for valid URL and DOM");
		}
	}
	this.ignoreWhite = true;
	this.load(url);
}

// makeXMLSA was orginally created by Max Ziebell (http://proto.layer51.com/d.aspx?f=1311)
// this version modified by JW for additional support
XMLNode.prototype.makeXMLSA = function(xObj, obj) {
	//----- Initialise objects
	if (xObj == null) {
		xObj = this;
	}
	if (obj == null) {
		obj = {};
	}
	var a, c, nName, nType, nValue, cCount;
	//----- Add attributes to the object
	obj.attributes = new Object();
	obj.__resolve = function(found){
		//trace("Looking for "+found);
		// Added conditional to resolve
		// attribute matching the resolution
		// string - JW
		return this.attributes[found];
	}
	for (a in xObj.attributes) {
		obj.attributes[a] = xObj.attributes[a];
	}
	//----- Build child nodes
	for (c in xObj.childNodes) {
		nName = xObj.childNodes[c].nodeName;
		nType = xObj.childNodes[c].nodeType;
		nValue = xObj.childNodes[c].nodeValue;
		if (nType == 3) {
			obj._value = nValue;
		}else if (nType == 1 && nName != null) {
			if (!(obj[nName]  instanceof Array)){
				obj[nName] = new Array();
				obj[nName].__resolve = function(found){
					//trace("Looking for "+found);
					// Added conditional to resolve
					// node first then look for an
					// attribute matching the resolution
					// string - JW
					//if(this[0][found]){
						//trace("found array item 0: "+found);
						return this[0][found];
					//}else{
						//trace("found attribute: "+found);
						//return this.attributes[found];
					//}				
				};
				ASSetPropFlags(obj[nName],null,1,1);
			}
			obj[nName].unshift(this.makeXMLSA(xObj.childNodes[c], {}));
		}
	}
	// Return object
	return obj;
};

// ***** Add members you want to hide and protect in the array below *******
ASSetPropFlags(MovieClip.prototype,["makeXMLSA"],7,1);

/***********************************
* End XML Prototypes
***********************************/