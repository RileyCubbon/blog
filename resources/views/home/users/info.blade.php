@extends('home.layouts.app')

@section('head')
    <link href="{{ asset('css/plugins/cropper/cropper.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="ibox">
        <div class="ibox-content" style="margin-bottom: 20px">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <img src="img/a1.jpg" class="img-circle"><br>
                    <button id="upload-header" class="btn btn-rounded btn-white btn-sm">点击上传头像
                    </button>
                </div>
                <div class="col-lg-5 user-address">
                    <p>昵称：要吃鸡的男人</p>
                    <p>工作：PHP程序员</p>
                    <p>地址：<i class="fa fa-map-marker"></i>北京·顺义</p>
                    <p>描述：会点前端技术，div+css啊，jQuery之类的，不是很精；热爱生活，热爱互联网，热爱新技术；有一个小的团队，在不断的寻求新的突破</p>
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

@section('extension')
    <div class="header-box" style="display: none">
        <div class="ibox">
            <div class="ibox-content">
                <div class="row">
                    <div class="col-md-7">
                        <div class="image-crop">
                            <img src="img/a3.jpg">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4>图片预览：</h4>
                        <div class="img-preview img-preview-sm"></div>
                        <h4>说明：</h4>
                        <p>
                            你可以选择新图片上传，然后下载裁剪后的图片
                        </p>
                        <div class="btn-group">
                            <label title="上传图片" for="inputImage" class="btn btn-primary">
                                <input type="file" accept="image/*" name="file" id="inputImage" class="hide"> 上传新图片
                            </label>
                            <label title="下载图片" id="download" class="btn btn-primary">下载</label>
                        </div>
                        <h4>其他说明：</h4>
                        <p>
                            你可以使用<code>$({image}).cropper(options)</code>来配置插件
                        </p>
                        <div class="btn-group">
                            <button class="btn btn-white" id="zoomIn" type="button">放大</button>
                            <button class="btn btn-white" id="zoomOut" type="button">缩小</button>
                            <button class="btn btn-white" id="rotateLeft" type="button">左旋转</button>
                            <button class="btn btn-white" id="rotateRight" type="button">右旋转</button>
                            <button class="btn btn-warning" id="setDrag" type="button">裁剪</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="{{ asset('js/plugins/layer/layer.min.js') }}"></script>
    <script src="{{ asset('js/plugins/cropper/cropper.min.js') }}"></script>
    <script>
        //头像裁剪插件开始
        var $image = $(".image-crop > img");
        $($image).cropper({
            aspectRatio: 1,
            preview: ".img-preview",
            done: function (data) {
                // 输出结果
            }
        });

        var $inputImage = $("#inputImage");
        if (window.FileReader) {
            $inputImage.change(function () {
                var fileReader = new FileReader(),
                    files = this.files,
                    file;

                if (!files.length) {
                    return;
                }

                file = files[0];

                if (/^image\/\w+$/.test(file.type)) {
                    fileReader.readAsDataURL(file);
                    fileReader.onload = function () {
                        $inputImage.val("");
                        $image.cropper("reset", true).cropper("replace", this.result);
                    };
                } else {
                    showMessage("请选择图片文件");
                }
            });
        } else {
            $inputImage.addClass("hide");
        }

        $("#download").click(function () {
            window.open($image.cropper("getDataURL"));
        });

        $("#zoomIn").click(function () {
            $image.cropper("zoom", 0.1);
        });

        $("#zoomOut").click(function () {
            $image.cropper("zoom", -0.1);
        });

        $("#rotateLeft").click(function () {
            $image.cropper("rotate", 45);
        });

        $("#rotateRight").click(function () {
            $image.cropper("rotate", -45);
        });

        $("#setDrag").click(function () {
            $image.cropper("setDragMode", "crop");
        });
        //头像裁剪插件结束
    </script>
@endsection