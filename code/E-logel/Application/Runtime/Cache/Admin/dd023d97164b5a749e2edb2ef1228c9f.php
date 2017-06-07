<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
</head>
<body>
<form action="/admin/user/dologin" method="post">
    <p>
        用户名：<input type="text" name="name" />
    </p>
    <p>
        密码：<input type="password" name="pswd" />
    </p>
    <p>
        验证码：<input type="text" name="captcha" />
        <img src="/admin/user/captcha" />
    </p>
    <p>
        <input type="submit" value="登录" />
    </p>
</form>
</body>
</html>