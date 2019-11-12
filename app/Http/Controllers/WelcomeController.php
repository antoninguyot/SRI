<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function news()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(5);
        return view('news', compact('news'));
    }
}
