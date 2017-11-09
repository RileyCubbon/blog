@extends('home.layouts.app')

@section('content')
    <div class="ibox-content" style="border-radius: 8px;padding: 50px 0 50px;">
        <div class="custom-form">
            <form action="{{ route('register') }}" method="post">
                <h2 class="text-center form-group" style="letter-spacing: 0.1em">Users Of Registered Riley Blog</h2>
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Nickname">
                    @if($errors->has('name'))
                        <span class="help-block m-b-none text-danger">
                        <i class="fa fa-info-circle"></i>
                            {{ $errors->first('name') }}
                    </span>
                    @endif
                </div>
                <div class="form-group">
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
                <div class="form-group">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                </div>
                <div class="form-group text-center">
                    <h4><a href="#">Login To Existing Users</a></h4>
                </div>
                {{--验证码--}}
                {{--{!! Geetest::render('popup') !!}--}}
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="width:65%">REGISTER</button>
                </div>
            </form>
        </div>
    </div>
@endsection