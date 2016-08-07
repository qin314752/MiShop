@extends('layout.index')
@section('title','商品分类')
@section('ltitle','分类列表')
@section('content')
	<div class="col-xs-12">
	    <div class="clearfix">
	    @if(session('success'))
	        <div class="alert alert-info">
				<button class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>

				<i class="ace-icon fa fa-hand-o-right"></i>
				session('success')
			</div>
	    </div>
	    @endif
	    <div class="table-header">最新的商品分类查询结果</div>
	    <!-- div.table-responsive -->
	    <!-- div.dataTables_borderWrap -->
	    <div>
	        <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
	            <div class="row">
	             <form action="{{url('admin/goods_cate')}}"method="get">
	                <div class="col-xs-6">
	                    <div class="dataTables_length" id="dynamic-table_length">
	                        <label>每页显示
	                            <select name="num" aria-controls="dynamic-table" class="form-control input-sm">
	                                <option value="5" {{$num==5?'selected':''}}>5</option>
	                                <option value="10" {{$num==10?'selected':''}}>10</option>
	                                <option value="15" {{$num==15?'selected':''}}>15</option>
	                                <option value="20" {{$num==20?'selected':''}}>20</option></select>条</label>
	                    </div>
	                </div>
	                <div class="col-xs-6">
	                    <div id="dynamic-table_filter" class="dataTables_filter">
	                        <label>Search:
	                            <input type="search" class="form-control input-sm" placeholder="" aria-controls="dynamic-table" name="search" value="{{$search}}"></label>
	                        <button class="btn btn-primary btn-xs">搜索</button>
	                    </div>
	                </div>
	                </form>
	            </div>
	            <table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer DTTT_selectable" role="grid" aria-describedby="dynamic-table_info">
	                <thead>
	                    <tr role="row">
	                        
	                        <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">ID</th>
	                        <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">分类名</th>
	                        <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">PID</th>
	                        <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="
	                        Update
	                        : activate to sort column ascending">
	                            <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>path</th>
	                        <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">是否顶端分类</th>
	                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th>
	                    </tr>
	                </thead>
	                <tbody>
	                @foreach($res as $k=>$v)
	                    <tr role="row" class="even">
	                        <td>
	                            <a href="#">{{$v->id}}</a></td>
	                        <td>{{str_repeat('|**',count(explode(',',$v->path))-1).$v->name}}</td>
	                        <td class="hidden-480">{{$v->pid}}</td>
	                        <td>{{$v->path}}</td>
	                        <td class="hidden-480">
	                            <span class="label label-sm label-success">
	                            {{str_replace([0,1],['否','是'],$v->istop)}}</span></td>
	                        <td>
	                            <div class="hidden-sm hidden-xs action-buttons">
	                                
	                                <a class="green" href="{{url('admin/goods_cate/edit',['id'=>$v->id])}}">
	                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
	                                </a>
	                                <a class="red" href="{{url('admin/goods_cate/delete',['id'=>$v->id])}}">
	                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
	                                </a>
	                            </div>
	                            <div class="hidden-md hidden-lg">
	                                <div class="inline pos-rel">
	                                    <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
	                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
	                                    </button>
	                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
	                                        <li>
	                                            <a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
	                                                <span class="blue">
	                                                    <i class="ace-icon fa fa-search-plus bigger-120"></i>
	                                                </span>
	                                            </a>
	                                        </li>
	                                        <li>
	                                            <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
	                                                <span class="green">
	                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
	                                                </span>
	                                            </a>
	                                        </li>
	                                        <li>
	                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
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
	                </tbody>
	            </table>
	            <div class="row">
	                <div class="col-xs-6">
	                    <div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">Showing {{$res->currentPage()}} to 10 of {{$res->count()}} 条记录</div></div>
	                <div class="col-xs-6">
	                    <div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">
	                        {!! $res->appends(['num'=>$num,'search'=>$search])->render() !!}
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

@endsection