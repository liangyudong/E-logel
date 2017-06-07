<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>酒店管理公司网站模板</title>
    <meta name="keywords" content="CMS,企业,学校,政府,网站,内容,管理,建设,制作,建站,系统,模板,源码"/>
    <meta name="description" content="酒店管理公司网站模板是基于asp.net的网站内容管理系统，以简单、灵活的特点被广泛用于学校、政府、企业单位的网站建设"/>
    <meta name="Author" content="酒店管理公司网站模板"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <link href="/Public/home/templates/jd_1/style.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="/Public/home/css/comm.css" />
    <script src="/Public/home/js/jquery.min.js" type="text/javascript"></script>
    <script src="/Public/home/js/function.js" type="text/javascript"></script>
    <script src="/Public/home/js/comm.js" type="text/javascript"></script>
    <script src="/Public/home/js/zh-cn/lang.js" type="text/javascript"></script>
</head>
<body>
<div class="page_style lanmupage page_l61">
    <div class="top_box">
        <div class="top_box_inner">
            <div class="topcontent"></div>
            <div class="clear"></div>
            <div class="logo"><a href=""><img src="/Public/home/images/logo.jpg" border="0"></a></div>
            <div class="menu_box" id="Menu">
                <ul>
                    <li class="menu_style_homepage menu_current" id="MenuItem61" name="MenuItem"><a
                            href="index.html" class="menu">首页</a></li>
                    <li class="menu_style" id="MenuItem62" name="MenuItem"><a href="/home/aboutus"
                                                                              class="menu">酒店简介</a>
                    </li>
                    <li class="menu_style" id="MenuItem64" name="MenuItem"><a href="/home/"
                                                                              class="menu">酒店客房</a>
                    </li>
                    <li class="menu_style" id="MenuItem63" name="MenuItem"><a
                            href="/home/news/index" class="menu">酒店新闻</a>
                    </li>
                    <li class="menu_style" id="MenuItem77" name="MenuItem"><a href="swhy/"
                                                                              class="menu">商务会议</a>
                    </li>
                    <li class="menu_style" id="MenuItem68" name="MenuItem"><a href="/home/"
                                                                              class="menu">人力资源</a>
                    </li>
                    <li class="menu_style" id="MenuItem65" name="MenuItem"><a
                            href="/home/contactus/"
                                                                              class="menu">联系我们</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">var IsPageHome = "1";
    var Lanmu_Id = "61";
    var Sublanmu_Id = "0";
    ShowSubMenu(Lanmu_Id);</script>
    <link rel="stylesheet" type="text/css" href="/Public/home/css/dropmenu.css">
    <div style="clear: both;"></div>
    <div class="banner"><p style="padding:0px 0 0px 0;width: 960px; border:0px solid #bddbf5;background: url(/Public/home/images/banner/banner.jpg) no-repeat 0px 0px; "><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="960" height="385">
    <param name="movie" value="/Public/home/images/banner/swf3.swf">
    <param name="quality" value="high">
    <param name="wmode" value="transparent">
    <embed src="/Public/home/images/banner/swf3.swf" quality="high" wmode="transparent"
           pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="960" height="385">
</object></p></div>
<div class="main_box main_box_style2">
    <div class="main_box_inner">
        <div class="main_box_inner_left">

            <div id="module_180" style="width:48%;" class="module_box_layout_left">
                <div class="module_box_inner">
                    <div class="module_title"><span class="module_sign">酒店图片</span><span class="module_more"><a href="#"><img border="0" alt="" src="e/images/more.jpg"></a></span></div>
                    <div id="module_content_180" class="module_content">
                        <div id="m_180" style="width: 319px; overflow: hidden; height: 136px;" class="自行定义样式"><table cellspacing="0" cellpadding="0" style="border-collapse:collapse;display:block"><tbody><tr><td nowrap="true" style="white-space: nowrap;word-break:keep-all;">
                            <table border="0" align="center" style="padding:2px">
                                <tbody><tr>
                                <?php if(is_array($rooms)): $i = 0; $__LIST__ = $rooms;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><td align="center" style="padding:2px">
                                        <a href="/home/room/view/id/<?php echo ($vo["id"]); ?>" target="_self"><img
                                                src="/Public/home<?php echo ($vo["image"]); ?>"
                                                                        border="0" style="width:150px;height:105px;"></a>
                                        <br>
                                        <a href="#" target="_self" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a>
                                    </td><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tr>
                                </tbody></table>
                        </td></tr></tbody></table></div>
                        <script type="text/javascript">
                            new Marquee("m_180","left"); //new Marquee简单调用，第一个参数必填，第二个为滚动方向
                        </script></div>
                    <div class="module_footer"><span class="l"></span><span class="r"></span></div>
                </div>
            </div>

            <div id="module_177" style="width:51%;background-color:#381904;" class="module_box_layout_right">
                <div class="module_box_inner">
                    <div id="module_content_177" style="padding:5px 5px 11px 15px;" class="module_content module_content_introduct">
                        <div style="line-height:200%;">
                            <span style="font-size:14px;"><span style="line-height:200%;"><strong>关于我们</strong></span></span>
                        </div>
                        <div style="line-height:200%;text-indent:21pt;">
                            <span style="line-height:200%;font-weight:normal;">xxx</span><span style="line-height:200%;font-weight:normal;">酒店管理有限公司系xx省规模最大、发展最快的旅游企业之一，经营效益和品牌美誉度均居福建省旅游业领先水平。作为富有航空特色的中高档商务型连锁专业酒店管理集团，xx酒店依托航空业主，秉承&nbsp;“真诚、和谐、务实、创新”。</span>
                        </div>
                        <div style="line-height:200%;text-indent:21pt;">
                            <span style="line-height:200%;font-weight:normal;">酒店设有华厅中餐厅、咖啡厅西餐厅和沙滩火锅吧3个餐厅，为您精选奉上粤、川等中国地道菜品和意大利、美国等欧洲美食。晚上，海边、泳池旁，美妙幻律，四处飘香，静候您光临。</span>
                        </div>
                    </div>
                    <div class="module_footer"><span class="l"></span><span class="r"></span></div>
                </div>
            </div>



        </div>
        <div class="main_box_inner_right">
            <div id="nav_164" style="margin:10px 0 0 0" class="nav_box">
                <div class="nav_title"><span class="nav_sign">精彩瞬间</span><span class="nav_more"></span></div>
                <div id="nav_conent_164" style="padding:12px 7px 5px 7px" class="nav_content nav_content_introduct">
                    <img border="0" alt="" vspace="5" width="192" height="126" src="/Public/home/upload/s1/fck/image/2012-11/17133202.jpg">
                </div></div>

        </div>
    </div>
    <div class="clear main_box_inner_bottom"></div>
</div>
    <div class="bottom_box"><p>
        <a href="#" onClick="setHome(this,'http://www.genban.org')">设为首页</a> | <a
            href="javascript:AddFavorite(location.href,'网站名称')">加入收藏</a> | <a href="#">留言反馈</a>&nbsp;|&nbsp;<a
            href="#">人才招聘</a>&nbsp;| <a href="#">联系我们</a>&nbsp;<br/>
        <span class="STYLE6">广东省中山市华拓网络版权所有&nbsp;Copyright <span
                style="font-family:Arial;">&copy;</span> 2008-2012</span>&nbsp;&nbsp;ICP备案号:粤ICP备xxxxxxxx号
    </p>
        <script type="text/javascript">
            function AddFavorite(sURL, sTitle) {
                try {
                    if (typeof(sURL) == "undefined" || sURL.length == 0) {
                        sURL = window.location;
                    }
                    if (typeof(sTitle) == "undefined" || sTitle.length == 0) {
                        sTitle = document.title;
                    }
                    window.external.addFavorite(sURL, sTitle);
                }
                catch (e) {
                    try {
                        window.sidebar.addPanel(sTitle, sURL, "");
                    }
                    catch (e) {
                        alert("您使用的浏览器不支持此功能，请按“Ctrl + D”键手工加入收藏!");
                    }
                }
            }
            function setHome(objid, urls) {
                var a = objid, b = urls, c = "unknown";
                try {
                    if (typeof(b) == "undefined" || b.length == 0) {
                        b = location.href;
                    }
                    a.style.behavior = "url(#default#homepage)";
                    var d = a.isHomePage(b);
                    d = (d = d || a.isHomePage(b + "/")) || a.isHomePage(b + "/#");
                    d = "" + d;
                    if (d != "true") {
                        a.setHomePage(b);
                    } else {
                        alert("您已经设为首页了!");
                    }
                } catch (e) {
                    alert("您的浏览器不支持自动设置主页，请使用浏览器菜单手动设置!");
                }
            }
            ;
        </script>
    </div>
</div>
</body>
</html>