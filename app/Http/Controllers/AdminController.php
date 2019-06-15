<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\User;
use Session;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $posts = Admin::where('role'=> 1)->first();
        $posts = Post::all();
        $comments = Comment::all();
        return view('pages.index',compact('comments','posts'));
    }

    public function login(Request $request){
        if ($request->isMethod('POST')) {
			$data = $request->input();
			if (Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'role'=>'1'])) {
				// echo "success";die;
				// Session::put('adminSession',$data['email']);
				return redirect('/');
			}else{
				// echo "Failed";die;
				return redirect('/')->with('flash_message_error','Invlaid Username or Password');
			}
		}
		return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
