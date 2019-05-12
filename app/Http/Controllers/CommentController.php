<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'subject' => 'required | max:255',
            'body' => 'required',
            'uploads' => 'required | size:20000'
        ));
        // Store Data in DB
        $comment = new Comment;
        $comment->subject = $request->subject;
        $comment->body = $request->body;
        // File Upload
        if ($request->hasFile('uploads')) {
            $upload = $request->file('uploads');
            $uploadname = time() . '.' .$upload->getClientOriginalExtension();
            $location = public_path('uploads/' . $uploadname);
            image::make($upload)->resize(800,400)->save($location);

            $comment->uploads = $uploadname;
        }

        $comment->save();

        return redirect()->route('Comments.show', $comment->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
