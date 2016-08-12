@extends('layout.index')
@section('title', '商品列表')
@section('content')
<style type="text/css">
  .a{float:right;}
</style>

<div class="col-xs-11">

  <div class="table-header">商品管理</div>

      <form action="{{url('/admin/goods/index')}}" method="get">
      <!-- 闪存中的信息 -->
      @if(session('success'))
<div class="alert alert-info">
            {{session('success')}}
               
</div>
      @endif
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
              @if(!empty($request['keywords']))
                value="{{$request['keywords']}}"
                @endif
                 name="keywords">
              <input type="submit" value="查询" class="btn btn-xs btn-primary"></label></div>
        </div>
      </div>
        </form>
      <table class="table table-striped table-bordered table-hover dataTable no-footer DTTT_selectable" id="dynamic-table" role="grid" aria-describedby="dynamic-table_info">
        <thead>
          <tr role="row">
            <th class="center sorting_disabled" rowspan="1" colspan="1" aria-label="
            ">
              <label class="pos-rel">
                <input type="checkbox" class="ace">
                <span class="lbl"></span>
              </label>
            </th>
            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">ID</th>
            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">商品名</th>
            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">商品分类</th>
            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">图片</th>
            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">价格</th>
            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">库存</th>
            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">操作</th>
          </tr>
        </thead>
        <tbody>

        @foreach($goods as $k=>$v)
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
            <td class="hidden-480">{{$v->name}}</td>
            <td class="hidden-480">{{$v->cid}}</td>
            <td class="hidden-480" ><img width="50px"src="{{$v->pic}}" alt=""></td>                      
            <td class="hidden-480">{{$v->price}}</td>            
            <td class="hidden-480">{{$v->strorage_num}}</td>            
            <td> 
              <div class="hidden-sm hidden-xs action-buttons">
               <!-- 编辑 -->
                <a class="edit" href="/admin/goods/edit?id={{$v->id}}">
                  <i class="ace-icon fa fa-pencil bigger-130"></i>
                </a>
                <!-- 删除 -->
                <a class="delete" href="/admin/goods/delete?id={{$v->id}}">
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
  
     <div class="a"> {!! $goods->appends($request)->render() !!} </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
@endsection


