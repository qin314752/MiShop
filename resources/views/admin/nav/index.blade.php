@extends('layout.index')
@section('title','导航列表')
@section('ltitle','导航列表')
@section('content')
	<div class="col-xs-12">
	    <div class="clearfix">
	    @if (count($errors) > 0)
	        <div class="alert alert-danger">
	            <ul>
	                @foreach ($errors->all() as $error)
	                    <li>{{ $error }}</li>
	                @endforeach
	            </ul>
	        </div>
	    @endif
	    <div class="table-header">最新的导航列表查询结果</div>
	    <!-- div.table-responsive -->
	    <!-- div.dataTables_borderWrap -->
	    <div>
	        <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
	            <div class="row">
	             <form action="{{url('admin/nav')}}"method="get">
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
	                        <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">导航菜单名</th>
	                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th>
	                    </tr>
	                </thead>
	                <tbody>
	                @foreach($navs as $k=>$v)
	                    <tr role="row" class="even">
	                        <td>
	                            <a href="#">{{$v->id}}</a></td>
	                        <td>{{$v->name}}</td>
	                        <td>
	                            <div class="hidden-sm hidden-xs action-buttons">
	                                
	                                <a class="green" href="{{url('admin/nav/edit',['id'=>$v->id])}}">
	                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
	                                </a>
	                                <a class="red" href="{{url('admin/nav/delete',['id'=>$v->id])}}">
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
	                    <div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">Showing {{$navs->currentPage()}} to 10 of {{$navs->count()}} 条记录</div></div>
	                <div class="col-xs-6">
	                    <div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">
	                        {!! $navs->appends(['num'=>$num,'search'=>$search])->render() !!}
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

@endsection