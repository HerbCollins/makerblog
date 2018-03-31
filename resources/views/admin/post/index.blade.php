@extends('admin.layouts.base')

@section('content')
    <div class="card">
        <div class="content">
            <a href="{{ route('admin.post.edit') }}" class="btn btn-info">新增</a>
            <a href="" class="btn btn-danger">删除</a>
            <div class="fresh-datatables">
                <table id="datatables"  class="table table-striped table-no-bordered table-hover"  cellspacing="0" width="100%" style="width:100%">
                    <thead>
                    <tr>
                        <th><input type="checkbox" /></th>
                        <th>标题</th>
                        <th>栏目</th>
                        <th>标签</th>
                        <th>发布时间</th>
                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>{{ $post->title }}</td>
                            <td></td>
                            <td></td>
                            <td>{{ $post->published_at }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                <a href=""><i class="fa fa-fw fa-upload"></i></a>
                                <a href=""><i class="fa fa-fw fa-edit"></i></a>
                                <a href=""><i class="fa fa-fw fa-close"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>

@endsection