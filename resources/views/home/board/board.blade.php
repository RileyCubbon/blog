@extends('home.layouts.app')

@section('content')
    <div class="board-input">
        <button class="btn btn-rounded btn-white btn-block">给站长留言</button>
        <div style="display: none;">
            <form action="#" method="post">
                <textarea name="massage" placeholder="支持markdown格式" class="form-control" rows="10"></textarea>
                <button type="submit" class="btn btn-rounded btn-primary btn-block">发表留言</button>
            </form>
        </div>
    </div>
    <div id="vertical-timeline" class="vertical-container light-timeline">
        <div class="vertical-timeline-block">
            <div class="vertical-timeline-icon navy-bg">
                <img src="img/a1.jpg" class="img-circle"  width="60" height="60">
            </div>

            <div class="vertical-timeline-content">

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
                            5本《Node与Express开发》免费抽】本书涵盖Express 4.0，系统讲解利用Express开发Web应用的流程和步骤。通过实例讲授了开发网站和REST API的基础知识。还有设计与实现Web架构的最佳实践，帮你用Express构建单页、多页以及混合Web应用。
                        </p>
                        <div class="btn-group">
                            <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> 赞</button>
                            <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> 评论</button>
                            <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> 分享</button>
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
                                <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11</a> -
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

        <div class="vertical-timeline-block">
            <div class="vertical-timeline-icon blue-bg">
                <i class="fa fa-file-text"></i>
            </div>

            <div class="vertical-timeline-content">
                <h2>给张三发送文档</h2>
                <p>发送上年度《销售业绩报告》</p>
                <a href="#" class="btn btn-sm btn-success"> 下载文档 </a>
                <span class="vertical-date">
                                        今天 <br>
                                        <small>2月3日</small>
                                    </span>
            </div>
        </div>

        <div class="vertical-timeline-block">
            <div class="vertical-timeline-icon lazur-bg">
                <i class="fa fa-coffee"></i>
            </div>

            <div class="vertical-timeline-content">
                <h2>喝咖啡休息</h2>
                <p>喝咖啡啦，啦啦啦~~</p>
                <a href="#" class="btn btn-sm btn-info">更多</a>
                <span class="vertical-date"> 昨天 <br><small>2月2日</small></span>
            </div>
        </div>

        <div class="vertical-timeline-block">
            <div class="vertical-timeline-icon yellow-bg">
                <i class="fa fa-phone"></i>
            </div>

            <div class="vertical-timeline-content">
                <h2>给李四打电话</h2>
                <p>给李四打电话分配本月工作任务</p>
                <span class="vertical-date">昨天 <br><small>2月2日</small></span>
            </div>
        </div>

        <div class="vertical-timeline-block">
            <div class="vertical-timeline-icon lazur-bg">
                <i class="fa fa-user-md"></i>
            </div>

            <div class="vertical-timeline-content">
                <h2>公司年会</h2>
                <p>发年终奖啦，啦啦啦~~</p>
                <span class="vertical-date">前天 <br><small>2月1日</small></span>
            </div>
        </div>
    </div>
@endsection