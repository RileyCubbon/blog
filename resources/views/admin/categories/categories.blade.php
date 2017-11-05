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
                    <h5>文章分类</h5>
                    <div class="ibox-tools">
                        <a data-toggle="modal" href="{{ route('categories.index') }}#modal-form">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table table-hover" id="category-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>分类名称</th>
                            <th>文章数</th>
                            <th>状态</th>
                            <th>添加时间</th>
                            <th>添加人</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>
                                <span class="line">{{ $category->category }}</span>
                            </td>
                            <td>3</td>
                            <td class="{{ $category->status ? 'text-navy' : 'text-danger' }}" id="category-status">
                                {{ $category->status ? '已启用' : '已停用' }}
                            </td>
                            <td>{{ $category->created_at }}</td>
                            <td>{{ $category->admin_name }}</td>
                            <td>
                                @if($category->status)
                                <a href="{{ route('categories.destroy',$category->id) }}" class="stop-category" data-placement="top" data-original-title="点击停用分类"><i class="fa fa-times text-danger"></i></a>
                                @else
                                <a href="{{ route('categories.update',$category->id) }}" class="start-category" data-placement="top" data-original-title="点击启用分类"><i class="fa fa-check text-navy"></i></a>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">暂无分类</td>
                        </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="modal-form" class="modal fade category-modal" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="m-t-none m-b text-center">添加分类</h3>
                                <div class="form-group">
                                    <label>分类名称：</label>
                                    <input name="category" type="text" placeholder="请输入分类名称" class="form-control">
                                </div>
                                <div class="row">
                                    <button class="btn btn-primary col-sm-offset-5"><strong>添加分类</strong>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="{{ asset('js/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert/sweetalert.min.js') }}"></script>
@endsection