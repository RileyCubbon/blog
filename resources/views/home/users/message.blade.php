@extends('home.layouts.eject')

@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="contact-box">
                <div class="col-sm-4">
                    <div class="text-center">
                        <img alt="image" class="img-circle m-t-xs img-responsive" src="{{ $user->avatar }}">
                        <div class="m-t-xs font-bold">{{ $user->work ?: '未填写' }}</div>
                    </div>
                </div>
                <div class="col-sm-8" style="margin:5% 0;" >
                    <table class="table">
                        <tr>
                            <td>昵称:</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Github:</td>
                            <td>{{ $user->url ?: '未填写' }}</td>
                        </tr>
                        <tr>
                            <td>个人简介:</td>
                            <td>
                                {{ $user->description ?: '未填写' }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
