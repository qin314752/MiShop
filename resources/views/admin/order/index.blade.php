@extends('layout.index')
@section('title', '订单列表')
@section('content')            
<style type="text/css">
  .a{float:right;}
</style>

<div class="col-xs-11">
  <div class="table-header">order list</div>
{{csrf_field()}}
      <!-- 闪存中的信息 -->
      @if(session('success'))
        <div class="alert alert-info">
                    {{session('success')}}        
        </div>
      @endif
<form action="{{url('/admin/order/index')}}" method="get">
    <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
      <div class="row">
        <div class="col-xs-6 ">
          <div class="dataTables_length" id="dynamic-table_length">
            <label>显示:
              <select name="num" aria-controls="dynamic-table" class="form-control input-sm">
                <option value="5" 
                    @if(!empty($request['num']) && $request['num'] == 5)
                    selected
                    @endif>5</option>
                <option value="15" 
                    @if(!empty($request['num']) && $request['num'] == 15)
                    selected
                    @endif>15</option>
                <option value="20" 
                    @if(!empty($request['num']) && $request['num'] == 20)
                    selected
                    @endif>20</option>
                </select>行</label>
            </form>
          </div>
        </div>
        <div class="col-xs-6 ">
          <div id="dynamic-table_filter" class="dataTables_filter">
            <label>查找:
              <input type="search" class="form-control input-sm" placeholder="" aria-controls="dynamic-table"  
              @if(!empty($request['sousuo']))
                value="{{$request['sousuo']}}"
                @endif
                 name="sousuo">
              <input type="submit" value="查询" class="btn btn-xs btn-primary"></label></div>
        </div>
      </div>
    
      <table class="table table-striped table-bordered table-hover dataTable no-footer DTTT_selectable" id="dynamic-table" role="grid" aria-describedby="dynamic-table_info">
        <thead>
          <tr role="row">
            <th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="">
              <label class="pos-rel">
                <input type="checkbox" class="ace">
                <span class="lbl"></span>
              </label>
            </th>
            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">ID</th>
            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">订单ID</th>
            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">快递状态</th>
            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">支付方式</th>
            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">花费</th>
            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">支付状态</th>
            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">下单时间</th>
            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">操作</th>
          </tr>
        </thead>
        <tbody>

        @foreach($order as $k=>$v)
          <tr role="row" class="odd">
            <td class="center">
              <label class="pos-rel">
                <input type="checkbox" class="ace">
                <span class="lbl"></span>
              </label>
            </td>
            <td>
              <a class="sid">{{$v->id}}</a></td>
            <!-- <td>$45</td> -->
            <td class="hidden-480">{{$v->uid}}</td>
            <td class="hidden-480">{{$v->status}}</td>
            <td class="hidden-480" >{{$v->ship_status}}</td>            
            <td class="hidden-480">{{$v->pay}}</td>            
            <td class="hidden-480">{{$v->pay_status}}</td>            
            <td class="hidden-480">{{$v->addtime}}</td>            
            <td> 
              <div class="hidden-sm hidden-xs action-buttons">
               <!-- 编辑 -->
                <a class="edit" href="/admin/order/edit?id={{$v->id}}">
                  <i class="ace-icon fa fa-pencil bigger-130"></i>
                </a>
                <!-- 删除 -->
                <a class="delete" href="/admin/order/delete?id={{$v->id}}">
                  <i class="ace-icon fa fa-trash-o bigger-130"></i>
                </a>
              </div>
              <div class="hidden-md hidden-lg">
                <div class="inline pos-rel">
                  <button data-position="auto" data-toggle="dropdown" class="btn btn-minier btn-yellow dropdown-toggle">
                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                    <li>
                      <a title="" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="View">
                        <span class="blue">
                          <i class="ace-icon fa fa-search-plus bigger-120"></i>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Edit">
                        <span class="green">
                          <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete">
                        <span class="red">
                          <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </td>
          </tr>
        @endforeach
          <tr role="row" class="even">
           
              </tbody>
            </table>
  </form>
     <div class="a">  {!! $order->appends($request)->render() !!}  </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
@endsection


