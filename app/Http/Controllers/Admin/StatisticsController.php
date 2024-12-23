<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisitStatistic;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    // Method untuk mencatat kunjungan
    public function recordVisit(Request $request)
    {
        $pageUrl = $request->fullUrl();  // URL yang diakses
        $ipAddress = $request->ip();     // IP pengunjung
    
        // Debugging
        logger("Page URL: $pageUrl, IP: $ipAddress");
    
        VisitStatistic::create([
            'page_url' => $pageUrl,
            'ip_address' => $ipAddress,
        ]);
    }

    // Method untuk menampilkan statistik kunjungan
    public function index()
    {
    $visitCount = VisitStatistic::count(); // Hitung jumlah total kunjungan
    $visitStats = VisitStatistic::latest()->get(); // Ambil semua data kunjungan terbaru
    return view('admin.statistics.index', compact('visitCount', 'visitStats')); // Kirim ke view
    }


}
