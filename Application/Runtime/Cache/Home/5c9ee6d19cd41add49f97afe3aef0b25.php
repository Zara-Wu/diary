<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>生活日记 - 登录</title>
	<link href="/diary/Public/css/member.css" rel="stylesheet" />
	<script src="/diary/Public/js/jquery.min.js"></script>
</head>
<body>
<div id="box">
	<h1>生活日记 - 欢迎登录</h1>
	<div id="main">
		<div class="login-ad left">
			<img src="/diary/Public/image/logimg.jpg" style="width:320px;height:250px;" />
		</div>
		<form method="post">
		<table class="login right">
			<tr><th>用户名：</th><td><input type="text" name="user" /></td></tr>
			<tr><th>密码：</th><td><input type="password" name="pwd" /></td></tr>
			<tr><th>验证码：</th><td><input type="text" name="captcha" /></td></tr>
			<tr><td>&nbsp;</td><td><img src="/diary/Home/User/captcha" onclick="this.src='/diary/Home/User/captcha/'+Math.random()"/></td></tr>
			<tr><td>&nbsp;</td><td><input class="button" type="submit" value="登　录" /></td></tr>
			<tr><td colspan="2" class="center"><a href="/diary/Home/User/register">立即注册</a><a href="/diary/">返回首页</a></td></tr>
		</table>
		</form>
		<div class="clear"></dic>
	</div>
</div>
</body>
</html>