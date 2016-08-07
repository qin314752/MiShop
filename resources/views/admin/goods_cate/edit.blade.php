@extends('layout.index')
@section('title', '修改用户')

@section('content')
<form method="post" action="{{url('admin/goods_cate/update')}}" id="validation-form" class="form-horizontal" novalidate="novalidate">
        {{csrf_field()}}
        <div class="hr hr-dotted"></div>
        <div class="form-group">
          <label for="id" class="control-label col-xs-12 col-sm-3 no-padding-right">分类ID</label>
          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" disabled name="id" id="id" value="{{$res->id}}">
            </div>
          </div>
        </div>
              <input type="hidden" name="sid" value="{{$res->id}}">
        <div class="space-2"></div>
        <div class="form-group">
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">分类名字</label>
          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5 "name="name" id="name" value="{{$res->name}}">
            </div>
          </div>
        </div>
        <div class="space-2"></div>
        <div class="form-group">
          <label for="istop" class="control-label col-xs-12 col-sm-3 no-padding-right">是否顶端分类</label>
          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" name="istop" value="{{$res->istop}}">
            </div>
          </div>
        </div>
        <div class="space-2"></div>
        <div class="form-group">
          <label for="pid" class="control-label col-xs-12 col-sm-3 no-padding-right">父分类ID</label>
          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" disabled name="pid" value="{{$res->pid}}">
            </div>
          </div>
        </div>
        <div class="space-2"></div>
        <div class="form-group">
          <label for="path" class="control-label col-xs-12 col-sm-3 no-padding-right">分类路径</label>
          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" disabled name="path" value="{{$res->path}}">
            </div>
          </div>
        </div>

        <div class="space-2"></div>

       
        <div class="form-group">
          <label for="url" class="control-label col-xs-3 no-padding-right"></label>

           <div class="col-xs-2">
              <div class="clearfix">                        
            <button data-loading-text="Loading..." class="btn btn-success" id="loading-btn">提交修改</button>
            </div>
          
        </div>                
   </form>
@endsection

