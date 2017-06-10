<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加新闻</title>
</head>
<body>
<form action="/news" method="post">
    <p>
        新闻标题：<input type="text" name="title" />
    </p>
    <p>
        新闻内容：<textarea name="content"></textarea>
    </p>
    <p>
        发表者id：<input type="text" name="author_id" />
    </p>
    <p>
        分类id：<input type="text" name="cat_id" />
    </p>
    <p>
        <input type="submit" value="添加新闻" />
    </p>
</form>
</body>
</html>