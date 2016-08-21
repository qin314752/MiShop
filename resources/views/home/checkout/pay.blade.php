{!!\App\Http\Controllers\HomeController::head()!!}
<script type="text/javascript">$('.site-category').hide()</script>
<!-- <script type="text/javascript" src="/Scripts/jquery.js"></script> -->
<script type="text/javascript" src="/Scripts/area.js"></script>
<script type="text/javascript" src="/Scripts/location.js"></script>
<div class="page-main">
    <div class="container">
        <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        </button> -->
        


<!-- 弹框 -->                  
<form action="{{url('addr/insert')}}" id="addresses" method="post">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">添加收货地址</h4></div>
      <div class="modal-body">
        <div class="">*收货人:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" style="width:360px;height:30px" name="uname" ></div>


        <br>
        <div class="">*手机号码:&nbsp;
          <input type="text" style="width:360px;height:30px" name="tel"></div>
          
          
        <br>
        <!--层级联动选择框-->
        <div>*城市: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
          <select id="loc_province" name="sheng" style="width:117px;height:30px; "></select>
          <select id="loc_city" name="shi" style="width:117px;height:30px;"></select>
          <select id="loc_town" name="xian" style="width:117px;height:30px;"></select>
        </div>
         
        <br>
        {{csrf_field()}}
          <div><input type="hidden" id="add" name="addr" value=""></div>
        <div class="">*街道地址:&nbsp;
          <input type="text" style="width:360px;height:30px" class="jiedao" name="jiedao"></div>
        <br></div>
       
      <div class="modal-footer">
      
        <button   class="btn btn-primary ">添加</button></div>
    </div>
  </div>
</div>
</form>
 <script type="text/javascript">
            showLocation();
            $('#addresses ').submit(function(){
                var sheng =  $('#loc_province').val();
                var shi = $('#loc_city').val();
                var xian = $('#loc_town').val();
                var str = sheng+','+shi+','+xian;                     
               var info = getInfo(str);
               $('#add').val(info);
            });
            //定义获取城市信息方法
            function getInfo(str){
              //console.log(str);
              //拆分字符串
              var arr = str.split(',');
              // console.log(arr);  
              var ls  = new Location;
              var l = ls.items;
              // console.log(l['0,1,2']['5']);
              var sheng = l['0'][arr[0]];
              var shi = l['0,'+arr[0]][arr[1]];
              var xian = l['0,'+arr[0]+','+arr[1]][arr[2]];
              var jiedao = $('[name=jiedao]').val();
              return [sheng+shi+xian+jiedao];
            }
          </script>
        <div class="checkout-box">
            <div class="section section-address">
                <div class="section-header clearfix">
                    <h3 class="title">收货地址</h3>
                    <div class="more"></div>
                </div>
                <div class="section-body clearfix" id="J_addressList">
                    <!-- addresslist begin -->
                    @foreach($addrs as $k=>$v)
                    <div class="address-item J_addressItem  {{$v->isdefault == 1?'selected':''}}" aid="{{$v->id}}">
                        <dl>
                            <dt>
                                <span class="tag"></span>
                                <em class="uname">{{$v->username}}</em></dt>
                            <dd class="utel">{{$v->tel}}</dd>
                            <dd class="uaddress">{{$v->addr}}</dd></dl>
                        <div class="actions">
                        </div>
                    </div>
                   
                   @endforeach
                    
                    <!-- addresslist end -->
                    <div class="address-item address-item-new" id="J_newAddress">
                        <i class="iconfont" data-toggle="modal" data-target="#myModal"></i>添加新地址</div>
                    <div class="address-show-more" id="J_showMoreAddress">
                        <span class="text">
                            </span>
                        <span class="text hide">
                            </span>
                    </div>
                </div>
            </div>
            <div class="section section-options section-payment clearfix">
                <div class="section-header">
                    <h3 class="title">支付方式</h3></div>
                <div class="section-body clearfix">
                    <ul class="J_optionList options ">
                        <li data-type="pay" class="J_option selected" data-value="1">在线支付
                            <span>（支持微信支付、支付宝、银联、财付通、小米钱包等）</span></li>
                    </ul>
                </div>
            </div>
            
            <div class="section section-goods">
                <div class="section-header clearfix">
                    <h3 class="title">购物清单</h3>
                    <div class="more">
                        <a href="#"  onclick="">返回购物车
                            <i class="iconfont"></i></a>
                    </div>
                </div>
                <div class="section-body">
                    <ul class="goods-list" id="J_goodsList">
                    @foreach($data as $k=>$v)
                        <li class="clearfix">
                            <div class="col col-img">
                                <img src="{{$v->pic}}" width="30" height="30"></div>
                            <div class="col col-name">
                                <a>{{$v->name}}</a></div>
                            <div class="col col-price xiaoji" num="{{$v->num}}" price="{{$v->price}}">{{$v->price}}元 x {{$v->num}}</div>
                            <div class="col col-status">{{$v->storage_num>0?'有货':'缺货'}}</div>
                            <div class="col col-total totalprice" >{{$v->num*$v->price}}元</div>
                        </li>
                    @endforeach
                        <script type="text/javascript">
                        $(function(){
                            //合计信息
                            var hejinum = 0;
                            var hejiprice = 0;
                            $('.xiaoji').each(function()
                            {
                                hejinum += parseInt($(this).attr('num'));
                                hejiprice += parseInt($(this).attr('price'))*parseInt($(this).attr('num'));
                            });
                            $('.hejinum').html(hejinum);
                            $('.hejiprice').html(hejiprice);
                            // $('input[name=hejinum]').val(hejinum);
                            $('input[name=total]').val(hejiprice);
                            //地址选择
                            var aid = $('.selected').attr('aid');
                            // alert(aid);
                            $('input[name=address_id]').val(aid);
                            $('.J_addressItem').click(function()
                            {
                                $(this).addClass('selected').siblings().removeClass('selected');
                                var aid = $(this).attr('aid');
                                $('input[name=addr_id]').val(aid);
                                // console.log($('input[name=addr_id]').val());
                            })
                        })
                        
                        </script>
                    </ul>
                </div>
            </div>
            <form action="{{url('/checkout/order')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="address_id" value="">
            <!-- <input type="hidden" name="hejinum" value=""> -->
            <input type="hidden" name="total" value="">
            <input type="hidden" name="uid" value="{{session('user')->id}}">
            <div class="section section-count clearfix">
                <div class="money-box" id="J_moneyBox">
                    <ul>
                        <li class="clearfix">
                            <label>商品件数：</label>
                            <span class="val hejinum"></span>件</li>
                        <li class="clearfix">
                            <label>金额合计：</label>
                            <span class="val hejiprice"></span>元</li>
                    </ul>
                </div>
            </div>
            <div class="section-bar clearfix">
                <div class="fr">
                    <button  class="btn btn-primary" id="J_checkoutToPay">去结算</button></div>
            </div>
            </form>
           
        </div>
    </div>
</div>
{!!\App\Http\Controllers\HomeController::footer()!!}