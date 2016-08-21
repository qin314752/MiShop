{!!\App\Http\Controllers\HomeController::head()!!}
<script type="text/javascript">$('.site-category').hide()</script>

        

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    评价
</button> -->
<!-- Modal -->
<form action="/commuc/add" method="get">

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">评论</h4>
      </div>
      <div class="modal-body">
          <!-- <div class="form-group"> -->
          <input type="hidden" name="goods_id" value="{{$id}}">
           <textarea class="form-control" name="content" cols="60" ></textarea>
          <!-- </div> -->
      </div>
      <div class="modal-footer">
        <button  class="btn btn-default" data-dismiss="modal">关闭</button>
        <button class="btn btn-primary">确认</button>
      </div>
    </div>
  </div>
</div>
</form>
<div class="breadcrumbs">
    <div class="container">
        <a onclick="_msq.push(['trackEvent', '815ce971591f749c-b0bcd814768c68cc', '//www.mi.com/index.html', 'pcpid']);" data-stat-id="b0bcd814768c68cc" href="/comment/http://www.mi.com/index.html">首页</a><span class="sep">&gt;</span><span>商品评价</span>    </div>
</div>

<div class="page-main user-main">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="uc-box uc-sub-box">
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">订单中心</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-8f3d1bffd166dc22', '//static.mi.com/order/', 'pcpid']);" data-stat-id="8f3d1bffd166dc22" href="/comment/http://static.mi.com/order/">我的订单</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-c1b3c3aaa5af08d9', 'http://service.order.mi.com/insurance/payServiceList', 'pcpid']);" data-stat-id="c1b3c3aaa5af08d9" href="/comment/http://service.order.mi.com/insurance/payServiceList?_r=68654.1470140108">手机意外保</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-1a3f726cf268373b', '//static.mi.com/order/#type=11', 'pcpid']);" data-stat-id="1a3f726cf268373b" href="/comment/http://static.mi.com/order/#type=11">团购订单</a></li>
                                <li class="active"><a onclick="_msq.push(['trackEvent', '815ce971591f749c-20db2c68bfa9e4a5', 'http://order.mi.com/user/comment', 'pcpid']);" data-stat-id="20db2c68bfa9e4a5" href="/comment/http://order.mi.com/user/comment?filter=1&amp;r=68654.1470140108" data-count="comment" data-count-style="bracket">评价晒单</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-709bb6fa38f217b6', 'http://recharge.10046.mi.com/list', 'pcpid']);" data-stat-id="709bb6fa38f217b6" href="/comment/http://recharge.10046.mi.com/list">话费充值订单</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-7d1138daa4456860', 'http://huanxin.mi.com/order/list', 'pcpid']);" data-stat-id="7d1138daa4456860" href="/comment/http://huanxin.mi.com/order/list?r=68654.1470140108">以旧换新订单</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">个人中心</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-00e076c95d370478', 'http://order.mi.com/portal', 'pcpid']);" data-stat-id="00e076c95d370478" href="/comment/http://order.mi.com/portal?r=68654.1470140108">我的个人中心</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-a52bf798dafa9754', 'http://order.mi.com/cashAccount', 'pcpid']);" data-stat-id="a52bf798dafa9754" href="/comment/http://order.mi.com/cashAccount?r=68654.1470140108">现金账户</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-bad8210fdb9088c4', 'http://order.mi.com/ecard/bind', 'pcpid']);" data-stat-id="bad8210fdb9088c4" href="/comment/http://order.mi.com/ecard/bind?r=68654.1470140108">小米礼品卡</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-593e8c9f8e61bcdc', 'http://order.mi.com/huanxin/list', 'pcpid']);" data-stat-id="593e8c9f8e61bcdc" href="/comment/http://order.mi.com/huanxin/list?r=68654.1470140108">手机换新券</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-0c25ea23fee92211', 'http://order.mi.com/user/favorite', 'pcpid']);" data-stat-id="0c25ea23fee92211" href="/comment/http://order.mi.com/user/favorite?r=68654.1470140108">喜欢的商品</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-cdcec10f2cbe6b42', 'http://order.mi.com/user/coupon', 'pcpid']);" data-stat-id="cdcec10f2cbe6b42" href="/comment/http://order.mi.com/user/coupon?r=68654.1470140108">优惠券</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-48ecd23c6e6e50ba', 'http://order.mi.com/user/address', 'pcpid']);" data-stat-id="48ecd23c6e6e50ba" href="/comment/http://order.mi.com/user/address?r=68654.1470140108">收货地址</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">售后服务</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                  <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-cee379f43f5f5fc2', 'http://service.order.mi.com/record/list', 'pcpid']);" data-stat-id="cee379f43f5f5fc2" href="/comment/http://service.order.mi.com/record/list?_r=68654.1470140108">服务记录</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-49e8df0584b02364', 'http://service.order.mi.com/apply/fill', 'pcpid']);" data-stat-id="49e8df0584b02364" href="/comment/http://service.order.mi.com/apply/fill?_r=68654.1470140108">申请服务</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-5aedd7982a0a1069', 'http://service.order.mi.com/user/compensate', 'pcpid']);" data-stat-id="5aedd7982a0a1069" href="/comment/http://service.order.mi.com/user/compensate?_r=68654.1470140108">领取快递报销</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">账户管理</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-35eef2fd7467d6ca', 'https://account.xiaomi.com/', 'pcpid']);" data-stat-id="35eef2fd7467d6ca" href="/comment/https://account.xiaomi.com/" target="_blank">个人信息</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-ae5ee0188510f1e6', 'https://account.xiaomi.com/pass/auth/security/home#service=setPassword', 'pcpid']);" data-stat-id="ae5ee0188510f1e6" href="/comment/https://account.xiaomi.com/pass/auth/security/home#service=setPassword" target="_blank">修改密码</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '815ce971591f749c-c130c3dbf41fd4d8', 'http://uvip.xiaomi.cn', 'pcpid']);" data-stat-id="c130c3dbf41fd4d8" href="/comment/http://uvip.xiaomi.cn/" target="_blank">社区VIP认证</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<div class="span16">
    
    <div class="uc-box uc-main-box">
        <div class="uc-content-box">
            <div class="box-hd">
                <h1 class="title">商品评价</h1>
                <div class="more clearfix">
                    <ul class="filter-list J_addrType">
                        <li class="active"><a href="#" data-stat-id="b3c689cd9b84db0f" onclick="_msq.push(['trackEvent', '815ce971591f749c-b3c689cd9b84db0f', 'http://order.mi.com/user/comment', 'pcpid']);">评价商品</a></li>
                    </ul>
                </div>
            </div>
  
         <!-- 闪存中的信息 -->
          @if(session('success'))
            <div class="alert alert-info">
                {{session('success')}}
            </div>
          @endif
            @if(session('error'))
            <div class="alert alert-info">
                {{session('error')}}
            </div>
          @endif
            @foreach($goods as $k=>$v)
                @foreach($v as $kk=>$vv)
                <div class="xm-goods-list-wrap">
                    <ul class="xm-goods-list clearfix">
                        <li class="xm-goods-item">
                            <div class="figure figure-img"><a href="" target="_blank" data-stat-id="176188ca7358e1ee" onclick="_msq.push(['trackEvent', '815ce971591f749c-176188ca7358e1ee', '//item.mi.com/1134900019.html', 'pcpid']);">
                            <img  src="{{$vv->pic}}" alt=""></a>
                            </div>
                            <h3 class="title"><a href="" data-stat-id="10db1fb31cf22d23" onclick="_msq.push(['trackEvent', '815ce971591f749c-10db1fb31cf22d23', '//item.mi.com/1134900019.html', 'pcpid']);"></a></h3>
                                <p class="price">{{$vv->price}}</p>
                                <!-- <button class="btn btn-primary comm" comm="{{$vv->id}}" data-toggle="modal" data-target=".bs-example-modal-sm">评价</button> -->
                        <button  class="btn btn-primary btn-lg"  comm="{{$vv->id}}" data-toggle="modal" data-target="#myModal"> 评价</button>
                       <br>
                        <a href="/commlist/index/{{$vv->id}}">查看评价</a>
                        </li>                                                      
                    </ul>
                </div>
            @endforeach
            @endforeach

            <script type="text/javascript">
            $('.comm').click(function()
            {
                var id = $(this).attr('comm');
                $('#goodid').attr('value',id);
                // alert($('#goodid').attr('value'));
            })
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
    </div>
</div>
{!!\App\Http\Controllers\HomeController::footer()!!}