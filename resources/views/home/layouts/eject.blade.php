<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Riley Blog</title>
    <meta name="keywords" content="riley,blog">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--title图片--}}
    {{--<link rel="shortcut icon" href="favicon.ico">--}}
    <link href="{{ asset('css/app.css') }}?v=3.3.6" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @yield('head')

</head>
<body class="gray-bg">
    @yield('body')

    {{--全局js--}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    @yield('footer')

    {{--自定义js--}}
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>