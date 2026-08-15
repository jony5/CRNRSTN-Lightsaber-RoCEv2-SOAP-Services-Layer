//
// Main site functions
//
// Build site functions
mi_p2fMetaObj = {};
mi_p2fAgentBrandObj = {};
mi_p2fvideoframesObj = {};
mi_initItemObj = {};
mi_currentItem = {};
mi_currentItemLabel = "";
function mi_buildSite() {
	//
	// iterate through all assets
	var currentAsset = mi_siteAssets[mi_assetCounter];
	var loadIndex = Number(currentAsset.loadIndex);
	var clip = mi_applicationRoot["mi_"+currentAsset.type];
	
	switch (currentAsset.type) {
	case "endtransmission":
		// if things haven't started moving by now, we have a problem houston...
	break;
	case "agentbrand":
		mi_p2fAgentBrandObj = currentAsset;
		trace("my asset label: "+currentAsset.label);  //mc_agentbrand
		mi_initAssetLoader(clip, currentAsset, currentAsset.label, mi_nextAsset);
	break;
	case "videoframe":
		trace(currentAsset.sequence._value);
		mi_p2fvideoframesObj[currentAsset.sequence._value] = currentAsset;
	break;
	case "metadata":
		trace("got meta");
		trace(currentAsset.label);
		mi_p2fMetaObj = currentAsset;
	break;
	default :
		//
		// default item type
		mi_initAssetLoader(clip, currentAsset, currentAsset.label, mi_nextAsset);
		break;
	}
	//
	// checks to see if any assets have the same load index, which allows mutliple elements to be loaded in at the same
	// time rather than sequentially
	if (Number(mi_siteAssets[mi_assetCounter+1].loadIndex) == loadIndex) {
		++mi_assetCounter;
		mi_buildSite();
	}else{
		loadIndex++;
		if (Number(mi_siteAssets[mi_assetCounter+1].loadIndex) == loadIndex) {
			++mi_assetCounter;
			mi_buildSite();
		}
	}
}
//
// continues to load in assets until the site is finished loading
function mi_nextAsset() {
	if (++mi_assetCounter<mi_siteAssets.length) {
		mi_buildSite();
	}
}
//
// Because we can't start the video until all assets have been loaded, this function is called after the end of the XML 
// "endtransmission" has been parsed.
function mi_initVideoContent(){
	
}
//
// get the video player ready to play once the flv player has been fully loaded in and ready
// built in the ability to launch with different videos, like the q site which can launch with
// either the black or silver video depending on the fromBanner var
function mi_initVideoIntro() {
	var vidObj = this.clipObj;
	var vidPlayer = vidObj.targetClip;
	vidObj.vidPath = mi_initItemObj.videopath._value;
	vidObj.callback = mi_introVideoDone;
	vidPlayer.init(vidObj);

}
//
// called when the video is finished playing, or the user clicked "skip"
function mi_introVideoDone() {
	mi_initAssetLoader(mi_background, mi_currentItem.asset[0], mi_currentItem.label, mi_nextAsset);
}
//
// called once an asset is of a "content" type
// loads in all content assets the same except the featurelist
function mi_initSiteContent() {
	if (mi_contentIndex == undefined) {
		//
		// start with 1 to avoid reloading in the background
		mi_contentIndex = 1;
	}
	var currentAsset = mi_initItemObj.asset[mi_contentIndex];
	var loadIndex = Number(currentAsset.loadIndex);
	var clip = mi_applicationRoot["mi_"+currentAsset.type];
	//
	// I don't need anything but the default
	/*	
	switch (mi_initItemObj.asset[mi_contentIndex].type) {
		//
		// kinda hacky, but featurelist always has to be the last piece of content loaded in

	case "featurelist" :
		mi_creatFeatureList(currentAsset);
		break;
	case "sequence" :
		mi_initAssetLoader(clip, currentAsset, mi_currentItem.label, mi_initReflection);
		break;
	default :
	*/
	mi_initAssetLoader(clip, currentAsset, mi_currentItem.label, mi_initSiteContent);
//	break;
	//}
	++mi_contentIndex;
}
//
// reflection function
function mi_initReflection() {
	var currentAsset = mi_initItemObj.asset[mi_contentIndex-1];
	if (currentAsset.reflection._value == "true") {
		mi_initAssetLoader(mi_applicationRoot.mi_reflection, currentAsset, mi_currentItem.label, mi_initReflectionMask);
	} else {
		mi_playPhoneSequence();
	}
}

//
// set up reflection mask and position reflection
function mi_initReflectionMask() {
	trace("don't delete me");
	var currentAsset = mi_initItemObj.asset[mi_contentIndex-1];
	mi_applicationRoot.mi_reflectionMask.cacheAsBitmap = true;
	mi_applicationRoot.mi_reflection.cacheAsBitmap = true;
	mi_applicationRoot.mi_reflectionMask._alpha = 100;
	mi_applicationRoot.mi_reflection._yscale = -100;
	mi_applicationRoot.mi_reflection._y = (Number(currentAsset.y._value)+Number(currentAsset.height._value))*2;
	mi_applicationRoot.mi_reflectionMask._y = mi_applicationRoot.mi_reflection._y/2;
	mi_applicationRoot.mi_reflectionMask._height = Number(currentAsset.reflection.height);
	mi_applicationRoot.mi_reflection.setMask(mi_applicationRoot.mi_reflectionMask);
	mi_playPhoneSequence();
}
//
// functions for buttons inside of site assets
//
// a bit klugey, but I am more concerned with making the XML easy and site assets easy to update
// this function looks through any links associated with an asset and returns a match to the button label
function mi_findLinkInfo(clipObj, label) {
		trace("don't delete me");
	for (var i = 0; i<clipObj.link.length; ++i) {
		if (clipObj.link[i].label == label) {
			trace(clipObj.link[i]);
			return clipObj.link[i];
			
		}
	}
	return null;
}

//
// function to handle all link objects, by launching correct content
// and making tracking calls
function mi_linkObjInit(linkObj) {
	//mi_trackIt(linkObj);
	mi_launchURL(linkObj);
}
//
// based on the "label" param, if there is an associated url, launches the url 
_global.mi_ctaButtonClick = function(clipObj, label) {
	var linkObj = mi_findLinkInfo(clipObj, label);
	if (linkObj != null) {
		mi_linkObjInit(linkObj);
	}
};
//
//
function mi_initSite() {
	//mi_fireInitTracking();
	mi_assetCounter = 0;
	mi_siteAssets = config.siteassets.asset;
	mi_determineInitialItemAssets();
	mi_buildSite();
}
