dojo.provide("obe.main");
dojo.require("dijit.layout.BorderContainer");
dojo.require("dijit.layout.ContentPane");
(function(){
	var main = obe.main;
	main.startup = function() {
		main.menu = new dijit.layout.ContentPane({
			id:"menu",
			region:"top",
			style:"height:2em;"
		});
		main.menu.attr('content','menu');
		main.navigator = new dijit.layout.ContentPane({
			id:"navigator",
			region:"left",
			style:"width:20%;overflow:auto;",
			splitter:true
		});
		main.navigator.attr('content','navigator');
		main.workspace = new dijit.layout.ContentPane({
			id:"workspace",
			region:"center"
		});
		main.workspace.attr('content','workspace');
		main.status= new dijit.layout.ContentPane({
			id:"status",
			region:"bottom",
			style:"height:2em;width:100%;"
		});
		main.status.attr('content','status');
		var appContainer = main.appContainer = new dijit.layout.BorderContainer({
			style:"width:100%;height:100%",
			design:"headline"
		});
		dojo._destroyElement(dojo.byId("bafLoading"));
		dojo.place(appContainer.domNode, dojo.body(), "first");
		appContainer.addChild(main.menu);
		appContainer.addChild(main.status);
		appContainer.addChild(main.navigator);
		appContainer.addChild(main.workspace);
		appContainer.layout();
		window.onresize = function() {
			appContainer.layout();
		};
	};
})();
