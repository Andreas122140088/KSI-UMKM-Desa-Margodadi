<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Pastikan Anda memiliki model Product

class AdminController extends Controller
{
    /**
     * Menampilkan halaman dashboard admin.
     */
    public function index()
    {
        // Mendapatkan daftar produk untuk ditampilkan di dashboard admin
        $products = Product::all();
        return view('admin.dashboard', compact('products'));
    }

    /**
     * Menampilkan halaman formulir untuk menambahkan produk baru.
     */
    public function create()
    {
        return view('admin.create_product');
    }

    /**
     * Menyimpan produk baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Proses upload gambar
        $imagePath = $request->file('image')->store('products', 'public');

        // Simpan produk ke database
        Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.index')->with('success', 'Produk berhasil ditambahkan!');
    }
}
