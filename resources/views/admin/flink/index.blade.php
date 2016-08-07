@extends('layout.index')
@section('title', '友情链接')
@section('ltitle', '链接管理')
@section('content')


<div class="col-xs-11">
 
  <div class="table-header">Results for "Latest Registered Domains"</div>

 
    <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">

<div class="row">
     <form action="{{url('admin/flink')}}"method="get">
        <div class="col-xs-6">
            <div class="dataTables_length" id="dynamic-table_length">
                <label>每页显示
                    <select name="num" aria-controls="dynamic-table" class="form-control input-sm">
                        <option value="5" {{$num==5?'selected' :''}}>5</option>
                        <option value="10" {{$num==10?'selected' :''}}>10</option>
                        <option value="15" {{$num==15?'selected' :''}}>15</option>
                        <option value="20" {{$num==20?'selected' :''}}>20</option></select>条</label>
            </div>
        </div>
        <div class="col-xs-6">
            <div id="dynamic-table_filter" class="dataTables_filter">
                <label>Search:
                    <input type="search" class="form-control input-sm" placeholder="" aria-controls="dynamic-table" name="name" value="{{$name}}"></label>
                <button class="btn btn-primary btn-xs">搜索</button>
            </div>
        </div>
        </form>
    </div>      
     
      <table class="table table-striped table-bordered table-hover dataTable no-footer DTTT_selectable" id="dynamic-table" role="grid" aria-describedby="dynamic-table_info">
        <thead>
          <tr role="row">
           
            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">ID</th>
          
            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">网站</th>
            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="
            Update
            : activate to sort column ascending">
              <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>URL</th>
           
            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th>
          </tr>
        </thead>
        <tbody>

        @foreach($arr as $k=>$v)
          <tr class="tr" role="row" class="odd">
            
            <td class="id"> {{$v->id}}</td>           
            <td class="name">{{$v->name}}</td>
            <td class="url">{{$v->url}}</td>
            
            <td> 
              <div class="hidden-sm hidden-xs action-buttons center">
               
                            
                
                  <a href="" class="del"><i class="ace-icon fa fa-trash-o bigger-130 "></i></a>
                
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
         <div class="row">
 


  <div class="col-xs-4 ">
    <div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">Showing 1 to 10 of 23 entries</div></div>
  <div class="col-xs-7 ">
    <div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">
      <ul class="pagination">
          {!! $arr->appends(['num'=>$num,'name'=>$name])->render() !!}
       
      </ul>
    </div>
  </div>
</div>
    </div>
  </div>
</div>


          

<script>

$('.del').click(function(){

   var id = $('.id').html();
  var tr = $(this);
      $.get("{{url('admin/flink/delete')}}",{id:id},function(data){
   
    if(data==1){
        tr.parents('tr').remove();
    }else{
        alert('删除失败');
    }

  });
});
  //绑定双击事件 进行修改
$('.name').dblclick(function(){


    if($(this).attr('isDbl') == 1){return}
    //添加标识
    $(this).attr('isDbl',1);
    //获取原来的用户名
    var yname = $(this).html();
    var id = $(this).prev().html();
    var td = $(this);
    //创建input
    var inp = $('<input type="text" value="'+yname+'" />');
    $(this).empty();
    //插入
    $(this).append(inp);
    // 双击自动全选文档
    inp.select();
    //绑定丧失焦点事件
    inp.blur(function(){
      var name = $(this).val();
      if(name==''){
        name = yname;
        die;
      }
      //发送ajax
      $.get("{{url('admin/flink/update')}}",{id:id,name:name},function(data){
        //判断返回
        if(data == 1){       
          td.empty();
          td.html(name);
          td.removeAttr('isDbl');
        }else{
          //修改失败
          td.empty();
          td.html(yname);
          td.removeAttr('isDbl');

        }
      });
    })
  })
 //绑定双击事件 进行修改
$('.url').dblclick(function(){


    if($(this).attr('isDbl') == 1){return}
    //添加标识
    $(this).attr('isDbl',1);
    //获取原来的用户名
    var yname = $(this).html();
    var id = $(this).prev().prev().html();
    var td = $(this);
    //创建input
    var inp = $('<input type="text" value="'+yname+'" />');
    $(this).empty();
    //插入
    $(this).append(inp);
    // 双击自动全选文档
    inp.select();
    //绑定丧失焦点事件
    inp.blur(function(){
      var name = $(this).val();
      if(name==''){
        name = yname;
        die;
      }
      //发送ajax
      $.get("{{url('admin/flink/update')}}",{id:id,name:name},function(data){
        //判断返回
        if(data == 1){       
          td.empty();
          td.html(name);
          td.removeAttr('isDbl');
        }else{
          //修改失败
          td.empty();
          td.html(yname);
          td.removeAttr('isDbl');

        }
      });
    })
  })



</script>

@endsection



