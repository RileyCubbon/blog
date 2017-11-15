@extends('home.layouts.app')

@section('content')
    <div class="board-input">
        <button class="btn btn-rounded btn-white btn-block">给站长留言</button>
        <div style="display: none;">
            <textarea name="massage" placeholder="支持markdown格式" class="form-control" rows="10"></textarea>
            <a href="{{ route('message.store') }}" name="board" class="btn btn-rounded btn-primary btn-block">发表留言</a>
        </div>
    </div>
    <div id="vertical-timeline" class="vertical-container light-timeline">
        <div class="vertical-timeline-block">
            <div class="vertical-timeline-icon navy-bg">
                <img src="img/a1.jpg" class="img-circle"  width="60" height="60">
            </div>

            <div class="vertical-timeline-content">

                <div class="social-feed-box">
                    <div class="social-body">
                        <p>
                            5本《Node与Express开发》免费抽】本书涵盖Express 4.0，系统讲解利用Express开发Web应用的流程和步骤。通过实例讲授了开发网站和REST API的基础知识。还有设计与实现Web架构的最佳实践，帮你用Express构建单页、多页以及混合Web应用。
                        </p>
                        <div class="btn-group" style="margin-right: 20px;">
                            <button  class="btn btn-white btn-xs comment"><i class="fa fa-comments"></i> 评论</button>
                        </div>
                        <small>2017-8-16</small>
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
                                <small class="text-muted">8月18日</small>
                                <a href="#" class="small text-navy">回复</a>
                            </div>
                        </div>
                        <div class="social-comment">
                            <div class="media-body">
                                <textarea class="form-control" placeholder="填写评论..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection