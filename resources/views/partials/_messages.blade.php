@if (Session::has('success_comment'))
    <div class="alert alert-success" role="alert">
        <b>Contratulations:</b> {{Session::pull('success_comment')}}
    </div>

@elseif (Session::has('success_login'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <b>Congratulations:</b> {{Session::pull('success_login')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif



{{-- @if (count(errors>0))
    
@endif --}}