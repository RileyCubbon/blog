@extends('admin.layouts.app')

@section('head')
<link rel="stylesheet" href="{{ asset('css/plugins/toastr/toastr.min.css') }}">
@include('editor::head')
@endsection
@section('body')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="ibox-title">
                    <h5>编辑文章</h5>
                </div>
                <div class="ibox-content" style="padding:0 10% 0 10%">
                    <form class="form-horizontal m-t articleForm" action="{{ route('articles.update',$article->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title" class="col-md-12">文章标题：</label>
                            <div class="col-md-12">
                                <input id="title" name="title" class="form-control" value="{{ $article->title }}" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">选择标签：</label>
                            <div class="col-sm-12">
                                @foreach($categories as $category)
                                <div class="checkbox checkbox-inline">
                                    <input type="checkbox" name="categories" class="form-control" {{ in_array($category->id,$contain) ? 'checked' : '' }} id="category{{$loop->iteration}}" value="{{ $category->id }}">
                                    <label class="control-label" for="category{{$loop->iteration}}">{{ $category->category }}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-12">文章描述：</label>
                            <div class="col-sm-12">
                                <textarea id="content" rows="5" class="form-control" name="description" >{{ $article->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="myEditor" class="col-sm-12">文章内容：</label>
                            <div class="col-sm-12 editor">
                                <textarea id="myEditor" class="form-control" name="content" >{{ $article->content }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 text-center">
                                <a class="btn btn-primary" id="article_update">提交</a>
                                <a class="btn btn-white" onclick="history.go(-1)">返回</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="{{ asset('js/plugins/toastr/toastr.min.js') }}"></script>
@endsection