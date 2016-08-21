{!!\App\Http\Controllers\HomeController::ucenterhead()!!}
<script type="text/javascript" src="/Scripts/jquery.min.js"></script>
     <div class="breadcrumbs">
            <div class="container">
                <a data-stat-id="b0bcd814768c68cc" href="http://www.mi.com/index.html">首页</a>
                <span class="sep">&gt;</span>
                <span>交易订单</span></div>
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
                                    <ul class="uc-nav-list J_navList">
                                        <li class="active">
                                            <a data-stat-id="699df20175dafb78" class="J_noRandom" href="#">我的订单</a></li>
                                        <li>
                                            <a data-stat-id="d17cc4a8dc68cce4" href="http://service.order.mi.com/insurance/payServiceList">意外保</a></li>
                                        <li data-type="11">
                                            <a data-stat-id="c3a00ffb1ecfbd9d" class="J_tuanList" href="http://static.mi.com/order/?type=11">团购订单</a></li>
                                        <li>
                                            <a data-stat-id="8f6a8c7dc274463f" href="http://order.mi.com/user/comment?filter=1" data-count="comment" data-count-style="bracket">评价晒单</a></li>
                                        <li>
                                            <a data-stat-id="6af0224d10f24db6" href="http://order.mi.com/user/recharge">话费充值订单</a></li>
                                        <li>
                                            <a data-stat-id="1e99c3db1f001c52" href="http://huanxin.mi.com/order/list">以旧换新订单</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uc-nav-box">
                                <div class="box-hd">
                                    <h3 class="title">个人中心</h3></div>
                                <div class="box-bd">
                                    <ul id="J_orderNavList" class="uc-nav-list">
                                        <li>
                                            <a data-stat-id="db90c9165d776d4a" href="http://order.mi.com/portal">我的个人中心</a></li>
                                        <li>
                                            <a data-stat-id="cab0e4a041b142b3" href="http://order.mi.com/cashAccount">现金账户</a></li>
                                        <li>
                                            <a data-stat-id="3c9418f710e9f33a" href="http://order.mi.com/ecard/bind">小米礼品卡</a></li>
                                        <li>
                                            <a data-stat-id="08d96cd811025c5a" href="http://order.mi.com/huanxin/list">手机换新券</a></li>
                                        <li>
                                            <a data-stat-id="9648484d2d66c6f3" href="http://order.mi.com/user/favorite">喜欢的商品</a></li>
                                        <li>
                                            <a data-stat-id="d372b9cfd6023f06" href="http://order.mi.com/user/coupon">优惠券</a></li>
                                        <li>
                                            <a data-stat-id="c8d28236578230fd" href="http://order.mi.com/user/address">收货地址</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uc-nav-box">
                                <div class="box-hd">
                                    <h3 class="title">售后服务</h3></div>
                                <div class="box-bd">
                                    <ul class="uc-nav-list">
                                        <li>
                                            <a data-stat-id="cee379f43f5f5fc2" href="http://service.order.mi.com/record/list">服务记录</a></li>
                                        <li>
                                            <a data-stat-id="49e8df0584b02364" href="http://service.order.mi.com/apply/fill">申请服务</a></li>
                                        <li>
                                            <a data-stat-id="5aedd7982a0a1069" href="http://service.order.mi.com/user/compensate">领取快递报销</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uc-nav-box">
                                <div class="box-hd">
                                    <h3 class="title">账户管理</h3></div>
                                <div class="box-bd">
                                    <ul class="uc-nav-list">
                                        <li>
                                            <a data-stat-id="35eef2fd7467d6ca" href="https://account.xiaomi.com/" target="_blank">个人信息</a></li>
                                        <li>
                                            <a data-stat-id="ae5ee0188510f1e6" href="https://account.xiaomi.com/pass/auth/security/home#service=setPassword" target="_blank">修改密码</a></li>
                                        <li>
                                            <a data-stat-id="c130c3dbf41fd4d8" href="http://uvip.xiaomi.cn/" target="_blank">社区VIP认证</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="span16">
                        <div class="uc-box uc-main-box">
                            <div class="uc-content-box order-list-box">
                                <div class="box-hd">
                                    <h1 class="title">我的订单
                                        <small>请谨防钓鱼链接或诈骗电话，
                                            <a data-stat-id="78d07fef654ba47a" href="http://www.mi.com/service/buy/antifraud/" target="_blank">了解更多&gt;</a></small>
                                    </h1>
                                    <div class="more clearfix">
                                        <ul class="filter-list J_orderType">
                                            <li class="first active">
                                                <a  href="{{url('/order/index',['type'=>4])}}" >全部有效订单</a></li>
                                            <li>
                                                <a  href="{{url('/order/index',['type'=>0])}}" >未支付</a></li>
                                            <li>
                                                <a  href="{{url('/order/index',['type'=>1])}}" >待收货</a></li>
                                            <li>
                                                <a  href="{{url('/order/index',['type'=>2])}}" >已收货</a></li>
                                            <li>
                                                <a  href="{{url('/order/index',['type'=>3])}}" >已关闭</a></li>
                                        </ul>
                                        <form id="J_orderSearchForm" class="search-form clearfix" action="{{url('/order/search')}}" method="get">
                                            <label for="search" class="hide">站内搜索</label>
                                            <input class="search-text" id="J_orderSearchKeywords" name="keywords" autocomplete="off" placeholder="输入订单号" type="search" value="{{isset($keywords)?$keywords:''}}">
                                            <input class="search-btn iconfont" value="" type="submit"></form>
                                    </div>
                                </div>
                                <div class="box-bd">
                                    <div id="J_orderList">
                                        <ul class="order-list">
                                        @foreach($orders as $k=>$v)
                                            <li class="uc-order-item uc-order-item-finish">
                                                <div class="order-detail">
                                                    <div class="order-summary">
                                                        <div class="order-status">
                                                        {{str_replace([0,1,2,3],['未支付','已支付','已收货','已关闭'],$v->status)}}
                                                        </div></div>
                                                    <table class="order-detail-table">
                                                        <thead>
                                                            <tr>
                                                                <th class="col-main">
                                                                    <p class="caption-info">
                                                                        <!-- <span class="sep">|</span>黄明毅 -->
                                                                        <!-- <span class="sep">|</span> -->
                                                                        订单号：
                                                                        <a >{{$v->order_code}}</a>
                                                                        <span class="sep">|</span>在线支付</p></th>
                                                                <th class="col-sub">
                                                                    <p class="caption-price">订单金额：
                                                                        <span class="num">{{$v->total}}</span>元</p></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="order-items">
                                                                    <ul class="goods-list">
                                                                    @foreach($v->goods as $kk=>$vv)
                                                                        <li>
                                                                            <div class="figure figure-thumb">
                                                                                <a >
                                                                                    <img src="{{$vv->pic}}"  height="80" width="80"></a>
                                                                            </div>
                                                                            <p class="name">
                                                                                <a >{{$vv->name}}</a></p>
                                                                            <p class="price">{{$vv->price}} </p></li>
                                                                    @endforeach    
                                                                    </ul>
                                                                </td>
                                                                <td class="order-actions">
                                                                    <a  class="btn btn-small btn-line-gray" href="#">订单详情</a>
                                                                    <a  class="btn btn-small btn-line-gray" href="#" target="_blank">申请售后</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </li>
                                            @endforeach
                                    </div>
                                    <div id="J_orderListPages">
                                        <div class="xm-pagenavi">
                                        @if(isset($keywords))
                                            {!! $fenye->appends(['keywords' => $keywords])->render() !!}
                                        @else
                                            {!! $fenye->render() !!}
                                        @endif
                        <script type="text/javascript">
                            $('.pagination li').css({'width':'20px'}).addClass('numbers');
                        </script> 
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
{!!\App\Http\Controllers\HomeController::footer()!!}