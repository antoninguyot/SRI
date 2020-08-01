<?php

namespace App\Http\Controllers;

use App\Mission;
use App\Order;
use App\Transfer;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function show()
    {
        $budget = 25000;

        $orders = Order::all()->sum('total');
        $missions = Mission::all()->sum('cost');
        $transfers = Transfer::all()->sum('amount');

        $spent = $orders + $missions + $transfers;
        $left = $budget - $spent;

        return view('budget', compact('budget', 'orders', 'missions', 'transfers', 'spent', 'left'));
    }

    public function export()
    {
        $operations = collect()
            ->merge(Order::all())
            ->merge(Mission::all())
            ->merge(Transfer::all())
            ->sortByDesc('created_at');

        return view('export', compact('operations'));
    }
}
