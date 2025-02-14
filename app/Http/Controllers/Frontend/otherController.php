<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class otherController extends baseController
{
    public function page_not_found()
    {
        return view('404page');
    }
}
