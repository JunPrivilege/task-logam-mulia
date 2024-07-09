@extends('admin.dashboard')
@section('title','Product')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Product</h1>
</div>

<div class="page-body pt-5">
    <div class="container-xl">
        <a href="{{ route('addproducts') }}" class="btn btn-success">Tambah Data</a>
        <table class="table table-bordered mt-3 bg-white">
            <tr>
                <th>Product ID</th>
                <th>Merek</th>
                <th>Tipe</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Aksi</th>
            </tr>
            <tbody>
                @foreach ($products as $data => $p)
                <tr>
                    <td class="text-center">{{ $data + 1 }}</td>
                    <td><img src="{{ asset('storage/'.$p->image) }}" alt="" width="40px"> {{ $p->brand }}</td>
                    <td>{{ $p->weight }} {{ $p->type_weight }}</td>
                    <td>{{ $p->price }}</td>
                    <td class="text-center">{{ $p->stock }}</td>
                    <td class="text-center">
                        <a href="/changeproducts/{{ $p->products_id }}" class="btn btn-primary">Edit Data</a>
                        <a href="/deleteproducts/{{ $p->products_id }}" class="btn btn-danger">Hapus Data</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection