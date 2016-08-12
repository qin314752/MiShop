

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
<title>小米帐号 - 密码设置</title>
    <link type="text/css" rel="stylesheet" href="/login/Css/reset.css">
<link type="text/css" rel="stylesheet" href="/login/Css/layout.css">

    <link type="text/css" rel="stylesheet" href="/login/Css/registerpwd.css">

</head>



<div class="layout">
  <div class="n-frame device-frame reg_frame" id="main_container">
  <br>
  <br>
    <div class="external_logo_area"><a class="milogo" href="#"></a></div>
    <div class="title-item t_c">
      <h4 class="title_big30">注册小米帐号</h4> 
      <form action="{{url('home/login/pass')}}" method="post">
      <div class="regbox">
        <div class="step3 phone_step3">
          <dl>
            <dt>
              <h4>您注册的邮箱号为
                <span class="register-ph-num">{{$email}}</span></dt>
            <dd>
  @if (count($errors) > 0)
    <div class="alert alert-danger">          
        <ul>
          @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
          @endforeach
       </ul>
     </div>    
   @endif
      
                  <div class="inputbg">
                <label for="" class="labelbox">
                  <input type="password" placeholder="请输入密码" name="password" data-error=".error-password" class="set-password"></label>
              </div>
            </dd>
            <dd>
            <input type="hidden" name="email" value="{{$email}}">
              <div class="inputbg">
                <label for="" class="labelbox">
                  <input type="password" placeholder="请输入确认密码" name='repassword' data-error=".error-password" data-repeat=".set-password" name="repassword"></label>
              </div>
            </dd>
          </dl>
          <div style="display:block;" class="err_tip pwd_tip error-password">
            <div class="dis_box">
              <em class="icon_error"></em>
              <span data-origin="密码长度8~16位，数字、字母、字符至少包含两种">密码长度1~16位，数字、字母、字符至少包含两种</span></div>
          </div>
          <div class="fixed_bot mar_phone_dis3">
            <input type="submit" value="提交" class="btn332 btn_reg_1 submit-step"></div>
        </div>
      </div>
      {{csrf_field()}}
</form>




    </div>  
  </div>
</div>
</div>
</div>
<div class="n-footer">
  <div class="nf-link-area clearfix">
  <ul class="lang-select-list">
    <li><a class="lang-select-li" href="/login/javascript:void(0)" data-lang="zh_CN">简体</a>|</li>
    <li><a class="lang-select-li" href="/login/javascript:void(0)" data-lang="zh_TW">繁体</a>|</li>
    <li><a class="lang-select-li" href="/login/javascript:void(0)" data-lang="en">English</a></li>
    
      |<li><a class="a_critical" href="/login/http://static.account.xiaomi.com/html/faq/faqList.html" target="_blank"><em></em>常见问题</a></li>
    
  </ul>
  </div>
  <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<a class="beianlink beian-record-link" target="_blank"><span></span>京公网安备11010802020134号</a>-京ICP证110507号</span></p>
</div>
<script src="/login/Scripts/jquery-1.8.3.min.js"></script>
<script src="/login/Scripts/placeholder.js"></script>

<script>

  /*备案链接上的图片*/
  var recordLink=$('.beian-record-link');
  var beianRecordLink="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134";
  var beianRecordImg="https://account.xiaomi.com/static/res/9204d06/account-static/respassport/acc-2014/img/ghs.png";
  var default1px_gif="data:image/gif;base64,R0lGODlhAQABAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAABAAEAAAICVAEAOw==";
  if(recordLink.length && beianRecordLink){
    recordLink[0].href=beianRecordLink;
  }
  var _img=new Image();
  var _span=$('.beian-record-link span');
  if(_span){
    _img.onload=_img.oncomplete=function(){
      _img._loaded=true;
      _span.append(_img);
    }
    setTimeout(function(){
      if(!_img._loaded && default1px_gif){
        _img.src=default1px_gif;
      }
    },1000);
    _img.src=beianRecordImg;
  }

</script>

</body>
</html>
<script>
(function(){
/*配置部分*/
 /*EMAIL step配置*/
  var HOLDTIMES=60;
  var SEND_STATUS_TC=null;
  var EMAIL=[{
    key:"email-step1",
    type:"EM"
  },{
    key:"email-step2",
    icode:true,
    action:"/pass/register"
  },{
    key:"email-step3",
    action:"/pass/ajax/sendActivateMessage",
    resendEmail:".resend-email"
  }];
 /*PHONE step配置*/
  var PHONE=[{
    key:"phone-step1",
    selectCty:true,
    icode:true,
    type:"PH",
    checkUser:'/pass/user@externalIdBinded',
    action:'/pass/sendPhoneRegTicket'
  },{
    key:"phone-step2",
    sendStatus:".send-status",
    sendAction:'/pass/sendPhoneRegTicket',
    action:'/pass/verifyRegPhone',
    resend:true
  },{
    key:"phone-step3",
    action:"/pass/tokenRegister",
    tokenAction:"/pass/tokenRegister"
  },{
    key:"phone-step4"
  },{
    key:"phone-resend",
    icode:true
  },{
    key:"phone-confirm"
  }];
  /*是否设置 beforeunload */
  var PAGE_UNLOAD=false;
  var UNLOAD_INIT=false;

  var Default=PHONE[0];
  var CurrentConf=null;
  var specialEmailhost={
    "gmail.com":"gmail.com"
  }
  var prefixUserLogin='/pass/userLogin?';
  

  
/*视图切换*/
  var VIEWS={};
  var $container=$("#main_container");
  function changeStepView(conf){
    var key=conf.key;
    if( key.indexOf("step1") === -1 ){
      PAGE_UNLOAD=true;
    }
    var view=VIEWS[key];
    var init=false;
    if(!view){
      init=true;
      view=VIEWS[key]=initView(conf);
    }
    for(var p in VIEWS){
      VIEWS[p] && (VIEWS[p]!==view) && (VIEWS[p].hide());
    }
    CurrentConf=conf;
    view.show();
    if(!init){
      conf.inputs.filter("[type!=hidden]").val("").blur();
      conf.inputs.each(function(){
        showError($(this));
      });
      conf.icode&&conf.icodeImage.trigger("click");
    }
    /*顯示地址信息*/
    if(conf.addressPlace.length && conf.data){
      var address="  "+conf.data.email;
      if(conf.data.phone){
        if(CurrentCyCode=="+86"){
          address="+86 "+conf.data.phone;
        }else{
          address=conf.data.phone.replace(CurrentCyCode,CurrentCyCode+" ");
        }
      }
      conf.addressPlace.text(address);
    }
    /*重发验证短信的input hidden 更新*/
    if(conf.key==='phone-resend'){
      $(".resend-phone-val",view).val(conf.data.phone||"");
    }
    /*初始化view时添加 sns login链接 或者登陆链接*/
    if(init){
       $(".sns-login-facebook",view).attr("href",getOtherLoginUrl("urlFacebook"));
       $(".login-redirect",view).attr("href","/pass/serviceLogin?"+QS);
    }    
  }
  function initView(conf){
    var key=conf.key;
    var html=$("#"+key).html();
    var view=$("<div>");
    if(conf.key==='phone-step1'){
      /*facabook註冊登錄影響了原有的居中結構寬度*/
      view.append( $("<div>").addClass("regbox").html(html+"") );
      view.append( $( $("#other-register").html() ) );
    }else if(conf.key==='email-step1'){
      view.append(html);
    }else{
      view.addClass("regbox").html(html+"");
    }
    $container.append(view);
    conf.inputs=view.find("input[name]");
    conf.sendStatus=conf.sendStatus && $(conf.sendStatus,view);
    conf.addressPlace=$(".address-place",view);
    conf.changeView=$(".change-view",view);
    conf.leftTimesCon=$(".send-left-times",view);
    conf.mailHost=$(".email-host",view);
    conf.unavailableMsg=$(".verify-unavailable",view);
    if(conf.resendEmail){
      conf.sendStatus=conf.resendEmail=$(conf.resendEmail,view);
    }
    bindEvents(conf,view);
    return view;
  }
 
/*启动*/
  changeStepView(Default);
  LStore.clear();
  var $regionOut = $('#select-cycode');
  var regionBrief = ($regionOut.attr('_region') || '').toUpperCase();
  if(regionBrief){
  var $defaultRegion = $regionOut.find('ul li .record-country[data-brief="'+regionBrief+'"]');
  if($defaultRegion.length){
    $($defaultRegion[0]).closest('li').click();
  }
  }
  if($regionOut.attr('_def_method') === 'EM'){
    $('.change-view').click();
  }
  if(getParam("_register")==='all'){
  $('.change-view').click();
  $(".other_register_area").show();
  }
  function beforeUnloadCheck(){
    //if(miuiClient || authSDK){return }
    if(isWebview()){
      return;
    }
    if(PAGE_UNLOAD){
      if(!UNLOAD_INIT){
        UNLOAD_INIT=true;
        window.onbeforeunload=function(){
          return "";
        }
      }
    }else{
      setTimeout(beforeUnloadCheck,200);
    }
  }
  beforeUnloadCheck();
})();
</script>
