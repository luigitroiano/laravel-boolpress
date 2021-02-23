<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function articleList_api()
    {
        return view('spa.articleList');
    }

    public function categoryList_api()
    {
        return view('spa.categoryList');
    }

    public function tagList_api()
    {
        return view('spa.tagList');
    }
}
