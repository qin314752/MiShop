<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
              <!-- <a  id="bianjie" href="#" title="编辑" >编辑</a> -->
                <div class="color4a9 fr" " target="_blank" id="switchRegion">修改</div>

              <h3>个人信息</h3>    
            </div>
            <div class="fdata lblnickname">
              <p><span>姓名：</span><span >
			  
				{{$user->username}}
				
			  </span></p>     
            </div>
            
            <div class="fdata lblgender">
              <p><span>性别：</span><span>
			  
					{{$user->sex}}
				
			  </span></p>     
            </div>
			<div class="fdata lblbirthday">
              <p><span>手机：</span><span >
              
                    {{$user->tel}}
                
              </span></p>     
            </div>
          </div>
			  <div class="framedatabox">
				
			
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
$('#switchRegion').click(function(){
    
    $('.aa').css('display','block');

});

</script>


<!-- 编辑个人信息资料 s -->
<div  style="display: none;" class="popup_mask aa">
<div class="bkc"></div>
<div class="mod_wrap">
<div style="display: none;" class="mod_acc_tip layereditinfo aa">
  <div class="mod_tip_hd">
    <h4>编辑基础资料</h4>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <!-- <a class="btn_mod_close " href="#" title=""><span>关闭</span></a> -->
  </div>
  <div class="mod_tip_bd">
    <form action="{{url('ucenter/update')}}" method="post">      
    <div class="wapbox editbasicinfo">
      <dl class="infobox c_b">
        <dt>姓名: </dt>
        <dd>
          <label class="labelbox"><input class="nickname" name="username" maxlength="20" placeholder="姓名" type="text"></label>
        </dd>      
              
        <dt>性别: </dt>
        <dd class="checkbox infosex">
          <label class="labelbox">
        <input type="radio" style="width:20px;height:20px;border:1px solid #ccc" name="sex" value="2">&nbsp;&nbsp;&nbsp;<span style="font-size:15px">男&nbsp;&nbsp;<span>
        <input type="radio" style="width:20px;height:20px;border:1px solid #ccc" name="sex" value="1">&nbsp;&nbsp;&nbsp;<span style="font-size:15px">女<span></label>
        
        </dd>

         <dt>手机: </dt>
        <dd>
          <label class="labelbox"><input class="nickname" name="tel" maxlength="20" placeholder="手机号码" type="text"></label>
                 
        </dd> 
      </dl>
     {{csrf_field()}}
    </div>      
    <div class="tip_btns">
      <button class="btn_tip btn_commom" href="#" title="保存">保存</button>
      <button class="btn_tip btn_back" href="#" title="取消">取消</button>
    </div>
    </form> 
  </div>  
</div>
</div>
</div>
</body>
</html>
