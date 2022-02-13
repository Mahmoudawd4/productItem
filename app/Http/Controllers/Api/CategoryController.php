<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function list(){
        $cats=Category::get();
        return response()->json($cats);
    }


    public function show($id)
    {
        $cate=Category::findOrFail($id);
        return response()->json($cate);
    }


    public function store(CategoryRequest $request){
        $request->validated();
        $cats=Category::create([
            'name'=>$request->name
        ]);

    return response()->json($cats);


    }



    public function update(CategoryRequest $request ,$id){
        $request->validated();
        $cate=Category::findOrFail($id);
        $cate->update([
            'name'=>$request->name
        ]);
        return response()->json($cate);

    }

    public function delete(Request $request ,$id)
    {

        $cate=Category::findOrFail($id);
        $cat=$cate->delete();
        return response()->json($cat);
    }

}
