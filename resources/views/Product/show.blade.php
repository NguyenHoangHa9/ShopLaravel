@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-between mb-4">
    <h3>Show Product</h3>
    <a class="btn btn-success btn-sm" href="{{ route('index')}}">List Product</a>
</div>

<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="{{ $product->Name}}" disabled>
</div>
<div class="form-group">
    <label>Color</label>
    <input type="color" name="color" class="form-control" value="{{ $product->Color}}" disabled>
</div>
<div class="form-group">
    <label>Weight</label>
    <input type="text" name="weight" class="form-control" value="{{ $product->Weight}}" disabled>
</div>
<div class="form-group">
    <label>Description</label>
    <textarea name="description" rows="5" placeholder="product descripton" class="form-control" disabled>{{ $product->Description }}</textarea>
</div>
@endsection
