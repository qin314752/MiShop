{!!\App\Http\Controllers\HomeController::head()!!}
<script type="text/javascript">$('.site-category').hide()</script>
<div class="container">
    <div class="filter-box">
        <div class="filter-list-wrap">
            <dl class="filter-list clearfix filter-list-row-2">
                <dt>分类：</dt>
                <dd>
                    <a class="active" href="{{url('/list?c=0')}}">全部</a></dd>
                @foreach($cates as $k=>$v)    	
                <dd>
                    <a href="{{url('/list',['c'=>$v->id])}}">{{$v->name}}</a></dd>
                @endforeach
            </dl>
            <a class="more J_filterToggle" href="{{url('/list',['c'=>0])}}" >更多
                <i class="iconfont"></i></a>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="order-list-box clearfix">
            <ul class="order-list">
                <li class="active first">
                    <a href="" rel="nofollow" data-stat-id="52f6c659f4f0fe4a" onclick="">推荐</a></li>
                <li>
                    <a href="" rel="nofollow" data-stat-id="bdf3868dc0e67fbc" onclick="">新品</a></li>
                <li class="up">
                    <a href="" rel="nofollow" data-stat-id="be402e41fb6f7e93" onclick="">价格
                        <i class="iconfont"></i></a>
                </li>
                <li>
                    <a href="" rel="nofollow" >评论最多</a></li>
            </ul>
            <ul class="type-list">
                <li>
                    <a href="" >
                        <span class="checkbox">
                            <i class="iconfont">√</i></span>查看评价</a>
                </li>
                <li>
                    <a href="" >
                        <span class="checkbox">
                            <i class="iconfont">√</i></span>仅显示特惠商品</a>
                </li>
                <li>
                    <a href="" >
                        <span class="checkbox">
                            <i class="iconfont">√</i></span>仅显示有货商品</a>
                </li>
            </ul>
        </div>
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
            
        <!--     <script type="text/javascript">
            	// p=1 0,16 p=2 16,6
            	//全局配置
            	var p = 1;//页码
            	var isLoading = false;//用来标识当前是否正在发起ajax

            	requestGoods();
            	//封装函数 进行ajax数据请求
            	function requestGoods(){
            		//临时关闭请求
            		isLoading = true;
            		//发送ajax请求
            		$.get('{{url("/list/goodspubu")}}',{p:p,c:0},function(data){
            			console.log(data);//
            			//遍历数组 创建元素
            			for (var i = 0; i < data.length; i++) {
            				//创建元素
            				var newLi = $('#goods-item').clone();
            				//显示
            				newLi.show();
            				//修改img的src属性
            				newLi.find('img').attr('src',data[i].pic);
            				//修改标题和价格
            				newLi.find('.title').html(data[i]['name']);
            				newLi.find('.price').html(data[i].price);
            				
            				//插入到ul中
            				$('#goods-list').append(newLi);
            			};
            			//让页码自增
            			p++;
            			//开放请求 打开
            			isLoading = false;
            		},'json');
            	}

            	//绑定滚动事件
            	$(window).scroll(function(){
            		//检测当前正在发起请求
            		if(isLoading){return;}
            		//获取整个文档的高度
            		var sH = $(document).height();
            		//获取页面滚动高度
            		var sT = $(window).scrollTop();
            		//获取可视区域的高度
            		var cH = $(window).height();
            		//判断是否需要ajax请求数据
            		if(sH - sT - cH <=100){//提前加载
            		// if(sH == sT + cH){
            			requestGoods();
            		}
            	})

            </script> -->
        </div>
    </div>
   
</div>
{!!\App\Http\Controllers\HomeController::footer()!!}
