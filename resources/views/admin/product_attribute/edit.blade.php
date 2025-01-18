@extends('admin.layouts.layout')
@section('admin_page_title')
Edit Default Attribute
@endsection
@section('admin_layout')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Edit Default Attribute</h5>
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
                <form action="{{route('attribute.update',$attribute_info->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <label for="attribute_value" class="fw-bold mb-2">Give Name of Your Category:</label>
                    <input type="text" class="form-control" name="attribute_value" id="attribute_value"
                        value="{{$attribute_info->attribute_value}}">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-2 w-50 ">Edit Attribute</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection