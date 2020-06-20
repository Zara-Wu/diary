<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>生活日记后台</title>
	<link href="/diary/Public/css/admin.css" rel="stylesheet" />
	<script src="/diary/Public/js/jquery.min.js"></script>
</head>
<body>
<div id="top">
	<h1 class="left">生活日记 - 后台管理系统</h1>
	<ul class="right">
		<li>欢迎您：<?php echo (session('admin_name')); ?></li>
		<li>|</li><li><a href="/diary/" target="_blank">前台首页</a></li>
		<li>|</li><li><a href="/diary/Admin/Login/logout">退出登录</a></li>
	</ul>
</div>
<div id="main">
	<div id="menu" class="left">
		<ul><li><a href="/diary/Admin/Index/index" id="Index_index">后台首页</a></li>
			<li><a href="/diary/Admin/User/add" id="Goods_add">用户管理</a></li>
			<li><a href="/diary/Admin/Content/index" id="Goods_index">内容管理</a></li>
			<li><a href="/diary/Admin/Recycle/index" id="Recycle_index">回收站</a></li>
		</ul>
	</div>
	<div id="content">
		<div class="item"><div class="title">后台首页</div>
<div class="data-list clear">欢迎进入生活日记后台！请从左侧选择一个操作。</div>
</div>
	</div>
</div>
<script>
	$("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
</body>
</html>