<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Support\Facades\App;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;

class NewsController extends Controller {

    public function public_news() {
        $news = News::query()->with(['category', 'category.mobile_img'])->orderBy('date', 'desc')->get();
        $categories = NewsCategory::query()->with('news')->get();
        return view('content.'.App::getLocale().'.news', ['news' => $news, 'categories' => $categories]);
    }

    public function public_news_detail(Request $request, $news_name) {
        $article = News::query()->where('canonical_name', $news_name)->first();
        if (!$article)
            return redirect()->route('news');
        return view('content.'.App::getLocale().'.news_detail', ['news' => $article]);
    }
}
