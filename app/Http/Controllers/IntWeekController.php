<?php

namespace App\Http\Controllers;

use App\Http\Requests\IntWeekRequest;
use App\IntWeek;
use Illuminate\Http\Request;

class IntWeekController extends Controller
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
        $weeks = IntWeek::orderBy('created_at', 'desc')->get();

        return view('weeks.index', compact('weeks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('weeks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param IntWeekRequest $request
     * @return void
     */
    public function store(IntWeekRequest $request)
    {
        IntWeek::create($request->validated());

        return redirect(route('weeks.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param IntWeek $week
     * @return \Illuminate\Http\Response
     */
    public function edit(IntWeek $week)
    {
        return view('weeks.edit', compact('week'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param IntWeekRequest $request
     * @param IntWeek $week
     * @return void
     */
    public function update(IntWeekRequest $request, IntWeek $week)
    {
        $week->update($request->all());

        return redirect(route('weeks.edit', $week->id))->with('success', 'Semaine internationale modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\IntWeek $week
     * @return void
     * @throws \Exception
     */
    public function destroy(IntWeek $week)
    {
        $week->delete();

        return redirect(route('weeks.index'));
    }
}
