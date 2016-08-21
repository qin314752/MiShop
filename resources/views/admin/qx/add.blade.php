@extends('layout.index')
@section('title', '权限')
@section('content')
<form method="post" action="{{url('/admin/qx/insert')}}" id="validation-form" 
class="form-horizontal" novalidate="novalidate" enctype="multipart/form-data">
        <!-- 显示闪存中的信息 -->
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
        <div class="form-group">
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">姓名:</label>
          <div class="col-md-7 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" name="username" id="username">
            </div>
          </div>
        </div>
        <div class="space-2"></div>
         <div class="form-group">
           <label for="email" class="control-label col-xs-6 col-sm-3 no-padding-right">增加权限:</label>
          <div class="col-md-3 col-sm-9">
              <div class="clearfix">
                  <select id="form-field-select-1" name="qx" class="form-control">
                      <option value="1">普通用户</option>               
                      <option value="2">管理员</option>               
                      <option value="3">超级管理员</option>               
                  </select>
              </div>
          </div>
      </div>   
      <br><br><br>
      {{csrf_field()}}
         <div class="space-2"></div>                    
         <div class="">
                    <div class="col-md-offset-3 col-md-9">
                      <button  class="btn btn-info">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        提交
                      </button>
                    </div>
   </form>

@endsection

