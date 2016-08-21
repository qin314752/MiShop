@extends('layout.index')
@section('title', '修改用户')
@section('content')
<form method="get" action="{{url('admin/order/update')}}" id="validation-form" class="form-horizontal" novalidate="novalidate">
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
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">ID</label>

          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" disabled value="{{$order->id}}" name="id">
            </div>
          </div>
        </div>
        <div class="space-2"></div>
        <div class="form-group">
          <label for="password" class="control-label col-xs-12 col-sm-3 no-padding-right">订单ID</label>

          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input  class="col-xs-12 col-sm-4" type="text"  disabled value="{{$order->uid}}" id="input3" name="uid">
            </div>
          </div>
        </div>
        <div class="space-2"></div>
        <div class="form-group">
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">快递状态</label>
          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" value="{{$order->status}}" name="status">
            </div>
          </div>
        </div>
        <div class="space-2"></div>
        <div class="form-group">
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">支付方式</label>
          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" value="{{$order->ship_status}}" name="ship_status">
            </div>
          </div>
        </div>
        <div class="space-2"></div>
        <div class="form-group">
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">花费</label>
          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" value="{{$order->pay}}" name="pay">
            </div>
          </div>
        </div>
        <div class="space-2"></div>
        <div class="form-group">
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">支付状态</label>
          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" value="{{$order->pay_status}}" name="pay_status">
            </div>
          </div>
        </div>
        <div class="space-2"></div>
        <div class="form-group">
          <label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">下单时间</label>
          <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
              <input type="text" class="col-xs-12 col-sm-5" value="{{$order->addtime}}" name="addtime">
            </div>
          </div>
        </div>
        <input type="hidden" name="id" value="{{$order->id}}">
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

