<?php

namespace App\Http\Controllers;

use App\Mission;
use App\Http\Requests\MissionRequest;

class MissionController extends Controller
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
        $missions = Mission::orderBy('created_at', 'desc')->get();

        return view('missions.index', compact('missions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('missions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MissionRequest $request
     * @return void
     */
    public function store(MissionRequest $request)
    {
        Mission::create($request->validated());

        return redirect(route('missions.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Mission $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        return view('missions.edit', compact('mission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param MissionRequest $request
     * @param Mission $mission
     * @return void
     */
    public function update(MissionRequest $request, Mission $mission)
    {
        $mission->update($request->all());

        return redirect(route('missions.edit', $mission->id))->with('success', 'Commande modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Mission $mission
     * @return void
     * @throws \Exception
     */
    public function destroy(Mission $mission)
    {
        $mission->delete();

        return redirect(route('missions.index'));
    }
}
