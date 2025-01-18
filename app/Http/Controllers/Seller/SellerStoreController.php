<?php

namespace App\Http\Controllers\Seller;

use App\Models\Store;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerStoreController extends Controller
{
    public function index()
    {
        return view('seller.store.create');
    }

    public function manage()
    {           $user_id=Auth::user()->id;
                $stores=Store::where('user_id',$user_id)->get();

        return view('seller.store.manage',compact('stores'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'store_name' => 'unique:stores|max:100|min:3',
            'slug' => 'required|unique:stores',
            'details' => 'required',
        ]);

        Store::create([
            'store_name' => $request->store_name,
            'slug' => $request->slug,
            'details' => $request->details,
            'user_id' => auth()->user()->id, // Use auth() helper to get the authenticated user's ID
        ]);

        return redirect()->back()->with('message', 'Store Added Successfully');
    }
     public function show($id){
        $store_info=Store::find($id);
        return view('seller.store.edit',compact('store_info'));
    }
     public function update(Request $request,$id){
        $stores=Store::findOrFail($id);
         $validate=$request->validate([
           'store_name' => 'unique:stores|max:100|min:3',
            'slug' => 'required|unique:stores',
            'details' => 'required',
        ]);
               $stores->update($validate);

        return redirect()->back()->with('message','Store Updated Successfully!');
    }
    public function delete($id){
        Store::findOrFail($id)->delete();
        return redirect()->back()->with('message','Store Deleted Successfully!');
    }
}