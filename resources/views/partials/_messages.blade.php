@if (Session::has('success_post'))
    <div class="alert alert-success" role="alert">
        <b>Contratulations:</b> {{Session::pull('success_post')}}
    </div>

@elseif (Session::has('success_login'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::pull('success_login')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (Session::has('success_register'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::pull('success_register')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (Session::has('success_logout'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{Session::pull('success_logout')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (Session::has('user_comment'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <b>Congratulations:</b> {{Session::pull('user_comment')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (Session::has('delete_post'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <b>Congratulations:</b> {{Session::pull('delete_post')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif



{{-- @if (count(errors>0))
    
@endif --}}