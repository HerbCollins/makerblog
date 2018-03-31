<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function detail(Request $request)
    {
        $slug = $request->slug;

        if(!$slug){
            abort(404);
        }

        $post = Post::where('slug' , $slug)->first();

        if( !isset($post->id) || $post->id <= 0 ){
            abort(404);
        }

        return view('home.detail' , compact('post'));
    }
}
