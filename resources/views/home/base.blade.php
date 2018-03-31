<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootcss/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}?v=1">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('bootcss/js/bootstrap.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-fw fa-envelope"></i></a></li>
                <li><a href="#"><i class="fa fa-fw fa-weibo"></i></a></li>
                <li><a href="#"><i class="fa fa-fw fa-wechat"></i></a></li>
                <li><a href="#"><i class="fa fa-fw fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-fw fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-fw fa-github"></i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><i class="fa fa-fw fa-list"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">首页</a></li>
                        <li><a href="#">关于</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>