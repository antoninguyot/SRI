<?php

namespace App\Http\Controllers;

use App\Internship;
use App\Semester;
use App\Student;
use App\Study;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function show()
    {
        $semesters = Semester::all();
        $internships = Internship::all();

        $semesters_count = $semesters->count();
        $internships_count = $internships->count();

        $top_local_studies = Study::where('university', config('app.university'))
            ->withCount('exchanges')
            ->orderBy('exchanges_count', 'desc')
            ->limit(10)
            ->get();

        return view('stats', compact('top_local_studies', 'semesters_count', 'internships_count'));
    }
}
