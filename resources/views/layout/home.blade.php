<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hanicode | Blog </title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('home/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('home/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href='{{ url('https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic')}}' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ asset('home/css/clean-blog.min.css')}}" rel="stylesheet">

    </head>

    <body>

    <!-- Navigation -->
    @include('includes.homepage.navbar')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('home/img/upnime.jpg')">
        <div class="overlay"></div>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
                <h1>Hanicode</h1>
                <span class="subheading">Bahasan Terbaru Tentang Dunia Coding</span>
            </div>
            </div>
        </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    <hr>
    <!-- Footer -->
    @include('includes.homepage.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('home/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/clean-blog.min.js')}}"></script>

</body>

</html>
