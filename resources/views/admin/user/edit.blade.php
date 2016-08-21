@extends('layout.index')
@section('title', '修改用户')
@section('content')
<form method="post" action="{{url('admin/user/update')}}" 
id="validation-form" class="form-horizontal" 
novalidate="novalidate" enctype="multipart/form-data">
        <div class="form-group">
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
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">Name:</label>
          <div class="col-md-7 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" name="username" value="{{$user->username}}" id="username">
            </div>
          </div>
        </div>
        <div class="space-2"></div>
        <div class="form-group">
          <label for="password" class="control-label col-xs-12 col-sm-3 no-padding-right">tel:</label>
          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input  class="col-xs-12 col-sm-4" type="text"  value="{{$user->tel}}" id="input3" name="tel">
            </div>
          </div>
        </div>
        <div class="space-2"></div>
        <div class="form-group">
          <label for="email" class="control-label col-xs-12 col-sm-3 no-padding-right">Email:</label>
          <div class="col-md-6 col-sm-9">
            <div class="clearfix">
              <input type="email" class="col-xs-12 col-sm-6" id="email" value="{{$user->email}}" name="email">
            </div>
          </div>
        </div>
        <div class="space-2"></div>
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
        <input type="hidden" name="id" value="{{$user->id}}">
         {{csrf_field()}}
        <div class="form-group">
          <label for="url" class="control-label col-xs-3 no-padding-right"></label>
        </div>                
         <div class="">
                    <div class="col-md-offset-3 col-md-9">
                      <button  class="btn btn-info">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        提交
                      </button>
                    </div>
</form>
@endsection

