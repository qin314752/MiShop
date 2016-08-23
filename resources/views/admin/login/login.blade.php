<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page - Ace Admin</title>
    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/font-awesome/4.2.0/css/font-awesome.min.css" />
    <script src="/assets/js/jquery.2.1.1.min.js"></script>
    <link rel="stylesheet" href="/assets/fonts/fonts.googleapis.com.css" />
    <link rel="stylesheet" href="/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/assets/css/ace-rtl.min.css" /></head>
  
  <body>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="login-container">
          <div class="center">
            <h1>
              <i class="ace-icon fa fa-leaf green"></i>
              <span class="red">Ace</span>
              <span class="white" id="id-text2">Application</span></h1>
            <h4 class="blue" id="id-company-text">&copy; Company Name</h4></div>
          <div class="space-6"></div>
          <div class="position-relative">
            <div id="login-box" class="login-box visible widget-box no-border">
              <div class="widget-body">
                <div class="widget-main">
                  <h4 class="header blue lighter bigger">
                    <i class="ace-icon fa fa-coffee green"></i>Please Enter Your Information</h4>
                  <div class="space-6"></div>
                  @if(session('error'))
                  <div class="alert alert-info">
                              {{session('error')}}                      
                  </div>
                @endif
                    <form action="{{url('admin/login/add')}}" method="post">
                      <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                          <input type="text" class="form-control" name="username" placeholder="Username">
                          <i class="ace-icon fa fa-user"></i>
                        </span>
                      </label>
                      {{csrf_field()}}
                      <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                          <input type="password" class="form-control" name="password" placeholder="Password">
                          <i class="ace-icon fa fa-lock"></i>
                        </span>
                      </label>
                      <div class="space"></div>
                      <div class="clearfix">
                       <!--  <label class="inline">
                          <input type="checkbox" class="ace">
                          <span class="lbl">Remember Me</span>
                        </label> -->
                        <button  class="width-35 pull-right btn btn-sm btn-primary">
                          <i class="ace-icon fa fa-key"></i>
                          <span class="bigger-110">Login</span></button>
                      </div>
                      <div class="space-4"></div>
                    </form>
                 
                  <div class="social-or-login center">
                    <span class="bigger-110">Or Login Using</span></div>
                  <div class="space-6"></div>
                </div>
                <div class="toolbar clearfix">
                  <div>
                    <a href="#" data-target="#forgot-box" class="forgot-password-link">
                      <i class="ace-icon fa fa-arrow-left"></i>I forgot my password</a>
                  </div>
                  <div>
                    <a href="#" data-target="#signup-box" class="user-signup-link">I want to register
                      <i class="ace-icon fa fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>