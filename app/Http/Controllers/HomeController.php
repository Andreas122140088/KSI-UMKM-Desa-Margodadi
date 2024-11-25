<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Data untuk carousel
        $carouselImages = [
            "/img/rengginang.jpeg",
            "/img/gambar3.jpg",
            "/img/gambar2.jpg",
        ];

        // Data untuk produk (contoh)
        $products = [
            [
                'name' => 'Batik',
                'image' => '/img/batik.jpg',
                'description' => 'Deskripsi singkat tentang Batik.',
            ],
            [
                'name' => 'Rengginang',
                'image' => '/img/rengginang.jpeg',
                'description' => 'Deskripsi singkat tentang Rengginang.',
            ],
        ];

        return view('home', compact('carouselImages', 'products'));
    }
}
