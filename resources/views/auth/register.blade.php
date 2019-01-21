@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="{{asset('css/custom/c_register.css')}}">
@endsection

@section('banner_display')
    <!-- Banner Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12 banner-inner-wrapper">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12 banner-text">
                        <div class="row">
                            <h1 class="col-12 text-center" style="text-shadow: 2px 2px 4px #000000">{{ __('...registration area')}}</h1>
                            <h2 class="col-12 text-center" style="text-shadow: 2px 2px 4px #000000">{{ __('it\'s ')}}<strong>{{ __('FREE')}}</strong>
                                <br>{{ __(' on a single platform...')}}</h2>
                        </div>
                    </div>
                </div>
                <!-- banner text -->
            </div>
        </div>
    </div>
@endsection()

@section('content')
<div class="row">
    <div class="col-md-7 col-sm-6 col-12 pt-5 pb-5 banner-form" style="background-color: white">
        <h5 class="text-center" style="color: rgba(0, 0, 0, 0.555)">{{ __('REGISTER')}}</h5>
        <form role="form" class="form" method="POST" action="{{ route('register') }}" style="padding: 20px;">
                @csrf
            <div class="row">
                <div class="col-12 form-group">
                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="Full Name" value="{{ old('name') }}" required autofocus>
                    
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                </div>
                <div class="col-12 form-group">
                    <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email Address">

                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                </div>
                <div class="col-12 form-group">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                </div>
                <div class="col-12 form-group">
                    <input type="date" class="form-control"  name="dob" id="dob" placeholder="Date of Birth">
                </div>
                <div class="col-12 form-group">
                    <input type="text" class="form-control" name="country" id="country" placeholder="National">
                </div>
                <div class="col-12 form-group">
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Enter password" required>
                   
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                </div>
                <div class="col-12 form-group">
                    <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Enter confirm password" required>
                </div>
                <div class="col-12 form-group">
                        <label for="type" class="col-form-label text-md-right">{{ __('Type') }}</label> 
                    <select name="role" class="form-control">
                         <option value="7"> {{ __('Scout')}} </option>
                         <option value="5"> {{ __('Academics')}} </option>
                         <option value="6"> {{ __('Team')}} </option>
                    </select>
                </div>
                <div class="col-md-7 col-12 row">
                    <button type="submit" class="btn mt-2 ml-3">{{ __("Sign Up")}}</button>
                </div>
                <div class="col-md-4 col-12 row" style="display:block; margin-left: 25px; padding:0px;">
                    <p style="color:forestgreen; padding-top:3px;">{{ __('Register With:')}}</p>
                    <ul style="list-style-type: none; padding: 0px; margin-bottom: 5px">
                        <li style="display: inline;">
                            <a href="https://www.facebook.com/TechPadi"><img src="img/if_square-facebook_317727.png" class="img-fluid" style="width:30px; height:30px;"></a>
                        </li>
                        <li style="display: inline;">
                            <a href="https://twitter.com/techpadi"><img src="img/if_square-twitter_317723.png" class="img-fluid" style="width:30px; height:30px;"></a>
                        </li>
                        <li style="display: inline;">
                            <a href="https://www.instagram.com/techpadi"><img src="img/if_new-google-favicon_682665.png" class="img-fluid" style="width:30px; height:30px;"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 col-12 form-group m-2 mt-3">
                    <a href="{{ route('password.request') }}">{{ __('Forgot Password?')}}</a>
                </div>
                <div class="col-12 row pt-5">
                    <span class="ml-2">{{ __('Already have an iPlayfootball account?,')}}
                        <a href="{{ route('login') }}" style="text-transform:uppercase; text-decoration:underline;">{{ __('Login
                            here')}}</a>{{ __('.')}}</span>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection




{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
