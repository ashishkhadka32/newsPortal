<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Support\Facades\View;

class pageController extends Controller
{
    public function __construct()
    {
        $company = Company::first();
        $categories = Category::where('status', true)->get();

        View::share([
            "company"=>$company,
            "categories"=>$categories,//categories is send into view
        ]);
    }
    public function home()
    {

        return view('frontend.home');
    }
}
