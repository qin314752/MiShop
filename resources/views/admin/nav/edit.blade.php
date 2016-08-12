@extends('layout.index')
@section('title','导航列表')
@section('ltitle', '修改导航')
@section('content')
<form method="post" action="{{url('admin/goods_cate/update')}}" id="validation-form" class="form-horizontal" novalidate="novalidate">
        {{csrf_field()}}
        <div class="hr hr-dotted"></div>
        <div class="form-group">
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">导航名	</label>
          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5"  name="name" id="name" value="{{$nav->name}}">
            </div>
          </div>
        </div>
              <input type="hidden" name="sid" value="{{$nav->id}}">
        <div class="space-2"></div>
          <label for="url" class="control-label col-xs-3 no-padding-right"></label>

           <div class="col-xs-2">
              <div class="clearfix">                        
            <button data-loading-text="Loading..." class="btn btn-success" id="loading-btn">提交修改</button>
            </div>
          
        </div>                
   </form>
@endsection

