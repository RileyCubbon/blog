@extends('home.layouts.eject')

@section('head')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endsection

@section('body')
    <div class="container">
        <div class="row col-sm-12 login-form">
            <h2 class="text-center" style="letter-spacing: 0.1em">Users Of Registered Riley Blog</h2>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Nickname">
                </div>
                <div class="form-group">
                    <input type="password" name="username" class="form-control" placeholder="E-Mail Address">
                </div>
                <div class="form-group">
                    <input type="password" name="username" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" name="username" class="form-control" placeholder="Confirm Password">
                </div>
                <div class="form-group text-center">
                    <h4><a href="#">Login To Existing Users</a></h4>
                </div>
                <button class="btn btn-white">REGISTER</button>
            </form>
        </div>
    </div>
@endsection