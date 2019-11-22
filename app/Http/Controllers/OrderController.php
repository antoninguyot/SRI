<?php

namespace App\Http\Controllers;

use App\Order;
use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();

        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param OrderRequest $request
     * @return void
     */
    public function store(OrderRequest $request)
    {
        Order::create($request->validated());

        return redirect(route('orders.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param OrderRequest $request
     * @param Order $order
     * @return void
     */
    public function update(OrderRequest $request, Order $order)
    {
        $order->update($request->validated());

        return redirect(route('orders.edit', $order->id))->with('success', 'Commande modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Order $order
     * @return void
     * @throws \Exception
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect(route('orders.index'));
    }
}
