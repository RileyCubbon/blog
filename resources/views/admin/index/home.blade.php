@extends('admin.layouts.app')
@section('body')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="pull-right"><i class="fa fa-eye"></i></span>
                        <h5>用户数量</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">40 886,200</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="pull-right"><i class="fa fa-eye"></i></span>
                        <h5>文章数量</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">275,800</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>今日访客</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">106,120</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>点击前三文章</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="project-list">

                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td class="project-status">
                                        <span class="label label-primary">1</span>
                                    </td>
                                    <td class="project-title">
                                        <a href="project_detail.html">LIKE－一款能够让用户快速获得认同感的兴趣社交应用</a>
                                        <br>
                                        <small>创建于 2014.08.15</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>2017-10-26 12:08:32</small>
                                    </td>
                                    <td class="project-people">
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a1.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a2.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a4.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a5.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i>
                                            查看 </a>
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>
                                            编辑 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                            <span class="label label-primary">进行中
                                        </span></td>
                                    <td class="project-title">
                                        <a href="project_detail.html">米莫说｜MiMO Show</a>
                                        <br>
                                        <small>创建于 2014.08.15</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>当前进度： 28%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 28%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a7.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a6.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i>
                                            查看 </a>
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>
                                            编辑 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                            <span class="label label-default">已取消
                                        </span></td>
                                    <td class="project-title">
                                        <a href="project_detail.html">商家与购物用户的交互试衣应用</a>
                                        <br>
                                        <small>创建于 2014.08.15</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>当前进度： 8%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 8%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a5.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i>
                                            查看 </a>
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>
                                            编辑 </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>消息</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content ibox-heading">
                        <h3><i class="fa fa-envelope-o"></i> 新消息</h3>
                        <small><i class="fa fa-tim"></i> 您有22条未读消息</small>
                    </div>
                    <div class="ibox-content">
                        <div class="feed-activity-list">

                            <div class="feed-element">
                                <div>
                                    <small class="pull-right text-navy">2017-10-26 12:08:23</small>
                                    <a href="#"><strong>井幽幽</strong></a>
                                    <div>
                                        有人说：“一辈子很长，要跟一个有趣的人在一起”。我想关注我的人，应该是那种喜欢找乐子也乐意分享乐趣的人，你们一定挺优秀的。所以单身的应该在这条留言，互相勾搭一下。特别有钱人又帅可以直接私信我！
                                    </div>
                                    <small class="text-muted">4月11日 00:00</small>
                                </div>
                            </div>

                            <div class="feed-element">
                                <div>
                                    <small class="pull-right">2月前</small>
                                    <strong>马伯庸 </strong>
                                    <div>又方便，又防水，手感又好，还可以用手机遥控。简直是拍戏利器，由其是跟老师们搭戏的时候…想想还有点小激动啊，嘿嘿。</div>
                                    <small class="text-muted">11月8日 20:08</small>
                                </div>
                            </div>

                            <div class="feed-element">
                                <div>
                                    <small class="pull-right">5月前</small>
                                    <strong>芒果宓 </strong>
                                    <div>一个完整的梦。</div>
                                    <small class="text-muted">11月8日 20:08</small>
                                </div>
                            </div>

                            <div class="feed-element">
                                <div>
                                    <small class="pull-right">5月前</small>
                                    <strong>刺猬尼克索</strong>
                                    <div>哈哈哈哈 你卖什么萌啊! 蠢死了</div>
                                    <small class="text-muted">11月8日 20:08</small>
                                </div>
                            </div>


                            <div class="feed-element">
                                <div>
                                    <small class="pull-right">5月前</small>
                                    <strong>老刀99</strong>
                                    <div>昨天评论里你见过最“温暖和感人”的诗句，整理其中经典100首，值得你收下学习。</div>
                                    <small class="text-muted">11月8日 20:08</small>
                                </div>
                            </div>
                            <div class="feed-element">
                                <div>
                                    <small class="pull-right">5月前</small>
                                    <strong>娱乐小主 </strong>
                                    <div>你是否想过记录自己的梦？你是否想过有自己的一个记梦本？小时候写日记，没得写了就写昨晚的梦，后来变成了习惯………翻了一晚上自己做过的梦，想哭，想笑…</div>
                                    <small class="text-muted">11月8日 20:08</small>
                                </div>
                            </div>
                            <div class="feed-element">
                                <div>
                                    <small class="pull-right">5月前</small>
                                    <strong>DMG电影 </strong>
                                    <div>《和外国男票乘地铁，被中国大妈骂不要脸》妹子实在委屈到不行，中国妹子找外国男友很令人不能接受吗？大家都来说说自己的看法</div>
                                    <small class="text-muted">11月8日 20:08</small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>未处理BUG</h5>
                        <div class="ibox-tools">
                            <a href="projects.html" class="btn btn-primary btn-xs">查看所有BUG</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="alert alert-danger alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <a href="#" class="alert-link">
                                <h4>骚年还有<span class="text-danger">5</span>个BUG没有解决，想想你的银行卡余额，还不快解决</h4>
                            </a>
                        </div>
                        <div class="project-list">

                            <table class="table table-hover">
                                <tbody>
                                <tr>
                                    <td class="project-status">
                                            <span class="label label-primary">已修复
                                        </span></td>
                                    <td class="project-title">
                                        <a href="project_detail.html">LIKE－一款能够让用户快速获得认同感的兴趣社交应用</a>
                                    </td>
                                    <td class="project-completion">
                                        Fatal Error
                                    </td>
                                    <td class="project-people">
                                        <small>2017-10-26 12:08:32</small>
                                    </td>
                                    <td class="project-actions">
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i>
                                            查看 </a>
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>
                                            编辑 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                            <span class="label label-danger">未修复
                                        </span></td>
                                    <td class="project-title">
                                        <a href="project_detail.html">米莫说｜MiMO Show</a>
                                        <br>
                                        <small>创建于 2014.08.15</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>当前进度： 28%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 28%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a7.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a6.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i>
                                            查看 </a>
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>
                                            编辑 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                            <span class="label label-default">已取消
                                        </span></td>
                                    <td class="project-title">
                                        <a href="project_detail.html">商家与购物用户的交互试衣应用</a>
                                        <br>
                                        <small>创建于 2014.08.15</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>当前进度： 8%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 8%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a5.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i>
                                            查看 </a>
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>
                                            编辑 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                            <span class="label label-primary">进行中
                                        </span></td>
                                    <td class="project-title">
                                        <a href="project_detail.html">天狼---智能硬件项目</a>
                                        <br>
                                        <small>创建于 2014.08.15</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>当前进度： 83%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 83%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a2.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a1.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a7.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i>
                                            查看 </a>
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>
                                            编辑 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                            <span class="label label-primary">进行中
                                        </span></td>
                                    <td class="project-title">
                                        <a href="project_detail.html">乐活未来</a>
                                        <br>
                                        <small>创建于 2014.08.15</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>当前进度： 97%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 97%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a4.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i>
                                            查看 </a>
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>
                                            编辑 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                            <span class="label label-primary">进行中
                                        </span></td>
                                    <td class="project-title">
                                        <a href="project_detail.html">【私人医生项目】</a>
                                        <br>
                                        <small>创建于 2014.08.15</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>当前进度： 48%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 48%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a1.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a2.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a4.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a5.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i>
                                            查看 </a>
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>
                                            编辑 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                            <span class="label label-primary">进行中
                                        </span></td>
                                    <td class="project-title">
                                        <a href="project_detail.html">快狗家居</a>
                                        <br>
                                        <small>创建于 2014.08.15</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>当前进度： 28%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 28%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a7.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a6.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i>
                                            查看 </a>
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>
                                            编辑 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                            <span class="label label-default">已取消
                                        </span></td>
                                    <td class="project-title">
                                        <a href="project_detail.html">线下超市+线上商城+物流配送互联系统</a>
                                        <br>
                                        <small>创建于 2014.08.15</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>当前进度： 8%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 8%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a5.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i>
                                            查看 </a>
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>
                                            编辑 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                            <span class="label label-primary">进行中
                                        </span></td>
                                    <td class="project-title">
                                        <a href="project_detail.html">P司机汽车省钱专家</a>
                                        <br>
                                        <small>创建于 2014.08.15</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>当前进度： 83%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 83%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a2.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a1.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i>
                                            查看 </a>
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>
                                            编辑 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                            <span class="label label-primary">进行中
                                        </span></td>
                                    <td class="project-title">
                                        <a href="project_detail.html">左左 靠谱男同交友</a>
                                        <br>
                                        <small>创建于 2014.08.15</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>当前进度： 97%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 97%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a4.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i>
                                            查看 </a>
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>
                                            编辑 </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="project-status">
                                            <span class="label label-primary">进行中
                                        </span></td>
                                    <td class="project-title">
                                        <a href="project_detail.html">程序员私活圈</a>
                                        <br>
                                        <small>创建于 2014.08.15</small>
                                    </td>
                                    <td class="project-completion">
                                        <small>当前进度： 28%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 28%;" class="progress-bar"></div>
                                        </div>
                                    </td>
                                    <td class="project-people">
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a7.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a6.jpg"></a>
                                        <a href="projects.html"><img alt="image" class="img-circle" src="img/a3.jpg"></a>
                                    </td>
                                    <td class="project-actions">
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-folder"></i>
                                            查看 </a>
                                        <a href="projects.html#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i>
                                            编辑 </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
@endsection