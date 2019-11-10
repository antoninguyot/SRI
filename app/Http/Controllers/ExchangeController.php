<?php

namespace App\Http\Controllers;

use App\Exchange;
use App\Http\Requests\ExchangeRequest;
use App\Student;
use App\Study;
use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exchanges = Exchange::all();

        return view('exchanges.index', compact('exchanges'));
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

        return view('exchanges.create', compact('students', 'studies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ExchangeRequest $request
     * @return void
     */
    public function store(ExchangeRequest $request)
    {
        Exchange::create($request->all());

        return redirect(route('exchanges.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exchange  $exchange
     * @return \Illuminate\Http\Response
     */
    public function edit(Exchange $exchange)
    {
        $students = Student::all();
        $studies = Study::all();

        return view('exchanges.create', compact('students', 'studies', 'exchange'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ExchangeRequest $request
     * @param \App\Exchange $exchange
     * @return void
     */
    public function update(ExchangeRequest $request, Exchange $exchange)
    {
        $exchange->update($request->all());

        return redirect(route('exchanges.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Exchange $exchange
     * @return void
     * @throws \Exception
     */
    public function destroy(Exchange $exchange)
    {
        $exchange->delete();

        return redirect(route('exchanges.index'));
    }
}
