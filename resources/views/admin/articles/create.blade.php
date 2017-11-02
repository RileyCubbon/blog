@extends('admin.layouts.app')
@section('head')
    <link type="text/css" href="{{ asset('css/plugins/markdown/bootstrap-markdown.min.css') }}" rel="stylesheet">
@endsection

@section('body')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="ibox-title">
                    <h5>完整验证表单</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="form_basic.html#">选项1</a>
                            </li>
                            <li><a href="form_basic.html#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal m-t" id="signupForm">
                        <div class="form-group">
                            <label for="firstname" class="col-sm-3 control-label">文章标题：</label>
                            <div class="col-sm-8">
                                <input id="firstname" name="firstname" class="form-control" type="text">
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 这里写点提示的内容</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">是否显示：</label>
                            <div class="col-sm-8">
                                <div class="radio radio-inline">
                                    <input type="radio" id="inlineRadio1" class="form-control" value="option1"
                                           name="radioInline" checked="">
                                    <label class="control-label" for="inlineRadio1"> 选项 01 </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input type="radio" id="inlineRadio2" class="form-control" value="option2"
                                           name="radioInline">
                                    <label class="control-label" for="inlineRadio2"> 选项 02 </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">是否推荐：</label>
                            <div class="col-sm-8">
                                <div class="radio radio-inline">
                                    <input type="radio" id="inlineRadio3" class="form-control" value="option1"
                                           name="radioInline1" checked="">
                                    <label class="control-label" for="inlineRadio3"> 选项 01 </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input type="radio" id="inlineRadio4" class="form-control" value="option2"
                                           name="radioInline1">
                                    <label class="control-label" for="inlineRadio4"> 选项 02 </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">选择标签：</label>
                            <div class="col-sm-8">
                                <div class="checkbox checkbox-inline">
                                    <input type="checkbox" class="form-control" id="inlineCheckbox1" value="option1">
                                    <label class="control-label" for="inlineCheckbox1"> 选项01 </label>
                                </div>
                                <div class="checkbox checkbox-inline">
                                    <input type="checkbox" class="form-control" id="inlineCheckbox2" value="option1"
                                           checked="">
                                    <label class="control-label" for="inlineCheckbox2"> 选项02 </label>
                                </div>
                                <div class="checkbox checkbox-inline">
                                    <input type="checkbox" class="form-control" id="inlineCheckbox3" value="option1">
                                    <label class="control-label" for="inlineCheckbox3"> 选项03 </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-sm-3 control-label">文章内容：</label>
                            <div class="col-sm-8">
                                <textarea id="content" class="form-control" name="content" data-provide="markdown"
                                          rows="15"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    {{--markdown编辑器js--}}
    <script src="{{ asset('js/plugins/markdown/bootstrap-markdown.js') }}"></script>
    <script src="{{ asset('js/plugins/markdown/bootstrap-markdown.zh.js') }}"></script>
@endsection