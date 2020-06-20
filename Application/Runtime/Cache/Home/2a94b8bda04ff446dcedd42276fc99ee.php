<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>生活日记</title>
	<link href="/diary/Public/css/home.css" rel="stylesheet" />
	<script src="/diary/Public/js/jquery.min.js"></script>
</head>
<body>
	<div id="top">
		<div class="top_nav">
		<ul><li>收藏本站</li><li>关注本站</li></ul>
		<ul class="right">
			<?php if(isset($uid)): ?><li><?php echo ($user); ?>，欢迎来到生活日记！[<a href="/diary/Home/User/logout">退出</a>]<li>
			<?php else: ?>
			<li>您好，欢迎来到生活日记！[<a href="/diary/Home/User/login">登录</a>][<a href="/diary/Home/User/register">免费注册</a>]</li><?php endif; ?>
			<li class="line">|</li><li><a href="/diary/Home/User/index">用户中心</a></li>
			<li class="line">|</li><li>联系客服</li>
		</ul>
		</div>
	</div>
	<div id="box">
		<div id="header">
			<a class="left" href="/diary/"><div id="logo"></div></a>
			<div id="search" class="left">
				<input type="text" class="left" />
				<input class="search_btn" type="button" value="搜索" />
			</div>
		</div>
		<div class="clear"></div>
		
		<div id="service">
			<ul><li>系统简介</li><li>广告服务</li><li>试用洽谈</li>
				<li>网站地图</li><li>联系方式</li><li>关于我们</li>
			</ul>
			<div class="clear"></div>
		</div>
		<div id="footer">Copyright © 易春红、陈明欣、刘慧敏、缪淑婷、吴倩倩 create in 2020</div>
	</div>
</body>
</html>