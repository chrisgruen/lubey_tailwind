<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\News;
use App\Models\NewsCategory;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $articles = News::latest()->paginate(8);
        return view('news.index',compact('articles'))->with('i', (request()->input('page', 1) - 1) * 8);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'headline' => 'required',
            'body' => 'required',
        ]);
        
        News::create($request->all());
        
        return redirect()->route('news.index')->with('success','Artikel wurde angelegt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('news.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([            
            'headline' => 'required',           
            'body' => 'required',            
        ]);
                     
        $news->update($request->all());                   
        return redirect()->route('news.index')->with('success','Artikel wurde abgeändert');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();           
        return redirect()->route('news.index')->with('success','Product deleted successfully');
    }
    
    public function public_news() {
        $news = News::query()->with(['category', 'category.mobile_img'])->orderBy('date', 'desc')->get();
        $categories = NewsCategory::query()->with('news')->get();
        return view('content.'.App::getLocale().'.news', ['news' => $news, 'categories' => $categories]);
    }
}
