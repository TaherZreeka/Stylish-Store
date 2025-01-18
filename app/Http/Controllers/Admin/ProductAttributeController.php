<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DefaultAttribute;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
{
    public function index(){
        return view('admin.product_attribute.create');
    }
    public function manage(){
                $attributes=DefaultAttribute::all();
        return view('admin.product_attribute.manage' ,compact('attributes'));
    }
    public function createattribute(Request $request){
         $validate=$request->validate([
            'attribute_value'=>'unique:default_attributes|max:100|min:1',
        ]);
        DefaultAttribute::create($validate);
        return redirect()->back()->with('message','Default Attribute Add Successfully');
    }
     public function showattribute($id){
        $attribute_info=DefaultAttribute::find($id);
        return view('admin.product_attribute.edit',compact('attribute_info'));
    }
     public function updateattribute(Request $request,$id){
        $defaultattribute=DefaultAttribute::findOrFail($id);
         $validate=$request->validate([
            'attribute_value'=>'unique:default_attributes|max:100|min:3',
        ]);
        $defaultattribute->update($validate);
        return redirect()->back()->with('message','Default Attribute Updated Successfully!');
    }
    public function deleteattribute($id){
        DefaultAttribute::findOrFail($id)->delete();
        return redirect()->back()->with('message','Default Attribute Deleted Successfully!');
    }
}