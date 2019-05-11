@extends('layouts.main')

@section('title' | 'Comment Form')

@section('posts')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">  
                <h1>Create post</h1> 
            <form  method="POST">
                    {{ csrf_field() }}

                    <div class="form-group has-error">
                        <label for="slug">Slug <span class="require">*</span> <small>(This field use in url path.)</small></label>
                        <input type="text" class="form-control" name="slug" />
                        <span class="help-block">Field not entered!</span>
                    </div>
                    
                    <div class="form-group">
                        <label for="title">Title <span class="require">*</span></label>
                        <input type="text" class="form-control" name="title" />
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea rows="5" class="form-control" name="description" ></textarea>
                    </div>
                    
                    <div class="form-group">
                        <p><span class="require">*</span> - required fields</p>
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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