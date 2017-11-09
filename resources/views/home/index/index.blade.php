@extends('home.layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/plugins/sweetalert/sweetalert.css') }}">
@endsection

@section('content')
    <div class="ibox">
        <div class="ibox-content float-left">
            <div class="decorate">
                <img src="{{asset('img/p1.jpg')}}" alt="">
            </div>
            <div class="article-message">
                <div class="article-header">
                    <a href="#" id="user_header">
                        <img src="{{asset('img/a1.jpg')}}" alt="" class="img-circle sm-img">
                    </a>
                    <small>2天前</small>
                    <h2>
                        想知道宁泽涛每天游多少圈？送他 Misfit 最新款 Speedo Shine
                    </h2>
                </div>
                <p>
                    就算你敢带着 Apple Watch 下水游泳，它也不能记录你游了多少圈。 夏天刚来时就不停地听到有人提起“有没有在我游泳的时候可以帮忙数圈的设备”，今天
                    Misfit
                    终于赶在夏天结束之前推出可追踪游泳运动的新款 Shine。这款新设备是 Misfit 与泳衣品牌
                </p>
                <div class="row">
                    <div class="col-md-6 article-footer">
                        <ul>
                            <li><i class="fa fa-tag"></i>laravel</li>
                            <li><i class="fa fa-tag"></i>mysql</li>
                        </ul>
                        <ul>
                            <li><a href="#"><i class="fa fa-thumbs-up"></i></a>50</li>
                            <li><i class="fa fa-comment"></i>20</li>
                            <li><i class="fa fa-heart"></i>12</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-white btn-rounded pull-right">DETAILS</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="ibox-content float-right">
            <div class="decorate">
                <img src="{{asset('img/p2.jpg')}}" class="pull-right" alt="">
            </div>
            <div class="article-message">
                <div class="article-header">
                    <a href="#">
                        <img src="{{asset('img/a1.jpg')}}" alt="" class="img-circle sm-img">
                    </a>
                    <small>2天前</small>
                    <h2>
                        想知道宁泽涛每天游多少圈？送他 Misfit 最新款 Speedo Shine
                    </h2>
                </div>
                <p>
                    就算你敢带着 Apple Watch 下水游泳，它也不能记录你游了多少圈。 夏天刚来时就不停地听到有人提起“有没有在我游泳的时候可以帮忙数圈的设备”，今天
                    Misfit
                    终于赶在夏天结束之前推出可追踪游泳运动的新款 Shine。这款新设备是 Misfit 与泳衣品牌
                </p>
                <div class="row">
                    <div class="col-md-6 article-footer">
                        <ul>
                            <li><i class="fa fa-tag"></i>laravel</li>
                            <li><i class="fa fa-tag"></i>mysql</li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-thumbs-up"></i>50</li>
                            <li><i class="fa fa-comment"></i>20</li>
                            <li><i class="fa fa-heart">12</i></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-white btn-rounded pull-right">DETAILS</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="ibox-content">
            <div class="page-header">
                <h3>
                    <a href="#">
                        <img src="{{asset('img/a1.jpg')}}" alt="" class="img-circle sm-img">
                    </a>
                    <strong><a href="#">想知道宁泽涛每天游多少圈？送他 Misfit 最新款 Speedo Shine</a></strong>
                    <small data-toggle="created_at" data-placement="top" title="" class="pull-right"
                           style="cursor: pointer;"
                           data-original-title="2017-10-24 23:09:40">2天前
                    </small>
                </h3>
            </div>
            <div>
                <img src="{{ asset('img/p2.jpg') }}" class="img-rounded" width="905" height="300">
                <p class="article-description">
                    就算你敢带着 Apple Watch 下水游泳，它也不能记录你游了多少圈。 夏天刚来时就不停地听到有人提起“有没有在我游泳的时候可以帮忙数圈的设备”，今天
                    Misfit
                    终于赶在夏天结束之前推出可追踪游泳运动的新款 Shine。这款新设备是 Misfit 与泳衣品牌 Speedo （速比涛）合作推出，因此被命名为 S
                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-white btn-xs" type="button"><i class="fa fa-tag"></i>Apple
                        Watch
                    </button>
                    <button class="btn btn-white btn-xs" type="button"><i class="fa fa-tag"></i>速比涛
                    </button>
                </div>
                <div class="col-md-6">
                    <div class="small text-right">
                        <span><i class="fa fa-comments-o"> </i> 56</span>
                        <span><i class="fa fa-eye"> </i> 144</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--分页开始--}}
    <ul class="paginate col-lg-7">
        <li class="btn btn-default btn-rounded">First</li>
        <li class="btn btn-default btn-rounded">Prev</li>
        <li class="btn btn-default btn-circle">1</li>
        <li class="btn btn-default btn-circle">2</li>
        <li class="btn btn-default btn-circle">3</li>
        <li class="btn btn-default btn-rounded">Next</li>
        <li class="btn btn-default btn-rounded">Last</li>
    </ul>
    {{--分页结束--}}

@endsection

@section('footer')
    <script src="{{ asset('js/plugins/sweetalert/sweetalert.min.js') }}"></script>
    @if(session()->has('email'))
    <script>
        window.setTimeout(function () {
            swal({
                title: '注册成功',
                text: '验证信息已经发送到邮箱请先验证',
                type: "success"
            });
        },1000);
    </script>
    @endif
    @if(session()->has('verify'))
        <script>
            window.setTimeout(function () {
                swal({
                    title: '邮箱验证成功',
                    text: '尊敬的 {{ Auth::user()->name }} 欢迎回来',
                    type: "success"
                });
            },1000);
        </script>
    @endif
@endsection