<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
    
    body {
    background-image: url("/images/background.jpg");
    background-color: #00539cff;
    background-repeat: y-repeat;


    background-position: center, left;
 
  
    height: 400px;
    height: 100%;
    margin:42px;
    background-size: 100%
    }

    h6{
    background: -webkit-linear-gradient(rgb(16, 128, 202), rgb(202, 16, 202));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-align: center;
    }

    h1 {
    font-size: 100px;
    background: -webkit-linear-gradient(rgb(16, 128, 202), rgb(202, 16, 202));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-align: center;
    }

    </style>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            @include('inc.navbar')
            <br>
            <br>
            <div class="container">
                @include('inc.messages')
                @yield('content')
            </div>
        </main>
    </div>
    <br><br><br>
        
    <footer class="bg-light text-center text-lg-start" id="footer">
        <br>
        <h6><strong>© 2020 Copyright: Djina Djoric</strong></h6>
        <br>
    </footer>
    
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
