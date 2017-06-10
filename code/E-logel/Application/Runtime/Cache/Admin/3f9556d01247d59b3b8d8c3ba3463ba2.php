<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="UTF-8" />

    <title>易拉罐学习论坛后台管理</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Import google fonts -->
    <!-- <link href="http://fonts.useso.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css" /> -->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="/Public/assets/ico/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/Public/assets/ico/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/Public/assets/ico/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/Public/assets/ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/Public/assets/ico/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/Public/assets/ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/Public/assets/ico/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/Public/assets/ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/Public/assets/ico/apple-touch-icon-152x152.png" />

    <!-- start: CSS file-->

    <!-- Vendor CSS-->
    <link href="/Public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Public/assets/vendor/skycons/css/skycons.css" rel="stylesheet" />
    <link href="/Public/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Plugins CSS-->
    <link href="/Public/assets/plugins/bootkit/css/bootkit.css" rel="stylesheet" />
    <link href="/Public/assets/plugins/scrollbar/css/mCustomScrollbar.css" rel="stylesheet" />
    <link href="/Public/assets/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet" />
    <link href="/Public/assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet" />
    <link href="/Public/assets/plugins/xcharts/css/xcharts.min.css" rel="stylesheet" />
    <link href="/Public/assets/plugins/morris/css/morris.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link href="/Public/assets/css/jquery.mmenu.css" rel="stylesheet" />

    <!-- Page CSS -->
    <link href="/Public/assets/css/style.css" rel="stylesheet" />
    <link href="/Public/assets/css/add-ons.min.css" rel="stylesheet" />

    <!-- end: CSS file-->


    <!-- Head Libs -->
    <script src="/Public/assets/plugins/modernizr/js/modernizr.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Start: Header -->
<div class="navbar" role="navigation">
    <div class="container-fluid container-nav">
        <!-- Navbar Action -->
        <ul class="nav navbar-nav navbar-actions navbar-left">
            <li class="visible-md visible-lg"><a href="#" id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
            <li class="visible-xs visible-sm"><a href="#" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>
        </ul>
        <!-- Navbar Left -->
        <div class="navbar-left">
            <!-- Search Form -->
        </div>
        <!-- Navbar Right -->
        <div class="navbar-right">
            <!-- Notifications -->

            <!-- End Notifications -->
            <!-- Userbox -->
            <div class="userbox">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="profile-info">
                        <span class="name">易拉罐一号</span>
                        <span class="role">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;管理员</span>
                    </div>
                    <i class="fa custom-caret"></i>
                </a>
                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="dropdown-menu-header bk-bg-white bk-margin-top-15">
                            <div class="progress progress-xs  progress-striped active">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    60%
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="/admin/login/index"><i class="fa fa-power-off"></i>退出登录</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Userbox -->
        </div>
        <!-- End Navbar Right -->
    </div>
</div>
<!-- End: Header -->
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
<!-- Start: Content -->
<div class="container-fluid content">
    <div class="row">

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-collapse">
                <!-- Sidebar Header Logo-->
                <div class="sidebar-header">
                    <img src="/Public/assets/img/logo.png" class="img-responsive" alt="" />
                </div>
                <!-- Sidebar Menu-->
                <div class="sidebar-menu">
                    <nav id="menu" class="nav-main" role="navigation">
                        <ul class="nav nav-sidebar">
                            <div class="panel-body text-center">
                                <div class="bk-avatar">
                                    <img src="/Public/assets/img/avatar.jpg" class="img-circle bk-img-60" alt="" />
                                </div>
                                <div class="bk-padding-top-10">
                                    <i class="fa fa-circle text-success"></i> <small>管理员</small>
                                </div>
                            </div>
                            <div class="divider2"></div>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-copy" aria-hidden="true"></i><span>帖子管理</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li><a href="/admin/assess/boutique"><span class="text"> 精品贴推荐</span></a></li>
                                    <li><a href="/admin/assess/delete"><span class="text">帖子删除</span></a></li>

                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-list-alt" aria-hidden="true"></i><span>用户管理</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li><a href="/admin/assess/appeal"><span class="text"> 用户被投诉处理</span></a></li>
                                    <li><a href="/admin/assess/blacklist"><span class="text"> 黑名单管理</span></a></li>

                                </ul>
                            </li>

                            <!--<li class="nav-parent">-->
                                <!--<a>-->
                                    <!--<i class="fa fa-random" aria-hidden="true"></i><span>积分管理</span>-->
                                <!--</a>-->
                                <!--<ul class="nav nav-children">-->
                                    <!--<li><a href="/admin/assess/integral"><span class="text"> 积分制度</span></a></li>-->
                                <!--</ul>-->
                            <!--</li>-->
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                    <span>吧务团队</span>
                                </a>
                                <ul class="nav nav-children">

                                    <li><a href="/admin/assess/personnelManager"><span class="text"> 团队人员管理</span></a></li>
                                    <li><a href="/admin/assess/examination"><span class="text"> 添加吧务</span></a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
                <!-- End Sidebar Menu-->
            </div>
            <!-- Sidebar Footer-->
            <div class="sidebar-footer">
                <ul class="sidebar-terms">
                    <li><a href="index.html#">条款</a></li>
                    <li><a href="index.html#">隐私</a></li>
                    <li><a href="index.html#">帮助</a></li>
                    <li><a href="index.html#">关于</a></li>
                </ul>
                <div class="copyright text-center">
                    <small>Nadhif <i class="fa fa-coffee"></i> Collect from <a href="http://www.cssmoban.com/" title="河北师大" target="_blank">河北师大</a> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="软件学院">软件学院</a></small>
                </div>
            </div>
            <!-- End Sidebar Footer-->
        </div>
        <!-- End Sidebar -->

        <!-- Main Page -->

            <!-- End Page Header -->
            <!-- main main page	 -->
            <div class="main ">
    <!-- Page Header -->
    <div class="page-header">
        <div class="pull-left">
            <ol class="breadcrumb visible-sm visible-md visible-lg">
                <li><a href="index.html"><i class="icon fa fa-home"></i>主页</a></li>
                <li class="active"><a href="#">添加吧务</a></li>
            </ol>
        </div>

    </div>
    <form>
        叭啦叭叭啦巴拉巴拉田源写吧
        <button>提交</button>
    </form>
        </div><!-- end main main page -->

    </div>
    <!-- End Main Page -->

</div>
</div><!--/container-->


<!-- Modal Dialog -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title bk-fg-primary">Modal title</h4>
            </div>
            <div class="modal-body">
                <p class="bk-fg-danger">Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> <!-- End Modal Dialog	-->

<div class="clearfix"></div>


<!-- start: JavaScript-->

<!-- Vendor JS-->
<script src="/Public/assets/vendor/js/jquery.min.js"></script>
<script src="/Public/assets/vendor/js/jquery-2.1.1.min.js"></script>
<script src="/Public/assets/vendor/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/Public/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/Public/assets/vendor/skycons/js/skycons.js"></script>

<!-- Plugins JS-->
<script src="/Public/assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
<script src="/Public/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/Public/assets/plugins/bootkit/js/bootkit.js"></script>
<script src="/Public/assets/plugins/moment/js/moment.min.js"></script>
<script src="/Public/assets/plugins/fullcalendar/js/fullcalendar.min.js"></script>
<script src="/Public/assets/plugins/touchpunch/js/jquery.ui.touch-punch.min.js"></script>
<script src="/Public/assets/plugins/flot/js/jquery.flot.min.js"></script>
<script src="/Public/assets/plugins/flot/js/jquery.flot.pie.min.js"></script>
<script src="/Public/assets/plugins/flot/js/jquery.flot.resize.min.js"></script>
<script src="/Public/assets/plugins/flot/js/jquery.flot.stack.min.js"></script>
<script src="/Public/assets/plugins/flot/js/jquery.flot.time.min.js"></script>
<script src="/Public/assets/plugins/xcharts/js/xcharts.min.js"></script>
<script src="/Public/assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="/Public/assets/plugins/placeholder/js/jquery.placeholder.min.js"></script>
<script src="/Public/assets/plugins/data图表/js/data图表.bootstrap.min.js"></script>
<script src="/Public/assets/plugins/data图表/js/jquery.data图表.min.js"></script>
<script src="/Public/assets/plugins/raphael/js/raphael.min.js"></script>
<script src="/Public/assets/plugins/morris/js/morris.min.js"></script>
<script src="/Public/assets/plugins/gauge/js/gauge.min.js"></script>
<script src="/Public/assets/plugins/d3/js/d3.min.js"></script>
<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->

<!-- Theme JS -->
<script src="/Public/assets/js/jquery.mmenu.min.js"></script>
<script src="/Public/assets/js/core.min.js"></script>

<!-- 页面 JS -->
<script src="/Public/assets/js/页面/index.js"></script>

<!-- end: JavaScript-->

</body>

</html>