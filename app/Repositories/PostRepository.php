<?php
/**
 * Created by PhpStorm.
 * User: Maker <maker68@163.com>
 * Date: 2018/3/30 0030
 * Time: 23:02
 */

namespace App\Repositories;


use App\CategoryPost;
use App\Helpers\ErrorCodeHelper as ErrorCode;
use App\Post;
use Illuminate\Support\Facades\Config;

class PostRepository
{
    public function __construct()
    {

    }

    /**
     * @param        $title
     * @param        $slug
     * @param        $description
     * @param        $content
     * @param int    $status
     * @param string $author
     *
     * @return bool|mixed
     * @throws \Exception
     * @author Maker <maker68@163.com>
     */
    public function store($title , $slug , $description , $content , $status = 1 , $author = '' , $category_id = null)
    {

        if(empty($title) || strlen($title) > 1024 )
            throw new \Exception('title is too long or empty' , ErrorCode::TITLE_INPUT_ERROR);

        if(empty($description) || strlen($description) > 1024)
            throw new \Exception('description is too long or empty' , ErrorCode::DESCRIPTION_INPUT_ERROR);

        if(empty($content))
            throw new \Exception('content is empty' , ErrorCode::CONTENT_INPUT_EMPTY);

        if(!$slug)
            throw new \Exception('slug is empty' , ErrorCode::SLUG_INPUT_EMPTY);
        $author = $author ? $author : Config::get('blog.default_author');

        $post = new Post();
        $post->title = $title;
        $post->description = $description;
        $post->content = $content;
        $post->slug = $slug;
        $post->author = $author;
        $post->status = $status;
        $post->like = mt_rand(10,200);
        $post->view = mt_rand(200 , 400);

        if($post->save()){

            if($category_id)
                self::category($post->id , $category_id);

            return $post->id;
        }else{
            throw new \Exception('DB error' , ErrorCode::DB_ERROR);
        }
    }

    /**
     * @param        $id
     * @param        $title
     * @param        $slug
     * @param        $description
     * @param        $content
     * @param int    $status
     * @param string $author
     *
     * @return bool|mixed
     * @throws \Exception
     * @author Maker <maker68@163.com>
     */
    public function edit($id , $title , $slug , $description , $content , $status = 1 , $author = '' , $category_id = null)
    {
        if(empty($id) || $id < 0){
            throw new \Exception('id error' , ErrorCode::PARAM_ERROR);
        }

        $post = Post::find($id);
        if(!$post)
            throw new \Exception('Not found this post' , ErrorCode::NOT_FOUND);

        if(empty($title) || strlen($title) > 1024 )
            throw new \Exception('title is too long or empty' , ErrorCode::TITLE_INPUT_ERROR);

        if(empty($description) || strlen($description) > 1024)
            throw new \Exception('description is too long or empty' , ErrorCode::DESCRIPTION_INPUT_ERROR);

        if(empty($content))
            throw new \Exception('content is empty' , ErrorCode::CONTENT_INPUT_EMPTY);

        if(!$slug)
            throw new \Exception('slug is empty' , ErrorCode::SLUG_INPUT_EMPTY);
        $author = $author ? $author : Config::get('blog.default_author');

        $post->title = $title;
        $post->description = $description;
        $post->content = $content;
        $post->slug = $slug;
        $post->author = $author;
        $post->status = $status;

        if($post->save()){

            if($category_id)
                self::category($post->id , $category_id);

            return $post->id;
        }else{
            throw new \Exception('DB error' , ErrorCode::DB_ERROR);
        }
    }

    private function category($post_id , $category_id)
    {
        $category_post = CategoryPost::where(['post_id' => $post_id])->first();
        if(isset($category_post->id) && $category_post->id > 0){
            if($category_post->category_id == $category_id)
                return true;

            $category_post->category_id = $category_id;
        }else{
            $category_post = new CategoryPost();
            $category_post->post_id = $post_id;
            $category_post->category_id = $category_id;
        }

        if($category_post->save()){
            return true;
        }else{
            throw new \Exception('DB error' , ErrorCode::DB_ERROR);
        }

    }
}