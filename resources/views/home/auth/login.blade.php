@extends('home.layouts.app')

@section('content')
    <div style="border-radius: 8px;padding: 50px 0 50px;" class="ibox-content">
        <div class="custom-form">
            <form action="{{ route('login') }}" method="post">
                <h2 class="text-center form-group" style="letter-spacing: 0.1em">Welcome To Riley's Blog</h2>
                <div class="form-group">
                    {{ csrf_field() }}
                    <input type="text" name="email" class="form-control" placeholder="E-Mail Address">
                    @if($errors->has('email'))
                        <span class="help-block m-b-none text-danger">
                    <i class="fa fa-info-circle"></i>
                            {{ $errors->first('email') }}
                </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    @if($errors->has('password'))
                        <span class="help-block m-b-none text-danger">
                    <i class="fa fa-info-circle"></i>
                            {{ $errors->first('password') }}
                </span>
                    @endif
                </div>
                <div class="form-group text-center">
                    <h4><a href="#">Forgot Your Password ?</a></h4>
                </div>
                {{--验证码--}}
                {{--{!! Geetest::render('popup') !!}--}}
                <button type="submit" class="btn btn-primary block full-width m-b">LOGIN</button>
            </form>
        </div>
    </div>
@endsection