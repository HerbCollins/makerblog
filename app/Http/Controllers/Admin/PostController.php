<?php

namespace App\Http\Controllers\Admin;

use App\CategoryPost;
use App\Helpers\ErrorCodeHelper as ErrorCode;
use App\Helpers\FailedCodeHelper as FailedCode;
use App\Post;
use App\Repositories\PostRepository;
use App\TagPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::orderBy('published_at' , 'desc')->paginate(20);
        return view('admin.post.index' , compact('posts'));
    }

    /**
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        if($id){
            $post = Post::find($id);
            $category = CategoryPost::where('post_id' , $id)->value('category_id');
            $tags = TagPost::where('post_id' , $id)->pluck('tag_id');

            return view('admin.post.edit' , compact('post' , 'category' , 'tags'));
        }
        return view('admin.post.edit');
    }

    /**
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try{
            $input = $request->except('_token');

            $postRep = new PostRepository();
            if(isset($input['id']) && $input['id'] > 0){
                // 编辑
                $result = $postRep->edit($input['id'],$input['title'] , $input['slug'] , $input['description'] , $input['content'] , $input['status'] , $input['author']);
            }else{
                // 新增
                $result = $postRep->store($input['title'] , $input['slug'] , $input['description'] , $input['content'] , $input['status'] , $input['author']);
            }

            if($result){
                return response()->json([
                    'code' => 0,
                    'message' => 'success'
                ]);
            }else{
                throw new \Exception('db error' , ErrorCode::DB_ERROR);
            }
        }catch (\Exception $e){
            Log::error('[PostController::store] error code:'.$e->getCode() .', error message:'.$e->getMessage());
            return response()->json([
                'code'=> $e->getCode(),
                'message' => $e->getMessage()
            ]);
        }

    }

    /**
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function onDelete(Request $request)
    {
        try{
            $post_id = $request->id;
            if(!$post_id)
                throw new \Exception(trans('errorcode.param_error'),ErrorCode::PARAM_ERROR);

            if(Post::where('id' , $post_id)->delete())
                return response()->json([
                    'code' => 0,
                    'message' => trans('post.delete_success')
                ]);
            else
                return response()->json([
                    'code' => FailedCode::DELETE_FAILED,
                    'message' => trans('post.delete_failed')
                ]);
        }catch (\Exception $e){
            Log::error("[PostController::onDelete] error code:".$e->getCode() . ",error message:".$e->getMessage());
            return response()->json([
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ]);
        }

    }

    public function onRemove(Request $request)
    {
        return response()->json();
    }

    public function onPublish(Request $request)
    {
        return response()->json();
    }

    public function not_published()
    {
        return view('admin.post.not_published');
    }

    public function trashed()
    {
        return view('admin.post.trash');
    }
}
