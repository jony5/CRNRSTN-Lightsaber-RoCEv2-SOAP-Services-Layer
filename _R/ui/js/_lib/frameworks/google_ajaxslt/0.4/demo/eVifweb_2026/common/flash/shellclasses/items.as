// Functions to load in and maintain different items
// 
// used to find which asset is a content asset
function mi_findContentAsset(obj, type) {
	for (var i = 0; i<obj.length; ++i) {
		if (obj[i].type == type) {
			return obj[i];
		}
	}
	return false;
}
//
//
function mi_findAsset(obj, type) {
	for (var i = 0; i<obj.asset.length; ++i) {
		if (obj.asset[i].type == type) {
			return obj.asset[i];
		}
	}
	return false;
}
//
// had to add this so that site could load with a specific background and item in case there are more than 1 item
// and the site can dynamically launch with a specific item (fromBanner)
function mi_determineInitialItemAssets() {
	var initObj = {};
	var contentObj = mi_findContentAsset(mi_siteAssets, "content");
	//
	// check to see if the defaultitem node is set to true
	// only one item should be set to true, otherwise it will load in the first true
	if (fromBanner != undefined) {
		for (var i = 0; i<contentObj.item.length; ++i) {
			if (contentObj.item[i].label == fromBanner) {
				initObj = contentObj.item[i];
				break;
			}
		}
	}
	if (!initObj.label) {
		for (var i = 0; i<contentObj.item.length; ++i) {
			if (contentObj.item[i].defaultitem._value == "true") {
				initObj = contentObj.item[i];
				break;
			}
		}
	}
	mi_initItemObj = initObj;
	mi_currentItem = initObj;
	mi_currentItemLabel = initObj.label;
}
//
// update assets to new asset object, used for transitioning to new item
function mi_updateItem(ind) {
	var newItemObj = {};
	//
	// find which items in the assets is a content asset
	var contentObj = mi_findContentAsset(mi_siteAssets, "content");
	//
	// determin 
	if (contentObj != false) {
		return contentObj.item[ind];
	}
	//    
	// set all root level vars to the correct new asset object
	return mi_currentItem;
}
//
// called from clicking on the item
_global.mi_itemClick = function(id) {
	if (id == undefined) {
		id = this.id;
	}
	var newItemObj = mi_updateItem(id);
	//
	// compare every item in the assetObj and see if they are similar
	// if they are different, transition one out and the other in
	for (var i = 0; i<newItemObj.asset.length; ++i) {
		var matchingObj = mi_findAsset(mi_currentItem, newItemObj.asset[i].type);
		if (matchingObj) {
			switch (matchingObj.type) {
			case "featurelist" :
				if (matchingObj.toString() != newItemObj.asset[i].toString()) {
					//
					// items do not match, now transition from one to the next
					trace("new "+newItemObj.asset[i].type+" asset does not match current "+matchingObj.type+" asset");
				} else {
					trace("true");
				}
				break;
			default :
				if (matchingObj.src != newItemObj.asset[i].src) {
					//
					// items do not match, now transition from one to the next
					trace("new "+newItemObj.asset[i].type+" asset does not match current "+matchingObj.type+" asset");
				}
				break;
			}
		}
	}
	mi_currentItem = newItemObj;
	mi_currentItemLabel = newItemObj.label;
};
