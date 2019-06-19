@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/socialButtons.css">
<link rel="stylesheet" href="css/login.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">




        <div class="wrapper">
                <div class="login-text">
                  <div class="app">
                
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        {{-- <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Login With</label>
                            <div class="col-md-6">
                                <a href="{{ url('login/facebook') }}" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                                <a href="{{ url('login/twitter') }}" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="{{ url('login/google') }}" class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
                                <a href="{{ url('login/linkedin') }}" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="{{ url('login/github') }}" class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
                                <a href="{{ url('login/bitbucket') }}" class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
                            </div>
                        </div> --}}

                        <form>
                                <h3>Login</h3><br>
                                <span class="social-btns">
                                        <a style="margin-top:-190px !important; margin-left:-280px !important; position:absolute;" href="{{ route('index') }}" class="btn facebook"><i class="fa fa-home"></i></a>
                                </span>
                               
                                <input id="email" placeholder="Email address" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                                {{-- <input type="password" name="" placeholder="Password"> --}}
                                <input id="password" placeholder="Password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                            <br><input style="margin-left:-170px" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label style="margin-left:20px" class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    
                                    @if (Route::has('password.request'))
                                    <br><a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                   
                        <br><button  type="submit" class="btn btn-primary loginButton" style="margin-top: 1px">
                                {{ __('Login') }}
                            </button>

                        <br><h5 style="margin-top:40px">Or Login with:</h5><br>
                        <div style="margin-top:360px" class="social-btns">
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
                    
                        <h1>Have <span>your</span> say</h1><br>
                        <a href="{{ route('register') }}"><button>Join the Community</button></a>
                </div>

            </div>
            
        </div>
        
    </div>


</div>
</div>
</div>
@endsection

