@extends('layout.index')
@section('ltitle', '网站配置')

@section('content')
<form action="{{url('admin/config/update')}}"  method="post" id="validation-form"  enctype="multipart/form-data" class="form-horizontal" novalidate="novalidate">





         <div class="form-group">
            <label for="form-input-readonly" class="col-sm-3 control-label no-padding-right"> 网站名称: </label>

            <div class="col-sm-9">
              <input type="text" value="{{$webtitle}}" name="webtitle" id="form-input-readonly" class="col-xs-10 col-sm-6" >
            </div>
          </div>
          <br>

           <div class="form-group">
            <label for="form-input-readonly" class="col-sm-3 control-label no-padding-right"> 网站关键字: </label>

            <div class="col-sm-9">
              <input type="text" value="{{$keywords}}" name="keywords" id="form-input-readonly" class="col-xs-10 col-sm-6" >
            </div>
          </div> 
          <br>

          <div class="form-group">
            <label for="form-input-readonly" class="col-sm-3 control-label no-padding-right"> 网站描述: </label>

            <div class="col-sm-9">
              <input type="text" value="{{$description}}" name="description" id="form-input-readonly" class="col-xs-10 col-sm-6" >
            </div>
          </div> 
          <br>


          <div class="form-group">
            <label for="form-input-readonly" class="col-sm-3 control-label no-padding-right"> 网站版权: </label>

            <div class="col-sm-9">
              <input type="text" value="{{$copy}}" name="copy" id="form-input-readonly" class="col-xs-10 col-sm-6" >
            </div>
          </div>
        <br>
          <div class="form-group">
            <label for="form-input-readonly" class="col-sm-3 control-label no-padding-right"> 网站LOGO: </label>

            <div class="col-sm-4">

              <input type="file" style=""  name="logo" id="form-input-readonly" class="col-xs-10 col-sm-3" >
            <div><img style="float:left" src="{{$logo}}" width="55px" height="55px"></div>
            </div>
          </div>
                

        <div class="form-group">
          <label for="url" class="control-label col-xs-3 no-padding-right"></label>
          
           <div class="col-xs-3">
              <div class="clearfix"> 
              {{csrf_field()}}                       
            <button data-loading-text="Loading..." class="btn btn-success"  id="loading-btn" > &nbsp;&nbsp;&nbsp;确定&nbsp;&nbsp;&nbsp;   </button>
            </div>
          </div> <div class="col-xs-1">
              <div class="clearfix">                        
           
            </div>
          </div>
        </div>                
   </form>
@endsection

