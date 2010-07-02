<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html dir="ltr">
    <head>
	<style type="text/css">
			@import url(<?php echo site_url('media/js/dijit/themes/tundra/tundra.css'); ?>);
			@import url(<?php echo site_url('media/js/dojo/resources/dojo.css'); ?>);
			@import url(<?php echo site_url('media/js/obe/resources/obe.css'); ?>);
	</style>
        <script type="text/javascript" src="<?php echo site_url('media/js/dojo/dojo.js'); ?>" djConfig="parseOnLoad: true, useCommentedJson: true"></script>
    <script type="text/javascript">
        dojo.require("obe.main");
	dojo.addOnLoad(function(){
		var testId = location.search.match(/(\?test\=)(\w+)/);
		if (testId)
		{
			dojo.require("obe.test.tests." + testId[2]);
		}
		else
		{
			obe.main.startup();
		}
	});
    </script>
    </head>
    <body class=" tundra ">
	    <div id="bafLoading">
		    <p>Loading</p>
	    </div>
    </body>
</html>
