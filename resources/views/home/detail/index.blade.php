{!!\App\Http\Controllers\HomeController::head()!!}
<script type="text/javascript">$('.site-category').hide()</script>
<div class="goods-detail">
    <div class="goods-detail-info  clearfix J_goodsDetail">
        <div class="container">
            <div class="row">
                <div class="span13  J_mi_goodsPic_block goods-detail-left-info">
                    <div class="goods-pic-box  " id="J_mi_goodsPicBox">
                        <div class="goods-big-pic J_bigPicBlock">
                            <img src="{{$good->pic}}" class="J_goodsBigPic" id="J_BigPic"></div>
                        <div class="goods-pic-loading">
                            <div class="loader loader-gray"></div>
                        </div>
                        <div class="goods-small-pic clearfix">
                            <ul id="goodsPicList">
                                <li class="current">
                                    <img src="{{$good->pic}}"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="span11 goods-batch-img-list-block J_goodsBatchImg"></div>
                </div>
                <div class="span7 goods-info-rightbox">
                    <div class="goods-info-leftborder"></div>
                    <dl class="goods-info-box ">
                        <dt class="goods-info-head">
                            <dl id="J_goodsInfoBlock">
                                <dt id="goodsName" class="goods-name">{{$good->name}}</dt>
                                <dd class="goods-subtitle">
                                    <p>{{$good->descri}}</p>
                                </dd>
                                <dd class="goods-info-head-price clearfix">
                                    <b class="J_mi_goodsPrice">{{$good->price}}</b>
                                    <i>&nbsp;元</i>
                                    <del>
                                        <span class="J_mi_marketPrice"></span>
                                    </del>
                                </dd>
                                <dd class="goods-info-head-colors clearfix">
                                    <span class="style-name">颜色：黑红</span>
                                    <div class="clearfix">
                                        <div class="colorli">
                                            <a href="#" class="current" title="黑红"  onclick="">
                                                <img class="square" src="{{$good->pic}}" width="38" height="38"></a>
                                        </div>
                                        
                                    </div>
                                </dd>
                                <dd class="goods-info-head-cart" id="goodsDetailBtnBox">
                                    <a href="{{url('/cart',['id'=>$good->id])}}" id="goodsDetailAddCartBtn" class="btn  btn-primary goods-add-cart-btn" >
                                        <i class="iconfont"></i>加入购物车</a>
                                    <a id="goodsDetailCollectBtn" data-isfavorite="false" class=" btn btn-gray  goods-collect-btn ">
                                        <i class="iconfont default"></i>
                                        <i class="iconfont red"></i>
                                        <i class="iconfont red J_redCopy"></i>喜欢</a></dd>
                                <dd class="goods-info-head-userfaq">
                                    <ul>
                                        <li class="J_scrollHref" data-href="#goodsComment" data-index="2">
                                            <i class="iconfont"></i>评价
                                            <b>1800</b>
                                        </li>
                                        <li class="J_scrollHref mid" data-href="#goodsFaq" data-index="3">
                                            <i class="iconfont"></i>提问
                                            <b>11</b>
                                        </li>
                                        <li class="J_scrollHref " data-href="#goodsComment" data-index="2">
                                            <i class="iconfont"></i>满意度
                                            <b>96.1%</b>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                        </dt>
                        <dd class="goods-info-foot">
                            <a href="#" >
                                <span class="iconfont"></span>查看更多品牌耳机</a></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="full-screen-border"></div>
    <div class="goods-detail-nav" id="goodsDetail">
        <div class="container">
            <ul class="detail-list J_detailNav J_originNav">
                <li class="current detail-nav">
                    <a data-href="#goodsDesc" data-index="0" class="J_scrollHref"  onclick="">详情描述</a></li>
                <li class="detail-nav">
                    <a data-href="#goodsParam" data-index="1" class="J_scrollHref"  onclick="">规格参数</a></li>
                <li class="detail-nav">
                    <a data-href="#goodsComment" data-index="2" class="J_scrollHref"  onclick="">评价晒单
                        <i>(1800)</i>
                    </a>
                </li>
                <li class="last detail-nav">
                    <a data-href="#goodsFaq" data-index="3" class="J_scrollHref"  onclick="">商品提问
                        <i>(11)</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="goods-detail-desc J_itemBox" id="goodsDesc">
        <div class="container">
            <div class="shape-container">
                <p class="detailBlock">
                    <p>
                        <img alt="" data-src="{{$good->pic}}" >
                    </p>
                </p>
            </div>
        </div>
    </div>
    <div class="goods-detail-nav-name-block J_itemBox" id="goodsParam">
        <div class="container main-block">
            <div class="border-line"></div>
            <h2 class="nav-name">规格参数</h2></div>
    </div>
    
    <!--评价-->
    <div class="goods-detail-comment J_itemBox" id="goodsCommentContent">
        <div class="goods-detail-comment-groom" id="J_recommendComment"></div>
        <div class="goods-detail-comment-content" id="J_commentDetailBlock">
            <div class="container">
                <div class="row">
                    <div class="span14 goods-detail-comment-list">
                        <div class="comment-order-title">
                            <div class="left-title">
                                <h3 class="comment-name">最有帮助的评价</h3></div>
                            <div class="right-title J_showImg">
                                <i class="iconfont">√</i>只显示带图评价</div></div>
                        <ul class="comment-box-list" id="J_supComment"></ul>
                    </div>
                    <div class="span6 goods-detail-comment-timeline">
                        <h3 class="comment-name">最新评价</h3>
                        <ul class="comment-timeline-list" id="J_timelineComment"></ul>
                    </div>
                    <div class="span20 goods-detail-comment-more hide" id="J_loadCommentMore">加载更多
                        <i class="iconfont"></i></div>
                    <div class="span20 goods-detail-comment-more hide" id="J_loadMoreHref">
                        <a target="_blank" href="#"  onclick="">查看更多评价</a></div>
                </div>
            </div>
        </div>
        <div class="loader-block">
            <div class="loader"></div>
        </div>
        <div class="goods-detail-null-content" id="J_commentTipInfo">
            <div class="container">
                <h3>暂时还没有评价</h3>
                <p>期待你分享科技带来的乐趣</p>
            </div>
        </div>
    </div>
    <!--评价-->
    <div class="goods-detail-nav-name-block J_itemBox" id="goodsFaq">
        <div class="container main-block">
            <div class="border-line"></div>
            <h2 class="nav-name">商品提问</h2></div>
    </div>
    
</div>

{!!\App\Http\Controllers\HomeController::footer()!!}
