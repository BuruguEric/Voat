@extends('layouts.main')

@section('title','| Login')

@section('posts')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                <div id="snax-popup-content" class="snax white-popup ">
                    <div class="snax-login-tab snax-tab-active">
                    <h2 class="g1-alpha">Log In</h2>
                    <h3 class="g1-delta snax-login-with-social-network">With social network:</h3>
        
                    <div class="snax snax-wpsl-wrapper">
                        <div class="snax-wpsl"> 
                        <style type="text/css">.wp-social-login-connect-with{}.wp-social-login-provider-list{}.wp-social-login-provider-list a{}.wp-social-login-provider-list img{}.wsl_connect_with_provider{}</style>
                            <div class="wp-social-login-widget"> 
                            <div class="wp-social-login-connect-with">Connect with a social network:</div>
                            <div class="wp-social-login-provider-list"> 
                            <a rel="nofollow" href="#" 
                            title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook"> </a> 
                            <a rel="nofollow" href="#" 
                            title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google"> </a>
                            </div>
                            <div class="wp-social-login-widget-clearing"></div>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div id="snax-login-recaptcha"></div>
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
