@extends('layouts.app')

@section('assets')
<link rel="stylesheet" href="{{asset('public/css/custom/c_about.css')}}">
@endsection

@section('banner_display')
<!-- Banner Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-12 banner-inner-wrapper">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 banner-text">
                    <div class="row">
                        <h1 class="col-12 text-center" style="text-shadow: 2px 2px 4px #000000">...We provide world class profile for football professionals.</h1>
                        <h2 class="col-12 text-center" style="text-shadow: 2px 2px 4px #000000">a robust platform for all grass-root football players.</h2>
                    </div>
                </div>
            </div>
            <!-- banner text -->
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- Form Section -->
<div class="row">
    <div class="col-md-7 col-sm-6 col-12 pt-5 pb-5 banner-form">
        <p class="col-12 text-left" style="font-size: 18px; line-height: 32.5px;">
            IPLAYFOOTBALL is a global provider of football and sport related services ranging from Football Club Profile Creation and Management, Footballer Professional Profile Creation, Manage and Promote Professional Footballers Profiles, Career Consultancy for
            Football Professionals, Sales, Customization and Delivery of Sport Accessories.
        </p>
        <p class="col-12 text-left" style="font-size: 18px; line-height: 32.5px;">
            We provide world class profile for football professionals, create audience for potential players, and nourish grass root footballers to become internationally recognized through information technology tools, to proffer solutions to uncultured approaches
            to footballing.
        </p>
    </div>
</div>
@endsection

@section('content2')
<!-- Intro Section -->
<div class="row">
    <div class="col-12 intro-content-1">
        <div class="row">
            <p class="col-12 text-center">The Company</p>
        </div>
    </div>
    <div class="col-12 intro-content-2">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="card mt-2 mb-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header row p-0 m-0">
                            <img src="{{ asset('public/img/Orion_camera.png') }}" alt="camera icon" class="mx-auto mt-3">
                            <p class="col-12 text-center pt-2 mb-0">Vision</p>
                        </div>
                        <div class="card-body">
                            <p class="text-center">
                                To deliver the most reliable, affordable and quick opportunities to football professionals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="card mt-2 mb-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header row p-0 m-0">
                            <img src="{{ asset('public/img/Orion_survey.png') }} " alt="survey chart icon" class="mx-auto mt-3">
                            <p class="col-12 text-center pt-2 mb-0">Mission</p>
                        </div>
                        <div class="card-body">
                            <p class="text-center">
                                We are dedicated to providing fast, reliable, and affordable service to all football Professionals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="card mt-2 mb-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-header row p-0 m-0">
                            <img src="{{ asset('public/img/Orion_sales-performance-up.png') }}" alt="sales performance icon" class="mx-auto mt-3">
                            <p class="col-12 text-center pt-2 mb-0">Core Values</p>
                        </div>
                        <div class="card-body">
                            <p class="text-center">
                                Integrity and Accountability, customer, satisfaction, Team Spirit, Innovation, Continual Improvement, Self Respect.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 intro-content-3">
        <div class="row">
            <p class="text-center">The chances that a footballer would get discovered by talent scouts and teams in search of his skill have been greatly increased, just by signing up with us. Focus on building your skill, we got your publicity taken care of</p>
        </div>
    </div>
</div>
@endsection
