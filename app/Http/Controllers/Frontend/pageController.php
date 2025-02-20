<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\advertise;
use App\Models\Article;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;

class pageController extends baseController
{

    public function home()
    {
        $latest_article = Article::orderBy('id', 'desc')->where('status', "approved")->first();
        $trending_articles = Article::orderBy('views', 'desc')->where('status', "approved")->limit(8)->get();
        return view('frontend.home', compact('latest_article', 'trending_articles'));
    }

    public function category($slug) //$slug is passed similar to id
    {
        // return $slug;
        // $category = Article::where('slug',$slug)->get();get is used when u use any query like orderby and so on al data is shown in array
        $category = Category::where('slug', $slug)->first(); //first slug will see in db and $slug is value.it will show data in object
        $articles = $category->articles()->paginate(10);
        $advertises = advertise::where('status', "approved")->get();
        return view('frontend.category', compact('articles', 'advertises'));
    }
    public function article($id)
    {
        $article = Article::findOrFail($id);
        $cookie_data = Cookie::get("article$id"); //it is used to set unique value for article i.e. article1, article2 and son on
        // Cookie::queue("article",$article->id,60);key ,value &time cookie will del automatically after 60 min
        if (!$cookie_data) {
            $article->increment('views'); //views increment and set cookie
            Cookie::queue("article$id", $article->id);
        }

        return view('frontend.aticle', compact('article'));
    }
    public function search(Request $request)
    {
        $q = $request->q;
        $articles = Article::where('title', 'like', "%$q%")->orWhere('description', 'like', "%$q%")->where('status', "approved")->paginate(5);
        if (count($articles) == 0) {
            return view('404page');
        }

        return view('frontend.search', compact('articles'));
    }
}
