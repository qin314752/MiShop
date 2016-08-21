<!DOCTYPE html>
<html>
<head>

    <script type="text/javascript" async="" src="/address/js/jquery.2.1.1.min.js"></script>
    <script type="text/javascript" async="" src="/address/js/bootstrap.js"></script>


<title>小米帐号 - 个人信息</title>
<link rel="stylesheet" type="text/css" href="/personal/index.css" media="all">
</head>
<body style="overflow-y: scroll;" class="zh_CN">
	<div class="popup_mask" style="display: none;" id="loadingMask">
		<div class="bkc"></div>
		<div class="mod_wrap loadingmask">
			
		</div>
	</div>
  <div class="wrapper blockimportant">
  <div class="wrap">
	
  
<div class="layout bugfix_ie6 dis_none">
  <div class="n-logo-area clearfix">
    <a href="{{url('ucenter/index')}}" class="fl-l">
      <img src="/personal/n-logo@2x.png" style="height:34px">
    </a>
    
      <a id="logoutLink" class="fl-r logout" href="{{url('ucenter/index')}}">
          退出
      </a>
	  
    
  </div>
  
    <!--头像 名字-->
	<div class="n-account-area-box">
		<div class="n-account-area clearfix">
		  <div class="na-info">
			<p class="na-name">{{$user->username}}</p>
			
		  </div>
		  <div class="na-img-area fl-l">
      <!--na-img-bg-area不能插入任何子元素-->
      <div class="na-img-bg-area"><img src="{{$user->pic}}"></div>
		  </div>
		</div>
	</div>
  
</div>

	<div class="layout">
      <div class="n-main-nav clearfix">
        <ul>
        
          <li class="current">
            <a title="个人信息">个人信息</a>

            <em class="n-nav-corner"></em>
          </li>
         
        </ul>
      </div>
      <div class="n-frame">
	<div class="uinfo c_b">
        <div class="">
        <div class="main_l">
                <form action= "{{url('/ucenter/img/')}}" method="post" enctype="multipart/form-data">
                  <div class="naInfoImgBox t_c">
                    <div class="na-img-area marauto">
                      
                    <div class="na-img-bg-area"><img src="{{$user->pic}}"></div>
                      <em class="na-edit " ic="aaa"> 
                       
                        <input type="file" name="pic" style="opacity:0; filter:alpha(opacity=0); width: 150px;height:38;"/>  
                    </em>

                  </div>
                  
                  <div class="naImgLink">
      			       {{csrf_field()}}
      				      <button class="color4a9" style="font-size:13px;border:none;background:white; " id = "abcd" title="修改头像">修改头像</button>
                  </div>
          </div>
          </form>        
        </div>
        <div class="main_r">
          <div class="framedatabox">
            <div class="fdata">
              <h3>个人信息</h3>    
            </div>
            <div class="fdata lblnickname">
              <p><span>姓名：</span><span id="update">
			  
				{{$user->username}}
				
			  </span></p>     
            </div>
            
            <div class="fdata lblgender">
              <p><span>性别：</span><span id="sex">
			  
					{{$user->sex}}
				
			  </span></p>     
            </div>
			<div class="fdata lblbirthday">
              <p><span>手机：</span><span id="tel">
              
                    {{$user->tel}}
                
              </span></p>     
            </div>
          </div>
			  <div class="framedatabox">
				
				          
				<div class="fdata click-row">
				  
				  <p>
					  <span>帐号地区：  </span>
					  <span class="box_center"><em id="region" _code="CN">{{$user->guojia}}</em><i class="arrow_r"></i></span>
				  </p>     
				</div>
			  </div>
		<div class="logout_wap">
			<a class="btnadpt bg_white  del" href="#">退出</a>

		</div>
      </div>
	 </div>
	</div>
  </div>
  </div>
	<div class="n-footer">
  <div class="nf-link-area clearfix">
  <ul class="lang-select-list">
    <li><i class="lang-select-li current" data-lang="zh_CN">简体&nbsp;    </i>&nbsp;|&nbsp;</li>
    <li><i class="lang-select-li" data-lang="zh_TW">繁体&nbsp;</i>&nbsp;|&nbsp;</li>
    <li><i class="lang-select-li" data-lang="en">English</i></li>
    
      &nbsp;|&nbsp;<li><i class="a_critical" href="#" target="_blank"><em></em>常见问题</i></li>
    
  </ul>
  </div>
  <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<i href="#" class="beianlink beian-record-link" target="_blank"><span><img src="/personal/ghs.png"></span>京公网安备11010802020134号</i>-京ICP证110507号</span></p>
</div>
<script type="text/javascript">
      //绑定双击事件 进行修改
$('#update').dblclick(function(){


    if($(this).attr('isDbl') == 1){return}
    //添加标识
    $(this).attr('isDbl',1);
    //获取原来的用户名
    var yname = $(this).html();
    var id = $(this).prev().html();
    var td = $(this);
    //创建input
    var inp = $('<input type="text" value="'+yname+'" />');
    $(this).empty();
    //插入
    $(this).append(inp);
    // 双击自动全选文档
    inp.select();
    //绑定丧失焦点事件
    inp.blur(function(){
      var name = $(this).val();
      if(name==''){
        name = yname;
        die;
      }
      //发送ajax
      $.get("{{url('/ucenter/update/')}}",{username:name},function(data){
        console.log(data);
        // 判断返回
        if(data == 1){       
          td.empty();
          td.html(name);
          td.removeAttr('isDbl');
        }else{
          //修改失败
          td.empty();
          td.html(yname);
          td.removeAttr('isDbl');

        }
      });
    });
  });
      //绑定双击事件 进行修改
$('#tel').dblclick(function(){


    if($(this).attr('isDbl') == 1){return}
    //添加标识
    $(this).attr('isDbl',1);
    //获取原来的用户名
    var yname = $(this).html();
    var id = $(this).prev().html();
    var td = $(this);
    //创建input
    var inp = $('<input type="text" value="'+yname+'" />');
    $(this).empty();
    //插入
    $(this).append(inp);
    // 双击自动全选文档
    inp.select();
    //绑定丧失焦点事件
    inp.blur(function(){
      var name = $(this).val();
      if(name==''){
        name = yname;
        die;
      }
      //发送ajax
      $.get("{{url('/ucenter/tel/')}}",{tel:name},function(data){
        console.log(data);
        // 判断返回
        if(data == 1){       
          td.empty();
          td.html(name);
          td.removeAttr('isDbl');
        }else{
          //修改失败
          td.empty();
          td.html(yname);
          td.removeAttr('isDbl');

        }
      });
    });
  });      //绑定双击事件 进行修改
$('#sex').dblclick(function(){


    if($(this).attr('isDbl') == 1){return}
    //添加标识
    $(this).attr('isDbl',1);
    //获取原来的用户名
    var yname = $(this).html();
    var id = $(this).prev().html();
    var td = $(this);
    //创建input
    var inp = $('<input type="text" value="'+yname+'" />');
    $(this).empty();
    //插入
    $(this).append(inp);
    // 双击自动全选文档
    inp.select();
    //绑定丧失焦点事件
    inp.blur(function(){
      var name = $(this).val();
      if(name==''){
        name = yname;
        die;
      }
      //发送ajax
      $.get("{{url('/ucenter/sex/')}}",{sex:name},function(data){
        console.log(data);
        // 判断返回
        if(data == 1){       
          td.empty();
          td.html(name);
          td.removeAttr('isDbl');
        }else{
          //修改失败
          td.empty();
          td.html(yname);
          td.removeAttr('isDbl');

        }
      });
    });
  });


</script>
</body>
</html>
