@extends('seller.layouts.layout')
@section('seller_page_title')
Manage Store
@endsection
@section('seller_layout')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">All Store</h5>
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
                                <th>Store Name</th>
                                <th>Details</th>
                                <th>Blug</th>
                                <th>User</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $stores as $item_store )
                            <tr>
                                <td>{{$item_store->id}}</td>
                                <td>{{ $item_store->store_name}}</td>
                                <td>{{ $item_store->details}}</td>
                                <td>{{ $item_store->slug}}</td>
                                <td>{{ $item_store->slug}}</td>
                                <td>
                                    <form action="{{route('delete.store',$item_store->id)}}" method="POST"
                                        style="display: flex">
                                        <a href="{{route('show.store',$item_store->id)}}"
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