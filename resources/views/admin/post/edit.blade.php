@extends('admin.layouts.base')

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

                <div class="form-group">
                    <label for="">内容</label>
                    <textarea name="" cols="10" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">{{ trans('common.submit') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection