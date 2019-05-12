@extends('layouts.main')

@section('title' | 'Comment Form')

@section('posts')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">  
                <h1>Share Your Thoughts</h1> 
            <form action="{{ route('Comments.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <p><span class="require">*</span> - required fields</p>
                    </div>
                    
                    <div class="form-group">
                        <label for="title">Caption <span class="require">*</span></label>
                        <input type="text" class="form-control" name="subject" />
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Comment</label>
                        <textarea rows="5" class="form-control" name="body" ></textarea>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            <input type="file" name="uploads" class="btn-primary" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01"><br>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>
                        <button class="btn btn-default">
                            Cancel
                        </button>
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>
@endsection