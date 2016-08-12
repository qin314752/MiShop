<!doctype html>
<html lang="zh-CN" xml:lang="zh-CN">
<head>
    <meta charset="utf-8">
    
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<title>小米商城-小米官方网站，小米手机、红米手机、小米电视正品专卖</title>
<meta name="description" content="小米商城-直营小米公司旗下所有产品，囊括小米手机、红米手机、小米电视、智能硬件、配件及小米生活周边，同时提供小米客户服务及售后支持。" />
<meta name="keywords" content="小米,小米官网,小米手机,小米官网首页,小米商城" />
<meta name="viewport" content="width=1226" />
<link rel="shortcut icon" href="//www.lampmaster.com/favicon.ico" type="image/x-icon" />
<link rel="icon" href="//www.lampmaster.com/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="Css/base.min.css" >
<link rel="stylesheet" href="Css/index.min.css">
<script src="Scripts/jquery-1.8.3.min.js"></script>
<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
</head>
<body>
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a rel="nofollow" href="//www.lampmaster.com/index.html" >小米商城</a><span class="sep">|</span><a rel="nofollow" href="http://www.lampmaster.com/" target="_blank">MIUI</a><span class="sep">|</span><a rel="nofollow" href="http://www.lampmaster.com/" target="_blank">米聊</a><span class="sep">|</span><a rel="nofollow" href="http://www.lampmaster.com/" target="_blank">游戏</a><span class="sep">|</span><a rel="nofollow" href="http://www.lampmaster.com/" target="_blank">多看阅读</a><span class="sep">|</span><a rel="nofollow" href="https://www.lampmaster.com/" target="_blank">云服务</a><span class="sep">|</span><a rel="nofollow" href="//www.lampmaster.com/c/appdownload/" target="_blank">小米网移动版</a><span class="sep">|</span><a rel="nofollow" href="//www.lampmaster.com/feedback/" target="_blank">问题反馈</a><span class="sep">|</span><a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal">Select Region</a>
        </div>
        <div class="topbar-cart" id="J_miniCartTrigger">
            <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="//www.lampmaster.com/cart/"><i class="iconfont">&#xe60c;</i>购物车<span class="cart-mini-num J_cartNum"></span></a>
            <div class="cart-menu" id="J_miniCartMenu">
                <div class="loading"><div class="loader"></div></div>
            </div>
        </div>
        <div class="topbar-info" id="J_userInfo">
            <a  rel="nofollow" class="link" href="//www.lampmaster.com/site/login" data-needlogin="true">登录</a><span class="sep">|</span><a  rel="nofollow" class="link" href="https://www.lampmaster.com/pass/register" >注册</a>        </div>
    </div>
</div>
<div class="site-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="{{url('/')}}" title="小米官网">小米官网</a>
            <div class="doodle" style="display: block;"><a class="link-block" style="background-image:url(/Picture/dafuweng.gif)" href="{{url('/')}}" >大富翁游戏</a></div>
        </div>
        <div class="header-nav">
            <ul class="nav-list J_navMainList clearfix">
                <li id="J_navCategory" class="nav-category">
                    <a class="link-category" href="#" data-stat-id="#">
                        <span class="text">全部商品分类</span></a>
                    <div class="site-category">
                        <ul id="J_categoryList" class="site-category-list clearfix">
                            @foreach($cates as $k=>$v)
                            <li class="ecatgory-item">
                                <a class="title" href="#" data-stat-id="0d41105a57b667b5" onclick="">{{$v->name}}
                                    <i class="iconfont"></i></a>
                                <div class="children clearfix children-col-2">
                                    <ul class="children-list children-list-col children-list-col-1">
                                        @foreach($v->sub as $kk=>$vv )   
                                        <li class="star-goods">
                                            <a class="link" href="#" data-stat-id="dcbd42ece248cddf" onclick="">
                                                <img class="thumb" src="/Images/mipad2-16!160x110.jpg" data-src="#" width="40" height="40" alt="">
                                                <span class="text">{{$vv->name}}</span></a>
                                            <a class="btn btn-line-primary btn-small btn-buy" href="#" data-stat-id="79cf129bec5862f2" onclick="">选购</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <script type="text/javascript">
                            $('.ecatgory-item').hover(function()
                                {
                                    $(this).addClass('category-item-active');
                                });
                            $('.iconfont').mouseover(function()
                                {
                                    $(this).parents('.ecatgory-item').addClass('category-item-active');
                                });
                            
                            $('.ecatgory-item').mouseout(function()
                                {
                                    $(this).removeClass('category-item-active');
                                });
                            
                        </script>
                    </div>
                </li>
                @foreach($navs as $k=>$v)
                <li class="nav-item">
                    <a class="link" href="javascript:void(0);"><span class="text">{{$v->name}}</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.lampmaster.com/mimax/"><img src="Picture/placeholder-220!110x110.png"  alt="小米Max" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.lampmaster.com/mimax/">小米Max</a></div>
                                    <p class="price">1499元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.lampmaster.com/mi5/"><img src="Picture/placeholder-220!110x110.png"  alt="小米手机5" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.lampmaster.com/mi5/">小米手机5</a></div>
                                    <p class="price">1999元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.lampmaster.com/mi4c/"><img src="Picture/placeholder-220!110x110.png"  alt="小米手机4c" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.lampmaster.com/mi4c/">小米手机4c</a></div>
                                    <p class="price">1099元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
               @endforeach
               
                
                
                
                
                <li class="nav-item">
                    <a  class="link" href="//www.lampmaster.com/service/" target="_blank"><span class="text">服务</span></a>
                </li>
                <li class="nav-item">
                    <a rel="nofollow" class="link" href="http://www.xiaomi.cn" target="_blank"><span class="text">社区</span></a>
                </li>
            </ul>
        </div>
        <div class="header-search">
            <form id="J_searchForm" class="search-form clearfix" action="//www.lampmaster.com/search" method="get">
                <label for="search" class="hide">站内搜索</label>
                <input class="search-text" type="search" id="search" name="keyword" autocomplete="off" data-search-config="{'defaultWords':[{'Key':'小米手机5','Rst':11},{'Key':'空气净化器2','Rst':1},{'Key':'活塞耳机','Rst':4},{'Key':'小米路由器','Rst':8},{'Key':'移动电源','Rst':21},{'Key':'运动相机','Rst':3},{'Key':'小蚁摄像机','Rst':2},{'Key':'小米体重秤','Rst':1},{'Key':'小米插线板','Rst':13},{'Key':'配件优惠套装','Rst':32}]}" />
                <input type="submit" class="search-btn iconfont" value="&#xe616;" />
                <div class="search-hot-words">
                    <a href="//www.lampmaster.com/redmipro/">红米Pro</a><a href="//www.lampmaster.com/mibookair/">小米笔记本Air</a>                </div>
            </form>
        </div>
    </div>
</div>

