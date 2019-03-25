@extends('layouts.app') 
@section('title', 'All Profiles') 
@section('assets')
<link rel="stylesheet" href="{{asset('css/custom/c_profiles.css')}}">
@endsection
 
@section('id', "header") 
@section('header_style', 'position:relative') 
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
                    <a id="position">Defender</a>
                    <a id="position">Winger</a>
                    <a id="position">Striker</a>
                    <a id="position">Mid-Fielder</a>
                    <a id="position">Goal Keeper</a>
                </div>
                <button class="dropdown-btn">Gender
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a id="position">Male</a>
                    <a id="position">Female</a>
                </div>
                <button class="dropdown-btn">Age
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a id="position">Under 13</a>
                    <a id="position">Under 15</a>
                    <a id="position">Under 17</a>
                    <a id="position">Under 21</a>
                    <a id="position">Under 25</a>
                    <a id="position">Above 25</a>
                </div>
                <button class="dropdown-btn">Profile Package
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a id="position">Silver</a>
                    <a id="position">Gold</a>
                    <a id="position">Premium</a>
                </div>
            </div>
            <div class="column" style="margin-left:20px; margin-bottom:1px">
                <span style="font-size:30px;cursor:pointer;color:darkred" onclick="openNav()">&#9776; Filter Profile</span>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">all</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-verified-tab" data-toggle="pill" href="#pills-verified" role="tab" aria-controls="pills-verified"
                            aria-selected="false">verified</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-unverified-tab" data-toggle="pill" href="#pills-unverified" role="tab" aria-controls="pills-unverified"
                            aria-selected="false">unverified</a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" style="height: 800px; overflow-y:auto; overflow-x:hidden">
                        <div class="row" id="players_list">
                            @if(count($players) > 0) @foreach($players as $player)
                            <div class="col-md-4 col-sm-6 col-12  card-container">
                                <div class="col-12 card" style="width:18rem">
                                    <div class="col-12 card-header">
                                        {{-- <i class="far fa-check-circle fa-2x" style="z-index:1000;color:forestgreen;position:relative;top:7px;left:105%;"></i>                                        --}}
                                        <div class="row">
                                            <img src="{{ asset(extractFromImage($player->player_image_id)) }}" class="img-responsive" style="width:100%; height:100%">
                                        </div>
                                    </div>
                                    <div class="col-12 card-body">
                                        <div class="row">
                                            <p class="mx-auto p-0" style="color:black; font-size: 23px">
                                                {{$player->player_name}}
                                                <br>
                                                <small>{{$player->player_position}}</small>
                                            </p>
                                            <div class="col-12 row">
                                                <button class="btn btn-danger mx-auto" id="player_details" data-player_id="{{$player->id}}" data-toggle="modal" data-token="{{csrf_token()}}"
                                                    href="#exampleModalCenter">
                                                See More...
                                            </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach @else
                            <p>No players found</p>
                            @endif
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-verified" role="tabpanel" aria-labelledby="pills-verified-tab" style="height: 800px; overflow-y:auto; overflow-x:hidden">
                        <div class="row">
                            @if(count($verified) > 0) @foreach($verified as $player)
                            <div class="col-md-4 col-sm-6 col-12  card-container">
                                <div class="col-12 card" style="width:18rem">
                                    <div class="col-12 card-header">
                                        {{-- <i class="far fa-check-circle fa-2x" style="z-index:1000;color:forestgreen;position:relative;top:7px;left:105%;"></i>                                        --}}
                                        <div class="row">
                                            <img src="{{ asset(extractFromImage($player->player_image_id)) }}" class="img-responsive" style="width:100%; height:100%">
                                        </div>
                                    </div>
                                    <div class="col-12 card-body">
                                        <div class="row">
                                            <p class="mx-auto p-0" style="color:black; font-size: 23px">
                                                {{$player->player_name}}
                                                <br>
                                                <small>{{$player->player_position}}</small>
                                            </p>
                                            <div class="col-12 row">
                                                <button class="btn btn-danger mx-auto" id="player_details" data-player_id="{{$player->id}}" data-toggle="modal" data-token="{{csrf_token()}}"
                                                    href="#exampleModalCenter">
                                                See More...
                                            </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach @else
                            <p>No verified players found</p>
                            @endif
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-unverified" role="tabpanel" aria-labelledby="pills-unverified-tab" style="height: 800px; overflow-y:auto; overflow-x:hidden">
                        <div class="row">
                            @if(count($unverified) > 0) @foreach($unverified as $player)
                            <div class="col-md-4 col-sm-6 col-12  card-container">
                                <div class="col-12 card" style="width:18rem">
                                    <div class="col-12 card-header">
                                        {{-- <i class="far fa-check-circle fa-2x" style="z-index:1000;color:forestgreen;position:relative;top:7px;left:105%;"></i>                                        --}}
                                        <div class="row">
                                            <img src="{{ asset(extractFromImage($player->player_image_id)) }}" class="img-responsive" style="width:100%; height:100%">
                                        </div>
                                    </div>
                                    <div class="col-12 card-body">
                                        <div class="row">
                                            <p class="mx-auto p-0" style="color:black; font-size: 23px">
                                                {{$player->player_name}}
                                                <br>
                                                <small>{{$player->player_position}}</small>
                                            </p>
                                            <button class="btn btn-danger mx-auto" id="player_details" data-player_id="{{$player->id}}" data-toggle="modal" data-token="{{csrf_token()}}"
                                                href="#exampleModalCenter">
                                                See More...
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach @else
                            <p>No unverified players found</p>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade mt-5" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1Title"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="modalDetails">

        </div>
    </div>
</div>
@endsection
 
@section('footer_assests')
<script>
    // loadPlayers();
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

        $('body').delegate('#player_details', 'click', function(){
            var id = $(this).data('player_id');
            $.ajax({
            type: 'get',
            url: '/load_player_info',
            data:{'id':id},
            success: function (data) {
                $('#modalDetails').html(data);
            }
        });
    });

</script>
@endsection