@extends('layout')

@section('konten')

<h4> Edit Data</h4>

<form action="{{ route ('product.update', $product->id)}}" method="post">
    @csrf
    <label>Product Name</label>
    <input type="string" name="product_name" value="{{$product->product_name}}" class="form-control mb-2">
    <label>Category</label>
    <input type="string" name="Category" value="{{$product->Category}}" class="form-control mb-2">
    <label>Price</label>
    <input type="float" name="Price" value="{{$product->Price}}" class="form-control mb-2">
    <label>Discount</label>
    <input type="float" name="discount" value="{{$product->discount}}" class="form-control mb-2">

    <button class="btn btn-secondary"> Edit</button>
</form>

@endsection