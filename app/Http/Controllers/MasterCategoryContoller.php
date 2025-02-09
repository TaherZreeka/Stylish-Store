<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MasterCategoryContoller extends Controller
{
    public function storecat( Request $request){
        $validate=$request->validate([
            'category_name'=>'unique:categories|max:100|min:3',
        ]);
        Category::create($validate);
        return redirect()->back()->with('message','Category Add Successfully');
    }
    public function showcat($id){
        $category_info=Category::find($id);
        return view('admin.category.edit',compact('category_info'));
    }
     public function updatecat(Request $request,$id){
        $category=Category::findOrFail($id);
         $validate=$request->validate([
            'category_name'=>'unique:categories|max:100|min:3',
        ]);
        $category->update($validate);
        return redirect()->back()->with('message','Category Updated Successfully!');
    }
    public function deletecat($id){
        Category::findOrFail($id)->delete();
        return redirect()->back()->with('message','Category Deleted Successfully!');
    }

}
