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
    public function cars(){
        return view('pages.cars');
    }
    public function food(){
        return view('pages.food');
    }
}
