@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-between mb-4">
    <h3>Edit Product</h3>
    <a class="btn btn-success btn-sm" href="{{ route('index')}}">List Product</a>
</div>

@if(session()->has('success'))
    <label class="alert alert-success w-100">{{session('success')}}</label>
@elseif (session()->has('error'))
    <label class="alert alert-danger w-100">{{session('error')}}</label>
@endif

<form action="{{route('update', ['id' => $product->id]) }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="product name" value="{{ $product->name}}">
    </div>
    <div class="form-group">
        <label>Color</label>
        <input type="color" name="color" class="form-control" placeholder="product name" value="{{ $product->color}}">
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Weight</label>
                        <input type="text" name="weight" class="form-control" placeholder="product weight" value="{{ $product->weight}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control" placeholder="product price" value="{{ $product->price}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" rows="5" placeholder="product description"  class="form-control">{{ $product->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

