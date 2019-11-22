<?php

namespace App\Http\Controllers;

use App\Semester;
use App\Http\Requests\ExchangeRequest;
use App\Student;
use App\Study;
use Illuminate\Http\Request;

class SemesterController extends Controller
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
        $semesters = Semester::all();

        return view('semesters.index', compact('semesters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        $studies = Study::all();

        return view('semesters.create', compact('students', 'studies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ExchangeRequest $request
     * @return void
     */
    public function store(ExchangeRequest $request)
    {
        Semester::create($request->all());

        return redirect(route('semesters.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Semester $semester
     * @return \Illuminate\Http\Response
     */
    public function edit(Semester $semester)
    {
        $students = Student::all();
        $studies = Study::all();

        return view('semesters.edit', compact('students', 'studies', 'semester'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ExchangeRequest $request
     * @param Semester $semester
     * @return void
     */
    public function update(ExchangeRequest $request, Semester $semester)
    {
        $semester->update($request->all());

        return redirect(route('semesters.edit', $semester->id))->with('success', 'Échange modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Semester $exchange
     * @return void
     * @throws \Exception
     */
    public function destroy(Semester $exchange)
    {
        $exchange->delete();

        return redirect(route('semesters.index'));
    }
}
