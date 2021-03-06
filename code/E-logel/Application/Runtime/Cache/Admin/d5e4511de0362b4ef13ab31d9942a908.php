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
            <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allRooms.html">客房管理</a><span class="crumb-step">&gt;</span><span>新增客房</span></div>
    </div>
    <div class="result-wrap">
        <div class="result-content">
            <form action="/admin/room/store" method="post" id="myform" name="myform"
                  enctype="multipart/form-data">
                <table class="insert-tab" width="100%">
                    <tbody><tr>
                        <th width="120"><i class="require-red">*</i>客房名称：</th>
                        <td>
                            <input type="text" name="title" />
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require-red">*</i>客房图片：</th>
                        <td>
                            <input type="file" name="image" />
                        </td>
                    </tr>
                    <tr>
                        <th>客房简介：</th>
                        <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                            <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                        </td>
                    </tr>
                    </tbody></table>
            </form>
        </div>
    </div>
    </div>
    <!--/main-->
</div>
</body>
</html>