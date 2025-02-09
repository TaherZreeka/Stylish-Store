<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.create');
    }
    public function manage(){
        $categories=Category::all();
        return view('admin.category.manage',compact('categories'));
    }
}
