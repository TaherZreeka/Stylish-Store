@extends('seller.layouts.layout')
@section('seller_page_title')
Edit Store
@endsection
@section('seller_layout')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Edit Store</h5>
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
                <form action="{{route('update.store',$store_info->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <label for="store_name" class="fw-bold mb-2">Give Name of Your Store:</label>
                    <input type="text" class="form-control" name="store_name" id="store_name"
                        value="{{$store_info->store_name}}">
                    <label for="details" class="fw-bold mb-2">Details Store:</label>
                    <textarea name="details" id="details" cols="30" rows="10" value="{{$store_info->details}}"
                        class="form-control"></textarea>

                    <label for="slug" class="fw-bold mb-4 mt-2">Slug:</label>
                    <input type="text" class="form-control" value="{{$store_info->slug}}" name="slug" id="slug"
                        placeholder="slug">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-2 w-50 ">Edit Store</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection