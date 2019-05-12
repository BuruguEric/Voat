<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function top10(){
        return view('pages.top10');
    }
    public function sports(){
        return view('pages.sports');
    }
    public function gif(){
        return view('pages.gif');
    }
    public function gaming(){
        return view('pages.gaming');
    }
    public function music(){
        return view('pages.music');
    }
    public function science(){
        return view('pages.science');
    }
    public function programming(){
        return view('pages.programming');
    }
    public function technology(){
        return view('pages.technology');
    }
    public function aww(){
        return view('pages.aww');
    }
    public function books(){
        return view('pages.books');
    }
    public function tv(){
        return view('pages.tv');
    }
    public function comment(){
        return view('pages.postForm');
    }
}
