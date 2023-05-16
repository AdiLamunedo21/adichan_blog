@extends('layout.admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Buat Post Baru</h1>

    <form action="/post" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="post_title">Judul</label>
            <input type="text" class="form-control" id="post_title" name="post_title" value="{{old('post_title')}}">
            @error('post_title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="post_subtitle">Sub Judul</label>
            <input type="text" class="form-control" id="post_subtitle" name="post_subtitle" value="{{old('post_subtitle')}}">
            @error('post_subtitle')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="sampul">Sampul</label>
            <input type="file" class="form-control" id="sampul" name="sampul">
            @error('sampul')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="editor">Konten</label>
            <textarea class="form-control" id="editor" rows="10" name="konten">{{old('konten')}}</textarea>
            @error('konten')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
        <a href="/post" class="btn btn-secondary btn-sm">Kembali</a>
    </form>
@endsection
