{!!\App\Http\Controllers\HomeController::head()!!}
<script type="text/javascript">$('.site-category').hide()</script>
<div class="breadcrumbs">
    <div class="container">
        <a href="{{url('/')}}">首页</a>
        <span class="sep">&gt;</span>
        <a href="{{url('/list/index/0')}}">所有商品</a>
        @if($catename)
        <span class="sep">&gt;</span>
        <span>{{$catename}}</span></div>
        @endif
</div>

<div class="content">
    <div class="container">
        <div class="goods-list-box">
            <div class="goods-list clearfix">
            	
            	@foreach($goods as $k=>$v)
                <div class="goods-item">
                    <div class="figure figure-img">
                        <a href="{{url('/detail/index',['id'=>$v->id])}}">
                            <img src="{{$v->pic}}" width="200" height="200" alt=""></a>
                    </div>
                    <p class="desc"></p>
                    <h2 class="title">
                        <a href="{{url('/detail/index/',['id'=>$v->id])}}" >{{$v->name}}</a></h2>
                    <p class="price">{{$v->price}}</p>
                    <div class="thumbs">
                        <ul class="thumb-list clearfix">
                            <li >
                                <img src="{{$v->pic}}" width="34" height="34" ></li>
                        </ul>
                    </div>
                    <div class="actions clearfix">
                        <a class="btn-like J_likeGoods" >
                            <i class="iconfont"></i>
                            <span>喜欢</span></a>
                        <a class="btn-buy J_buyGoods" >
                            <span>加入购物车</span>
                            <i class="iconfont"></i></a>
                    </div>
                    <div class="flags"></div>
                    <div class="notice"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="xm-pagenavi">
        {!! $goods->render() !!}
        <script type="text/javascript">
            $('.pagination li').css({'width':'20px'}).addClass('numbers');
        </script>
    </div>
</div>
{!!\App\Http\Controllers\HomeController::footer()!!}
