@extends('admin.dashboard')
@section('content')

<div class="page-body pt-5">
    <div class="container-xl d-flex justify-content-center">
        <form action="/update/{{ $data->id }}" method="POST">
            @csrf
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                        </div>

                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $data->email }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" value="{{ $data->password }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="address" value="{{ $data->address }}">
                        </div>

                        <div class="mb-3">
                            <label for="">Nomor Telepon</label>
                            <input type="number" class="form-control" name="phone_number" value="{{ $data->phone_number }}">
                        </div>

                        <div class="mb-3">
                            <label for="">Nomor KTP</label>
                            <input type="number" class="form-control" name="no_ktp" value="{{ $data->no_ktp }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
    
@endsection