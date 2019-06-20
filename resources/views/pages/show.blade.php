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
    <title>Voat | Post</title>
</head>
<body style="background-color:ghostwhite">
    @include('partials._messages')
    <div id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h2 style="text-align:center;">{{ $comment->subject }}</h2>
                </div><hr>
                <div class="modal-body">
                    <img width="570px" height="300px" src="{{ asset('uploads/' . $comment->uploads) }}"></image>
                    <h3>{{ $comment->body }}</h3>
                </div><hr>
            <a href="{{route('posts.index')}}"><button class="btn btn-primary btn-block">Make Another Post</button></a>
            <a href="{{route('index')}}"><button class="btn btn-success btn-block">Go back Home</button></a><hr>
            </div>
        </div>
    </div>
</body>
</html>