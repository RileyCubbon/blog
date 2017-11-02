@extends('admin.layouts.app')
@section('body')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="ibox col-sm-10 col-sm-offset-1">
                <div class="ibox-content">
                    <div class="social-feed-separated">

                        <div class="social-avatar">
                            <a href="">
                                <img alt="image" src="img/a5.jpg">
                            </a>
                        </div>

                        <div class="social-feed-box">

                            <div class="pull-right social-action dropdown">
                                <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu m-t-xs">
                                    <li><a href="#">设置</a></li>
                                </ul>
                            </div>
                            <div class="social-avatar">
                                <a href="#">
                                    尤小右
                                </a>
                                <small class="text-muted">8月18日</small>
                            </div>
                            <div class="social-body">
                                <p>
                                    新技术新概念很多，而且有了新定律：前端开发每18月会难一倍
                                </p>
                                <img src="img/p2.jpg" class="img-responsive">
                                <div class="btn-group">
                                    <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> 赞</button>
                                    <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> 评论</button>
                                    <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> 分享</button>
                                </div>
                            </div>
                            <div class="social-footer">
                                <div class="social-comment">
                                    <a href="" class="pull-left">
                                        <img alt="image" src="img/a3.jpg">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            尤小右
                                        </a> 图表展示、数据可视化是前端领域一个麻烦且重要的事情，这里推荐了11个JS图表库，各取所需吧
                                        <br>
                                        <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26</a> -
                                        <small class="text-muted">8月18日</small>
                                    </div>
                                </div>

                                <div class="social-comment">
                                    <a href="" class="pull-left">
                                        <img alt="image" src="img/a4.jpg">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            尤小右
                                        </a> 看上去不错，如能结合乐曲播放有个动效就更酷了 :z
                                        <br>
                                        <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11</a> -
                                        <small class="text-muted">8月18日</small>
                                    </div>

                                    <div class="social-comment">
                                        <a href="" class="pull-left">
                                            <img alt="image" src="img/a7.jpg">
                                        </a>
                                        <div class="media-body">
                                            <a href="#">
                                                尤小右
                                            </a> 用checkbox + CSS 也能玩出来很多花样，来看看这些有趣的例子吧！
                                            <br>
                                            <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11</a> -
                                            <small class="text-muted">8月18日</small>
                                        </div>
                                    </div>

                                    <div class="social-comment">
                                        <a href="" class="pull-left">
                                            <img alt="image" src="img/a8.jpg">
                                        </a>
                                        <div class="media-body">
                                            <textarea class="form-control" placeholder="填写评论..."></textarea>
                                        </div>
                                    </div>

                                </div>

                                <div class="social-comment">
                                    <a href="" class="pull-left">
                                        <img alt="image" src="img/a6.jpg">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            尤小右
                                        </a> 有情怀的工程师，赞。
                                        <br>
                                        <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26</a> -
                                        <small class="text-muted">8月18日</small>
                                    </div>
                                </div>

                                <div class="social-comment">
                                    <a href="" class="pull-left">
                                        <img alt="image" src="img/a7.jpg">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            尤小右
                                        </a> 几位同学中奖，请将你们的收获地址电话姓名私信给我哦~
                                        <br>
                                        <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26</a> -
                                        <small class="text-muted">8月18日</small>
                                    </div>
                                </div>

                                <div class="social-comment">
                                    <a href="" class="pull-left">
                                        <img alt="image" src="img/a3.jpg">
                                    </a>
                                    <div class="media-body">
                                        <textarea class="form-control" placeholder="填写评论..."></textarea>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection