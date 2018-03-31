<?php
/**
 * Created by PhpStorm.
 * User: Maker <maker68@163.com>
 * GITHUB: HerbCollins <http://github.com/herbcollins>
 * Date: 2018/3/31 0031
 * Time: 1:35
 */

namespace App\Repositories;


use App\Category;
use App\Helpers\ErrorCodeHelper as ErrorCode;

class CategoryRepository
{
    /**
     * @param null $name
     *
     * @return bool|mixed
     * @throws \Exception
     * @author Maker <maker68@163.com>
     */
    public function store($name = null)
    {
        if(!$name)
            return false;

        $category = new Category();
        $category->name = $name;
        if($category->save())
            return $category->id;
        else
            throw new \Exception('DB error' , ErrorCode::DB_ERROR);
    }

    /**
     * @param int  $id
     * @param null $name
     *
     * @return bool|int
     * @throws \Exception
     * @author Maker <maker68@163.com>
     */
    public function edit($id = 0, $name = null)
    {
        if(!$id || !is_numeric($id) || $id <= 0)
            throw new \Exception('param error' , ErrorCode::PARAM_ERROR);

        $category = Category::find($id);
        if($category){
            if( $category->name == $name )
                return true;

            $category->name = $name;

            if($category->save())
                return $id;
            else
                throw new \Exception('DB error' , ErrorCode::DB_ERROR);
        }else{
            throw new \Exception('Not Found' , ErrorCode::NOT_FOUND);
        }
    }
}