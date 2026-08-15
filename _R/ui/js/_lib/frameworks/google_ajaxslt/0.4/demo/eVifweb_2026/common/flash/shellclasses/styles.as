//
//
function mi_initStyles(callback) {
	_global.mi_rlpStyles = new TextField.StyleSheet();
	mi_rlpStyles.onLoad = function(success:Boolean):Void  {
		if (success) {
			callback();
		}
	};
	mi_rlpStyles.load(config.siteresources.stylesheet.src);
}