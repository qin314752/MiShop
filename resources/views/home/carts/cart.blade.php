{!!\App\Http\Controllers\HomeController::minihead()!!}
<script src="/Scripts/jquery.min.js"></script>
<script src="/Scripts/area.js"></script>
<script src="/Scripts/location.js"></script>

<script type="text/javascript">$('.site-category').hide()</script>
<hr style="border:1px solid red">
  
  <div class="container">
    <div class="cart-loading loading hide" id="J_cartLoading">
      <div class="loader"></div>
    </div>
    <div class="cart-empty hide" id="J_cartEmpty">
      <h2>您的购物车还是空的！</h2>
      <p class="login-desc">登录后将显示您之前加入的商品</p>
      <a  href="#" class="btn btn-primary btn-login" id="J_loginBtn">立即登录</a>
      <a href="#" class="btn btn-primary btn-shoping J_goShoping">马上去购物</a>
    </div>
    <div class="" id="J_cartBox">
    <div class="cart-goods-list">
      <div class="list-head clearfix">
      
        <div class="col col-img">&nbsp;</div>
        <div class="col col-name">商品名称</div>
        <div class="col col-price">单价</div>
        <div class="col col-num">数量</div>
        <div class="col col-total">小计</div>
        <div class="col col-action">操作</div></div>
      <div id="J_cartListBody" class="list-body">

          <!--商品-->

          <div class="item-box">
          @foreach($data as $v)
            <div class="item-table J_cartGoods">
              <div class="item-row clearfix">
            
                <div class="col col-img">
                  <a  href="#" target="_blank">
                    <img alt="" src="{{$v->pic}}" height="80" width="80"></a>
                </div>
                <div class="col col-name">
                  <div class="tags"></div>
                  <h3 class="name">
                    <a  href="#" target="_blank">{{$v->name}}</a></h3>
                </div>
                <div class="col col-price xjprice">{{$v->price}}</div>
                <!-- - -->
                <div  class="col col-num div xjnum">
                  <div class="change-goods-num clearfix J_changeGoodsNum">
                    <a class="jian" >
                      <i class="iconfont "></i>
                    </a>
                     <input tyep="text" name="num" value="{{$v->num}}" >
                    <a class="jia"  href="javascript:void(0)">
                      <i class="iconfont"></i>
                    </a>
                    <!-- + -->
                  </div>
                </div>
                  <input type="hidden" class="id1" name="id" value="{{$v->id}}">

                <div class="col col-total xiaoji" >小计
                </div>
                <div class="col col-action ">
                  <a href="javascript:void(0);" title="删除" class="del J_delGoods ">
                    <i class="iconfont"></i>
                  </a>
                </div>
              </div>
            </div>
          @endforeach
          </div>
          <!-- 商品结束 -->
      </div>
  </div>
  <script type="text/javascript">
    
  </script>

  <div id="J_cartBar" class="cart-bar clearfix">
    <div class="section-left">
      <a class="back-shopping J_goShoping" href="#" >继续购物</a>
      <span class="cart-total">共
        <i id="J_cartTotalNum">1</i>件商品，已选择
        <i id="J_selTotalNum">1</i>件</span>
      <span id="J_coudanTip" class="cart-coudan hide">，还需
        <i id="J_postFreeBalance"></i>元即可免邮费
        <a id="J_showCoudan" href="javascript:void(0);" >立即凑单</a></span>
    </div>
    <span class="activity-money hide">活动优惠：减
      <i id="J_cartActivityMoney">0</i>元</span>
    <span class="total-price">合计（不含运费）：
      <em id="J_cartTotalPrice">总价XX</em>元</span>
    <a id="J_goCheckout" class="btn btn-a btn btn-primary" href="{{url('/checkout/pay ')}}">去结算</a>
    <div id="J_noSelectTip" class="no-select-tip hide">请勾选需要结算的商品
      <i class="arrow arrow-a"></i>
      <i class="arrow arrow-b"></i>
    </div>
  </div>
  </div>
          <script type="text/javascript">
          yunsuan();
          //减少数量
          $('.jian ').click(function() {
              var num = parseInt($(this).next().val());
              var num = num - 1;
              if(num==0){return}
              //总价格
              var price =  $(this).parents('div').prev().html();
              var price = num * price;
              //id
              var id =  $(this).parents('div').next().val();
                // alert(id);

                $.get('/cart/add',{id:id,num:num},function(data){

                });
              $(this).next('input').val(num);
                $(this).parents('.tp').siblings('.col-total').html(price);  
              yunsuan();
            });

          //添加数量

          $('.jia ').click(function() {
             var num = parseInt($(this).prev().val());
              var num = num + 1;
             //总价
             var price =  $(this).parents('div').prev().html();
              var price = num * price;
        
              //id
              var id =  $(this).parents('div').next().val();
  
                $.get('/cart/add',{id:id,num:num},function(data){
                    
                });
              $(this).prev('input').val(num);
                $(this).parents('.tp').siblings('.col-total').html(price);
                yunsuan();
            });

          //删除商品
          $('.del').click(function(){
         var id = $(this).parent('.col-action').prev().prev().val();
         var de = $(this);
            $.get('/cart/del',{id:id},function(data){
                console.log(data);
               if(data==1){

                   de.parents('.item-row').remove();
            yunsuan();
               }
                });
          });
          function yunsuan()
          {

            //计算小计
            var zongjia = 0;
            $('.xiaoji').each(function()
            {
                var xjnum = $(this).siblings('.xjnum').find('input').val();
                var xjprice = $(this).siblings('.xjprice').html();
                $(this).html(xjprice*xjnum);
                zongjia += parseInt(xjprice*xjnum);
            })
            //总价
            $('#J_cartTotalPrice').html(zongjia);
          }
            </script>
       
  
   
{!!\App\Http\Controllers\HomeController::footer()!!}
      

