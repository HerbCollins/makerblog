<?php  ?>

<div class="sidebar" data-color="blue" data-image="../assets/img/full-screen-image-3.jpg">
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    <div class="logo">
        <a href="#" class="logo-text">
            Maker Blog
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="#" class="logo-text">
            Ct
        </a>
    </div>

    <div class="sidebar-wrapper">

        <ul class="nav">
            <li class="active">
                <a href="">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#post_config">
                    <i class="fa fa-fw fa-file"></i>
                    <p>{{ trans('common.menu.posts_config') }} <b class="caret"></b></p>
                </a>
                <div class="collapse" id="post_config">
                    <ul class="nav">
                        <li><a href="{{ route('admin.post.edit') }}">{{ trans('post.create') }}</a></li>
                        <li><a href="{{ route('admin.post') }}">{{ trans('post.post_list') }}</a></li>
                        <li><a href="{{ route('admin.post.not_published') }}">{{ trans('post.not_published') }}</a></li>
                        <li><a href="components/icons.html">回收站</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-fw fa-commenting"></i>
                    <p>评论管理</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#category_config">
                    <i class="fa fa-fw fa-folder"></i>
                    <p>{{ trans('common.menu.category_config') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="category_config">
                    <ul class="nav">
                        <li><a href="components/buttons.html">Buttons</a></li>
                        <li><a href="components/grid.html">Grid System</a></li>
                        <li><a href="components/icons.html">Icons</a></li>
                        <li><a href="components/notifications.html">Notifications</a></li>
                        <li><a href="components/panels.html">Panels</a></li>
                        <li><a href="components/sweet-alert.html">Sweet Alert</a></li>
                        <li><a href="components/typography.html">Typography</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a data-toggle="collapse" href="#tags_config">
                    <i class="fa fa-fw fa-tags"></i>
                    <p>{{ trans('common.menu.tags_config') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tags_config">
                    <ul class="nav">
                        <li><a href="forms/regular.html">Regular Forms</a></li>
                        <li><a href="forms/extended.html">Extended Forms</a></li>
                        <li><a href="forms/validation.html">Validation Forms</a></li>
                        <li><a href="forms/wizard.html">Wizard</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#system_config">
                    <i class="fa fa-fw fa-cog"></i>
                    <p>{{ trans('common.menu.system_config') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="system_config">
                    <ul class="nav">
                        <li><a href="forms/regular.html">个人信息</a></li>
                        <li><a href="forms/extended.html">系统管理</a></li>
                        <li><a href="forms/validation.html">微信公众号</a></li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</div>
