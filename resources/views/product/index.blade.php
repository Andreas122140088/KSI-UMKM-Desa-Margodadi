@extends('layouts.app')

@section('title', 'Produk')

@section('content')
<div class="container">
    <h1 class="text-center">Daftar Produk</h1>
    <div class="product-grid">
        @foreach ($products as $product)
        <div class="product-card">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-img">
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p>Harga: Rp {{ number_format($product->price, 0, ',', '.') }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
