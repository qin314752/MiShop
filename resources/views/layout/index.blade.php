<!DOCTYPE html>
<html>
 <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>后台--{{$title}}</title>
        
        <!-- jQuery AND jQueryUI -->
        <script type="text/javascript" src="/AD/js/libs/jquery/1.6/jquery.min.js"></script>
        <script type="text/javascript" src="/AD/js/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
        
        <!-- Compressed Version
        <link type="text/css" rel="stylesheet" href="min/b=CoreAdmin&f=css/reset.css,css/style.css,css/jqueryui/jqueryui.css,js/jwysiwyg/jquery.wysiwyg.old-school.css,js/zoombox/zoombox.css" />
        <script type="text/javascript" src="/AD/min/b=CoreAdmin/js&f=cookie/jquery.cookie.js,jwysiwyg/jquery.wysiwyg.js,tooltipsy.min.js,iphone-style-checkboxes.js,excanvas.js,zoombox/zoombox.js,visualize.jQuery.js,jquery.uniform.min.js,main.js"></script>
        -->
        <link rel="stylesheet" href="/AD/css/min.css" />
        <script type="text/javascript" src="/AD/js/min.js"></script>
        
    </head>
    <body>
        
        <script type="text/javascript" src="/AD/content/settings/main.js"></script>
<link rel="stylesheet" href="/AD/content/settings/style.css" />


  <div class="settings" id="settings">
        <div class="wrapper">
            <div class="grid3">
                <div class="titre">Backgrounds</div>
                <a href="./AD/css/img/bg.html" class="backgroundChanger active" title="White"></a>
                <a href="./AD/css/img/dark-bg.html" class="backgroundChanger dark" title="Dark"></a>
                <a href="./AD/css/img/wood.html" class="backgroundChanger dark" title="Wood"></a>
                <a href="./AD/css/img/altbg/smoothwall.html" class="backgroundChanger" title="Smoothwall"></a>
                <a href="./AD/css/img/altbg/black_denim.html" class="backgroundChanger dark" title="black_denim"></a>
                <a href="./AD/css/img/altbg/carbon.html" class="backgroundChanger dark" title="Carbon"></a>
                <a href="./AD/css/img/altbg/double_lined.html" class="backgroundChanger" title="Double lined"></a>
                <div class="clear"></div>
            </div>
            <div class="grid3">
                <div class="titre">Bloc style</div>
                <a href="black.html" class="blocChanger" title="Black" style="background:url(/AD/css/img/bloctitle.png);"></a>
                <a href="white.html" class="blocChanger active" title="White" style="background:url(/AD/css/img/white-title.png);"></a>
                <a href="wood.html" class="blocChanger" title="Wood" style="background:url(/AD/css/img/wood-title.jpg);"></a>
                <div class="clear"></div>
            </div>
            <div class="grid3">
                <div class="titre">Sidebar style</div>
                <a href="grey.html" class="sidebarChanger active" title="Grey" style="background:#494949"></a>
                <a href="black.html" class="sidebarChanger" title="Black" style="background:#262626"></a>
                <a href="white.html" class="sidebarChanger" title="White" style="background:#EEEEEE"></a>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <a class="settingbutton" href="#">

        </a>
    </div>        
        <!--              
                HEAD
                        --> 
        <div id="head">
            <div class="left">
                <a href="#" class="button profile"><img src="/AD/img/icons/top/huser.png" alt="" /></a>
                Hi, 
                <a href="#">John Doe</a>
                |
                <a href="#">Logout</a>
            </div>
            <div class="right">
                <form action="#" id="search" class="search placeholder">
                    <label>Looking for something ?</label>
                    <input type="text" value="" name="q" class="text"/>
                    <input type="submit" value="rechercher" class="submit"/>
                </form>
            </div>
        </div>
                
                
        <!--            
                SIDEBAR
                         --> 
        <div id="sidebar">
            <ul>
                <li class="current"><a href="#"><img src="/AD/img/icons/menu/layout.png" alt="" /> 用户管理</a>
                    <ul>
                        <li class="current"><a href="{{url('/admin/user/add')}}">用户添加</a></li>
                        
                    </ul>
                </li>
            </ul>
            <ul>
                <li class="current"><a href="#"><img src="/AD/img/icons/menu/layout.png" alt="" /> 友情链接</a>
                    <ul>
                        <li class="current"><a href="{{url('/admin/user/edit')}}">添加链接</a></li>
                    </ul>
                </li>
            </ul>
        </div>
                
                
    @section('content')
    @show  
       
        
</div>        

</div>
        
        
    </body>
</html>