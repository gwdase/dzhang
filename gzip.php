<?php
ob_start("ob_gzhandler");
ob_start("compress");

$pathinfo = pathinfo($_SERVER[PHP_SELF]);
switch ($pathinfo['extension']) {
	case "css" :  header("Content-type: text/css");
	break;
	case "html" :  header("Content-type: text/html");
	break;
	case "js" :  header("Content-type: text/javascript");
	break;
	default :  break;
}


