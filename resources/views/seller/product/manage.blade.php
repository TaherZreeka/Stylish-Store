@extends('seller.layouts.layout')
@section('seller_page_title')
manage Product
@endsection
@section('seller_layout')
@foreach ($products as $product)
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">All Product</h5>
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
                                <th>Product Name</th>
                                <th>Quantily</th>
                                <th>Price</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product) <tr>
                                <td>{{$product->id}}</td>
                                <td>{{ $product->product_name}}</td>
                                <td>{{ $product->stock_quantily}}</td>
                                <td>{{ $product->regular_price}}</td>
                                <td>
                                    <form action="{{route('delete.store',$product->id)}}" method="POST"
                                        style="display: flex">
                                        <a href="{{route('show.store',$product->id)}}"
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
@endforeach
@endsection