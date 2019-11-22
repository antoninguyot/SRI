<?php

namespace App\Http\Controllers;

use App\Semester;
use App\Study;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function show()
    {
        $total_abroad_hours = Semester::with('study')->get()->sum('study.duration');
        $total_local_hours = Semester::with('study')->get()->sum('study.duration');

        $top_local_studies = Study::where('university', config('app.university'))
            ->withCount('exchanges')
            ->orderBy('exchanges_count', 'desc')
            ->limit(10)
            ->get();

        return view('stats', compact('total_abroad_hours', 'top_local_studies'));
    }
}
