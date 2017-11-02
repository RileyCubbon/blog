@extends('admin.layouts.app')
@section('body')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="ibox col-sm-10 col-sm-offset-1">
                <div class="ibox-title">
                    <h5>文章分类</h5>
                    <div class="ibox-tools">
                        <a data-toggle="modal" href="{{ route('admins.category') }}#modal-form">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table table-hover">
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
                        <tr>
                            <td>1</td>
                            <td>
                                <span class="line">Laravel</span>
                            </td>
                            <td>3</td>
                            <td class="text-navy">启用中</td>
                            <td>2017-10-26 12:08:32</td>
                            <td>Junyy</td>
                            <td>
                                <a href="#" title="点击启用分类"><i class="fa fa-check text-navy"></i></a>
                                <a href="#" title="点击停用分类"><i class="fa fa-times text-danger"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="modal-form" class="modal fade" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="m-t-none m-b text-center">添加分类</h3>

                                <form role="form">
                                    <div class="form-group">
                                        <label>分类名称：</label>
                                        <input type="email" placeholder="请输入分类名称" class="form-control">
                                    </div>
                                    <div class="row">
                                        <button class="btn btn-primary col-sm-offset-5" type="submit"><strong>添加分类</strong>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection