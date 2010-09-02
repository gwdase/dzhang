<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title><?php echo $meta_title ?></title>
    <meta name="keywords" content="<?php echo $meta_keywords ?>" />
    <meta name="description" content="<?php echo $meta_description ?>" />
    <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>
    <?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>
  </head>
  <body>
      <!-- layout -->
      <div id="wrapper">
        <!-- header -->
	<div id="header">
          <div id="logo">
	    <div class="cWhiteTitle"><?php echo __('taoE管理平台v1.0') ?></div>
	  </div>
	  <div id="headbar-left">
	    <ul>
	      <li id="business_bar"><a href="default"><?php echo __('业务') ?></a></li>
	      <li id="finance_bar"><a href="finance"><?php echo __('财务') ?></a></li>
	      <li><a href="" ><?php echo __('查账') ?></a></li>
	      <li><a href=""><?php echo __('基本信息') ?></a></li>
	      <li><a href="" ><?php echo __('网店管理') ?></a></li>
	      <li><a href=""><?php echo __('系统') ?></a></li>
	    </ul>
	  </div>
	  <div id="headbar-right">
	    <span><a href="$base/main/logout.o" class="cWhite">admin[注销]</a></span><span class="cWhite"> | </span><span><a href="#" class="cWhite">帮助</a></span>
	  </div>
	</div>
	<div id="ajaxloading"></div>
	<!-- main -->
        <div class="main">
	  <!-- sidebar -->
          <div class="member_left"><?php echo $sidebar ?></div>
	  <!-- content -->
          <div class="member_right"><?php echo $content ?></div>
        </div>
        <div class="clear"></div>
        <!--footer-->
        <div id="footer">
          <p><a href="#">服务条款</a> <a href="#">联系我们</a> Copyright &copy; 2010 by Dzhang.Org All Rights Reserved.</p>
          <p><a target="_blank" href="http://www.miibeian.gov.cn/">蒙ICP备07003428号</a></p>
          <p><script src="http://s73.cnzz.com/stat.php?id=1262414&web_id=1262414&show=pic1" language="JavaScript" charset="gb2312"></script></p>
        </div>
      </div>
  </body>
</html>
