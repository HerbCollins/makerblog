<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    protected $title;

    protected $middleware  = 'auth';

    protected $route_path;

    protected $view;

    public function __construct()
    {

    }


}
