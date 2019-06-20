@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/socialButtons.css">
<link rel="stylesheet" href="css/me.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="me.css">

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Login With</label>
                            <div class="col-md-6">
                                <a href="{{ url('login/facebook') }}" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                <a href="{{ url('login/twitter') }}" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="{{ url('login/google') }}" class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
                                <a href="{{ url('login/linkedin') }}" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="{{ url('login/github') }}" class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
                                <a href="{{ url('login/bitbucket') }}" class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
                            </div>
                        </div>

                        {{-- <div class="social-btns">
                            <a href="{{ url('login/facebook') }}" class="btn facebook"><i class="fa fa-facebook"></i></a>
                            <a href="{{ url('login/twitter') }}" class="btn twitter"><i class="fa fa-twitter"></i></a>
                            <a href="{{ url('login/google') }}" class="btn google"><i class="fa fa-google"></i></a>
                            
                            
                        </div> --}}
                        

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection

<div class="wrapper">
        <div class="login-text">
          <div class="app">
          
            <form>
              <h3>Register</h3><br>
              <input type="text" name="" placeholder="full name">
              <input type="email" name="" placeholder="email address">
              <input type="password" name="" placeholder="password">
              <p><br>By clicking 'submit' you agree to our <a href="#">terms and condition</a></p>
      
              <button>Login</button>
            </form>
      
          
          </div>
        </div>
        <div class="call-text">
          <h1>Show us your <span>creative</span> side</h1><br>
          <button>Join the Community</button>
        </div>
      
      
      </div>