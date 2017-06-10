<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>酒店后台管理</title>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/main.css"/>
    <script type="text/javascript" src="/Public/admin/js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="/Public/admin/js/jquery.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/admin/index/index">首页</a></li>
                <li><a href="/home/index/index" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="/admin/user/index"><?php echo (session('loginedName')); ?></a></li>
                <li><a href="/admin/user/index">修改密码</a></li>
                <li><a href="/admin/user/logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>客房管理</a>
                    <ul class="sub-menu">
                        <li><a href="/admin/room"><i class="icon-font">&#xe008;</i>所有客房</a></li>
                        <li><a href="/admin/room/create"><i class="icon-font">&#xe005;</i>添加客房
                        </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>客房分类管理</a>
                    <ul class="sub-menu">
                        <li><a href="/admin/category"><i class="icon-font">&#xe017;</i>所有分类</a></li>
                        <li><a href="/admin/category/create"><i class="icon-font">&#xe037;</i>添加分类
                        </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>新闻管理</a>
                    <ul class="sub-menu">
                        <li><a href="/admin/news"><i class="icon-font">&#xe017;</i>所有新闻</a></li>
                        <li><a href="/admin/news/create"><i class="icon-font">&#xe037;</i>添加新闻
                        </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>商务会议管理</a>
                    <ul class="sub-menu">
                        <li><a href="/admin/meeting"><i class="icon-font">&#xe017;</i>所有会议</a></li>
                        <li><a href="/admin/meeting/create"><i class="icon-font">&#xe037;</i>添加会议
                        </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        /admin/index/index
    </div>
    <!--/main-->
</div>
</body>
</html>