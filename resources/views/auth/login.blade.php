@extends('layouts.app')

@section('title', 'Login')

@section('header_style', 'style="height: 600px"')

@section('banner_display')
<!--Login Form-->
<div class="container p-5">
    <div class="row">
        <div class="col-md-6 col-sm-8 col-12 bg-white p-5 mx-auto" style="margin-top: 6.5rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <h5 class="text-center" style="color: rgba(0, 0, 0, 0.555)">LOGIN</h5>
            <div class="row">
                {{-- {{Form::open( )}} --}}
                <form role="form" method="POST" class="form row" action="{{ route('login') }}">
                        @csrf
                    <div class="col-12 form-group">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-sm{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" aria-describedby="emailHelp" placeholder="Email Address">

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    </div>
                    <div class="col-12 form-group">
                            <input type="password" name="password" class="form-control form-control-sm{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Enter Password">

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-12 row pl-4">
                        <button type="submit" class="btn">{{ __('Login') }}</button>
                    </div>
                    <div class="col-md-4 col-12 form-group mt-3">
                        <a href="{{ route('password.request') }}">{{ __('Forgot Password?')}}</a>
                    </div>
                    <div class="col-12 row pt-5">
                        <span class="ml-2">{{ __('Don\'t have an iPlayfootball account?,')}}
                            <a href="{{ route('register') }}">{{ __('register')}}</a> here.</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection





{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

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

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
