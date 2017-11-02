@extends('admin.layouts.app')

@section('head')
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
@endsection

@section('body')
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="用户名" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
            </form>
        </div>
    </div>
@endsection
