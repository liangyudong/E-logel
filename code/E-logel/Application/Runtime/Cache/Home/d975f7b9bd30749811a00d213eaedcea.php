<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新闻网站</title>
</head>
<body>
<div id="header">
    <ul class="nav">
        <li><a href="/home/index/index">首页</a></li>
        <li><a href="/home/category/list/cat_id/1">国内</a></li>
        <li><a href="/home/category/list/cat_id/2">国际</a></li>
        <li><a href="/home/category/list/cat_id/3">娱乐</a></li>
        <li><a href="/home/category/list/cat_id/4">体育</a></li>
    </ul>
    <hr />
</div>
<div id="content">
    <h2><?php echo ((isset($news["title"]) && ($news["title"] !== ""))?($news["title"]):"新闻标题"); ?></h2>
<div>
    发表时间：<?php echo (date('y-m-d',$news["addtime"])); ?>
</div>
<div>
    <?php echo ($news["content"]); ?>
</div>
</div>
<div id="footer">
    <hr />
    &copy; 河北师范大学软件学院
</div>
</body>
</html>