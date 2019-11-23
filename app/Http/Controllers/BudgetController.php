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
        $total = $budget - $spent;

        return view('budget', compact('budget', 'orders', 'missions', 'transfers', 'spent', 'total'));
    }
}
