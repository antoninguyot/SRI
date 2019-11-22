<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudyRequest;
use App\Study;
use Illuminate\Http\Request;

class StudyController extends Controller
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
        $studies = Study::orderBy('created_at', 'desc')->get();
        return view('studies.index', compact('studies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudyRequest $request)
    {
        Study::create($request->validated());

        return redirect(route('studies.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function edit(Study $study)
    {
        return view('studies.edit', compact('study'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function update(StudyRequest $request, Study $study)
    {
        $study->update($request->validated());

        return redirect(route('studies.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Study $study
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Study $study)
    {
        $study->delete();

        return redirect(route('studies.index'));
    }
}
