@extends('layout.artikel')

@section('content')


<!-- Page Header -->
<header class="masthead" style="background-image: url('{{asset("upload/post/{$post->sampul}")}}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>{{$post->post_title }}</h1>
                    <h2 class="subheading">{{$post->post_subtitle}}</h2>
                    <span class="meta">Posted by
                        <a href="#">{{ $post->user->name }}</a>
                        on {{$post->created_at->format('F d, Y')}}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>  {!!$post->konten!!} </p>
            </div>
        </div>
    </div>
</article>

<hr>


@endsection
