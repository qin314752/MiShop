@extends('layout.index')
@section('title', '用户添加')
@section('content')
<div id="content" class="white">
           
<h1><img src="/AD/img/icons/dashboard.png" alt=""> {{$title}}</h1>

<div class="cb"></div>
<div class="bloc">
    <div class="title">
        {{$title}}
    <a href="#" class="toggle"></a></div>
    <div class="content">
        <form action="{{url('admin/user/insert')}}" method="post">
               <div class="input long">
                   <label for="input3">用户名</label>
                   <input type="text" required="required" name="username">
               </div>
               <div class="input long" >
                   <label for="input3">邮箱</label>
                   <input type="email" id="input3">
               </div>
               <div class="input long">
                   <label for="input3">手机</label>
                   <input type="text" required="required" name="tel">
               </div>
               <div class="input long">
                   <label for="input3">密码</label>
                   <input type="password" required="required" name="password">
               </div>
               <div class="input">
                   <label for="file">上传头像</label>
                   <div class="uploader" id="uniform-file"><input type="file" id="file" size="20" style="opacity: 0;" name="pic"><span class="filename">选择文件</span><span class="action">Choose File</span></div>
               </div>
               <div class="submit">
                   <input type="submit" value="添加">
               </div>
            </form>
        <div class="cb"></div>
    </div>
</div>        

</div>

@endsection
