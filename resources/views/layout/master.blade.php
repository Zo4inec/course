<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>

<body>

<div class="container">
    @include('layout.header')
    @include('layout.nav')

</div>

<main role="main" class="container">
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
            @yield('content')
            </div>
            <aside class="col-md-4 blog-sidebar">
            @section('sidebar')
                @include('layout.sidebar')
            @show
            </aside>
        </div>
    </main>

</main><!-- /.container -->

@include('layout.footer')

<script src="{{ asset('js/jquery-3.4.1.slim.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
