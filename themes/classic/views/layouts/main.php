<?php
$this->layout = 'none';
$this->pageTitle = Yii::app()->name . ' - 后台管理';
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo yii::app()->theme->baseUrl ?>/assets/ico/favicon.png">
    <meta name="description" content="backend">
    <meta name="author" content="brook">

    <link rel="stylesheet" href="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo yii::app()->theme->baseUrl ?>/assets/css/main.css">
    <link rel="stylesheet"
          href="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/Font-Awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="<?php echo yii::app()->theme->baseUrl ?>/assets/css/theme.css">

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),

                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-1669764-16', 'onokumus.com');
        ga('send', 'pageview');

    </script>
    <script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo yii::app()->theme->baseUrl ?>/assets/js/html5shiv.js"></script>
    <script src="<?php echo yii::app()->theme->baseUrl ?>/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="wrap">
<div id="top">
    <!-- .navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
        <!-- Brand and toggle get grouped for better mobile display -->
        <header class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/logo.png" alt=""></a>
        </header>


        <div class="topnav">

            <div class="btn-toolbar">
                <div class="btn-group">
                    <a data-placement="bottom" data-original-title="边栏" data-toggle="tooltip"
                       class="btn btn-success btn-sm" id="changeSidebarPos">
                        <i class="icon-resize-horizontal"></i>
                    </a>
                </div>
                <div class="btn-group">
                    <a data-placement="bottom" data-original-title="消息" href="#" data-toggle="tooltip"
                       class="btn btn-default btn-sm">
                        <i class="icon-comments"></i>
                        <span class="label label-danger">4</span>
                    </a>
                </div>

                <div class="btn-group">
                    <a href="login.html" data-toggle="tooltip" data-original-title="退出" data-placement="bottom"
                       class="btn btn-metis-1 btn-sm">
                        <i class="icon-off"></i>
                    </a>
                </div>
            </div>


        </div>


        <!-- /.topnav -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <!-- .nav -->
            <ul class="nav navbar-nav">
                <li><a href="#">控制台</a></li>
                <li><a href="#">布局/主题</a></li>
                <li><a href="#">文件管理</a></li>
                <li class='dropdown '>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                       高级工具<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">基本信息</a></li>
                        <li><a href="#">网站重置</a></li>
                        <li><a href="#">统计信息</a></li>
                        <li><a href="#">备案 &amp; 审查</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /.nav -->
        </div>
    </nav>
    <!-- /.navbar -->

    <!-- header.head -->
    <header class="head">
        <div class="search-bar">
            <a data-original-title="显示/隐藏菜单" data-placement="bottom" data-tooltip="tooltip"
               class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu"
               id="menu-toggle">
                <i class="icon-sort"></i>
            </a>

            <form class="main-search">
                <div class="input-group">
                    <input type="text" class="input-small form-control" placeholder="功能搜索 ...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-sm" type="button"><i class="icon-search"></i>
                                    </button>
                                </span>
                </div>
            </form>

        </div>
        <!-- ."main-bar -->
        <div class="main-bar">
            <h3><i class="icon-home"></i> AirBool</h3>
        </div>
        <!-- /.main-bar -->
    </header>
    <!-- end header.head -->

</div>
<!-- /#top -->

<div id="left">
    <div class="media user-media">
        <a class="user-link" href="">
            <img class="media-object img-thumbnail user-img" alt="用户头像" src="<?php echo yii::app()->theme->baseUrl ?>/assets/img/user.gif">
            <span class="label label-danger user-label">16</span>
        </a>

        <div class="media-body">
            <h5 class="media-heading">老九</h5>
            <ul class="list-unstyled user-info">
                <li><a href="">超级管理员</a></li>
                <li>上次登陆 : <br>
                    <small><i class="icon-calendar"></i> 08-16 16:32</small>
                </li>
            </ul>
        </div>
    </div>
    <!-- #menu -->
    <ul id="menu" class="collapse">
        <li class="nav-header">菜单</li>
        <li class="nav-divider"></li>

        <li class="panel ">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle"
               data-target="#dashboard-nav">
                <i class="icon-dashboard"></i> 控制台
	    <span class="pull-right">
		<i class="icon-angle-left"></i>
            </span>
            </a>
            <ul class="collapse" id="dashboard-nav">
                <li class=""><a href="#"><i class="icon-angle-right"></i>前台控制</a></li>
                <li class=""><a href="#"><i class="icon-angle-right"></i> 后台控制</a></li>
            </ul>
        </li>

        <li class="panel ">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle"
               data-target="#component-nav">
                <i class="icon-tasks"></i> 文章管理
	    <span class="pull-right">
		<i class="icon-angle-left"></i>
            </span>
            </a>
            <ul class="collapse" id="component-nav">
                <li class=""><a href="<?php echo $this->createUrl('/back/article/create');?>"><i class="icon-angle-right"></i>发表文章</a></li>
                <li class=""><a href="<?php echo $this->createUrl('/back/column/index',array('tid'=>Yii::app()->params['ATTR_ARTICLE_TYPEID']));?>"><i class="icon-angle-right"></i>分类管理</a></li>
                <li class=""><a href="#"><i class="icon-angle-right"></i>批量管理</a></li>
                <li class=""><a href="#"><i class="icon-credit-card"></i>设置</a></li>
            </ul>
        </li><!-- end panel -->


        <li class="panel ">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle"
               data-target="#product-nav">
                <i class="icon-tasks"></i> 产品管理
	    <span class="pull-right">
		<i class="icon-angle-left"></i>
            </span>
            </a>
            <ul class="collapse" id="product-nav">
                <li class=""><a href="#"><i class="icon-angle-right"></i>发布产品</a></li>
                <li class=""><a href="<?php echo $this->createUrl('/back/column/index',array('tid'=>Yii::app()->params['ATTR_PRODUCT_TYPEID']));?>"><i class="icon-angle-right"></i>分类管理</a></li>
                <li class=""><a href="#"><i class="icon-angle-right"></i>批量管理</a></li>
                <li class=""><a href="#"><i class="icon-credit-card"></i>属性设置</a></li>
            </ul>
        </li><!-- end panel -->


        <li class="panel ">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle"
               data-target="#order-nav">
                <i class="icon-tasks"></i> 订单管理
	    <span class="pull-right">
		<i class="icon-angle-left"></i>
            </span>
            </a>
            <ul class="collapse" id="order-nav">
                <li class=""><a href="#"><i class="icon-angle-right"></i>分类管理</a></li>
                <li class=""><a href="#"><i class="icon-angle-right"></i>批量管理</a></li>
                <li class=""><a href="#"><i class="icon-credit-card"></i>设置</a></li>
            </ul>
        </li><!-- end panel -->


        <li class="panel ">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle"
               data-target="#users-nav">
                <i class="icon-tasks"></i> 用户管理
	    <span class="pull-right">
		<i class="icon-angle-left"></i>
            </span>
            </a>
            <ul class="collapse" id="users-nav">
                <li class=""><a href="#"><i class="icon-angle-right"></i>权限管理</a></li>
                <li class=""><a href="#"><i class="icon-angle-right"></i>分类管理</a></li>
                <li class=""><a href="#"><i class="icon-angle-right"></i>批量管理</a></li>
                <li class=""><a href="#"><i class="icon-credit-card"></i>设置</a></li>
            </ul>
        </li><!-- end panel -->


        <li class="panel ">
            <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle"
               data-target="#settings-nav">
                <i class="icon-tasks"></i> 基本设置
	    <span class="pull-right">
		<i class="icon-angle-left"></i>
            </span>
            </a>
            <ul class="collapse" id="settings-nav">
                <li class=""><a href="#"><i class="icon-angle-right"></i>网站设置</a></li>
                <li class=""><a href="#"><i class="icon-angle-right"></i>联系方式</a></li>
                <li class=""><a href="#"><i class="icon-angle-right"></i>留言系统</a></li>
                <li class=""><a href="#"><i class="icon-credit-card"></i>设置</a></li>
            </ul>
        </li><!-- end panel -->
    </ul>
    <!-- /#menu -->
</div>
<!-- /#left -->

<div id="content">
    <div class="outer">
        <div class="inner">
            <div class="col-lg-12">
                <?php echo $content; ?>

            </div>
        </div>
        <!-- end .inner -->
    </div>
    <!-- end .outer -->
</div>
<!-- end #content -->


</div>
<!-- /#wrap -->


<div id="footer">
    <p>2013 &copy; AirBool. by brook & laojiu</p>
</div>


<!-- #helpModal -->
<div id="helpModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>
                    请联系 help.airbool.com
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- /#helpModal -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/jquery-2.0.3.min.js"><\/script>')</script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/lib/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo yii::app()->theme->baseUrl ?>/assets/js/style-switcher.js"></script>
<script src="<?php echo yii::app()->theme->baseUrl ?>/assets/js/main.js"></script>


</body>
</html>
