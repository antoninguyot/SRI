<?php

namespace App\Http\Controllers;

use App\Transfer;
use App\Http\Requests\TransferRequest;

class TransferController extends Controller
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
        $transfers = Transfer::orderBy('created_at', 'desc')->get();

        return view('transfers.index', compact('transfers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transfers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TransferRequest $request
     * @return void
     */
    public function store(TransferRequest $request)
    {
        Transfer::create($request->validated());

        return redirect(route('transfers.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Transfer $transfer
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfer $transfer)
    {
        return view('transfers.edit', compact('transfer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TransferRequest $request
     * @param Transfer $transfer
     * @return void
     */
    public function update(TransferRequest $request, Transfer $transfer)
    {
        $transfer->update($request->validated());

        return redirect(route('transfers.edit', $transfer->id))->with('success', 'Commande modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Transfer $transfer
     * @return void
     * @throws \Exception
     */
    public function destroy(Transfer $transfer)
    {
        $transfer->delete();

        return redirect(route('transfers.index'));
    }
}
