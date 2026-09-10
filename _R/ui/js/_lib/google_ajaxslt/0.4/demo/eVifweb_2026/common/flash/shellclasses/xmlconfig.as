//
// config file loader
function mi_initConfig(callback) {
	configURL = configURL != null ? configURL : _root.meta_txt.text;
	configURL = configURL != undefined ? configURL : _root.meta_txt.text;
	debug("The configuration file is now loading: "+configURL);
	var xml = new XML();
	xml.onObjectLoad = function(dataObj) {
		_global.config = dataObj.configuration.site;
		debug("The configuration file loaded");
		if (callback) {
			callback();
		} else {
			mi_defaultCallback();
		}
	};
	if(_root.remoteload_txt.text==""){
		//xml.loadXmlAsObjectRelativeToSwf(configURL);
	}else{
		//xml.loadXmlAsObject(_root.remoteload_txt.text+configURL);
	}
	xml.loadXmlAsObject(_root.remoteload_txt.text+configURL);
}
