<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Support\Facades\View;

class pageController extends baseController
{

    public function home()
    {
        $latest_article = Article::orderBy('id','desc')->where('status', "approved")->first();
        $trending_articles = Article::orderBy('views','desc')->where('status',"approved")->get();
        return view('frontend.home',compact('latest_article','trending_articles'));
    }
}
