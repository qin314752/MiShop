{!!\App\Http\Controllers\HomeController::head()!!}
<script type="text/javascript">$('.site-category').hide()</script>
<!-- S 面包屑 -->
<div class="breadcrumbs">
    <div class="container ">
        <a href=''>首页</a><span class="sep">&gt;</span><a href="">配件</a><span class="sep">&gt;</span><a href="">电饭煲</a><span class="sep">&gt;</span><a href="">米家压力IH电饭煲</a>    </div>
</div>

<!-- <!-- E 面包屑 -->
<div class="goods-comment-detail">
    <div class="container">
        <div class="row">
            <div class="span14 goods-comment-detail-info-block">
            @if($data)
            @foreach($data as $k=>$v)  
                <div data-id="133378800" id="J_commentDetailBlock" class="goods-comment-detail-info">
                    <div class="user-image"> 
                        <img alt="" src="{{$v->pic}}" width="200px"> 
                    </div>
                    <div class="user-emoj"> 
                        超爱<i class="iconfont"></i> 
                    </div>
                    <div class="user-name-info">                       
                        <span class="user-name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                        <span class="user-name">{{$v->username}}</span> 
                        <span class="user-name">{{$v->name}}</span> 
                        <span class="user-time">{{$v->time}}</span> 
                    </div>
                    <dl class="user-comment"> 
                        <dt class=""> 
                            <p class="content-detail">
                                   {{$v->content}}  
                            </p>                              
                         </dt>
                    </dl>
                </div>
                  @endforeach
            @else
            <div style="text-align:center">
            <h1>该商品暂时没有评论!</h1> 
            </div>        
            @endif
                 <div class="xm-pagenavi">
                    <span> </span>
                </div>                              
                <script type="text/javascript">
                    $('.pagination li').css({'width':'20px'}).addClass('numbers');
                </script> 
        </div>
    </div>
</div> 
{!!\App\Http\Controllers\HomeController::footer()!!}