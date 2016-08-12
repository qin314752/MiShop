@extends('layout.index')
@section('title', '添加商品')
@section('content')
<script type="text/javascript" charset="utf-8" src="/baidu/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/baidu/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/baidu/lang/zh-cn/zh-cn.js"></script>
<form method="post" action="{{url('/admin/goods/insert')}}" id="validation-form" class="form-horizontal" novalidate="novalidate"
enctype="multipart/form-data"
>
      <!-- 闪存错误信息 -->
        <div class="hr hr-dotted"></div>
             @if (count($errors) > 0)
        <div class="alert alert-danger">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
         </div>
            @endif                  
         {{csrf_field()}}
        <div class="form-group">
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">商品名</label>

          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" name="name">
            </div>
          </div>
        </div>
        <div class="space-2"></div>
          <div class="form-group">
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">商品单价</label>

          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" name="price">
            </div>
          </div>
        </div>
        <div class="space-2"></div>
          <div class="form-group">
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">商品描述</label>

          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" name="descri">
            </div>
          </div>
        </div>
          <div class="space-2"></div>
          <div class="form-group">
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">商品库存</label>

          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" name="strorage_num">
            </div>
          </div>
        </div>
     <div class="form-group">
          <label for="url" class="control-label col-xs-12 col-sm-3 no-padding-right">商品分类:</label>
          <div class="col-xs-12 col-sm-3">
              <div class="clearfix">
                  <select id="form-field-select-1" name="cid" class="form-control">
                       @foreach($goods as $k=> $v)
                      <option value="{{$v->id}}">{{$v->format_path}}</option>
                      @endforeach
                     
                  </select></div>
          </div>
      </div>
	    <div class="form-group">
	    <label for="url" class="control-label col-xs-3 no-padding-right"></label>
	      <div  class="col-md-3 col-sm-6">
	              <label class="ace-file-input">  
	                <input type="file" name="pic" id="id-input-file-2" class="col-xs-12 col-sm-6">
	                <span data-title="选择文件" class="ace-file-container">
	                  <span data-title="上传头像" class="ace-file-name">
	                  <i class=" ace-icon fa fa-upload"></i>
	                  <img src="" alt="" name="pic">
	                  </span></span>
	                  <a href="#" class="remove">
	                  <i class=" ace-icon fa fa-times"></i>
	                  </a>
	      </label>
	</div>
	</div>  
         <div class="form-group">
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">商品详情</label>

          <div class="col-xs-12 col-sm-9">
          <script id="editor" name="descri" type="text/plain" style="width:500px;height:300px;"></script>
          </div>
        </div> 
         <div class="">
                    <div class="col-md-offset-3 col-md-9">
                      <button  class="btn btn-info">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        提交
                      </button>
   </form>
<script type="text/javascript">
   //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor',{
      toolbars: [
    ['fullscreen', 'snapscreen', 'time', 'bold','redo', 'fontsize','forecolor','scrawl','music']
]});
</script>
@endsection

