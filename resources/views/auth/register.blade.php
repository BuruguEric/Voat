@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/socialButtons.css">
<link rel="stylesheet" href="css/signup.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


<div class="wrapper">
        <div class="login-text">
          <div class="app">
        
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <form>
                            <h3>Register</h3><br>
                            
                            <span class="social-btns">
                                <a style="margin-top:-210px !important; margin-left:-280px !important; position:absolute;" href="{{ route('index') }}" class="btn facebook"><i class="fa fa-home"></i></a>
                            </span>

                            <input id="name" placeholder="Name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                                <input id="email" placeholder="Email Address" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                <input id="password" placeholder="Password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif

                                <input id="password-confirm" placeholder="Confirm Password" type="password"  name="password_confirmation" required autocomplete="new-password">

                           
                                   
                        <br><button  type="submit" class="btn btn-primary loginButton" style="margin-top: 1px">
                                {{ __('Register') }}
                            </button>

                        <br><h5 style="margin-top:30px">Or Register with:</h5><br>
                        <div style="margin-top:400px" class="social-btns">
                            <a href="{{ url('login/facebook') }}" class="btn facebook"><i class="fa fa-facebook"></i></a>
                            <a href="{{ url('login/twitter') }}" class="btn twitter"><i class="fa fa-twitter"></i></a>
                            <a href="{{ url('login/google') }}" class="btn google"><i class="fa fa-google"></i></a>
                        </div>
                            
                              </form>
                        
                        
                            </div>
                        </div>

                    </form>
                   
                </div>
                <div class="call-text">
                    
                        <h1>Have <span>your</span> say</h1>
                        <span style="margin-top:60px ">Already have an account?</span><br>
                        <a style="margin-top:130px !important "href="{{ route('login') }}"><button>Participate in the community</button></a>
                </div>

            </div>
        </div>
    </div>
@endsection
