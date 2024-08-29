@extends('layout')

@section('konten')

<h4> Tambah Data</h4>

<form action="{{ route ('product.submit')}}" method="post">
    @csrf
    <label>Product Name</label>
    <input type="string" name="product_name" class="form-control mb-2">
    <label>Category</label>
    <input type="string" name="Category" class="form-control mb-2">
    <label>Price</label>
    <input type="float" name="Price" class="form-control mb-2">
    <label>Discount</label>
    <input type="float" name="discount" class="form-control mb-2">

    <button class="btn btn-secondary"> Tambah</button>
</form>

@endsection