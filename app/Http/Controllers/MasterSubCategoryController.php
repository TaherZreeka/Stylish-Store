<?php

namespace App\Http\Controllers;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class MasterSubCategoryController extends Controller
{
    public function storesubcat( Request $request){
        $validate=$request->validate([
            'subcategory_name'=>'unique:subcategories|max:100|min:3',
            'category_id'=>'required|exists:categories,id',
        ]);
        Subcategory::create($validate);
        return redirect()->back()->with('message','Sub Category Add Successfully');
    }
      public function showsubcat($id){
        $subcategory_info=Subcategory::find($id);
        return view('admin.sub_category.edit',compact('subcategory_info'));
    }
     public function updatesubcat(Request $request,$id){
        $subcategory=Subcategory::findOrFail($id);
         $validate=$request->validate([
            'subcategory_name'=>'unique:subcategories|max:100|min:3',
        ]);
        $subcategory->update($validate);
        return redirect()->back()->with('message','Category Updated Successfully!');
    }
    public function deletesubcat($id){
        Subcategory::findOrFail($id)->delete();
        return redirect()->back()->with('message','Category Deleted Successfully!');
    }
}