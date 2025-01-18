@extends('admin.layouts.layout')
@section('admin_page_title')
Create Sub Category
@endsection
@section('admin_layout')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Create Sub Category</h5>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session('message'))
                <div class="alert alert-success ">
                    {{session('message')}}
                </div>
                @endif
                <form action="{{route('store.subcat')}}" method="POST">
                    @csrf
                    <label for="subcategory_name" class="fw-bold mb-2">Give Name of Your Sub Category:</label>
                    <input type="text" class="form-control" name="subcategory_name" id="subcategory_name"
                        placeholder="Laptop">
                    <label for="category_id" class="fw-bold mb-2">Select Category:</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach ( $categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-2 w-50 ">Add Sub Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection