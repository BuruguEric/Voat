<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
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
    public function movies(){
        return view('pages.movies');
    }
    public function aww(){
        return view('pages.aww');
    }
    public function books(){
        return view('pages.books');
    }
}
