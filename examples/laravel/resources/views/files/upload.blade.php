@extends('layouts.app') @section('content')

<div class="container">
    <form action="{{route('file.store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="file">เลือกรูปภาพ</label>
        <input type="file" name="file" id="file">
        <button type="submit">Upload</button>
    </form>
</div>

@endsection