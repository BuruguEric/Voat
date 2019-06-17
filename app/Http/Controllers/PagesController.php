<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        $posts = Post::all();
        $comments = Comment::all();
        return view('pages.index',compact('comments','posts'));
    }
    public function top10(){
        $posts = Post::where('category','GIFs')->get();
        $comments = Comment::take(10)->get();
        return view('pages.top10',compact('comments','posts'));
    }
    public function sports(){
        $posts = Post::where('category','Sports')->get();
        $comments = Comment::where('category','Sports');
        return view('pages.sports',compact('comments','posts'));
    }
    public function gif(){
        $posts = Post::where('category','GIFs')->get();
        $posts = Post::where('category','GIFs')->get();
        $comments = Comment::where("category","GIFs")->get();
        return view('pages.gif',compact('comments','posts'));
    }
    public function music(){
        $posts = Post::where('category','Music')->get();
        $comments = Comment::where("category","Music")->get();
        return view('pages.music', compact('comments','posts'));
    }
    public function science(){
        $posts = Post::where('category','Science')->get();
        $comments = Comment::where("category","Science")->get();
        return view('pages.science', compact('comments','posts'));
    }
    public function programming(){
        $posts = Post::where('category','Programming')->get();
        $comments = Comment::where("category","Programming")->get();
        return view('pages.programming', compact('comments','posts'));
    }
    public function technology(){
        $posts = Post::where('category','Technology')->get();
        $comments = Comment::where("category","Technology")->get();
        return view('pages.technology', compact('comments','posts'));
    }
    public function aww(){
        $posts = Post::where('category','Aww')->get();
        $comments = Comment::where("category","Aww")->get();
        return view('pages.aww', compact('comments','posts'));
    }
    public function books(){
        $posts = Post::where('category','Books')->get();
        $comments = Comment::where("category","Books")->get();
        return view('pages.books', compact('comments','posts'));
    }
    public function tv(){
        $posts = Post::where('category','TV')->get();
        $comments = Comment::where("category","TV")->get();
        return view('pages.tv', compact('comments','posts'));
    }
    public function gaming(){
        $posts = Post::where('category','Gaming')->get();
        $comments = Comment::where("category","TV")->get();
        return view('pages.tv', compact('comments','posts'));
    }
    public function create(){
        return view('pages.create');
    }
}

?>
