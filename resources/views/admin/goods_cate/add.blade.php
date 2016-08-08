@extends('layout.index')
@section('title','商品分类')
@section('ltitle','添加分类')
@section('content')
	<form action="{{url('admin/goods_cate/insert')}}" method="post" id="validation-form" class="form-horizontal" novalidate="novalidate">
	    <div class="space-2"></div>
	    <div class="form-group">
	    {{csrf_field()}}
	        <label for="url" class="control-label col-xs-12 col-sm-3 no-padding-right">分类:</label>
	        <div class="col-xs-12 col-sm-3">
	            <div class="clearfix">
	                <select id="form-field-select-1" name="pid" class="form-control">
	                    <option value="0">顶级分类</option>
	                    @foreach($res as $k=> $v)
	                    <option value="{{$v->id}}">{{$v->format_path}}</option>
	                    @endforeach</select></div>
	        </div>
	    </div>
	    <div class="form-group">
	        <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">name:</label>
	        <div class="col-xs-12 col-sm-9">
	            <div class="clearfix">
	                <input type="text" class="col-xs-12 col-sm-4" name="name"></div>
	        </div>
	    </div>
	    
	    <div class="space-2"></div>{{csrf_field()}}
	    <div class="form-group">
	        <label for="url" class="control-label col-xs-3 no-padding-right"></label>
	        <div class="col-xs-3">
	            <div class="clearfix">
	                <button data-loading-text="Loading..." class="btn btn-success" id="loading-btn">&nbsp;&nbsp;&nbsp;提交&nbsp;&nbsp;&nbsp;</button></div>
	        </div>
	        <div class="col-xs-1">
	            <div class="clearfix"></div>
	        </div>
	    </div>
	</form>
@endsection