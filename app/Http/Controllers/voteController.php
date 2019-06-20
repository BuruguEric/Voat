<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Session;
use App\User;
use App\Vote;
use Auth;

class VoteController extends Controller
{
Public function voteUp(Request $request ){
    if (Auth::check()) {
        $vote = new Vote;
        $user = new User;
        if ($user->voted == 1) {
            return back();
        }
        else {
            $vote->user_id = $request->user_id;
            $vote->post_id = $request->post_id;
            $vote->vote = $vote->vote + 1;
            $user->where('id',$request->user_id)->update(['voted' => 1]);
            $vote->save();
            return back();
        }
    }
    else
    {
        return redirect()->route('login');
    }
}
Public function voteDown(Request $request ){
    if (Auth::check()) {
        $vote = new Vote;
        $user = new User;
        if ($user->voted == 1) {
            return back();
        }
        else {
            $vote->user_id = $request->user_id;
            $vote->post_id = $request->post_id;
            $vote->vote = $vote->vote - 1;
            $user->where('id',$request->user_id)->update(['voted' => 1]);
            $vote->save();
            return back();
        }
    }
    else
    {
        return redirect()->route('login');
    }
}
}
