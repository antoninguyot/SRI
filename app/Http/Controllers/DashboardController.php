<?php

namespace App\Http\Controllers;

use App\Internship;
use App\Mission;
use App\News;
use App\Order;
use App\Semester;
use App\Study;
use App\Transfer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $budget = 25000;

        $orders = Order::all()->sum('total');
        $missions = Mission::all()->sum('cost');
        $transfers = Transfer::all()->sum('amount');

        $spent = $orders + $missions + $transfers;
        $total = $budget - $spent;

        $internships = Internship::orderBy('created_at', 'desc')->limit(5)->get();
        $semesters = Semester::orderBy('created_at', 'desc')->limit(5)->get();

        $news = News::orderBy('created_at', 'desc')->limit(5)->get();

        $top_local_studies = Study::where('university', config('app.university'))
            ->withCount('exchanges')
            ->orderBy('exchanges_count', 'desc')
            ->limit(10)
            ->get();

        return view('dashboard', compact('budget', 'orders', 'missions', 'transfers', 'spent',
            'total', 'internships', 'semesters', 'top_local_studies', 'news'));
    }
}
