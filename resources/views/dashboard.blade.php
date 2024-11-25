@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<h1>Admin Dashboard</h1>
<a href="{{ route('admin.create') }}" class="btn btn-primary">Tambah Produk Baru</a>

<table>
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Gambar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td><img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100"></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
