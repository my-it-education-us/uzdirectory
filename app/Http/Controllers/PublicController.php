<?php

namespace App\Http\Controllers;

use App\WorldNews;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function aboutus(){
        $newsitems = WorldNews::take(4)->get()->groupBy('source_name');
        return view('aboutus',compact('newsitems'));
    }
}
