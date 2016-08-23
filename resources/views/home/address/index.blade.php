<html lang="zh-CN" xml:lang="zh-CN">
  
  <head>
  <!-- 模态框  开始-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" async="" src="/address/js/jquery.2.1.1.min.js"></script>
    <script type="text/javascript" async="" src="/address/js/bootstrap.js"></script>
    <!--  模态框   -->
    <link media="all" href="/address/css/index.css" type="text/css" rel="stylesheet">
    <!-- 城市三级联动 开始 -->

        <!--导入插件-->
    <!-- <script type="text/javascript" src="/san/jquery.js"></script> -->
    <script type="text/javascript" src="/san/area.js"></script>
    <script type="text/javascript" src="/san/location.js"></script>
    <!-- 城市三级联动 结束 -->



    <title>我的收货地址</title>  
    </head>  
  <body>  
    <div class="breadcrumbs">
      <div class="container">
        <a href="#"  onclick="">首页</a>
        <span class="sep">&gt;</span>
        <span>收货地址</span></div>
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
                      <a href="#"  onclick="">我的订单</a></li>
                    <li>
                      <a href="#" onclick="">意外保</a></li>
                    <li>
                      <a href="#" onclick="">团购订单</a></li>
                    <li>
                      <a  href="#"  onclick="">评价晒单</a></li>
                    <li>
                      <a href="#"  onclick="">话费充值订单</a></li>
                    <li>
                      <a href="#"  onclick="">以旧换新订单</a></li>
                  </ul>
                </div>
              </div>
              <div class="uc-nav-box">
                <div class="box-hd">
                  <h3 class="title">个人中心</h3></div>
                <div class="box-bd">
                  <ul class="uc-nav-list">
                    <li>
                      <a href="#" onclick="">我的个人中心</a></li>
                    <li>
                      <a href="#"  onclick="">现金账户</a></li>
                    <li>
                      <a href="#"  onclick="">小米礼品卡</a></li>
                    <li>
                      <a href="#"  onclick="">手机换新券</a></li>
                    <li>
                      <a href="#" onclick="">喜欢的商品</a></li>
                    <li>
                      <a href="#" onclick="">优惠券</a></li>
                    <li class="active">
                      <a href="#"  onclick="">收货地址</a></li>
                  </ul>
                </div>
              </div>
              <div class="uc-nav-box">
                <div class="box-hd">
                  <h3 class="title">售后服务</h3></div>
                <div class="box-bd">
                  <ul class="uc-nav-list">
                    <li>
                      <a href="#" onclick="">服务记录</a></li>
                    <li>
                      <a href="" onclick="">申请服务</a></li>
                    <li>
                      <a href="#" onclick="">领取快递报销</a></li>
                  </ul>
                </div>
              </div>
              <div class="uc-nav-box">
                <div class="box-hd">
                  <h3 class="title">账户管理</h3></div>
                <div class="box-bd">
                  <ul class="uc-nav-list">
                    <li>
                      <a target="_blank" href="#" onclick="">个人信息</a></li>
                    <li>
                      <a target="_blank" href="#"  onclick="">修改密码</a></li>
                    <li>
                      <a target="_blank" href="#" onclick="">社区VIP认证</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="span16">
            <div class="uc-box uc-main-box">
              <div class="uc-content-box">
                  <a style="float:right;font-size:16px;" href="{{url('ucenter/index')}}">退出</a>                             
                <div class="box-hd">
                  <h1 class="title">收货地址</h1> 
                </div>

                <div class="box-bd">
                  <div class="user-address-list J_addressList clearfix">
                    
                    
                    <div id="J_newAddress" data-type="" class="address-item address-item-new">

                      <button type="button"  class="btn btn-primary btn-lg iconfont" data-toggle="modal" data-target="#myModal" ></button>添加新地址

                    </div>

                  @foreach($arr as $v)
                
                    <div  style="{{$v->isdefault==1? 'background:#ccc':''}} " class="address-item J_addressItem dell  abcd ">
                   
                      <dl>
                        <dt>
                          
                          <dd>收件人: <span class="uname cc"> {{$v->uname}}</span></dd>
                        </dt>
                          <dd>手机号码: <span class="utel bb"> {{$v->tel}}</span></dd>
                        
                        <dd>收货地址:  <span class="uaddress dd">{{$v->addr}}</span></dd> 
                      </dl>
                        <!-- <div name=""> -->
                        <input type="hidden" class="id" name="id" value="{{$v->id}}">
                      <div class="actions aa ">
                        <!-- <a  class="modify J_addressModify upd">修改</a> -->
                      <button   style="border:0px; background:;" class=" modify J_addressModify upd " data-toggle="modal" data-target="#Modal"  >修改</button>
                        <a class="modify J_addressDel del" >删除</a>
                      </div>
                    </div>
                   @endforeach 
                  
                  
                  </div>
                </div>

              </div>
            </div>
          </div>
        
        </div>
      </div>
    </div>
<script type="text/javascript">
<!-- 删除 -->
  
$('.del').click(function(){

var id = $(this).parent('.aa').prev().val();
var del = $(this);
$.get('addr/del',{id:id},function(data){
            if(data==1){
              del.parents('.dell').remove();
            }else{
            alert('删除失败');
              
            }
});

});


//选着默认地址
$('.abcd').dblclick(function()
{
$(this).css('background','#ddd');

var id= $(this).find('.id').val();
// alert(id);
var aa = $(this);
$.get("{{url('/addr/upde')}}",{id:id},function(data){
  console.log(data);
  if(data){
     
     aa.css('background','#ccc').siblings().css({'background':''});
     
  }else{
    alert('默认失败');
  }

});


});
</script>



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
        <br>
        <div >
       &nbsp;&nbsp; 是否默认: <input type="checkbox" name="isdefault" value="1">
 
         </div>
       </div>
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
                // alert(info);
             
              // return false;
            
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


<!-- 弹框 -->                  
<form action="{{url('addr/upd')}}"  method="post">
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">修改收货地址</h4></div>
     <div class="modal-body">
        <div class="">*收货人:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="text" style="width:360px;height:30px" name="uname" ></div>
        <br>
        <div class="">*手机号码:&nbsp;
          <input type="text" style="width:360px;height:30px" name="tel"></div>
          <input type="hidden" name="id" >        
        <br>
        {{csrf_field()}}
        <div class="">*收货地址:&nbsp;
          <input type="text" style="width:360px;height:30px" class="jiedao" name="addr"></div>
        <br></div>
        
      <div class="modal-footer">

        <button   class="btn btn-primary ">修改</button></div>
    </div>
  </div>
</div>
</form>
<script type="text/javascript">
          
<!-- 修改 -->
 
$('.upd').click(function(){

var id = $(this).parent('.aa').prev().val();
var uname = $(this).parents('.dell').find('.cc').html();
var tel = $(this).parents('.dell').find('.bb').html();
var addr = $(this).parents('.dell').find('.dd').html();
 $('[name=uname]').val(uname);                                      
 $('[name=tel]').val(tel);                                      
 $('[name=addr]').val(addr);                                      
 $('[name=id]').val(id);                                      

});

</script>

  </body>

</html>