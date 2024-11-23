<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PageView;
use App\Models\BounceRate;


//class AnalyticsController extends Controller
//{
//    public function index()
//    {
//        $totalUsers = 1500;
//        $totalPageViews = 10000;
//        $bounceRate = 45;
//
//        $userGrowthData = collect([
//            ['date' => '2024-11-01', 'value' => 10],
//            ['date' => '2024-11-02', 'value' => 30],
//            ['date' => '2024-11-03', 'value' => 45],
//        ]);
//
//        $pageViewData = collect([
//            ['date' => '2024-11-01', 'value' => 200],
//            ['date' => '2024-11-02', 'value' => 350],
//            ['date' => '2024-11-03', 'value' => 500],
//        ]);
//
//        return view('admin.analytics', compact('totalUsers', 'totalPageViews', 'bounceRate', 'userGrowthData', 'pageViewData'));
//    }
//}



class AnalyticsController extends Controller
{
    public function index()
    {
        // Total Users
        $totalUsers = User::count();

        // Total Page Views
        $totalPageViews = PageView::sum('views');

        // Bounce Rate (latest rate)
        $bounceRate = BounceRate::latest()->value('rate') ?? 0;

        // User Growth Data
        $userGrowthData = User::selectRaw('DATE(created_at) as date, COUNT(*) as value')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Page View Data
        $pageViewData = PageView::selectRaw('DATE(date) as date, SUM(views) as value')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return view('admin.analytics', compact('totalUsers', 'totalPageViews', 'bounceRate', 'userGrowthData', 'pageViewData'));
    }
}
