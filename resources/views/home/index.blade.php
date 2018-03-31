@extends('home.base')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body text-center">
                    自在写书，随心而行
                </div>
            </div>
        </div>
        <div class="col-md-9">
            @foreach($posts as $post)
                <div class="panel">
                    <div class="pane-body box">
                        <div class="text-left">
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="row box-description ">
                                        <div class="col-xs-4">
                                            <p>
                                                <span class="label label-info"><i class="fa fa-fw fa-eye"></i> {{ $post->view }}</span>
                                                <span class="label label-info"><i class="fa fa-fw fa-thumbs-up"></i> {{ $post->like }}</span>
                                            </p>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <p>{{ $post->published_at }}</p>
                                        </div>
                                        <div class="col-xs-4 text-right">
                                            <span class=""><a href="">php</a></span>
                                            <span><i class="fa fa-fw fa-bookmark"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="page-title">
                                        <h2><a href="{{ url('/') }}/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                    </div>
                                </div>
                                <div class="col-xs-3 text-center">
                                    <span class="author">Author</span>
                                    <span class="page-author">{{ $author }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-9 page-description">
                                    <p>
                                        {{ $post->content }}
                                    </p>
                                </div>
                                <div class="col-xs-3 text-center">
                                    <div class="shareto">
                                        <span><a href=""><i class="fa fa-fw fa-facebook"></i></a></span>
                                        <span><a href=""><i class="fa fa-fw fa-twitter"></i></a></span>
                                        <span><a href=""><i class="fa fa-fw fa-weibo"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-3">
            <div class="panel">
                <div class="panel-body">
                    <span>博客源码: <a href="">http://github.com</a></span>
                </div>
            </div>
            <div class="panel">
                <div class="panel-body">
                    <div class="page-header">
                        <h2 class="text-center">
                            Categories | 栏目分类
                        </h2>

                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="">前端</a><span class="pull-right"><b>( <span class="text-danger">12</span> )</b></span>
                        </li>
                        <li class="list-group-item">
                            PHP<span class="pull-right"><b>( <span class="text-danger">12</span> )</b></span>
                        </li>
                        <li class="list-group-item">
                            MySQL<span class="pull-right"><b>( <span class="text-danger">12</span> )</b></span>
                        </li>
                        <li class="list-group-item">
                            Elastic Search<span class="pull-right"><b>( <span class="text-danger">12</span> )</b></span>
                        </li>
                        <li class="list-group-item">
                            区块链<span class="pull-right"><b>( <span class="text-danger">12</span> )</b></span>
                        </li>
                        <li class="list-group-item">
                            拙见<span class="pull-right"><b>( <span class="text-danger">12</span> )</b></span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="panel">
                <div class="panel-body">
                    <div class="page-header">
                        <h2 class="text-center">
                            Tags | 标签
                        </h2>
                    </div>
                    <div class="labels">
                        <a href="" class="btn btn-info btn-sm">PHP <span class="badge">12</span></a>
                        <a href="" class="btn btn-info btn-sm">PHP <span class="badge">12</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection