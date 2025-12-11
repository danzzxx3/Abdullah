@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Edit Produk</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk</label>
            <input class="form-control" type="file" id="image" name="image" onchange="previewImage(event)">
            @if($product->image)
                <img id="preview" src="{{ asset('storage/' . $product->image) }}" class="mt-2" style="width:150px;" alt="Gambar Produk">
            @else
                <img id="preview" src="#" class="mt-2" style="display:none; width:150px;" alt="Preview Gambar">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Produk</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script>
function previewImage(event) {
    const preview = document.getElementById('preview');
    preview.src = URL.createObjectURL(event.target.files[0]);
    preview.style.display = 'block';
}
</script>
@endsection
