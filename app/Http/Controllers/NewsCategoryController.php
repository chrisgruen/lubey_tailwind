<?php

namespace App\Http\Controllers;

use App;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\NewsDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as Input;

class NewsCategoryController extends Controller {

    public function index() {
        //$news = News::query()->get();
        app::setLocale('de');
        $categories = NewsCategory::orderBy('created_at', 'desc')->get();
        return view('news.categories', ['categories' => $categories]);
    }

    public function add(Request $request) {

        if ($request->has('name')) {
            if ($request->has('news_category_id') && $request->input('news_category_id') != 0) {
                $category = NewsCategory::query()->find($request->input('news_category_id'));
            } else {
                $category = new NewsCategory();
            }
            $category->name = $request->input('name');
            if (Input::hasFile('desktop')) {
                $image = Input::file('desktop');
                $category->file_id_desktop = NewsDocument::processSingleImage($image[0], 'header-' . $category->name)->id;

            }
            if (Input::hasFile('mobile')) {
                $image = Input::file('mobile');
                $category->file_id_mobile = NewsDocument::processSingleImage($image[0], 'header-mobile-' . $category->name)->id;

            }
            $category->name_en = $request->input('name_en');
            $category->save();

        }
        return redirect()->route('news.categories');
    }

    public function get(Request $request, $news_category_id) {
        app::setLocale('de');
        $category = NewsCategory::query()->with(['desktop_img', 'mobile_img'])->find($news_category_id);
        return response((json_encode($category)))->header('Content-Type', 'application/json');
    }

    public function delete(Request $request, $news_category_id) {
        $category = NewsCategory::query()->with(['desktop_img','mobile_img'])->find($news_category_id);
        if($category->mobile_img)
            $category->mobile_img->delete();
        if ($category->desktop_img)
            $category->desktop_img->delete();
        $category->delete();
        return redirect()->route('news.categories');
    }
}

