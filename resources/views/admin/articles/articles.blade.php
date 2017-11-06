@extends('admin.layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/sweetalert/sweetalert.css') }}">
@endsection
@section('body')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="ibox col-sm-10 col-sm-offset-1">
                <div class="ibox-title">
                    <h5>文章列表</h5>
                </div>
                <div class="ibox-content">
                    <form action="{{ route('articles.search') }}" method="POST">
                        <div class="input-group">
                            {{ csrf_field() }}
                            <input type="text" placeholder="后台主题" name="search" value="{{ session('search') }}" class="form-control input-lg">
                            <div class="input-group-btn">
                                <button class="btn btn-lg btn-primary" type="submit">
                                    搜索
                                </button>
                            </div>
                        </div>
                    </form>
                    <table class="table table-hover" id="articles-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>文章标题</th>
                            <th>分类</th>
                            <th>状态</th>
                            <th>作者</th>
                            <th>点击量</th>
                            <th>推荐数</th>
                            <th>收藏人数</th>
                            <th>是否推荐</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td class="text-info">{{ $article->title }}</td>
                            <td>{{ $article->categories->implode('category',',') }}</td>
                            <td>
                                <a href="{{ route('articles.destroy',$article->id) }}" name="is_show" class="text-{{ $article->is_show ? 'navy' : 'danger' }}" data-placement="top" data-original-title="点击修改文章状态">
                                    {{ $article->is_show ? '显示' : '隐藏' }}
                                </a>
                            </td>
                            <td>{{ $article->admin->name }}</td>
                            <td>{{ $article->click_amount }}</td>
                            <td>{{ $article->recommend_number }}</td>
                            <td>0</td>
                            <td>
                                <a href="{{ route('articles.destroy',$article->id) }}" name="recommend" class="text-{{ $article->recommend ? 'navy' : 'danger' }}" data-placement="top" data-original-title="点击修改文章推荐状态">
                                    {{ $article->recommend ? '推荐' : '不推荐' }}
                                </a>
                            </td>
                            <td>{{ $article->created_at }}</td>
                            <td>
                                <a href="{{ route('articles.edit',$article->id) }}" class="text-navy" data-placement="top" data-original-title="点击编辑文章"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">暂无相关文章</td>
                        </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{--{{ $articles->links() }}--}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="{{ asset('js/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert/sweetalert.min.js') }}"></script>
@endsection