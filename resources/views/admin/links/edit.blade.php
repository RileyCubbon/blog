@extends('admin.layouts.app')
@section('body')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="ibox col-sm-10 col-sm-offset-1">
                <div class="ibox-title">
                    <h5>友链列表</h5>
                </div>
                <div class="ibox-content">
                    <div style="margin: 50px auto;width: 40%">
                        <form class="form-horizontal m-t" action="{{ route('links.update',$link->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="title" class="col-md-4 control-label">友链标题：</label>
                                <div class="col-md-8">
                                    <input id="title" name="title" value="{{ old('title',$link->title) }}" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="url" class="col-md-4 control-label">友链地址：</label>
                                <div class="col-md-8">
                                    <input id="url" name="url" value="{{ old('url',$link->url) }}" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-md-4 control-label">友链描述：</label>
                                <div class="col-md-8">
                                    <textarea id="description" rows="5" class="form-control" name="description" >{{ old('description',$link->description) }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 text-center">
                                    <button class="btn btn-primary " type="submit">提交</button>
                                    <a class="btn btn-white" onclick="history.go(-1)">返回</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
