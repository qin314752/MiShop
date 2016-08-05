@extends('layout.index')
@section('title','商品分类管理')
@section('content')
 <div class="white" id="content">
            <h1><img alt="" src="/AD/img/icons/camera.png"> 商品分类管理
</h1>  
<br>           
<br>           
<div class="content">
        <div class="notif success bloc" id="success" style="display:none">
            <strong>Success :</strong>分类添加成功,请刷新本页面
            <a href="#" class="close"></a>
        </div>
        <div class="notif error bloc" id="error" style="display:none">
            <strong>Error :</strong> 分类添加失败,请重新输入
            <a href="#" class="close"></a>
        </div>
        @if(count($errors))
        <div class="notif info bloc">
            <strong>消息 :</strong> 
            {!! implode('<br>', $errors->all()) !!}
            <a class="close" href="#"></a>
        </div>
        @endif
        <table>
            <thead>
                <tr>
                    <th><input type="checkbox" class="checkall"></th>
                    <th>ID</th>
                    <th></th>
                    <th>分类名称</th>
                    <th>是否顶端(1为页面顶部分类)</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($res as $k=>$v)
                 <tr>
                    <td><input type="checkbox"></td>
                    <td class="sid">{{$v->id}}<td>
                    <td>{{$v->name}}</td>
                    <td>{{$v->istop}}</td>
                    <td class="delete">
                        <a href="{{url('admin/goods_cate/edit',['id'=>$v->id])}}"><img  src="/AD/img/icons/menu/dark/pen.png"></a>
                        <a href="{{url('admin/goods_cate/delete',['id'=>$v->id])}}"><img  src="/AD/img/icons/menu/dark/basket.png"></a>
                    </td>
                </tr>
                    @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="input">
                            <label for="input1">添加分类名称</label>
                            <input type="text" id="input1" required="required">
                        </div>
                    </td>
                    <td>
                        <div class="input">
                            <label for="input2">添加分类属性</label>
                            <input type="text" id="input2" required="required">
                        </div>
                    </td>
                    <td><input type="image"src="/AD/img/icons/glyph-check.png" id="add"></button></td>
                </tr>
              </tbody>
        </table>
       
        
    </div>
    <script type="text/javascript">
       $('#add').click(function()
       {
        //增加商品分类
        var name = $('#input1').val();
        var istop = $('#input2').val();
        $.get('{{url("admin/goods_cate/add")}}',{name:name,istop:istop},function(data)
        {
            if(data == 1)
                $('#success').css('display','block')
            else
                $('#error').css('display','block');
        })
       })
    
    </script>
        
@endsection



