@extends('layouts.app')

@section('title', 'All Profiles')

@section('assets')
<link rel="stylesheet" href="{{asset('css/custom/c_profiles.css')}}">
@endsection

@section('header_style')
style="height: 300px; position:relative"
@endsection

@section('banner_display')
<h1 class="col-12 text-center header-text mx-auto" style="text-shadow: 2px 2px 4px #000000">All Players Profile.</h1>
@endsection

@section('content2')
<div class="row">
    <div class="content">
        <div class="row" style="display:flex">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <input id="searchBox" type="text" placeholder="Search..">
                <h5>Filter By</h5>
                <button class="dropdown-btn">Position of Play
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a  id="position">Defender</a>
                    <a  id="position">Winger</a>
                    <a  id="position">Striker</a>
                    <a  id="position">Mid-Fielder</a>
                    <a  id="position">Goal Keeper</a>
                </div>
                <button class="dropdown-btn">Gender
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a href="#">Male</a>
                    <a href="#">Female</a>
                </div>
                <a href="#">Age</a>
                <a href="#">Profile Package</a>
            </div>
            <div class="column" style="margin-left:20px; margin-bottom:1px">
                <span style="font-size:30px;cursor:pointer;color:darkred" onclick="openNav()">&#9776; Filter Profile</span>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">all</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-verified-tab" data-toggle="pill" href="#pills-verified" role="tab" aria-controls="pills-verified" aria-selected="false">verified</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-unverified-tab" data-toggle="pill" href="#pills-unverified" role="tab" aria-controls="pills-unverified" aria-selected="false">unverified</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" style="height: 800px; overflow-y:auto; overflow-x:hidden">
                        <div class="row" id="players_list">
                            @if(count($players) > 0)
                            @foreach($players as $player)
                            <div class="col-md-4 col-sm-6 col-12  card-container">
                                <div class="col-12 card" style="width:18rem">
                                    <div class="col-12 card-header">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%">
                                        </div>
                                    </div>
                                    <div class="col-12 card-body">
                                        <div class="row">
                                            <p class="mx-auto p-0" style="color:black; font-size: 23px">
                                                {{$player->player_firstname}} {{$player->player_lastname}}
                                                <br>
                                                <small>{{$player->player_position}}</small>
                                            </p>
                                            <button type="button" class="btn btn-danger mx-auto" data-toggle="modal" href="#exampleModalCenter">
                                                See More...
                                            </button>
                                            <div class="modal fade mt-5" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-left" id="exampleModalCenterTitle" style="color:black;">Player Info
                                                            </h5>
                                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:20%; height:auto; border-radius: 50%; margin-left:auto;">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true" style="color:black;">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col" style="color:forestgreen">{{$player->player_firstname}} {{$player->player_lastname}}
                                                                        </th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">Nationality</th>
                                                                        <td>Nigerian</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Team</th>
                                                                        <td>Jacob fc</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Age</th>
                                                                        <td>{{$player->player_age}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Height(cm)</th>
                                                                        <td>{{$player->player_height}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Weight(kg)</th>
                                                                        <td>{{$player->player_weight}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Position</th>
                                                                        <td>{{$player->player_position}}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="{{ url('/profile') }}" type="button" class="btn btn-success mx-auto">View
                                                                Full Profile</a>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else

                                @endif
                            </div>
                        </div>
                    </div>

                        @endsection
                        @section('footer_assests')
                        <script>
                        function openNav() {
                            document.getElementById("mySidenav").style.width = "250px";
                        }

                        function closeNav() {
                            document.getElementById("mySidenav").style.width = "0";
                        }
                        var dropdown = document.getElementsByClassName("dropdown-btn");
                        var i;

                        for (i = 0; i < dropdown.length; i++) {
                            dropdown[i].addEventListener("click", function() {
                                this.classList.toggle("active");
                                var dropdownContent = this.nextElementSibling;
                                if (dropdownContent.style.display === "block") {
                                    dropdownContent.style.display = "none";
                                } else {
                                    dropdownContent.style.display = "block";
                                }
                            });
                        }
                        </script>

                        @endsection
