<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>登录 - 易拉罐</title>
	<link rel="stylesheet" type="text/css" href="/Public/assets/style/register-login.css">

</head>
<body>
<div id="box"></div>
<div class="cent-box">
	<div class="cent-box-header">
		<h1 class="main-title hide">易拉罐<img src="/Public/assets/img/logo.gif"></h1>
		<h2 class="sub-title">school+后台管理</h2>
	</div>

	<div class="cont-main clearfix">

		<form action="<?php echo U('/admin/login/dologin');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">

			<div class="login form">
				<div class="group">
					<div class="group-ipt email">
						<input type="text" name="root_name" id="email" class="ipt" placeholder="请输您的入用户名" required>
					</div>
					<div class="group-ipt password">
						<input type="password" name="root_password" id="password" class="ipt" placeholder="输入您的登录密码" required>
					</div>
					<div class="group-ipt captcha">
						<input type="text" id="captcha" name="captcha" style="width:150px;height: 40px;" placeholder="输入验证码" required>
						<img src = "<?php echo U('/admin/login/captcha');?>"  style="margin-bottom: -15px;height:40px;width: 142px; " onClick="this.src=this.src+'?'+Math.random()">
					</div>

				</div>
			</div>

			<div class="button">
				<button type="submit" class="login-btn register-btn" id="button">登录</button>
			</div>
		</form>

		<div class="remember clearfix">
			<label class="remember-me"><span class="icon"><span class="zt"></span></span><input type="checkbox" name="remember-me" id="remember-me" class="remember-mecheck" checked>记住我</label>
			<label class="forgot-password">
				<a href="" id="nopwd">忘记密码？</a>
			</label>
		</div>
	</div>
</div>


<div class="footer">
	<p>易拉罐</p>
	<p>Designed By Root & <a href="">Root.冀ICP备16023310号-1
		静若动兔</a> 2016</p>
</div>

<script src='/Public/assets/js/particles.js' type="text/javascript"></script>
<script src='/Public/assets/js/background.js' type="text/javascript"></script>
<script src='/Public/assets/js/jquery.min.js' type="text/javascript"></script>
<script src='/Public/assets/js/layer/layer.js' type="text/javascript"></script>
<script src='/Public/assets/js/index.js' type="text/javascript"></script>

<script>
	$(document).ready(function(){
		$(".button").click(function(){
			if($(":text").val().length==0){
				alert("请输入您的用户名");
			}
			else if($(":password").val().length==0){
				alert("请输入您的登陆密码");
			}
			else if($("#captcha").val().length==0){
				alert("请输入验证码");
			}
			else{

			}
		});
	});
</script>
<script>
	$(document).ready(function(){
		$("#nopwd").click(function(){
			alert('请在易拉罐订阅号发送"忘记密码"管理员会立马奔来给您解决！');
		});
	});
</script>
<style>