@extends('home.layouts.app')

@section('content')
    <div class="ibox">
        <div class="ibox-content"  style="margin-bottom: 20px">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <img src="{{ $user->avatar }}" class="img-circle" style="margin-bottom: 10px"><br>
                    <a href="{{ route('users.edit') }}"  class="btn btn-rounded btn-white btn-sm">点击修改信息</a>
                </div>
                <div class="col-lg-5 user-address">
                    <table class="table" style="height: 176px">
                        <tr>
                            <td width="60">昵称:</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>职业:</td>
                            <td>{{ $user->work ?: '未填写' }}</td>
                        </tr>
                        <tr>
                            <td>Github:</td>
                            <td>{{ $user->url ?: '未填写' }}</td>
                        </tr>
                        <tr>
                            <td>个人简介:</td>
                            <td>{{ $user->description ?: '未填写' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="ibox-content">
            <div class="panel blank-panel">

                <div class="panel-heading">
                    <div class="panel-options">

                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="tabs_panels.html#tab-4"
                                   aria-expanded="true">我的消息</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="tabs_panels.html#tab-5"
                                   aria-expanded="false">我的收藏</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="tab-content">
                        <div id="tab-4" class="tab-pane active">
                            <div class="social-feed-box">
                                <div class="social-avatar">
                                    <a href="" class="pull-left">
                                        <img alt="image" src="img/a4.jpg">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            尤小右
                                        </a>
                                        <small class="text-muted">8月18日</small>
                                    </div>
                                </div>
                                <div class="social-body">
                                    <p>
                                        5本《Node与Express开发》免费抽】本书涵盖Express
                                        4.0，系统讲解利用Express开发Web应用的流程和步骤。通过实例讲授了开发网站和REST
                                        API的基础知识。还有设计与实现Web架构的最佳实践，帮你用Express构建单页、多页以及混合Web应用。
                                    </p>
                                    <div class="btn-group">
                                        <button class="btn btn-white btn-xs"><i
                                                    class="fa fa-thumbs-up"></i> 赞
                                        </button>
                                        <button class="btn btn-white btn-xs"><i
                                                    class="fa fa-comments"></i> 评论
                                        </button>
                                        <button class="btn btn-white btn-xs"><i
                                                    class="fa fa-share"></i> 分享
                                        </button>
                                    </div>
                                </div>
                                <div class="social-footer">


                                    <div class="social-comment">
                                        <a href="" class="pull-left">
                                            <img alt="image" src="img/a8.jpg">
                                        </a>
                                        <div class="media-body">
                                            <a href="#">
                                                尤小右
                                            </a> 几位中奖，请私信我你们的收获地址、电话等信息，没中的同学敬请期待下次哦
                                            <br>
                                            <a href="#" class="small"><i
                                                        class="fa fa-thumbs-up"></i> 11</a> -
                                            <small class="text-muted">8月18日</small>
                                        </div>
                                    </div>

                                    <div class="social-comment">
                                        <a href="" class="pull-left">
                                            <img alt="image" src="img/a3.jpg">
                                        </a>
                                        <div class="media-body">
                                                                <textarea class="form-control"
                                                                          placeholder="填写评论..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="tab-5" class="tab-pane">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="contact-box text-center">
                                        想知道宁泽涛每天游多少圈？送他 Misfit 最新款 Speedo Shine
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