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

        VisitStatistic::create([
            'page_url' => $pageUrl,
            'ip_address' => $ipAddress
        ]);
    }

    // Method untuk menampilkan statistik kunjungan
    public function showStatistics()
    {
        $visitCount = VisitStatistic::count(); // Hitung jumlah total kunjungan
        return view('admin.statistics.index', compact('visitCount')); // Kirim ke view
    }
}
