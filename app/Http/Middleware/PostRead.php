<?php

namespace App\Http\Middleware;

use App\Post;
use Closure;
use Illuminate\Support\Facades\Log;

class PostRead
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $slug = $request->slug;
        if(!$slug || empty($slug))
            return redirect()->back();

        $post = Post::where('slug' , $slug)->first();
        if(isset($post->id) && $post->id > 0){
            $post->view = $post->view+1;
            if($post->save()){
                return $next($request);
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }

    }
}
