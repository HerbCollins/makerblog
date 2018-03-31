<?php

namespace App\Http\Controllers;

use App\Facades\Setting;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author = Setting::get('author');
        $posts = Post::orderBy('published_at' , 'desc')->paginate(20);
        return view('home.index' , compact('posts' , 'author'));
    }
}
