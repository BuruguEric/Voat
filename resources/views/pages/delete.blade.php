<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Voat | Delete Post</title>
</head>
<body style="background-color:ghostwhite">
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Delete This Comment ?</h2>
            <div id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h2 style="text-align:center;">{{ $comments->subject }}</h2>
                        </div><hr>
                        <div class="modal-body">
                            <img width="570px" height="300px" src="{{ asset('uploads/' . $comments->uploads) }}"></image>
                            <h3>{{ $comments->body }}</h3>
                        </div><hr>
                        <form action="{{ route('Comment.destroy', $comments->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-block">Delete</button>
                        </form>
                        <a href="{{route('index')}}"><button class="btn btn-primary btn-block">Cancel</button></a><hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>