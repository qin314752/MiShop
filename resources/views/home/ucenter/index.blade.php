{!!\App\Http\Controllers\HomeController::head()!!}
<script type="text/javascript">$('.site-category').hide()</script>

<div class="breadcrumbs">
    <div class="container">
        <a href="{{url('/')}}">首页</a><span class="sep">&gt;</span><span>个人中心</span>    
    </div>
</div>
<div class="page-main user-main">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="uc-box uc-sub-box">
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">订单中心</h3></div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li>
                                    <a href="{{url('/order/show')}}">我的订单</a></li>
                                <li>
                                    <a href="http://order.mi.com/user/comment?filter=1&amp;r=39157.1471244075" data-count="comment" data-count-style="bracket" data-stat-id="20db2c68bfa9e4a5" onclick="">评价晒单</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">个人中心</h3></div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li class="active">
                                    <a href="#">我的个人中心</a></li>
                                 <li>
                                    <a href="{{url('/ucenter/sele/')}}">个人信息</a></li>
                                <li>
                                    <a href="#">修改密码</a></li>
                                <li>
                                    <a href="{{url('/addr')}}">收货地址</a></li>
                            </ul>
                        </div>
                    </div>
                  
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title"><!-- 账户管理 --></h3></div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                               <li><a href=""></a></li>
                               <li><a href=""></a></li>
                               <li><a href=""></a></li>
                               <li><a href=""></a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @section('content')
             <div class="span16">
                <div class="protal-content-update hide">
                    <div class="protal-username">
                        Hi, {{$user->username}}       
                     </div>                    
                </div>
                <div class="uc-box uc-main-box">
                    <div class="uc-content-box portal-content-box">
                        <div class="box-bd">
                            <div class="portal-main clearfix">
                                <div class="user-card">
                                <br>
                                    <h2 class="username">{{$user->username}}</h2>
                                 <br>
                                    <a target="_blank" href="{{url('/ucenter/sele/')}}">修改个人信息 &gt;</a>
                                    <img width="150" height="150" alt="1135754503" src="{{$user->pic}}" class="avatar">
                                </div>
                                <div class="user-actions">
                                    <ul class="action-list">
                                        <li>账户安全：<span class="level level-3">较高</span></li>                                                             
                                         <li>绑定邮箱：<span class="tel">{{$user->email}}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portal-sub">
                                <ul class="info-list clearfix">
                                    <li>
                                        <h3>支付的订单：<span class="num"></span></h3>
                                        <a href="#">查看支付订单<i class="iconfont"></i></a>
                                        <img alt="" src="/ucente/image/portal-icon-1.png">
                                    </li>
                                    <li>
                                        <h3>收货地址<span class="num"></span></h3>
                                        <a href="   ">查看收货地址:<i class="iconfont"></i></a>
                                        <img alt="" src="/ucente/image/portal-icon-2.png">
                                    </li>
                                    <!-- <li>
                                        <h3>待评价商品数：<span class="num">0</span></h3>
                                        <a href="#">查看待评价商品<i class="iconfont"></i></a>
                                        <img alt="" src="/ucente/image/portal-icon-3.png">
                                    </li>
                                    <li>
                                        <h3>喜欢的商品：<span class="num">0</span></h3>
                                        <a href="#">查看喜欢的商品<i class="iconfont"></i></a>
                                        <img alt="" src="/ucente/image/portal-icon-4.png">
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @show
        </div>
    </div>
</div>
{!!\App\Http\Controllers\HomeController::footer()!!}
