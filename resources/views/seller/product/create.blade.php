@extends('seller.layouts.layout')
@section('seller_page_title')
Add Product
@endsection
@section('seller_layout')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Create Product</h5>
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
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <form action="{{route('vendor.product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="product_name" class="fw-bold mb-2">Product Name:</label>
                        <input type="text" class="form-control" name="product_name" id="product_name"
                            placeholder="Enter product name">
                    </div>
                    <div class="mb-3">
                        <label for="images" class="fw-bold mb-2">Upload Image:</label>
                        <input type="file" class="form-control" name="images[]" id="images" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="fw-bold mb-2">Description:</label>
                        <textarea name="description" id="description" class="form-control"
                            placeholder="Enter product description"></textarea>
                    </div>
                    <livewire:categorysubcategory />
                    <div class="mb-3">
                        <label for="store_id" class="fw-bold mb-2">Select Store:</label>
                        <select name="store_id" id="store_id" class="form-control">

                            @foreach ( $stores as $store )
                            <option value="{{ $store->id}}">{{$store->store_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="sku" class="fw-bold mb-2">SKU:</label>
                        <input type="text" class="form-control" name="sku" id="sku" placeholder="Enter SKU">
                    </div>
                    <div class="mb-3">
                        <label for="regular_price" class="fw-bold mb-2">Regular Price:</label>
                        <input type="number" class="form-control" name="regular_price" id="regular_price"
                            placeholder="Enter regular price">
                    </div>
                    <div class="mb-3">
                        <label for="discount_price" class="fw-bold mb-2">Discount Price(if any):</label>
                        <input type="number" class="form-control" name="discount_price" id="discount_price"
                            placeholder="Enter discount price">
                    </div>
                    <div class="mb-3">
                        <label for="tax_rate" class="fw-bold mb-2">Tax Rate:</label>
                        <input type="number" class="form-control" name="tax_rate" id="tax_rate"
                            placeholder="Enter tax rate">
                    </div>
                    <div class="mb-3">
                        <label for="stock_quantity" class="fw-bold mb-2">Stock Quantity:</label>
                        <input type="number" class="form-control" name="stock_quantity" id="stock_quantity"
                            placeholder="Enter stock quantity">
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="fw-bold mb-2"> SLUG:</label>
                        <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter slug">
                    </div>
                    <div class="mb-3">
                        <label for="meta_description" class="fw-bold mb-2"> Meta Description:</label>
                        <input type="text" class="form-control" name="meta_description" id="meta_description"
                            placeholder="Enter meta description">
                    </div>
                    <div class="mb-3">
                        <label for="meta_title" class="fw-bold mb-2"> Meta Title:</label>
                        <input type="text" class="form-control" name="meta_title" id="meta_title"
                            placeholder="Enter meta title">
                    </div>
                    <div class="mb-3">
                        <label for="visibility" class="fw-bold mb-2"> Visibility:</label>
                        <Select name="visibility" id="visibility" class="form-control">
                            <option value="1">true</option>
                            <option value="0">false</option>
                        </Select>
                    </div>
                    <label for="" class="fw-bold mb-2"> Stock Status:</label><br>
                    <input type="radio" id="In Stock" name="stock_status" value="In Stock">
                    <label for="In Stock">In Stock</label>
                    <input type="radio" id="Out of Stock" name="stock_status" value="Out of Stock">
                    <label for="Out of Stock">Out of Stock</label>
                    <input type="radio" id="Backorder" name="stock_status" value="Backorder">
                    <label for="Backorder">Backorder</label><br>

                    <label for="" class="fw-bold mb-2"> Status:</label><br>
                    <input type="radio" id="Draft" name="status" value="Draft">
                    <label for="Draft">Draft</label>
                    <input type="radio" id="Published" name="status" value="Published">
                    <label for="Published">Published</label>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-2 w-50">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection