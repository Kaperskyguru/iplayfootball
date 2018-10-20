@extends('layouts.app')

@section('title', 'Reset Password')

@section('header_style', 'style="height: 600px"')

@section('banner_display')
<!--Reset password Form-->
<div class="container p-5">
    <div class="row">
        <div class="col-md-4 col-sm-8 col-12 bg-white p-5 mx-auto" style="margin-top: 10rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <h5 class="text-center" style="color: rgba(0, 0, 0, 0.555)">RESET PASSWORD</h5>
            <div class="row">
                <form role="form" class="form row">
                    <div class="col-12 form-group">
                        <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
                    </div>
                    <div class="col-md-6 col-12 row ml-1">
                        <button type="submit" class="btn">Reset</button>
                    </div>
                    <div class="col-md-4 col-12 row ml-2 pt-2">
                        <a href="{{ url('/login') }}">Login</a>
                    </div>
                    <div class="col-12 row pt-5">
                        <span class="ml-2">Don't have an iPlayfootball account?,
                            <a href="{{ url('/register') }}">register</a> here.</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
