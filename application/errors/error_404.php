<html>
<head>
<title>404 Page Not Found</title>
<style type="text/css">

body {
background-color:	#fff;
margin:				40px;
font-family:		Lucida Grande, Verdana, Sans-serif;
font-size:			12px;
color:				#000;
}

#content  {
border:				#999 1px solid;
background-color:	#fff;
padding:			20px 20px 12px 20px;
}

h1 {
font-weight:		normal;
font-size:			14px;
color:				#990000;
margin: 			0 0 4px 0;
}
</style>
</head>
<body>
	<div id="content">
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
		<div style="margin: 10px; text-align: center;"><img width="500" height="454" border="0" alt="HTTP 404,file not found" usemap="#Map" src="/media/images/404.gif"/><map id="Map" name="Map"><area href="javascript:history.back();" coords="46,378,139,401" shape="rect"/><area href="http://127.0.0.1" coords="165,378,240,401" shape="rect"/></map></div>
	</div>
</body>
</html>