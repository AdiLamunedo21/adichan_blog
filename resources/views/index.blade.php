@extends('layout.home')

@section('content')
    <!-- Main Content -->
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach($posts as $row)
                <div class="post-preview">
                    <a href="{{ route('artikel.show', $row->slug) }}">
                        <h2 class="post-title">
                            {{ $row->post_title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $row->post_subtitle }}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">{{ $row->user->name }}</a>
                        on {{ $row->created_at->format('F j, Y') }}</p>
                </div>
            @endforeach
            <hr>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
@endsection

