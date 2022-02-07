<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtiRequest;
use App\Http\Requests\ArtiupdateRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //

    function list(){
        // get all cate from db
        $arti=Article::get();
        return view('arti.index',[
            'arti' => $arti,
        ]);
    }


    public function show($id)
    {
        $arti=Article::findOrFail($id);
        return view('arti.show',compact('arti'));
    }

    public function create(){
        $cates=Category::select('id','name')->get();
        return view('arti.create',compact('cates'));
    }
    public function store(ArtiRequest $request){

        //validation

        // $request->validate([
        //     'name' =>'required|string|max:100',
        //     'details' =>'required|string|max:100',
        //     'slug' =>'required|unique:articles|string|max:100',
        //     'is_used' =>'required|string|max:100',
        //     'category_ids'=>'required',
        //     'category_ids.*'=>'exists:categories,id'
        // ]);
        $request->validated();

        $arti=Article::create([
            'name'=>$request->name,
            'details'=>$request->details ,
            'slug'=>$request->slug ,
            'is_used'=>$request->is_used ,
        ]);

        $arti->categories()->sync($request->category_ids);

      return redirect(route('arti.list'));
      //get return view
      //post return redirect

    }

    public function edit($id)
    {
        $cates=Category::select('id','name')->get();
        $arti=Article::findOrFail($id);
        return view('arti.edit',compact('arti'));
    }

    public function update(ArtiupdateRequest $request ,$id){
        //validation
        // $request->validate([
        //     'name' =>'required|string|max:100',
        //     'details' =>'required|string|max:100',
        //     'slug' =>'required|string|max:100',
        //     'is_used' =>'required|string|max:100',
        // ]);
        $request->validated();
        $arti=Article::findOrFail($id);
        $arti->update([
            'name'=>$request->name,
            'details'=>$request->details ,
            'slug'=>$request->slug ,
            'is_used'=>$request->is_used ,
        ]);
        return redirect(route('arti.list',$id));
    }

    public function delete(Request $request ,$id)
    {
        //        $user = User::find($id);
        //$user->delete();
        // $id=$request->id;
        $arti=Article::findOrFail($id);
        $arti->delete();
        return redirect(route('arti.list'));
    }
}
