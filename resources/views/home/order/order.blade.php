@extends('home.ucenter.index')
@section('content')
<div class="span16">
    <div class="uc-box uc-main-box">
        <div class="uc-content-box ">
            <div class="box-hd" >
                <h1 class="title">我的订单
                    <small>请谨防钓鱼链接或诈骗电话，
                        <a href="//www.mi.com/service/buy/antifraud/" target="_blank" data-stat-id="78d07fef654ba47a" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-78d07fef654ba47a', '//www.mi.com/service/buy/antifraud/', 'pcpid']);">了解更多&gt;</a></small>
                </h1>
                <div class="more clearfix">
                    <ul class="filter-list J_orderType" style="width:50%">
                        <li class="first active">
                            <a href="//static.mi.com/order/#type=0" data-type="0" data-stat-id="89d882413195fd4c" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-89d882413195fd4c', '//static.mi.com/order/#type=0', 'pcpid']);">全部有效订单</a></li>
                        <li>
                            <a id="J_unpaidTab" href="//static.mi.com/order/#type=7" data-type="7" data-stat-id="8edf501aa1eca097" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-8edf501aa1eca097', '//static.mi.com/order/#type=7', 'pcpid']);">待支付</a></li>
                        <li>
                            <a id="J_sendTab" href="//static.mi.com/order/#type=8" data-type="8" data-stat-id="8308bdcf62c72b1b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-8308bdcf62c72b1b', '//static.mi.com/order/#type=8', 'pcpid']);">待收货</a></li>
                       
                    </ul>
                    <form id="J_orderSearchForm" class="search-form clearfix" action="#" method="get">
                        <label for="search" class="hide">站内搜索</label>
                        <input class="search-text" type="search" id="J_orderSearchKeywords" name="keywords" autocomplete="off" placeholder="输入商品名称、商品编号、订单号">
                        <input type="submit" class="search-btn iconfont" value=""></form>
                </div>
            </div>
            <div class="box-bd" >
                <div id="J_orderList" >
                    <ul class="order-list">
                        @foreach($orders as $k=>$v)
                        <li class="uc-order-item uc-order-item-finish">
                            <div class="order-detail">
                                <div class="order-summary">
                                    <div class="order-status">已收货</div></div>
                                <table class="order-detail-table">
                                    <thead>
                                        <tr>
                                            <th class="col-main">
                                                <p class="caption-info">
                                                    <span class="sep"></span>订单号：
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
                                                            <a>
                                                                <img src="{{$vv->pic}}" width="80" height="80"></a>
                                                        </div>
                                                        <p class="name">
                                                            <a >{{$vv->name}}</a></p>
                                                    <p class="price">{{$vv->price}}</p>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                       @endforeach
                    </ul>
                </div>
                <div id="J_orderListPages">
                    <div class="xm-pagenavi">
                        {!! $fenye->render() !!}
                        <script type="text/javascript">
                            $('.pagination li').css({'width':'20px'}).addClass('numbers');
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection