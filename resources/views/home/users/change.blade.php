@extends('home.layouts.app')

@section('head')
    <link href="{{ asset('css/plugins/cropper/cropper.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div style="border-radius: 8px;padding: 50px 0 50px;" class="ibox-content">
        <h2 class="text-center form-group" style="letter-spacing: 0.1em;margin-bottom: 50px">Welcome To Riley's
            Blog</h2>
        <div style="width: 80%;margin: 0 auto;">
            <div class="inline" style="width:64%;">
                <div class="custom-form">
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" value="{{ $user->name }}" disabled>
                        <span class="help-block m-b-none">
                    <i class="fa fa-info-circle"></i>
                    昵称注册后不支持修改
                </span>
                    </div>
                    <form action="{{ route('users.update') }}" id="change-user" method="post">
                        <div class="form-group">
                            {{ csrf_field() }}
                            <input type="text" name="work" class="form-control"  value="{{ old('work',$user->work) }}" placeholder="职业">
                            @if($errors->has('work'))
                            <span class="help-block m-b-none text-danger">
                                 <i class="fa fa-info-circle"></i>
                                {{ $errors->first('work') }}
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="url" name="url" value="{{ old('url',$user->url) }}" class="form-control" placeholder="Github">
                            @if($errors->has('url'))
                            <span class="help-block m-b-none text-danger">
                                <i class="fa fa-info-circle"></i>
                                {{ $errors->first('url') }}
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea name="description" class="form-control" style="border-radius: 8px" placeholder="个人简介" rows="5">{{ old('description',$user->description) }}</textarea>
                            @if($errors->has('description'))
                            <span class="help-block m-b-none text-danger">
                                <i class="fa fa-info-circle"></i>
                                {{ $errors->first('description') }}
                            </span>
                            @endif
                        </div>
                    </form>
                    <div class="text-center">
                        <button style="width:40%;margin-right:10px;" onclick="document.getElementById('change-user').submit()" class="btn btn-primary  m-b">
                            CHANGE
                        </button>
                        <button style="width:40%" class="btn btn-white m-b inline" onclick="location.href='{{ route('users.info') }}'" >LOGIN</button>
                    </div>
                </div>
            </div>
            <div class="text-center inline" style="width: 35%;vertical-align: top;padding-top: 20px;">
                <img src="{{ $user->avatar }}" class="img-circle" style="margin-bottom: 10px"><br>
                <button id="upload-header" class="btn btn-rounded btn-white btn-sm">点击上传头像</button>
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
                            <img src="{{ asset('img/header.jpg') }}">
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