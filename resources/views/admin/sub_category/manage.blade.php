@extends('admin.layouts.layout')
@section('admin_page_title')
Manage Sub Category
@endsection
@section('admin_layout')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">All Sub Category</h5>
            </div>
            @if (session('message'))
            <div class="alert alert-success ">
                {{session('message')}}
            </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Sub Category </th>
                                <th>Category Name</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $subcategories as $item_cat )
                            <tr>
                                <td>{{$item_cat->id}}</td>
                                <td>{{ $item_cat->subcategory_name}}</td>
                                <td>{{ $item_cat->category_id}}</td>
                                <td>
                                    <form action="{{route('delete.subcat',$item_cat->id)}}" method="POST"
                                        style="display: flex">
                                        <a href="{{route('show.subcat',$item_cat->id)}}"
                                            class="btn btn-primary ">Update</a>
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-danger ms-2">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection