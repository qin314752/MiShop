@extends('layout.index')
@section('title', '添加用户')

@section('content')
<form method="post" action="{{url('/admin/user/insert')}}" id="validation-form" class="form-horizontal" novalidate="novalidate"
enctype="multipart/form-data"
>

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

          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" name="username" id="username">
            </div>
          </div>
        </div>
        <div class="space-2"></div>

        <div class="form-group">
          <label for="password" class="control-label col-xs-12 col-sm-3 no-padding-right">Password:</label>

          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="password" class="col-xs-12 col-sm-4" id="password" name="password">
            </div>
          </div>
        </div>

        <div class="space-2"></div>


        <div class="space-2"></div>

        <div class="form-group">
          <label for="phone" class="control-label col-xs-12 col-sm-3 no-padding-right">Phone :</label>

          <div class="col-xs-12 col-sm-9">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="ace-icon fa fa-phone"></i>
              </span>

              <input type="tel" name="tel" id="phone">
            </div>
          </div>
        </div>


        <div class="form-group">
          <label for="email" class="control-label col-xs-12 col-sm-3 no-padding-right">Email:</label>

          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="email" class="col-xs-12 col-sm-6" id="email" name="email">
            </div>
          </div>
        </div>
         {{csrf_field()}}
        <div class="form-group">
          <label for="url" class="control-label col-xs-3 no-padding-right"></label>

        <div  class="col-xs-12 col-sm-6">
                上传头像<label class="ace-file-input">
                    <input type="file" name="pic" id="id-input-file-2" class="col-xs-12 col-sm-6">
                    <span data-title="选择文件" class="ace-file-container">
                    <span data-title="" class="ace-file-name">
                    <i class=" ace-icon fa fa-upload"></i>
                    </span></span>
                    <a href="#" class="remove">
                    <i class=" ace-icon fa fa-times"></i>
                    </a>
                    </label>
        </div>
        </div>                
         
         <div class="">
                    <div class="col-md-offset-3 col-md-9">
                      <button  class="btn btn-info">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        提交
                      </button>
   </form>

@endsection

