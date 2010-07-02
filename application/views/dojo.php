<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html dir="ltr">

    <head>
	<style type="text/css">
			@import url(<?php echo site_url('media/css/global.css'); ?>);
			@import url(<?php echo site_url('media/js/dijit/themes/tundra/tundra.css'); ?>);
			@import url(<?php echo site_url('media/js/dojo/resources/dojo.css'); ?>);
			@import url(<?php echo site_url('media/js/dojox/grid/resources/tundraGrid.css'); ?>);
	</style>
        <style type="text/css">
            body, html { font-family:helvetica,arial,sans-serif; font-size:90%; }
        </style>
        <style type="text/css">
		#grid{
			border:1px solid #ccc;
			width:550px;
			margin:10px;
			height:200px;
			font-size: 0.9em;
			}
        </style>
    <script type="text/javascript" src="<?php echo site_url('media/js/dojo/dojo.js'); ?>"
    djConfig="parseOnLoad: true, useCommentedJson: true">
    </script>
    <script type="text/javascript">
        dojo.require("dojo.parser");
	dojo.require("dojo.data.ItemFileReadStore");
	dojo.require("dojox.grid.DataGrid");
       dojo.require("dijit.form.Button");
        dojo.require("dijit.Dialog");
        //dojo.require("dijit.layout.TabContainer");
        //dojo.require("dijit.layout.ContentPane");
    </script>
    </head>

    <body class=" tundra ">
	    <div dojoType="dojo.data.ItemFileReadStore" jsId="wishStore" url="cigar_wish_list.json"></div>
	    <table id="grid" dojoType="dojox.grid.DataGrid" store="wishStore" query="{wishId:'*'}" clientSort="true">
		    <thead>
			    <tr>
				    <th field="description" width="15em">Cigar</th>
				    <th field="size">Lenght/Ring</th>
				    <th field="origin">Origin</th>
				    <th field="wrapper">Wrapper</th>
                                    <th field="shape">Shape</th>
			    </tr>
		    </thead>
	    </table>
	      <div id="dialogOne" dojoType="dijit.Dialog" title="My Dialog Title">
            <!--<div dojoType="dijit.layout.TabContainer" style="width: 200px; height: 300px;">
                <div dojoType="dijit.layout.ContentPane" title="foo">
                    Content of Tab "foo"
                </div>
                <div dojoType="dijit.layout.ContentPane" title="boo">
                    Hi, I'm Tab "boo"
                </div>
            </div>-->
	    ddd
        </div>
        <p>
            When pressing this button the dialog will popup:
        </p>
        <button id="buttonOne" dojoType="dijit.form.Button" type="button">
            Show me!
            <script type="dojo/method" event="onClick" args="evt">
                // Show the Dialog:
                dijit.byId("dialogOne").show();
            </script>
        </button>
    </body>


</html>
