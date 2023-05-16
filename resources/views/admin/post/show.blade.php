@extends('layout.admin')
@section('content')
    <a href="/post/{{$post->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
    <a href="/post" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card mt-3">
        <img src="/upload/post/{{$post->sampul}}" height="450px" class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title">{{$post->post_title}}</h2>
            <h3 class="card-title">{{$post->post_subtitle}}</h3>
            <p class="card-text">{!!$post->konten!!}</p>
            <p class="card-text"><small class="text-muted">{{$post->created_at->diffForHumans()}}</small></p>
        </div>
    </div>
@endsection
