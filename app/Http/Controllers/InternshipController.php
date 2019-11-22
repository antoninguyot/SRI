<?php

namespace App\Http\Controllers;

use App\Internship;
use App\Http\Requests\InternshipRequest;
use App\Student;
use App\Study;

class InternshipController extends Controller
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
        $internships = Internship::orderBy('created_at', 'desc')->get();

        return view('internships.index', compact('internships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();

        return view('internships.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param InternshipRequest $request
     * @return void
     */
    public function store(InternshipRequest $request)
    {
        Internship::create($request->validated());

        return redirect(route('internships.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Internship $internship
     * @return \Illuminate\Http\Response
     */
    public function edit(Internship $internship)
    {
        $students = Student::all();
        $studies = Study::all();

        return view('internships.edit', compact('students', 'studies', 'internship'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param InternshipRequest $request
     * @param Internship $internship
     * @return void
     */
    public function update(InternshipRequest $request, Internship $internship)
    {
        $internship->update($request->validated());

        return redirect(route('internships.edit', $internship->id))->with('success', 'Échange modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Internship $exchange
     * @return void
     * @throws \Exception
     */
    public function destroy(Internship $exchange)
    {
        $exchange->delete();

        return redirect(route('internships.index'));
    }
}
