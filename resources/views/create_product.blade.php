@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="container">
    <h1 class="text-center">Menambahkan Produk</h1>
    <div class="card p-4 shadow-lg">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Produk" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi Produk</label>
                <textarea class="form-control" id="description" name="description" placeholder="Deskripsi" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga Produk</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Harga" required>
            </div>
            <div class="mb-3">
                <label for="whatsapp_link" class="form-label">Link WhatsApp</label>
                <input type="url" class="form-control" id="whatsapp_link" name="whatsapp_link" placeholder="Link" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Foto Produk</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">TAMBAHKAN</button>
        </form>
    </div>
</div>
@endsection
