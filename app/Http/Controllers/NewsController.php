<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
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
        $news = News::orderBy('created_at', 'desc')->get();
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsRequest $request
     * @return void
     */
    public function store(NewsRequest $request)
    {
        News::create(array_merge(
            $request->validated(),
            ['user_id' => Auth()->id()]
        ));

        return redirect(route('news.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsRequest $request
     * @param \App\News $news
     * @return void
     */
    public function update(NewsRequest $request, News $news)
    {
        $news->update($request->validated());
        return redirect(route('news.edit', $news->id))->with('success', 'Actualité modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\News $news
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect(route('news.destroy'));
    }
}
