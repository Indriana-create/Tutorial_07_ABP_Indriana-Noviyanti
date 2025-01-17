<!--DOCTYPE html>
<html>
    <head>
        <title>Form(diisi double kurung kurawal {title}) Produk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body style="width:95%">
    <div class="row justify-content-center" style="margin-top:13%"-->
@extends('template')

@section('title')
        {{ $title }} Produk

@section('content')
    <div class="col-3">
        <h4>Form {{ $title }} Produk</h4>
        <form class="border" style="padding:20px" method="POST" action="/{{ $action }}">
        @csrf
        <input type="hidden" name="_method" value="{{ $method }}" />
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control
            @error('name')
            is-invalid @enderror
            "
            value="{{ isset($data)?$data->name:old('name') }}" />
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="price" class="form-control
            @error('price')
            is-invalid @enderror
            "
            value="{{ isset($data)?$data->price:old('price') }}" />
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div style="text-align:center">
        <button class="btn btn-success">Simpan</button>
    </div>
</form>
</div>
@endsection
<!--/div>
</body>
</html-->
