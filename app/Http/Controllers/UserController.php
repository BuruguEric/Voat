<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Session;
use App\User;

class UserController extends Controller
{
    public function userDetails(){
        $id = auth()->id();
        $user_details = User::all()->find($id);
        $user_posts = Comment::all()->where('user_id','=',$id);
        return view('pages.userProfile')->with(compact('user_details','user_posts'));
    }

    public function userPost(){
        $id = auth()->id();
        $user_posts = Comment::all()->where('user_id','=',$id);
        $user_details = User::all()->find($id)->get();
        return view('pages.userProfile')->with(compact('user_posts','user_details'));
    }
    
    //public function changePassword(){}
}
