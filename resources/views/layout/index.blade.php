 <!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>MiShop后台管理系统  @yield('title')</title>
        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/font-awesome/4.2.0/css/font-awesome.min.css" />
        <!-- page specific plugin styles -->
        <!-- text fonts -->
        <link rel="stylesheet" href="/assets/fonts/fonts.googleapis.com.css" />
        <!-- ace styles -->
        <link rel="stylesheet" href="/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <!--[if lte IE 9]>
            <link rel="stylesheet" href="/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <!--[if lte IE 9]>
            <link rel="stylesheet" href="/assets/css/ace-ie.min.css" />
        <![endif]-->
        <!-- inline styles related to this page -->
        <!-- ace settings handler -->
        <script src="/assets/js/ace-extra.min.js"></script>
        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
        <!--[if lte IE 8]>
            <script src="/assets/js/html5shiv.min.js"></script>
            <script src="/assets/js/respond.min.js"></script>
        <![endif]--></head>
    
    <body class="no-skin">
        <div id="navbar" class="navbar navbar-default">
            <script type="text/javascript">try {
                    ace.settings.check('navbar', 'fixed')
                } catch(e) {}</script>
            <div class="navbar-container" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header pull-left">
                    <a href="{{url('admin')}}" class="navbar-brand">
                        <small>
                            <i class="fa fa-leaf"></i>MiShop后台</small>
                    </a>
                </div>
                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="grey">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-tasks"></i>
                                <span class="badge badge-grey">4</span></a>
                            <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="ace-icon fa fa-check"></i>4 Tasks to complete</li>
                                <li class="dropdown-content">
                                    <ul class="dropdown-menu dropdown-navbar">
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">Software Update</span>
                                                    <span class="pull-right">65%</span></div>
                                                <div class="progress progress-mini">
                                                    <div style="width:65%" class="progress-bar"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">Hardware Upgrade</span>
                                                    <span class="pull-right">35%</span></div>
                                                <div class="progress progress-mini">
                                                    <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">Unit Testing</span>
                                                    <span class="pull-right">15%</span></div>
                                                <div class="progress progress-mini">
                                                    <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">Bug Fixes</span>
                                                    <span class="pull-right">90%</span></div>
                                                <div class="progress progress-mini progress-striped active">
                                                    <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="#">See tasks with details
                                        <i class="ace-icon fa fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li class="purple">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                                <span class="badge badge-important">8</span></a>
                            <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="ace-icon fa fa-exclamation-triangle"></i>8 Notifications</li>
                                <li class="dropdown-content">
                                    <ul class="dropdown-menu dropdown-navbar navbar-pink">
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">
                                                        <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>New Comments</span>
                                                    <span class="pull-right badge badge-info">+12</span></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="btn btn-xs btn-primary fa fa-user"></i>Bob just signed up as an editor ...</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">
                                                        <i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>New Orders</span>
                                                    <span class="pull-right badge badge-success">+8</span></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="clearfix">
                                                    <span class="pull-left">
                                                        <i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>Followers</span>
                                                    <span class="pull-right badge badge-info">+11</span></div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="#">See all notifications
                                        <i class="ace-icon fa fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li class="green">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                                <span class="badge badge-success">5</span></a>
                            <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="ace-icon fa fa-envelope-o"></i>5 Messages</li>
                                <li class="dropdown-content">
                                    <ul class="dropdown-menu dropdown-navbar">
                                        <li>
                                            <a href="#" class="clearfix">
                                                <img src="/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                                                <span class="msg-body">
                                                    <span class="msg-title">
                                                        <span class="blue">Alex:</span>Ciao sociis natoque penatibus et auctor ...</span>
                                                    <span class="msg-time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span>a moment ago</span></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <img src="/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
                                                <span class="msg-body">
                                                    <span class="msg-title">
                                                        <span class="blue">Susan:</span>Vestibulum id ligula porta felis euismod ...</span>
                                                    <span class="msg-time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span>20 minutes ago</span></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <img src="/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
                                                <span class="msg-body">
                                                    <span class="msg-title">
                                                        <span class="blue">Bob:</span>Nullam quis risus eget urna mollis ornare ...</span>
                                                    <span class="msg-time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span>3:15 pm</span></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <img src="/assets/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
                                                <span class="msg-body">
                                                    <span class="msg-title">
                                                        <span class="blue">Kate:</span>Ciao sociis natoque eget urna mollis ornare ...</span>
                                                    <span class="msg-time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span>1:33 pm</span></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <img src="/assets/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
                                                <span class="msg-body">
                                                    <span class="msg-title">
                                                        <span class="blue">Fred:</span>Vestibulum id penatibus et auctor ...</span>
                                                    <span class="msg-time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span>10:09 am</span></span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="inbox.html">See all messages
                                        <i class="ace-icon fa fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="/assets/avatars/user.jpg" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>Welcome,</small>Jason</span>
                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>
                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-cog"></i>Settings</a>
                                </li>
                                <li>
                                    <a href="profile.html">
                                        <i class="ace-icon fa fa-user"></i>Profile</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-power-off"></i>Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-container --></div>
        <div class="main-container" id="main-container">
            <script type="text/javascript">try {
                    ace.settings.check('main-container', 'fixed')
                } catch(e) {}</script>
            <div id="sidebar" class="sidebar                  responsive">
                <script type="text/javascript">try {
                        ace.settings.check('sidebar', 'fixed')
                    } catch(e) {}</script>
                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                        <button class="btn btn-success">
                            <i class="ace-icon fa fa-signal"></i>
                        </button>
                        <button class="btn btn-info">
                            <i class="ace-icon fa fa-pencil"></i>
                        </button>
                        <button class="btn btn-warning">
                            <i class="ace-icon fa fa-users"></i>
                        </button>
                        <button class="btn btn-danger">
                            <i class="ace-icon fa fa-cogs"></i>
                        </button>
                    </div>
                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>
                        <span class="btn btn-info"></span>
                        <span class="btn btn-warning"></span>
                        <span class="btn btn-danger"></span>
                    </div>
                </div>
                <!-- /.sidebar-shortcuts -->
                <ul class="nav nav-list">
                    <li class="active">
                        <a href="{{url('admin/')}}">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text">后台首页</span></a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon glyphicon glyphicon-user"></i>
                            <span class="menu-text">用户管理</span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="">
                                <a href="{{url('admin/user/add')}}">
                                    <i class="menu-icon fa fa-plus purple"></i>添加用户</a>
                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="{{url('admin/user/index')}}">
                                    <i class="menu-icon fa fa-eye pink"></i>查看用户</a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon  glyphicon glyphicon-star"></i>
                            <span class="menu-text">商品分类</span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="">
                                <a href="{{url('admin/goods_cate')}}">
                                    <i class="menu-icon fa fa-plus purple"></i>查看分类</a>
                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="{{url('admin/goods_cate/add')}}">
                                    <i class="menu-icon fa fa-eye pink"></i>添加分类</a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa-coffee  fa"></i>
                            <span class="menu-text">商品管理</span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="">
                                <a href="{{url('admin/goods')}}">
                                    <i class="menu-icon fa fa-plus purple"></i>商品列表</a>
                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="{{url('admin/goods/add')}}">
                                    <i class="menu-icon fa fa-eye pink"></i>添加商品</a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-credit-card"></i>
                            <span class="menu-text">订单管理</span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="">
                                <a href="{{url('admin/order')}}">
                                    <i class="menu-icon fa fa-plus purple"></i>查看订单</a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon  fa fa-users"></i>
                            <span class="menu-text">权限管理</span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="">
                                <a href="{{url('admin/qx/add')}}">
                                    <i class="menu-icon fa fa-plus purple"></i>添加权限</a>
                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="{{url('admin/qx')}}">
                                    <i class="menu-icon fa fa-plus purple"></i>查看权限</a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                     <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon  fa fa-comment"></i>
                            <span class="menu-text">商品评价</span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="">
                                <a href="{{url('admin/comment')}}">
                                    <i class="menu-icon fa fa-plus purple"></i>查看评价</a>
                                <b class="arrow"></b>
                            </li>
                         </ul> 
                    </li>  
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa-tachometer  fa"></i>
                            <span class="menu-text">导航列表</span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="">
                                <a href="{{url('admin/nav/add')}}">
                                    <i class="menu-icon fa fa-plus pink"></i>添加导航</a>
                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="{{url('admin/nav')}}">
                                    <i class="menu-icon fa fa-eye purple"></i>导航列表</a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon  fa fa-external-link"></i>
                            <span class="menu-text">友情链接</span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="">
                                <a href="{{url('admin/flink')}}">
                                    <i class="menu-icon fa fa-plus purple"></i>查看链接</a>
                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="{{url('admin/flink/add')}}">
                                    <i class="menu-icon fa fa-eye pink"></i>添加链接</a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon  fa fa-cogs"></i>
                            <span class="menu-text">网站管理</span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="">
                                <a href="{{url('admin/config')}}">
                                    <i class="menu-icon fa fa-plus purple"></i>网站管理中心</a>
                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.nav-list -->
                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
                <script type="text/javascript">try {
                        ace.settings.check('sidebar', 'collapsed')
                    } catch(e) {}</script>
            </div>
            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs" id="breadcrumbs">
                        <script type="text/javascript">try {
                                ace.settings.check('breadcrumbs', 'fixed')
                            } catch(e) {}</script>
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="{{url('admin/')}}">Home</a></li>   
                            <li class="active">@yield('title')</li>
                        </ul>
                        <!-- /.breadcrumb -->
                        <div class="nav-search" id="nav-search">
                            <form class="form-search">
                                <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
                            </form>
                        </div>
                        <!-- /.nav-search --></div>
                    <div class="page-content">
                        <div class="ace-settings-container" id="ace-settings-container">
                            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                                <i class="ace-icon fa fa-cog bigger-130"></i>
                            </div>
                            <div class="ace-settings-box clearfix" id="ace-settings-box">
                                <div class="pull-left width-50">
                                    <div class="ace-settings-item">
                                        <div class="pull-left">
                                            <select id="skin-colorpicker" class="hide">
                                                <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                                <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                                <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                                <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option></select>
                                        </div>
                                        <span>&nbsp; Choose Skin</span></div>
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                                        <label class="lbl" for="ace-settings-navbar">Fixed Navbar</label></div>
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                                        <label class="lbl" for="ace-settings-sidebar">Fixed Sidebar</label></div>
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                                        <label class="lbl" for="ace-settings-breadcrumbs">Fixed Breadcrumbs</label></div>
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                                        <label class="lbl" for="ace-settings-rtl">Right To Left (rtl)</label></div>
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                                        <label class="lbl" for="ace-settings-add-container">Inside
                                            <b>.container</b>
                                        </label>
                                    </div>
                                </div>
                                <!-- /.pull-left -->
                                <div class="pull-left width-50">
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
                                        <label class="lbl" for="ace-settings-hover">Submenu on Hover</label></div>
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
                                        <label class="lbl" for="ace-settings-compact">Compact Sidebar</label></div>
                                    <div class="ace-settings-item">
                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
                                        <label class="lbl" for="ace-settings-highlight">Alt. Active Item</label></div>
                                </div>
                                <!-- /.pull-left --></div>
                            <!-- /.ace-settings-box --></div>
                        <!-- /.ace-settings-container -->
                        <div class="page-header">
                            <h1>@yield('ltitle')
                        </div>
                        <!-- /.page-header -->
            <script src="/assets/js/jquery.2.1.1.min.js"></script>
                        
                    @section('content')
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="alert alert-block alert-success">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>

                                    <i class="ace-icon fa fa-check green"></i>

                                    欢迎来到
                                    <strong class="green">
                                        MiShop
                                        <small>(v1.0)</small>
                                        后台管理系统
                                    </strong>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-xs-12  col-md-7 pricing-box">
                                        <div class="widget-box widget-color-blue">
                                            <div class="widget-header">
                                                <h5 class="widget-title bigger lighter">系统信息</h5></div>
                                            <div class="widget-body">
                                                <div class="widget-main">
                                                    <ul class="list-unstyled spaced8">
                                                        <li>
                                                            <label class="res-lab">操作系统</label><span class="res-info"></span><?php echo PHP_OS ?></span>
                                                        </li>
                                                        <li>
                                                            <label class="res-lab">运行环境</label><span class="res-info"><?php  echo $_SERVER ['SERVER_SOFTWARE']; ?></span>
                                                        </li>
                                                        <li>
                                                            <label class="res-lab">PHP版本</label><span class="res-info"><?php echo PHP_VERSION ?></span>
                                                        </li>
                                                        <li>
                                                            <label class="res-lab">上传附件限制</label><span class="res-info">2M</span>
                                                        </li>
                                                        <li>
                                                            <label class="res-lab">北京时间</label><span class="res-info"><?php echo date('Y-m-d H:i:s') ?></span>
                                                        </li>
                                                    </ul>
                                                    <hr>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div>
                    @show
                    </div></div></div>
                    <!-- /.page-content --></div>
            </div>
            <!-- /.main-content -->
            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">MiShop</span>Application &copy; 2016</span>&nbsp; &nbsp;
                        <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i></a>
                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>
                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div>
        <!-- /.main-container -->
        <!-- basic scripts -->
        <!--[if !IE]> -->
            <script src="/assets/js/jquery.2.1.1.min.js"></script>
            <!-- <![endif]-->
            <!--[if IE]>
                <script src="/assets/js/jquery.1.11.1.min.js"></script>
            <![endif]-->
            <!--[if !IE]> -->
                <script type="text/javascript">window.jQuery || document.write("<script src='/assets/js/jquery.min.js'>" + "<" + "/script>");</script>
                <!-- <![endif]-->
                <!--[if IE]>
                    <script type="text/javascript">window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>" + "<" + "/script>");</script>
                <![endif]-->
                <script type="text/javascript">if ('ontouchstart' in document.documentElement) document.write("<script src='/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");</script>
                <script src="/assets/js/bootstrap.min.js"></script>
                <!-- page specific plugin scripts -->
                <!--[if lte IE 8]>
                    <script src="/assets/js/excanvas.min.js"></script>
                <![endif]-->
                <script src="/assets/js/jquery-ui.custom.min.js"></script>
                <script src="/assets/js/jquery.ui.touch-punch.min.js"></script>
                <script src="/assets/js/jquery.easypiechart.min.js"></script>
                <script src="/assets/js/jquery.sparkline.min.js"></script>
                <script src="/assets/js/jquery.flot.min.js"></script>
                <script src="/assets/js/jquery.flot.pie.min.js"></script>
                <script src="/assets/js/jquery.flot.resize.min.js"></script>
                <!-- ace scripts -->
                <script src="/assets/js/ace-elements.min.js"></script>
                <script src="/assets/js/ace.min.js"></script>
                <!-- inline scripts related to this page -->
                <script type="text/javascript">jQuery(function($) {
                        $('.easy-pie-chart.percentage').each(function() {
                            var $box = $(this).closest('.infobox');
                            var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
                            var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)': '#E2E2E2';
                            var size = parseInt($(this).data('size')) || 50;
                            $(this).easyPieChart({
                                barColor: barColor,
                                trackColor: trackColor,
                                scaleColor: false,
                                lineCap: 'butt',
                                lineWidth: parseInt(size / 10),
                                animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false: 1000,
                                size: size
                            });
                        })

                        $('.sparkline').each(function() {
                            var $box = $(this).closest('.infobox');
                            var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
                            $(this).sparkline('html', {
                                tagValuesAttribute: 'data-values',
                                type: 'bar',
                                barColor: barColor,
                                chartRangeMin: $(this).data('min') || 0
                            });
                        });

                        //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
                        //but sometimes it brings up errors with normal resize event handlers
                        $.resize.throttleWindow = false;

                        var placeholder = $('#piechart-placeholder').css({
                            'width': '90%',
                            'min-height': '150px'
                        });
                        var data = [{
                            label: "social networks",
                            data: 38.7,
                            color: "#68BC31"
                        },
                        {
                            label: "search engines",
                            data: 24.5,
                            color: "#2091CF"
                        },
                        {
                            label: "ad campaigns",
                            data: 8.2,
                            color: "#AF4E96"
                        },
                        {
                            label: "direct traffic",
                            data: 18.6,
                            color: "#DA5430"
                        },
                        {
                            label: "other",
                            data: 10,
                            color: "#FEE074"
                        }]
                        function drawPieChart(placeholder, data, position) {
                            $.plot(placeholder, data, {
                                series: {
                                    pie: {
                                        show: true,
                                        tilt: 0.8,
                                        highlight: {
                                            opacity: 0.25
                                        },
                                        stroke: {
                                            color: '#fff',
                                            width: 2
                                        },
                                        startAngle: 2
                                    }
                                },
                                legend: {
                                    show: true,
                                    position: position || "ne",
                                    labelBoxBorderColor: null,
                                    margin: [ - 30, 15]
                                },
                                grid: {
                                    hoverable: true,
                                    clickable: true
                                }
                            })
                        }
                        drawPieChart(placeholder, data);

                        /**
             we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
             so that's not needed actually.
             */
                        placeholder.data('chart', data);
                        placeholder.data('draw', drawPieChart);

                        //pie chart tooltip example
                        var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
                        var previousPoint = null;

                        placeholder.on('plothover',
                        function(event, pos, item) {
                            if (item) {
                                if (previousPoint != item.seriesIndex) {
                                    previousPoint = item.seriesIndex;
                                    var tip = item.series['label'] + " : " + item.series['percent'] + '%';
                                    $tooltip.show().children(0).text(tip);
                                }
                                $tooltip.css({
                                    top: pos.pageY + 10,
                                    left: pos.pageX + 10
                                });
                            } else {
                                $tooltip.hide();
                                previousPoint = null;
                            }

                        });

                        /////////////////////////////////////
                        $(document).one('ajaxloadstart.page',
                        function(e) {
                            $tooltip.remove();
                        });

                        var d1 = [];
                        for (var i = 0; i < Math.PI * 2; i += 0.5) {
                            d1.push([i, Math.sin(i)]);
                        }

                        var d2 = [];
                        for (var i = 0; i < Math.PI * 2; i += 0.5) {
                            d2.push([i, Math.cos(i)]);
                        }

                        var d3 = [];
                        for (var i = 0; i < Math.PI * 2; i += 0.2) {
                            d3.push([i, Math.tan(i)]);
                        }

                        var sales_charts = $('#sales-charts').css({
                            'width': '100%',
                            'height': '220px'
                        });
                        $.plot("#sales-charts", [{
                            label: "Domains",
                            data: d1
                        },
                        {
                            label: "Hosting",
                            data: d2
                        },
                        {
                            label: "Services",
                            data: d3
                        }], {
                            hoverable: true,
                            shadowSize: 0,
                            series: {
                                lines: {
                                    show: true
                                },
                                points: {
                                    show: true
                                }
                            },
                            xaxis: {
                                tickLength: 0
                            },
                            yaxis: {
                                ticks: 10,
                                min: -2,
                                max: 2,
                                tickDecimals: 3
                            },
                            grid: {
                                backgroundColor: {
                                    colors: ["#fff", "#fff"]
                                },
                                borderWidth: 1,
                                borderColor: '#555'
                            }
                        });

                        $('#recent-box [data-rel="tooltip"]').tooltip({
                            placement: tooltip_placement
                        });
                        function tooltip_placement(context, source) {
                            var $source = $(source);
                            var $parent = $source.closest('.tab-content');
                            var off1 = $parent.offset();
                            var w1 = $parent.width();

                            var off2 = $source.offset();
                            //var w2 = $source.width();
                            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
                            return 'left';
                        }

                        $('.dialogs,.comments').ace_scroll({
                            size: 300
                        });

                        //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
                        //so disable dragging when clicking on label
                        var agent = navigator.userAgent.toLowerCase();
                        if ("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent)) $('#tasks').on('touchstart',
                        function(e) {
                            var li = $(e.target).closest('#tasks li');
                            if (li.length == 0) return;
                            var label = li.find('label.inline').get(0);
                            if (label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation();
                        });

                        $('#tasks').sortable({
                            opacity: 0.8,
                            revert: true,
                            forceHelperSize: true,
                            placeholder: 'draggable-placeholder',
                            forcePlaceholderSize: true,
                            tolerance: 'pointer',
                            stop: function(event, ui) {
                                //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                                $(ui.item).css('z-index', 'auto');
                            }
                        });
                        $('#tasks').disableSelection();
                        $('#tasks input:checkbox').removeAttr('checked').on('click',
                        function() {
                            if (this.checked) $(this).closest('li').addClass('selected');
                            else $(this).closest('li').removeClass('selected');
                        });

                        //show the dropdowns on top or bottom depending on window height and menu position
                        $('#task-tab .dropdown-hover').on('mouseenter',
                        function(e) {
                            var offset = $(this).offset();

                            var $w = $(window) ;
                            if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) $(this).addClass('dropup');
                            else $(this).removeClass('dropup');
                        });

                    })</script>
                    
    </body>

</html>