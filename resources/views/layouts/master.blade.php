<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Wisuda.in</title>

    <meta charset="utf-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700' rel='stylesheet'>

    <!-- Css -->
    @vite(['resources/scss/app.scss', 'resources/css/style.css', 'resources/js/app.js'])
    @stack('style')
    <style>
        div#content, div.main {
            min-height: calc(100vh - 285px);
        }
    </style>
</head>

<body>
@auth()
    @include('layouts.partials.sidebar')
    @include('layouts.partials.header')
    <div class="main main-app p-3 p-lg-4">
        @yield('content')
        @include('layouts.partials.footer')
    </div><!-- main -->
@endauth

@guest()
    @yield('content')
@endguest

@stack('script')
</body>
</html>
