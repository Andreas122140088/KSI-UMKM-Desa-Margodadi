<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Menampilkan halaman produk.
     */
    public function index()
    {
        $products = Product::all(); // Mengambil semua produk dari database
        return view('product.index', compact('products'));
    }
}
