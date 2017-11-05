@extends('admin.layouts.app')

@section('head')
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
@endsection

@section('body')
    <div class="middle-box loginscreen  animated fadeInDown">
        <div>
            <form class="m-t" role="form" action="{{ route('admins.auth') }}" method="post">
                <div class="form-group">
                    {{ csrf_field() }}
                    <input name="email" type="email" class="form-control" placeholder="用户名" required="">
                    @if ($errors->has('email'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="密码" required="">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
            </form>
        </div>
    </div>
@endsection
