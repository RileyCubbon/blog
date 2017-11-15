@extends('home.layouts.app')

@section('content')
    <div class="ibox">
        <div class="ibox-content" style="padding:20px 65px">
            <div class="pull-right">
                @foreach($article->categories as $category)
                <a href="#" class="btn btn-white btn-xs">{{ $category->category }}</a>
                @endforeach
            </div>
            <div class="text-center article-title">
                <h1>
                    {{ $article->title }}
                </h1>
            </div>
            {!! $content !!}
            <hr>

            <div class="row">
                <div class="col-lg-12">

                    <h2>评论：</h2>
                    <div class="social-feed-box">
                        <div class="social-avatar">
                            <a href="" class="pull-left">
                                <img alt="image" src="img/a1.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    逆光狂胜蔡舞娘
                                </a>
                                <small class="text-muted">17 小时前</small>
                            </div>
                        </div>
                        <div class="social-body">
                            <p>
                                好东西，我朝淘宝准备跟进，1折开卖
                            </p>
                        </div>
                    </div>
                    <div class="social-feed-box">
                        <div class="social-avatar">
                            <a href="" class="pull-left">
                                <img alt="image" src="img/a2.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    避雷范儿
                                </a>
                                <small class="text-muted"> 16 小时前</small>
                            </div>
                        </div>
                        <div class="social-body">
                            <p>
                                第一个真的好美 就是噪音太大了 挺唯美的意境瞬间变成工厂了
                            </p>
                        </div>
                    </div>
                    <div class="social-feed-box">
                        <div class="social-avatar">
                            <a href="" class="pull-left">
                                <img alt="image" src="img/a3.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    kamppi
                                </a>
                                <small class="text-muted"> 6 小时前</small>
                            </div>
                        </div>
                        <div class="social-body">
                            <p>
                                好美的装置艺术，第二个让我想起了海中缓缓游动的鲸鱼。
                            </p>
                        </div>
                    </div>
                    <div class="social-feed-box">
                        <div class="social-avatar">
                            <a href="" class="pull-left">
                                <img alt="image" src="img/a5.jpg">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    kamppi
                                </a>
                                <small class="text-muted">6 小时前</small>
                            </div>
                        </div>
                        <div class="social-body">
                            <p>
                                “Flylight 的灯管并不固定，由一套软件控制：每一个灯管都根据与其它灯管的互动进行移动，就像一群真正的鸟群一样。” 好像介绍的描述不对，灯管是固定的，控制的只是点亮和熄灭的时间，模拟成一团亮点移动
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection