@extends('admin.dashboard')
@section('content')

<div class="page-body pt-5">
    <div class="container-xl d-flex justify-content-center">
        <form action="/updateproducts/{{ $products->products_id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="">Merek</label>
                            <input type="text" class="form-control" name="brand" value="{{ $products->brand }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Berat</label>
                            <input type="number" class="form-control" name="weight" value="{{ $products->weight }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Tipe</label>
                            <select name="type_weight" id="" class="form-control">
                                <option value="{{ $products->type_wight }}">Pilih Kategori</option>
                                <option <?php if (isset($_POST['type_weight']) && $_POST['type_weight'] == 'Gram'){
                                    echo 'selected';
                                } ?> value="Gram">Gram</option>
                                <option <?php if (isset($_POST['type_weight']) && $_POST['type_weight'] == 'Kilo Gram'){
                                    echo 'selected';
                                } ?> value="Kilo Gram">Kilo Gram</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Harga</label>
                            <input type="number" class="form-control" name="price" value="{{ $products->price }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Stock</label>
                            <input type="number" class="form-control" name="stock" value="{{ $products->stock }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
    
@endsection