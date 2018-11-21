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
                            <h1 class="col-12 text-center" style="text-shadow: 2px 2px 4px #000000">...registration area</h1>
                            <h2 class="col-12 text-center" style="text-shadow: 2px 2px 4px #000000">it's <strong>FREE</strong>
                                <br> on a single platform...</h2>
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
        <h5 class="text-center" style="color: rgba(0, 0, 0, 0.555)">REGISTER</h5>
        <form role="form" class="form" style="padding: 20px;">
            <div class="row">
                <div class="col-12 form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Full Name">
                </div>
                <div class="col-12 form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
                </div>
                <div class="col-12 form-group">
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
                </div>
                <div class="col-12 form-group">
                    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Date of Birth">
                </div>
                <div class="col-12 form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="National">
                </div>
                <div class="col-12 form-group">
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Height(ft)">
                </div>
                <div class="col-12 form-group">
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Weight(kg)">
                </div>
                <div class="col-12 form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Position">
                </div>
                <div class="col-md-7 col-12 row">
                    <button type="submit" class="btn mt-2 ml-3">Sign Up</button>
                </div>
                <div class="col-md-4 col-12 row" style="display:block; margin-left: 25px; padding:0px;">
                    <p style="color:forestgreen; padding-top:3px;">Register With:</p>
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
                    <a href="{{ url('/resetpassword') }}">Forgot Password?</a>
                </div>
                <div class="col-12 row pt-5">
                    <span class="ml-2">Already have an iPlayfootball account?,
                        <a href="{{ url('/login') }}" style="text-transform:uppercase; text-decoration:underline;">Login
                            here</a>.</span>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
