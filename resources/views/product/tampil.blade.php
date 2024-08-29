@extends('layout')

@section('konten')

<div class="d-flex">
    <h4> List Data Product</h4>
<div class="ms-auto">
    <a class="btn btn-success" href="{{ route ('product.tambah')}}"> Tambah Data </a>
</div>
</div>
<table class="table">
    <tr>
        <th>Id</th>
        <th>Produt Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Aksi</th>
    </tr>
    @foreach($product as $data)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->product_name}}</td>
        <td>{{$data->Category}}</td>
        <td>{{$data->Price}}</td>
        <td>{{$data->discount}}</td>
        <td>
            <a class="btn btn-sm btn-primary" href="{{ route('product.edit', $data->id)}}">Edit</a>
            <form action="{{ route ('product.delete', $data->id)}}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger"> Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection