<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisitStatistic;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StatisticsController extends Controller
{
    public function recordVisit(Request $request)
    {
    $pageUrl = $request->fullUrl();  // URL yang diakses
    $ipAddress = $request->ip();     // IP pengunjung

    VisitStatistic::create([
        'page_url' => $pageUrl,
        'ip_address' => $ipAddress
    ]);
    }

    public function showStatistics()
    {
    $visitCount = VisitStatistic::count();
    return view('admin.statistics.index', compact('visitCount'));
    }

    public function index()
    {
        // Mendapatkan total pengunjung dalam periode waktu tertentu
        $totalVisitors = VisitStatistic::count();

        // Mendapatkan statistik pengunjung per hari
        $visitorsPerDay = VisitStatistic::selectRaw('DATE(accessed_at) as date, count(*) as total')
            ->groupBy('date')
            ->orderBy('date', 'desc')
            ->take(7)  // Ambil 7 hari terakhir
            ->get();

        return view('admin.statistics.index', compact('totalVisitors', 'visitorsPerDay'));
    }
}
