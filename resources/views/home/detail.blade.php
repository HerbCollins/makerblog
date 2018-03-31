@extends('home.base')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel">
                <div class="panel-body">
                    <h1>{{ $post->title }}</h1>
                    <hr>
                    <p><span class="label label-primary"><i class="fa fa-fw fa-eye"></i>{{ $post->view }}</span></p>
                    <hr>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection