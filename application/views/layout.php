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
      <div id="wrapper">
	      <div id="header">
		      <div id="logo">
			      <div class="cWhiteTitle"><?php echo __('taoE管理平台v1.0') ?></div>
			  </div>
			  <div id="headbar-left">
			      <ul>
				      <li><a href="" id="headbar-visited"><?php echo __('商品') ?></a></li>
					  <li><a href="" ><?php echo __('物流') ?></a></li>
					  <li><a href="" ><?php echo __('用户') ?></a></li>
					  <li><a href=""><?php echo __('报表') ?></a></li>
					  <li><a href="" ><?php echo __('财务') ?></a></li>
					  <li><a href=""><?php echo __('系统') ?></a></li>
				   </ul>
			  </div>
			  <div id="headbar-right">
			      <span><a href="$base/main/logout.o" class="cWhite">注销[admin]</a></span><span class="cWhite">|</span><span><a href="$base/user/changePasswd.o" class="cWhite">修改密码</a></span><span class="cWhite"> | </span><span><a href="#" class="cWhite">帮助</a></span>
			  </div>
		   </div>
		   <div id="ajaxloading"></div>
			<!-- leftbar -->
		   <!--<div id="leftbar">
				<div class="root_menu">
					<ul>
						<li class="menu-link"><a href="$base/command/">扣费通道管理</a></li>
					</ul>
					<ul>
						<li class="menu-link">产品</li>
					</ul>
					<ul id="click-visited">
						<li id="click-listProduct" class="menu-title"><a href="$base/product/">产品列表</a></li>
						<li id="click-createProduct"><a href="$base/product/create">新建产品</a></li>
						<li id="click-listFunction"><a href="$base/product/functions">产品功能列表</a></li>
						<li id="click-createFunction"><a href="$base/product/createFunction">新建产品功能</a></li>
					</ul>
					<ul>
						<li class="menu-link"><a href="$base/terminal/">终端管理</a></li>
						<li class="menu-link"><a href="$base/user/">用户管理</a></li>
						<li class="menu-link"><a href="$base/sys/">系统设置</a></li>
					</ul>

				</div>
				<div id="menu-help">

				</div>
			</div>-->
<div class="main">
	<div class="member_left">
	<h3>进货管理</h3>
    <ul>
        <li id="Purchase" class="active">添加进货单</li>
        <li id="PurchaseList"><a href="{[siteurl uri='purchase/list']}">进货报表</a></li>
		<li id="PurchaseStock"><a href="{[siteurl uri='purchase/stock']}">库存管理</a></li>
    </ul>
    <h3>销售管理</h3>
    <ul>
        <li id="Order"><a href="{[siteurl uri='order']}">线上订单管理</a></li>
        <li id="OrderShop"><a href="{[siteurl uri='order/shop']}">添加门店销售单</a></li>
        <li id="OrderReport"><a href="{[siteurl uri='order/report']}">销售报表</a></li>
    </ul>
    <h3>基础信息管理</h3>
    <ul>
        <li id="StoreGoods"><a href="{[siteurl uri='store/goods']}">商品管理</a></li>
        <li id="StoreManager"><a href="{[siteurl uri='store/manager']}">门店设置</a></li>
        <li id="StoreSales"><a href="{[siteurl uri='store/sales']}">营业员管理</a></li>
    </ul>
	<h3>订单管理</h3>
    <ul>
        <li id="MyOrder"><a href="{[siteurl uri='order/myorder']}">我的订单</a></li>
        <!--<li id="Address"><a href="{[siteurl uri='order/address']}">收货人地址</a></li>-->
    </ul>
    <h3>帐户管理</h3>
    <ul>
        <li id="AccountInformation"><a href="{[siteurl uri='account/information']}">账户信息</a></li>
        <li id="AccountHistory"><a href="{[siteurl uri='account/history']}">历史记录</a></li>
        <li id="AccountDelta"><a href="{[siteurl uri='account/delta']}">在线充值</a></li>
    </ul>
    </div>
	<div class="member_right">
        <?php echo $content ?>
    </div>
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
