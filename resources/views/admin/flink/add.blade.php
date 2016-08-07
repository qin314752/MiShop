@extends('layout.index')
@section('ltitle', '添加链接')

@section('content')
<form action="{{url('admin/flink/insert')}}"  method="post" id="validation-form" class="form-horizontal" novalidate="novalidate">



        <div class="space-2"></div>

        <div class="form-group">
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">name:</label>

          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-4"  name="name">
            </div>
          </div>
        </div>

       

        <div class="form-group">
          <label for="url" class="control-label col-xs-12 col-sm-3 no-padding-right">URL:</label>

          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-6" name="url">
            </div>
          </div>
        </div>

        <div class="space-2"></div>

        {{csrf_field()}}
        <div class="form-group">
          <label for="url" class="control-label col-xs-3 no-padding-right"></label>
          
           <div class="col-xs-3">
              <div class="clearfix">                        
            <button data-loading-text="Loading..." class="btn btn-success"  id="loading-btn" > &nbsp;&nbsp;&nbsp;提交&nbsp;&nbsp;&nbsp;   </button>
            </div>
          </div> <div class="col-xs-1">
              <div class="clearfix">                        
           
            </div>
          </div>
        </div>                
   </form>
@endsection

