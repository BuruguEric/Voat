<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use Session;
use Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate data
        $this->validate($request, array(
            'category' => 'required',
            'subject' => 'required | max:255',
            'body' => 'required',
            'uploads' => 'required | mimes:jpg,png,jpeg,jpe,gif,bmp,ico,svg,svgz,tif,ai,raw,drw,pct,psp,xcf,psd,'
        ));
        // Store Data in DB
        $comment = new Comment;
        $comment->subject = $request->subject;
        $comment->body = $request->body;
        $comment->category = $request->category;
        $comment->user_id = Auth::user()->id;
        // File Upload
        if ($request->hasFile('uploads')) {
            $upload = $request->file('uploads');
            $uploadname = time() . '.' .$upload->getClientOriginalExtension();
            $location = public_path('uploads/' . $uploadname);
            image::make($upload)->resize(550,450)->save($location);

            $comment->uploads = $uploadname;
        }

        $comment->save();
        Session::flash('success_comment','Successful Post Upload');
        return redirect()->route('posts.show',$comment->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::find($id);
        return view('pages.show')->with('comment',$comment);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $comments = Comment::find($id);
        return view('pages.delete', compact('comments'));

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        Session::flash('delete_comment', 'Comment Deleted Successfully');

        return redirect()->route('index');
    }
}
