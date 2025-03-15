<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DailyVisitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Get today's visitors
        $todayVisitors = DailyVisitor::whereDate('date', Carbon::today())
            ->value('count') ?? 0;

        // Get last 7 days visitors
        $weeklyVisitors = DailyVisitor::whereBetween('date', [
            Carbon::today()->subDays(6),
            Carbon::today()
        ])
            ->orderBy('date', 'asc')
            ->get()
            ->pluck('count', 'date')
            ->toArray();

        // Get total visitors
        $totalVisitors = DailyVisitor::sum('count');

        return view('admin.dashboard', compact(
            'todayVisitors',
            'weeklyVisitors',
            'totalVisitors'
        ));
    }
}
