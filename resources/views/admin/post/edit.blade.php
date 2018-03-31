@extends('admin.layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('editormd/css/editormd.css') }}">
@endsection

@section('content')
    <div class="card">
        <div class="header">
            <h4 class="title">编辑</h4>
            <p class="category">新建/编辑文章</p>
        </div>
        <div class="content">
            <form action="{{ route('admin.post.store') }}" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">标题</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">slug</label>
                            <input type="text" class="form-control" name="slug">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Author</label>
                            <input type="text" class="form-control" name="author" value="maker">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="">描述 | description</label>
                    <input type="text" class="form-control" name="description">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">分类</label>
                            <select name="category" id="" class="form-control">
                                <option value="">PHP</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">标签</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group" id="editorcontent">
                    <label for="">内容</label>
                    <textarea style="display: none;" name="content"></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">{{ trans('common.submit') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('editormd/src/editormd.js') }}"></script>
    <script type="text/javascript">
        var testEditor;
        $(function () {
            testEditor = editormd("editorcontent",{
                width:"100%",
                height:600,
                syncScrolling:"single",
                taskList : true,
                tocm: true,
                path:"{{asset('/editormd/lib/')}}" + "/",
                tex:true,
                flowChart       : true,
                sequenceDiagram:true,
                saveHTMLToTextarea : true,
                imageUploadURL: "php/upload.php",
            });
        });
    </script>
@endsection