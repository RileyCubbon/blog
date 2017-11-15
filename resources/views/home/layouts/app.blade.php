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
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    @yield('head')

</head>

<body class="gray-bg top-navigation">
<div id="wrapper">
    <div id="page-wrapper" class="gray-bg">
        {{--顶部导航栏开始--}}
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="{{ route('index') }}" class="navbar-brand" >
                        HOME
                    </a>
                    <button type="button" data-toggle="collapse" data-target="#app-navbar-collapse"
                            class="navbar-toggle collapsed pull-right" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="app-navbar-collapse" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">ABOUT</a>
                        </li>
                        <li>
                            <a href="{{ route('link.index') }}">LINK</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a id="search" href="#"><i class="fa fa-search"></i></a>
                        </li>
                        @guest
                        <li><a  href="{{ route('login') }}">LOGIN</a></li>
                        @else
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img src="{{ Auth::user()->avatar }}" class="img-circle" width="30" height="30" alt="{{ Auth::user()->name }}">
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li>
                                    <a class="J_menuItem" href="{{ route('users.info') }}">个人资料</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        安全退出
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                        <li>
                            <a id="register" href="{{ route('register') }}">REGISTER</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{--顶部导航栏结束--}}

        {{--正文开始--}}
        <div class="wrapper wrapper-content col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="riley">
                            <a href="#">RILE'S SMALL STATION</a>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        {{--正文结束--}}

        {{--扩展开始--}}
        @yield('extension')
        {{--扩展结束--}}
    </div>
</div>



{{--全局js--}}
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/layer/layer.min.js') }}"></script>

@yield('footer')

{{--自定义js--}}
<script src="{{ asset('js/custom.js') }}"></script>


</body>
