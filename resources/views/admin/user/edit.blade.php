@extends('layout.index')
@section('title', '修改用户')

@section('content')
   

<form method="get" action="{{url('admin/user/update')}}" id="validation-form" class="form-horizontal" novalidate="novalidate">
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

          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">Name:</label>

          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" value="{{$user->username}}" name="username">
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


          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">email:</label>

          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" value="{{$user->email}}" name="email">
            </div>
          </div>
        </div>
        <div class="space-2"></div>

 
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
   
   </form>

@endsection

