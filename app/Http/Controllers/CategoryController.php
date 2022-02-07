<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function list(){
        // get all cate from db
        $cats=Category::get();
        return view('cats.index',[
            'cats' => $cats,
        ]);
    }


    public function show($id)
    {
        $cate=Category::findOrFail($id);
        return view('cats.show',compact('cate'));
    }

    public function create(){
        return view('cats.create');
    }
    public function store(CategoryRequest $request){

        //validation
        // $request->validate([
        //     'name' =>'required|string|max:100',
        // ]);

        //$request->validate();
        $request->validated();
        Category::create([
            'name'=>$request->name
        ]);

      return redirect(route('cat.list'));
      //get return view
      //post return redirect

    }

    public function edit($id)
    {

        $cate=Category::findOrFail($id);
        return view('cats.edit',compact('cate'));
    }

    public function update(CategoryRequest $request ,$id){

        //validation
        // $request->validate([
        //     'name' =>'required|string|max:100',
        // ]);

        $request->validated();
        $cate=Category::findOrFail($id);
        $cate->update([
            'name'=>$request->name
        ]);

        return redirect(route('cat.list',$id));
    }

    public function delete(Request $request ,$id)
    {
        //        $user = User::find($id);
        //$user->delete();
        // $id=$request->id;
        $cate=Category::findOrFail($id);
        $cate->delete();
        return redirect(route('cat.list'));
    }

}
