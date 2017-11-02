<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Riley Blog</title>
    <meta name="keywords" content="riley,blog">

    {{--title图片--}}
    {{--<link rel="shortcut icon" href="favicon.ico">--}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('head')

</head>

<body class="gray-bg">

@yield('body')

{{--全局js--}}
<script src="{{ asset('js/jquery.min.js') }}?v=2.1.4"></script>
<script src="{{ asset('js/bootstrap.min.js') }}?v=3.3.6"></script>

{{--自定义js--}}
<script src="{{ asset('js/content.js') }}"></script>

@yield('footer')

</body>
