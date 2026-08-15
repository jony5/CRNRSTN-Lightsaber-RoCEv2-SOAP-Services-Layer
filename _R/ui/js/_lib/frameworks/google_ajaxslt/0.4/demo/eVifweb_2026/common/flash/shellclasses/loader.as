//
// Loader functions for both site, assets and items (phones)

//
// take whatever clip is passed and add a new clip inside with new level and name
function mi_getClip(clip, name, useNumber) {
	var nextLevel:Number = clip.getNextHighestDepth();
	if (useNumber) {
		name+=nextLevel;
	}
	var clipLoader:MovieClip = clip.createEmptyMovieClip(name, nextLevel);
	return clipLoader;
}
//
// Used to pull in loader animation, and then when finished, use it to load in the body of the site
function mi_initSiteLoader(callback) {
	var mc_loader:MovieClipLoader = new MovieClipLoader();
	var clipLoader = mi_getClip(mi_applicationRoot.mi_loaders, "loader", true);
	var clipListener:Object = new Object();
	mc_loader.addListener(clipListener);
	clipListener.onLoadStart = function() {
		clipLoader._visible = false;
	};
	clipListener.onLoadInit = function() {
		clipLoader._visible = true;
		mi_initSiteLoad(clipLoader, callback);
	};
	mc_loader.loadClip(config.siteresources.siteloader.src, clipLoader);
}

//
// Site load, loads in main site shell
function mi_initSiteLoad(clipLoader, callback) {
	mi_addTransition("fade", clipLoader, 0, 100, 1, true);
	//
	// determine width of site and width of loader, position loader accordingly
	var loader = config.siteresources.siteloader;
	var objWidth = Number(config.width);
	var objHeight = Number(config.height);
	clipLoader._y = Number(loader.y._value);
	clipLoader._x = ((objWidth-Number(loader.width._value))/2);
	//
	// Did not have time to figure our how to use the MovieClipLoader object when referencing the _root for site loading
	mi_applicationRoot.onEnterFrame = function() {
		var frame = int((this.getBytesLoaded()/this.getBytesTotal())*100);
		clipLoader.gotoAndStop(frame);
		if (mi_applicationRoot.getBytesLoaded() == mi_applicationRoot.getBytesTotal()) {
			//
			// site is loaded, fade out loader and run the callback function
			mi_addTransition("fade", clipLoader, null, 0, 1, true);
			callback();
			this.onEnterFrame = null;
		}
	};
}
//
// Used for the majority of all site assets - initializes the asset loader
function mi_initAssetLoader(clip, clipObj, label, callback) {
	var visible = (clipObj.loader._value == "true");
	var mc_loader:MovieClipLoader = new MovieClipLoader();
	var clipLoader = mi_getClip(mi_applicationRoot.mi_loaders, "loader", true);
	var clipListener:Object = new Object();
	mc_loader.addListener(clipListener);
	clipListener.onLoadStart = function() {
		clipLoader._visible = false;
	};
	clipListener.onLoadInit = function() {
		//
		// some loaders are to be hidden
		clipLoader._visible = visible;
		mi_initAssetLoad(clip, clipObj, clipLoader, label, callback);
	};
	mc_loader.loadClip(config.siteresources.assetloader.src, clipLoader);
}

//
// Asset loader
function mi_initAssetLoad(clip, clipObj, clipLoader, label, callback) {
	mi_addTransition("fade", clipLoader, 0, 100, 1, clipLoader._visible);
	clipObj.targetClip = mi_getClip(clip, label, false);
	var mc_loader:MovieClipLoader = new MovieClipLoader();
	var clipListener:Object = new Object();
	var loader = config.siteresources.assetloader;
	//
	// determine position of the loader. Loader should always be centered over the aseet being loaded
	var objWidth = Number(clipObj.width._value);
	var objHeight = Number(clipObj.height._value);
	var x = Number(clipObj.x._value);
	var y = Number(clipObj.y._value);
	clipLoader._y = ((objHeight-Number(loader.height._value))/2)+y;
	clipLoader._x = ((objWidth-Number(loader.width._value))/2)+x;
	//
	// position the asset itself on the stage
	clipObj.targetClip._x = x;
	clipObj.targetClip._y = y;
	mc_loader.addListener(clipListener);
	clipListener.onLoadInit = function(mc:MovieClip) {
		//
		// when asset is loaded in, transition loader out and asset in
		mi_addTransition("fade", clipLoader, null, 0, 1, clipLoader._visible, mi_removeLoader);
		mi_addTransition(clipObj.transition._value, clipObj.targetClip, 0, 100, 1, true);
		if (clipObj.transition._value != "hide") {
			clipObj.targetClip._visible = true;
		}
		clipObj.targetClip.cacheAsBitmap = true;
		//
		// every asset clip that gets loaded in get the asset object assigned to it to keep track of asset object properties
		clipObj.targetClip.refObj = clipObj;
		callback(clipObj);
	};
	clipListener.onLoadProgress = function(target:MovieClip, bytesLoaded:Number, bytesTotal:Number) {
		var frame = int((bytesLoaded/bytesTotal)*100);
		clipLoader.gotoAndStop(frame);
	};
	clipListener.onLoadStart = function() {
		clipObj.targetClip._visible = false;
	};
	mc_loader.loadClip(clipObj.src, clipObj.targetClip);
}
//
//  This loads in item assets. If the site has more than one phone, this function will be used to load in the item icon, background, and sequence swf.
function mi_initItemLoader(clipArray, clipObjArray, callback) {
	var mc_loader:MovieClipLoader = new MovieClipLoader();
	var clipLoader = mi_getClip(mi_applicationRoot.mi_loaders, "loader", true);
	var clipListener:Object = new Object();
	mc_loader.addListener(clipListener);
	clipListener.onLoadStart = function() {
		clipLoader._visible = false;
	};
	//
	// This function differs from the asset loader in that it passes an array of clipObj's and clips
	clipListener.onLoadInit = function() {
		clipLoader._visible = true;
		mi_initItemLoad(clipArray, clipObjArray, clipLoader, callback);
	};
	mc_loader.loadClip(config.siteresources.itemloader.src, clipLoader);
}
//
// Similar to asset loader
function mi_initItemLoad(clipArray, clipObjArray, clipLoader, callback) {
	mi_addTransition("fade", clipLoader, 0, 100, 1, clipLoader._visible);
	var numItemsToLoad = clipArray.length;
	var itemsLoadedCounter = 0;
	//
	// iterates through all items in the array and initializes loading all all items
	for (var i = 0; i<numItemsToLoad; ++i) {
		var clip = clipArray[i];
		var clipObj = clipObjArray[i];
		//
		// creates a clip for all items to be loaded into within their proper master clip
		clipObj.targetClip = mi_getClip(clip, clipObj.label, false);
		var mc_loader:MovieClipLoader = new MovieClipLoader();
		var clipListener:Object = new Object();
		var loader = config.siteresources.itemloader;
		//
		// positions all item assets where they need to be
		var x = Number(clipObj.x._value);
		var y = Number(clipObj.y._value);
		clipObj.targetClip._x = x;
		clipObj.targetClip._y = y;
		//
		// the first item in the array will ALWAYS be the item icon itself, and that is where the loader will position itself
		if (i == 0) {
			var objWidth = Number(clipObj.width._value);
			var objHeight = Number(clipObj.height._value);
			clipLoader._y = ((objHeight-Number(loader.height._value))/2)+y;
			clipLoader._x = ((objWidth-Number(loader.width._value))/2)+x;
		}
		mc_loader.addListener(clipListener);
		//
		// when ALL items are loaded, it will initiate a callback assocaited with the first item from the clipObj array
		clipListener.onLoadInit = function(mc:MovieClip) {
			//
			// every asset clip that gets loaded in get the asset object assigned to it to keep track of asset object properties
			clipObj.targetClip.refObj = clipObj;
			if (++itemsLoadedCounter == numItemsToLoad-1) {
				var clipObj = clipObjArray[0];
				//
				// fade in item icon, but leave the rest hidden for use later
				mi_addTransition("fade", clipLoader, null, 0, 1, clipLoader._visible, mi_removeLoader);
				mi_addTransition(clipObj.transition._value, clipObj.targetClip, 0, 100, 1, true);
				callback(clipObj);
			}
		};
		clipListener.onLoadStart = function() {
			clipObj.targetClip._visible = false;
		};
		mc_loader.loadClip(clipObj.src, clipObj.targetClip);
	}
}

//
// Loader used for dynamic image loading
function mi_initImgAssetLoader(clip, clipObj, label, callback, imgurl) {
	var visible = (clipObj.loader._value == "true");
	var mc_loader:MovieClipLoader = new MovieClipLoader();
	var clipLoader = mi_getClip(mi_applicationRoot.mi_loaders, "loader", true);
	var clipListener:Object = new Object();
	mc_loader.addListener(clipListener);
	clipListener.onLoadStart = function() {
		clipLoader._visible = false;
	};
	clipListener.onLoadInit = function() {
		//trace("clipListener.onLoadInit has triggered");
		//
		// some loaders are to be hidden
		clipLoader._visible = visible;
		mi_initImgAssetLoad(clip, clipObj, clipLoader, label, callback, imgurl);
	};
	
	mc_loader.loadClip(config.siteresources.assetloader.src, clipLoader);
}

//
// Image Asset loader
// (imagehandle, _root.mi_p2fMetaObj, "mc_brandedimg", callback ,_root.mi_p2fMetaObj.idtopimage._value);
function mi_initImgAssetLoad(clip, clipObj, clipLoader, label, callback, imgurl) {

//	trace("-=============================================");
//	trace("-=============================================");
//	trace("Image Asset load imgsurl:" +imgurl); 
//	trace("Image Asset load clip:" +clip);  	// target mi
//	trace("Image Asset load clipObj:" +clipObj);
//	trace("Image Asset load clipLoader:" +clipLoader);
//	trace("Image Asset load label:" +label); 	// name mc
//	trace("Image Asset load callback:" +callback);
//	trace("-=============================================");
//	trace("-======================================");
	
	mi_addTransition("fade", clipLoader, 0, 100, 1, clipLoader._visible);
	
	var mc_loader:MovieClipLoader = new MovieClipLoader();
	var clipListener:Object = new Object();
	var loader = config.siteresources.assetloader;
	//trace("My loader: "+loader);
	
	//
	// positions all item assets where they need to be
	var x = Number(clipObj.idx._value);
	var y = Number(clipObj.idy._value);
	clip._x = x;
	clip._y = y;	
	
	//
	// determine position of the loader. Loader should always be centered over the aseet being loaded
	var objWidth = Number(clipObj.idtopwidth._value);
	var objHeight = Number(clipObj.idtopheight._value);
	
	clipLoader._y = ((objHeight-Number(loader.height._value))/2)+y;
	clipLoader._x = ((objWidth-Number(loader.width._value))/2)+x;
	
	mc_loader.addListener(clipListener);
	clipListener.onLoadInit = function(mc:MovieClip) {
		//trace("Image onLoadInit: " + mc);
		//
		// when asset is loaded in, transition loader out and asset in
		mi_addTransition("fade", clipLoader, null, 0, 1, clipLoader._visible, mi_removeLoader);
		mi_addTransition("fade", clip, null, 100, 1, true );
		if (clipObj.transition._value != "hide") {
			//trace("clip "+clip);
			clip._visible = true;
		}
		clip.cacheAsBitmap = true;
		//
		// every asset clip that gets loaded in get the asset object assigned to it to keep track of asset object properties
		clip.refObj = clipObj;
		callback(clipObj);
	};
	
	clipListener.onLoadProgress = function(target:MovieClip, bytesLoaded:Number, bytesTotal:Number) {
		//trace("Image onLoadProgress: " + target);
		//trace("bytesLoaded:Number: "+bytesLoaded);
		var frame = int((bytesLoaded/bytesTotal)*100);
		//trace("Frame sent to frame: "+frame);
		clipLoader.gotoAndStop(frame);
		
	};
	clipListener.onLoadStart = function() {
		//trace("Image onLoadStart: ");
		clip._visible = false;
	};

	//trace(imgurl);
	//trace(clip);
	//trace("Clip postion: "+clip._x+ ": "+clip._y);
	//trace("Clip alpha: "+clip._alpha);	
	mc_loader.loadClip(imgurl,clip);
	//trace("======= DONE ======= "+imgurl+" HERE: -> "+ clip);
}

//
// for the item loader function, I may go back in later and try to combine functionalities from it and the asset loader
// to optimize code, but for now they are separate and redundant
//
// Deletes the loader clip so that there aren't a bunch of them all on stage with their alpha's at 0
function mi_removeLoader(clipLoader) {
	clipLoader.removeMovieClip();
}
