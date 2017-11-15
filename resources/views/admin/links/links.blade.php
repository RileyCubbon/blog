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
                    <h5>友链列表</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-hover" id="category-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>友链标题</th>
                            <th>友链地址</th>
                            <th>友链描述</th>
                            <th>友链状态</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($links as $link)
                        <tr>
                            <td>{{ $link->id }}</td>
                            <td>{{ $link->title }}</td>
                            <td>{{ $link->url }}</td>
                            <td>{{ $link->description }}</td>
                            <td>
                                <a href="{{ route('links.destroy',$link->id) }}" name="is_show" class="text-{{ $link->is_show ? 'navy' : 'danger' }}" data-placement="top" data-original-title="点击修改友链状态">
                                    {{ $link->is_show ? '显示' : '隐藏' }}
                                </a>
                            </td>
                            <td>{{ $link->created_at }}</td>
                            <td>
                                <a href="{{ route('links.edit',$link->id) }}" class="text-navy" data-placement="top" data-original-title="点击编辑友链"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">暂无任何友情链接</td>
                        </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="{{ asset('js/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert/sweetalert.min.js') }}"></script>
@endsection
