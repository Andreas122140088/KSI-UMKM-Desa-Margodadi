<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\VisitStatistic;

class TrackVisitors
{
    public function handle(Request $request, Closure $next)
    {
        $pageUrl = $request->fullUrl();
        $ipAddress = $request->ip();

        // Simpan statistik pengunjung
        VisitStatistic::create([
            'page_url' => $pageUrl,
            'ip_address' => $ipAddress
        ]);

        return $next($request);
    }
}
