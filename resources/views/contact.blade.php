@extends('layouts.app') 
@section('id', 'header')
 
@section('title', 'contact') 
@section('banner_display')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-12 banner-inner-wrapper">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 banner-text">
                    <div class="row">
                        <h1 class="col-12 text-center" style="text-shadow: 2px 2px 4px #000000">Get in touch...</h1>
                        <h2 class="col-12 text-center" style="text-shadow: 2px 2px 4px #000000">...want to request for a player<br> make an enquiry or just want to talk...<br> ... the options below
                            are a good way to get started.</h2>
                    </div>
                </div>
            </div>
            <!-- banner text -->
        </div>
    </div>
</div>
@endsection
 
@section('content')
    @include('messages')
<div class="row">
    <div class="col-md-5 col-sm-5 col-12 pt-5 pb-5 banner-form" style="background-color: white">
        <h5 class="text-center" style="color: rgba(0, 0, 0, 0.555)">
            <em>Say hello</em>
        </h5>
        <form role="form" class="form" method="post" action="{{ url('contact') }}">
            @csrf
            <div class="row">
                <div class="col-12 form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="col-12 form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                </div>
                <div class="col-12 form-group">
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                </div>
                <div class="col-12 form-group">
                    <input type="text" class="form-control" id="player_name" name="player_name" placeholder="Player Full Name">
                </div>
                <div class="col-12 form-group">
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="type a message here..."></textarea>
                </div>
                <div class="col-7 row form-group ml-1 mt-2">
                    <button type="submit" class="btn">Send</button>
                </div>
                <div class="col-md-5 col-12 row mt-2" style="display:block; margin-left: 20px; padding:0px;">
                    <ul style="list-style-type: none; padding: 0px; margin-bottom: 5px">
                        <li style="display: inline;">
                            <a href="https://www.facebook.com/iplayfootball007"><img src=" {{ asset('img/if_square-facebook_317727.png') }}" class="img-fluid" style="width:30px; height:30px;"></a>
                        </li>
                        <li style="display: inline;">
                            <a href="https://twitter.com/ipf007"><img src="{{ asset('/img/if_square-twitter_317723.png') }}" class="img-fluid" style="width:30px; height:30px;"></a>
                        </li>
                        <li style="display: inline;">
                            <a href="https://instagram.com/iplayfootball007"><img src="{{ asset('img/if_Instagram_381384.png') }}" class="img-fluid" style="width:30px; height:30px;"></a>
                        </li>
                        <li style="display: inline;">
                            <a href="tel:08070538333"><img src="{{ asset('img/if_WhatsApp_1298775.png') }}" class="img-fluid" style="width:30px; height:30px;"></a>
                        </li>
                    </ul>
                    <p style="color:darkred; padding-top:3px;">Connect on Social Media.</p>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection