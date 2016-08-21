@extends('layout.index')
@section('title', '修改权限')
@section('content')
<form method="post" action="{{url('admin/qx/update')}}" 
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
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">姓名:</label>
          <div class="col-md-7 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" name="username" value="{{$qx->username}}" id="username">
            </div>
          </div>
        </div>
        <div class="space-2"></div> 
        <input type="hidden" name="id" value="{{$qx->id}}">
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

