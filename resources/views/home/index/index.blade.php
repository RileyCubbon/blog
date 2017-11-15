@extends('home.layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/plugins/sweetalert/sweetalert.css') }}">
@endsection

@section('content')
    <div class="ibox">
        @foreach($articles as $article)
        <div class="ibox-content clearfix">
            <div class="decorate">
                <img src="{{asset('img/p1.jpg')}}" alt="">
            </div>
            <div class="article-message">
                <div class="article-header">
                    <a href="{{ route('users.show',$article->admin->id) }}" class="user_header">
                        <img src="{{ asset($article->admin->avatar) }}" alt="" class="img-circle sm-img">
                    </a>
                    <small style="cursor: pointer;" data-placement="top" data-original-title="{{ $article->created_at }}">
                        {{ Carbon\Carbon::parse($article->created_at)->diffForHumans() }}
                    </small>
                    <h2>
                        <a href="{{ route('article.show',$article->id) }}">{{ $article->title }}</a>
                    </h2>
                </div>
                <p style="height:105px">
                    {{ $article->description }}
                </p>
                <div class="row">
                    <div class="col-md-6 article-footer">
                        <ul>
                            @foreach($article->categories as $category)
                            <li>
                                <i class="fa fa-tag"></i>
                                <a href="{{ route('category.select',$category->category) }}">{{ $category->category }}</a>
                            </li>
                            @endforeach
                        </ul>
                        <ul>
                            <li>
                                <a name="recommend" href="{{ route('article.toggle',$article->id) }}"><i class="fa fa-thumbs-up"></i></a>
                                <span>{{ $article->recommend_users_count }}</span>
                            </li>
                            <li>
                                <a name="collector" href="{{ route('article.toggle',$article->id) }}"><i class="fa fa-heart"></i></a>
                                <span>{{ $article->collector_users_count }}</span>
                            </li>
                            <li><i class="fa fa-eye"></i>{{ $article->click_amount }}</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('article.show',$article->id) }}" class="btn btn-white btn-rounded pull-right article-show">DETAILS</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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
    <script>
        @if(session()->has('email'))
        window.setTimeout(function () {
            swal({
                title: '注册成功',
                text: '验证信息已经发送到邮箱请先验证',
                type: "success"
            });
        },1000);
        @endif
        @if(session()->has('verify'))
         window.setTimeout(function () {
            swal({
                title: '邮箱验证成功',
                text: '尊敬的 {{ Auth::user()->name }} 欢迎回来',
                type: "success"
            });
        },1000);
        @endif
        $('.ibox-content').each(function (index,element) {
            var current = $(this);
            if( index % 2 === 0 ) {
                current.addClass('float-left');
                current.find('.decorate img').addClass('pull-left');
            } else {
                current.addClass('float-right');
                current.find('.decorate img').addClass('pull-right');
            }
        });
    </script>
@endsection