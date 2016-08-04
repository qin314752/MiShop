@extends('layout.index')
@section('title', '用户添加')
@section('content')
    <form>
    	<div class="input long">
            <label for="input3">Loooooooooong input</label>
            <input type="text" id="input3">
    	</div>
    	<div class="input">
            <label for="file">Upload a file</label>
            <div class="uploader" id="uniform-file"><input type="file" id="file" size="20" style="opacity: 0;"><span class="filename" style="-moz-user-select: none;">No file selected</span><span class="action" style="-moz-user-select: none;">Choose File</span></div>
    	</div>
    	<div class="submit">
            <input type="submit" value="提交">
            
    	</div>
    </form>
@endsection
