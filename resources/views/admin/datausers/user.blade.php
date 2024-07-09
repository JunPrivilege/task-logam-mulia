@extends('admin.dashboard')
@section('title','DATA USER')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data User</h1>
</div>

<div class="page-body">
    <div class="container-xl">
        <a href="{{ route('add') }}" class="btn btn-success">Tambah Data</a>
        <table class="table table-bordered mt-3 bg-white">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Nomor KTP</th>
                <th>Aksi</th>
            </tr>
            <tbody>
                @foreach ($data as $index => $u)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>{{ $u->address }}</td>
                        <td>{{ $u->phone_number }}</td>
                        <td>{{ $u->no_ktp }}</td>
                        <td>
                            <a href="/change/{{ $u->id }}" class="btn btn-primary">Edit Data</a>
                            <a href="/update/{{ $u->id }}" class="btn btn-danger">Hapus Data</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection