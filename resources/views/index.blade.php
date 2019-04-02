@extends('layouts.app') 
@section('title', 'Homepage') 
@section('nav', 'bg-dark') 
@section('assets')
<link rel="stylesheet" href="{{asset('css/custom/c_index.css?v=2')}}">
@endsection
 
@section('banner_display')

<!-- Carousel Section -->
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item carousel-div active img-1">
                {{-- <img src="img/slide1.jpg" class="d-block w-100" alt="..." style="background-repeat:no-repeat;background-size:100%;">                --}}
                <div class="carousel-caption d-block float-right">
                    <h1 class="text-right d-none d-sm-block" style="text-shadow: 2px 2px 4px #000000">Exposing football talents to the world.</h1>
                    <h2 class="text-right hidden-xs" style="text-shadow: 2px 2px 4px #000000">Find talented players from far and wide now on a single platform.
                    </h2>
                    <p class="float-right mt-2 row p-block"> <a href="{{route('profiles')}}" class="btn d-inline p-2">View all profiles</a>
                        <a href="{{route('register')}}" class="tbtn d-inline p-2">New profile</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item carousel-div img-2">
                {{-- <img src="img/slide2.jpg" class="d-block w-100" alt="..." style="background-repeat:no-repeat;background-size:100%;">                --}}
                <div class="carousel-caption d-block float-right">
                    <h1 class="text-right d-none d-sm-block" style="text-shadow: 2px 2px 4px #000000">Exposing football talents to the world.</h1>
                    <h2 class="text-right hidden-xs" style="text-shadow: 2px 2px 4px #000000">Find talented players from far and wide now on a single platform.
                    </h2>
                    <p class="float-right mt-2 row p-block"> <a href="{{route('profiles')}}" class="btn d-inline p-2">View all profiles</a>
                        <a href="{{route('register')}}" class="tbtn d-inline p-2">New profile</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item carousel-div img-3">
                {{-- <img src="img/slide3.jpg" class="d-block w-100" alt="..." style="background-repeat:no-repeat;background-size:100%;">                --}}
                <div class="carousel-caption d-block float-right">
                    <h1 class="text-right d-none d-sm-block" style="text-shadow: 2px 2px 4px #000000">Exposing football talents to the world.</h1>
                    <h2 class="text-right hidden-xs" style="text-shadow: 2px 2px 4px #000000">Find talented players from far and wide now on a single platform.
                    </h2>
                    <p class="float-right mt-2 row p-block"> <a href="{{route('profiles')}}" class="btn d-inline p-2">View all profiles</a>
                        <a href="{{route('register')}}" class="tbtn d-inline p-2">New profile</a>
                    </p>                    
                </div>
            </div>
            <div class="carousel-item carousel-div img-4">
                {{-- <img src="img/slide4.jpg" class="d-block w-100" alt="..." style="background-repeat:no-repeat;background-size:100%;">                --}}
                <div class="carousel-caption d-block float-right">
                    <h1 class="text-right d-none d-sm-block" style="text-shadow: 2px 2px 4px #000000">Exposing football talents to the world.</h1>
                    <h2 class="text-right hidden-xs" style="text-shadow: 2px 2px 4px #000000">Find talented players from far and wide now on a single platform.
                    </h2>
                    <p class="float-right mt-2 row p-block"> <a href="{{route('profiles')}}" class="btn d-inline p-2">View all profiles</a>
                        <a href="{{route('register')}}" class="tbtn d-inline p-2">New profile</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item carousel-div img-5">
                {{-- <img src="img/slide5.jpg" class="d-block w-100" alt="..." style="background-repeat:no-repeat;background-size:100%;">                --}}
                <div class="carousel-caption float-right">
                    <h1 class="text-right d-none d-sm-block" style="text-shadow: 2px 2px 4px #000000">Exposing football talents to the world.</h1>
                    <h2 class="text-right" style="text-shadow: 2px 2px 4px #000000">Find talented players from far and wide now on a single platform.
                    </h2>
                    <p class="float-right mt-2 row p-block"> <a href="{{route('profiles')}}" class="btn d-inline p-2">View all profiles</a>
                        <a href="{{route('register')}}" class="tbtn d-inline p-2">New profile</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item carousel-div img-6">
                {{-- <img src="img/slide6.jpg" class="d-block w-100" alt="..." style="background-repeat:no-repeat;background-size:100%;">                --}}
                <div class="carousel-caption d-block float-right">
                    <h1 class="text-right d-none d-sm-block" style="text-shadow: 2px 2px 4px #000000">Exposing football talents to the world.</h1>
                    <h2 class="text-right" style="text-shadow: 2px 2px 4px #000000">Find talented players from far and wide now on a single platform.
                    </h2>
                    <p class="float-right mt-2 row p-block"> 
                        <a href="{{route('profiles')}}" class="btn d-inline p-2">View all profiles</a>
                        <a href="{{route('register')}}" class="tbtn d-inline p-2">New profile</a>
                    </p>
                </div>
            </div>
        </div>
        {{-- <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a> --}}
    </div>
</div>
<!-- Carousel Section -->
@endsection
 
@section('content')
<div class="row">
    <div class="col-md-7 col-sm-6 col-12 pt-5 pb-5 banner-form" style="background-color: white">
        <h5 class="text-center" style="color: rgba(0, 0, 0, 0.555)">REGISTER</h5>
        <form role="form" class="form" method="POST" action="{{ route('register') }}" style="padding: 20px;">
            @csrf
            <div class="row">
                <div class="col-12 form-group">
                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" name="name"
                        id="name" placeholder="Full Name"> @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span> @endif
                </div>
                <div class="col-12 form-group">
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                        id="email" aria-describedby="emailHelp" placeholder="Email Address"> @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span> @endif
                </div>
                <div class="col-12 form-group">
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password"
                        aria-describedby="emailHelp" placeholder="Password" required> @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span> @endif
                </div>
                <div class="col-12 form-group">
                    <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Confirm password"
                        required>
                </div>
                <div class="col-12 form-group">
                    <input type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" id="phone" name="phone" placeholder="Phone Number">                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span> @endif
                </div>
                {{--
                <div class="col-12 form-group">
                    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Date of Birth">
                </div> --}}
                <div class="col-12 form-group">
                    <input type="text" class="form-control" name="country" id="country" placeholder="State">
                </div>
                {{--
                <div class="col-12 form-group">
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Height(ft)">
                </div>
                <div class="col-12 form-group">
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Weight(kg)">
                </div>
                <div class="col-12 form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Position">
                </div> --}}
                <div class="col-md-7 col-12 row">
                    <input type="hidden" name="role" id="role" value="8">
                    <input type="hidden" name="user_status" id="user_status" value="2" required>
                    <button type="submit" class="btn mt-2 ml-3">Sign Up</button>
                </div>
                <div class="col-md-4 col-12 row" style="display:block; margin-left: 25px; padding:0px;">
                    <p style="color:forestgreen; padding-top:3px;">Register With:</p>
                    <ul style="list-style-type: none; padding: 0px; margin-bottom: 5px">
                        <a href="https://www.facebook.com/TechPadi"><img src=" {{ asset('img/if_square-facebook_317727.png') }}" class="img-fluid" style="width:30px; height:30px;"></a>
                        <li style="display: inline;">
                        </li>
                        <li style="display: inline;">
                            <a href="https://twitter.com/techpadi"><img src=" {{ asset('img/if_square-twitter_317723.png') }}" class="img-fluid" style="width:30px; height:30px;"></a>
                        </li>
                        <li style="display: inline;">
                            <a href="https://www.instagram.com/techpadi"><img src="{{ asset('img/if_new-google-favicon_682665.png') }}" class="img-fluid" style="width:30px; height:30px;"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 col-12 form-group m-2 mt-3">
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
                <div class="col-12 row pt-5">
                    <span class="ml-2">Already have an iPlayfootball account?,
                        <a href="{{ route('login') }}" style="text-transform:uppercase; text-decoration:underline;">Login
                            here
                        </a>.</span>
                </div>
                <div class="col-12 row pt-5">
                    <span class="ml-2">Are you a <strong>Scout</strong>, <strong>Team</strong> or <strong>Academy</strong>?
                        <a href="{{ url('/register') }}" style="text-transform:uppercase; text-decoration:underline;">Register
                            here
                        </a>.</span>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
 
@section('content2')
<div class="row">
    <div class="col-12 intro-content-1">
        <div class="row">
            <p class="col-12 text-center">How does it work?</p>
        </div>
    </div>
    <div class="col-12 intro-content-2">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="card mt-2 mb-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header row p-0 m-0">
                            <img src="{{ asset('img/Orion_add-user.png') }}" alt="add user icon" class="mx-auto mt-3">
                            <p class="col-12 text-center pt-2 mb-0">Sign-Up</p>
                        </div>
                        <div class="card-body">
                            <p class="text-center">
                                Fill the form above with all your footballing information
                            </p>
                            <p class="text-center">
                                We will review and publish your profile within 24 hours
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="card mt-2 mb-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header row p-0 m-0">
                            <img src="{{ asset('img/Orion_starred-user.png') }}" alt="starred user icon" class="mx-auto mt-3">
                            <p class="col-12 text-center pt-2 mb-0">Upgrade Profile</p>
                        </div>
                        <div class="card-body">
                            <p class="text-center">
                                Once your profile is approved, you can update other details and add your action videos and pictures
                            </p>
                            <p class="text-center">
                                We provide unlimited storage for media files
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="card mt-2 mb-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header row p-0 m-0">
                            <img src="{{ asset('img/Orion_people.png') }}" alt="starred user icon" class="mx-auto mt-3">
                            <p class="col-12 text-center pt-2 mb-0">Meet The World</p>
                        </div>
                        <div class="card-body">
                            <p class="text-center">
                                Fill the form above with all your footballing information
                            </p>
                            <p class="text-center">
                                We will review and publish your profile within 24 hours
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 intro-content-3">
        <div class="row">
            <p class="text-center">The chances that a footballer would get discovered by talent scouts and teams in search of his skill have been
                greatly increased, just by signing up with us. Focus on building your skill, we got your publicity taken
                care of</p>
            <div class="col-12">
                <div class="row">
                    <a href="{{route('profiles')}}" class="btn btn-bdr p-2 ml-3 text-white mx-auto">See All Profiles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection