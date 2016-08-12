{!!\App\Http\Controllers\HomeController::head()!!}
<div class="home-hero-container container">
    <div class="home-hero">
        <div class="home-hero-slider">
    <div class="ui-wrapper" style="max-width: 100%;">
        <div class="ui-viewport" style="width: 100%; overflow: hidden; position: relative; height: 460px;">
            <div id="J_homeSlider" class="xm-slider" data-stat-title="焦点图轮播" style="width: auto; position: relative;">
            @foreach($slides as $k=>$v)
                <div class="slide loaded" scount="{{count($slides)}}" id="{{$k}}" style="float: none; list-style: none; position: absolute; width: 1226px; display: none;">
                    <a href="#"  target="_blank"  onclick="">
                        <img src="{{$v->pic}}"></a>
                </div>
            @endforeach  
            </div>
        </div>
        <div class="ui-controls ui-has-pager ui-has-controls-direction">
            <div class="ui-pager ui-default-pager">
            @foreach($slides as $k=>$v)
                <div class="ui-pager-item">
                    <a href="" pic-id={{$k}} class="ui-pager-link "  onclick="javascript:void(0)">1</a>
                </div>
            @endforeach 
            </div>
            <div class="ui-controls-direction">
                <a class="ui-prev" >上一张</a>
                <a class="ui-next" >下一张</a>
            </div>
        </div>
        <script type="text/javascript">
                var i = 0;
                var slen = $('.loaded').attr('scount');
                // $('.ui-prev').click(function()
                // {
                //     if (i==0) 
                //         i =slen
                //         else --i;
                //         act();
                // }) 
                // $('ui-next').click(function()
                // {
                //     if(i==slen)
                //         i = 0
                //     else
                //         ++i;
                //     act();
                // })
                var inte = setInterval(function()
                {
                    $('.slide').eq(i).fadeIn(1000).siblings().fadeOut(1000);
                    $('.ui-pager-link').each(function()
                    {
                        if (parseInt($(this).attr('pic-id')) == i)
                        {
                            $(this).addClass('active');
                        }else
                        {
                            $(this).removeClass('active');
                        }
                    })
                    i++;
                    if (i == slen) {i = 0}
                },3000)
                

            </script>  
    </div>
</div>

        <div class="home-hero-sub row">
            <div class="span4">
                <ul class="home-channel-list clearfix">
                                        <li class="top left"><a href="//www.lampmaster.com/buyphone/telcom/" data-stat-aid="AA11221" data-stat-pid="2_44_1_250" target="_blank"><i class="iconfont">&#xe640;</i>电信专场</a></li>
                                        <li class="top"><a href="http://www.lampmaster.com/" data-stat-aid="AA10868" data-stat-pid="2_44_2_251" target="_blank"><i class="iconfont">&#xe63e;</i>企业团购</a></li>
                                        <li class="top"><a href="//www.lampmaster.com/re" data-stat-aid="AA10869" data-stat-pid="2_44_3_252" target="_blank"><i class="iconfont">&#xe63b;</i>官翻产品</a></li>
                                        <li class="left"><a href="//www.lampmaster.com/mimobile/" data-stat-aid="AA11244" data-stat-pid="2_44_4_253" target="_blank"><i class="iconfont"></i>小米移动</a></li>
                                        <li class=""><a href="http://www.lampmaster.com/product/list" data-stat-aid="AA12084" data-stat-pid="2_44_5_254" target="_blank"><i class="iconfont"></i>以旧换新</a></li>
                                        <li class=""><a href="http://recharge.10046.mi.com/" data-stat-aid="AA10871" data-stat-pid="2_44_6_255" target="_blank"><i class="iconfont"></i>话费充值</a></li>
                                        
                </ul>
            </div>
            <div class="span16" id="J_homePromo" data-stat-title="焦点图下方小图">
                <ul class="home-promo-list clearfix">
                                        <li class="first">
                        <a class="item" href="//www.lampmaster.com/video/" data-stat-aid="AA13356" data-stat-pid="2_16_1_77" target="_blank"><img alt="视频集合" src="Picture/911cfee15f7048d89f782c7478c1c0bf.gif" srcset="http://www.lampmaster.com/a4/a8778e1e-b411-4b45-b3bd-005d346a9757 2x" /></a>
                    </li>
                                        <li>
                        <a class="item" href="//www.lampmaster.com/buyphone/mi5" data-stat-aid="AA13362" data-stat-pid="2_16_2_78" target="_blank"><img alt="小米手机5-0729" src="Picture/4cee4f5a2332494087c7f5bc4bd0f5fd.gif" srcset="http://www.lampmaster.com/a4/cfd68741-d5d4-43aa-9ca9-f71b85483976 2x" /></a>
                    </li>
                                        <li>
                        <a class="item" href="//www.lampmaster.com/buyphone/note3" data-stat-aid="AA13314" data-stat-pid="2_16_3_79" target="_blank"><img alt="红米Note3-0720" src="Picture/5f1d6ea4c25d4c8b9c809e09815b83fb.gif" srcset="http://www.lampmaster.com/a4/11f55f19-4011-4e67-be32-d245745c57ea 2x" /></a>
                    </li>
                                    </ul>
            </div>
        </div>
    </div>

    <div class="home-star-goods" id="J_homeStar">
        <div class="xm-plain-box">
            <div class="box-hd">
                <h2 class="title">小米明星单品</h2>
                <div class="more">
                    <div class="xm-controls xm-controls-line-small xm-carousel-controls">
                        <a class="control control-prev iconfont control-disabled" href="javascript: void(0);" data-stat-id="77dcd5eb6941bd04" onclick="">  </a>
                        <a class="control control-next iconfont " href="javascript: void(0);" data-stat-id="ba0da9b90ad3370d" onclick=""></a>
                    </div>
                </div>
            </div>
            <div class="box-bd">
                <ul class="xm-carousel-list xm-carousel-col-5-list goods-list rainbow-list clearfix J_carouselList">
                                        <li class="rainbow-item-1">
                        <a class="thumb" href="//www.lampmaster.com/buyphone/mi5" data-stat-aid="AA13151" data-stat-pid="2_17_1_80" target="_blank"><img src="Picture/33e92801016449289acf1ea5517b63d7.gif" srcset="http://www.lampmaster.com/a4/13baa465-0b81-4f11-91fd-d8a164962f41 2x" alt="小米手机5 尊享版" /></a>
                            <h3 class="title"><a href="//www.lampmaster.com/buyphone/mi5" data-stat-aid="AA13151" data-stat-pid="2_17_1_80" target="_blank">小米手机5 尊享版</a></h3>
                            <p class="desc">4GB内存+128GB闪存，陶瓷版</p>
                            <p class="price">2699元</p>
                    </li>
                                        <li class="rainbow-item-2">
                        <a class="thumb" href="//www.lampmaster.com/buyphone/mimax" data-stat-aid="AA13256" data-stat-pid="2_17_2_81" target="_blank"><img src="Picture/8caa7ace487f4b61b7d9b4eaf896e9ee.gif" srcset="http://www.lampmaster.com/a4/00591dc9-2a35-4015-ac14-77bf91485f56 2x" alt="小米Max 高配版" /></a>
                            <h3 class="title"><a href="//www.lampmaster.com/buyphone/mimax" data-stat-aid="AA13256" data-stat-pid="2_17_2_81" target="_blank">小米Max 高配版</a></h3>
                            <p class="desc">6.44英寸大屏，3GB内存+64GB容量</p>
                            <p class="price">1699元</p>
                    </li>
                                        <li class="rainbow-item-3">
                        <a class="thumb" href="//www.lampmaster.com/buyphone/hongmi3s" data-stat-aid="AA13154" data-stat-pid="2_17_3_82" target="_blank"><img src="Picture/30c0eb5285ec4c1eb7fddfb969917569.gif" srcset="http://www.lampmaster.com/a4/42dd7ecc-a689-454b-8a7e-92c089b61a6d 2x" alt="红米手机3S" /></a>
                            <h3 class="title"><a href="//www.lampmaster.com/buyphone/hongmi3s" data-stat-aid="AA13154" data-stat-pid="2_17_3_82" target="_blank">红米手机3S</a></h3>
                            <p class="desc">金属机身，指纹识别，超长待机</p>
                            <p class="price">699元起</p>
                    </li>
                                        <li class="rainbow-item-4">
                        <a class="thumb" href="//www.lampmaster.com/static/buymipad" data-stat-aid="AA13145" data-stat-pid="2_17_4_83" target="_blank"><img src="Picture/3a47f2047ed9437498b28196d3fbd7e9.gif" srcset="http://www.lampmaster.com/a4/dc4888a7-8713-4716-9998-18d02b00bba4 2x" alt="小米平板2 16GB现货" /></a>
                            <h3 class="title"><a href="//www.lampmaster.com/static/buymipad" data-stat-aid="AA13145" data-stat-pid="2_17_4_83" target="_blank">小米平板2 16GB现货</a></h3>
                            <p class="desc">轻薄全金属，海量内容</p>
                            <p class="price">999元</p>
                    </li>
                                        <li class="rainbow-item-5">
                        <a class="thumb" href="//www.lampmaster.com/buymitv/48" data-stat-aid="AA13144" data-stat-pid="2_17_5_84" target="_blank"><img src="Picture/ac8889f3a8e1465c9422aa545d9f017b.gif" srcset="http://www.lampmaster.com/a4/28244221-cd12-413e-8a80-4401491e810e 2x" alt="小米电视3S 48英寸" /></a>
                            <h3 class="title"><a href="//www.lampmaster.com/buymitv/48" data-stat-aid="AA13144" data-stat-pid="2_17_5_84" target="_blank">小米电视3S 48英寸</a></h3>
                            <p class="desc">原装液晶屏，金属机身，足量现货</p>
                            <p class="price">1999元</p>
                    </li>
                                        <li class="rainbow-item-6">
                        <a class="thumb" href="//www.lampmaster.com/buyphone/mi4c" data-stat-aid="AA13147" data-stat-pid="2_17_6_85" target="_blank"><img src="Picture/555382e34fc84de8ba7753113f146bc1.gif" srcset="http://www.lampmaster.com/a4/d0904f8c-c000-4e6d-9435-7fd864ff531e 2x" alt="小米手机4c" /></a>
                            <h3 class="title"><a href="//www.lampmaster.com/buyphone/mi4c" data-stat-aid="AA13147" data-stat-pid="2_17_6_85" target="_blank">小米手机4c</a></h3>
                            <p class="desc">快、轻薄、美，青春五色可选</p>
                            <p class="price">1099元</p>
                    </li>
                                        <li class="rainbow-item-7">
                        <a class="thumb" href="//www.lampmaster.com/hezi3s/" data-stat-aid="AA13146" data-stat-pid="2_17_7_86" target="_blank"><img src="Picture/t146ygbkhv1rxrhcrk.jpg" srcset="//www.lampmaster.com/a4/T1FfA_BCJv1RXrhCrK.jpg 2x" alt="小米盒子3 增强版" /></a>
                            <h3 class="title"><a href="//www.lampmaster.com/hezi3s/" data-stat-aid="AA13146" data-stat-pid="2_17_7_86" target="_blank">小米盒子3 增强版</a></h3>
                            <p class="desc">高端 4K 网络机顶盒</p>
                            <p class="price">399元</p>
                    </li>
                                        <li class="rainbow-item-8">
                        <a class="thumb" href="//www.lampmaster.com/shouhuan2/" data-stat-aid="AA13174" data-stat-pid="2_17_8_87" target="_blank"><img src="Picture/ca1737fdcaa1497a9f12908470ea9691.gif" srcset="http://www.lampmaster.com/a4/858c77b0-4a70-411f-bb1e-9b600c5897a6 2x" alt="小米手环 2" /></a>
                            <h3 class="title"><a href="//www.lampmaster.com/shouhuan2/" data-stat-aid="AA13174" data-stat-pid="2_17_8_87" target="_blank">小米手环 2</a></h3>
                            <p class="desc">每天早10点开售</p>
                            <p class="price">149元</p>
                    </li>
                                        <li class="rainbow-item-9">
                        <a class="thumb" href="//www.lampmaster.com/xiaoyi/" data-stat-aid="AA13363" data-stat-pid="2_17_9_88" target="_blank"><img src="Picture/d24fb741d7c249d08bdbf94a41e84969.gif" srcset="http://www.lampmaster.com/a4/f9c1da5f-47af-4ce0-b8cf-14ac628cc5ef 2x" alt="小蚁智能摄像机 夜视版" /></a>
                            <h3 class="title"><a href="//www.lampmaster.com/xiaoyi/" data-stat-aid="AA13363" data-stat-pid="2_17_9_88" target="_blank">小蚁智能摄像机 夜视版</a></h3>
                            <p class="desc">能看能听能说，手机远程控制</p>
                            <p class="price">149元</p>
                    </li>
                                        <li class="rainbow-item-10">
                        <a class="thumb" href="//www.lampmaster.com/dianfanbao/" data-stat-aid="AA13149" data-stat-pid="2_17_10_89" target="_blank"><img src="Picture/t1zyc_bjwv1rxrhcrk.jpg" srcset="//www.lampmaster.com/a4/T1I1AgBmCv1RXrhCrK.jpg 2x" alt="米家压力IH电饭煲" /></a>
                            <h3 class="title"><a href="//www.lampmaster.com/dianfanbao/" data-stat-aid="AA13149" data-stat-pid="2_17_10_89" target="_blank">米家压力IH电饭煲</a></h3>
                            <p class="desc">用聪明的锅，做幸福的饭</p>
                            <p class="price">999元</p>
                    </li>
                                    </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    
    <div id="recommend" class="home-recm-box home-brick-box home-brick-row-1-box xm-plain-box J_itemBox J_recommendBox is-visible" data-region-stat="1">
        <div class="box-hd">
            <h2 class="title">为你推荐</h2>
            <div class="more J_brickNav">
                <div class="xm-controls xm-controls-line-small xm-carousel-controls">
                    <a class="control control-prev iconfont control-disabled" href="javascript: void(0);" data-stat-pid="stat_首页.猜你喜欢_undefined_undefined" data-stat-id="undefined+stat_首页.猜你喜欢_undefined_undefined" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-undefined+stat_首页.猜你喜欢_undefined_undefined', 'javascript:void(0);', 'pcpid']);"></a>
                    <a class="control control-next iconfont" href="javascript: void(0);" data-stat-pid="stat_首页.猜你喜欢_undefined_undefined" data-stat-id="undefined+stat_首页.猜你喜欢_undefined_undefined" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-undefined+stat_首页.猜你喜欢_undefined_undefined', 'javascript:void(0);', 'pcpid']);"></a></div>
            </div>
        </div>
        <div id="recommend-bd" class="box-bd J_brickBd J_recommend-like container xm-carousel-container">
            <div class="xm-recommend">
                <div class="xm-carousel-wrapper" style="height: 320px; overflow: hidden;">
                    <ul class="row" data-carousel-list="true" style="width: 4960px; margin-left: 0px; transition: margin-left 0.5s ease;">
                        @foreach($recs as $k=>$v)
                        <li class="J_xm-recommend-list span4">
                            <dl>
                                <dt>
                                    <a href="" target="_blank" onclick=""><img src="{{$v->pic}}" width="140" height="140"></a>
                                </dt>
                                <dd class="xm-recommend-name">
                                    <a href="" data-stat-method="1_13" onclick="">{{$v->name}}</a></dd>
                                <dd class="xm-recommend-price">{{$v->price}}元</dd>
                                <dd class="xm-recommend-tips">57人好评</dd>
                                <dd class="xm-recommend-notice"></dd>
                            </dl>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="comment" class="home-review-box xm-plain-box J_itemBox J_reviewBox is-visible">
        <div class="box-hd">
            <h2 class="title">热评产品</h2></div>
        <div class="box-bd J_brickBd">
            <ul class="review-list clearfix">
                @foreach($recs as $k=>$v)
                <li class="review-item" data-gid="2135200033">
                    <div class="figure figure-img">
                        <a href="" target="_blank" data-stat-id="AA10855+2_38_2_227" onclick="">
                        <img src="{{$v->pic}}" width="296" height="220" ></a>
                    </div>
                    <p class="review">
                        <a href=""  onclick="">{{$v->descri}}</a></p>
                    <p class="author">来自于 蔡剑文 的评价
                        <span class="date" data-date="1435129140"></span></p>
                    <div class="info">
                        <h3 class="title">
                            <a href="" onclick="">{{$v->name}}</a></h3>
                        <span class="sep">|</span>
                        <p class="price">
                            <span class="num">{{$v->price}}</span>元</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    
</div>

{!!\App\Http\Controllers\HomeController::footer()!!}
