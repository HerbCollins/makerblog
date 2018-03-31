<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(20);
        return view('admin.category.index' , compact('categories'));
    }

    public function onStore(Request $request)
    {
        try{
            $input = $request->except('_token');

            if(isset($input['id']) && $input['id'] > 0){
                // 编辑

            }else{
                // 新增
            }

        }catch (\Exception $e){

        }
    }

    public function onDelete(Request $request)
    {
        try{

        }catch (\Exception $e){

        }
    }
}
