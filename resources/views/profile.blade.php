@extends('layouts.app') 
@section('title', 'Profile') 
@section('id', "header") 
@section('header_style') style="height: 600px;
position:relative"
@endsection
 
@section('assets')
<link rel="stylesheet" href="{{asset('css/custom/c_profile.css')}}">
@endsection
 
@section('banner_display')
<div class="container-fluid" style="position:absolute; bottom:0">
    <div class="row">
        <h1 class="col-12 text-center header-text mx-auto" style="text-shadow: 2px 2px 4px #000000">Full Individual Profile.
        </h1>
        <div class="col-6 col-md-8 p-3" style="background-color: crimson;">
            <div class="row">
                <div class="col-12 col-md-3">
                    <img src="{{ asset(extractFromImage($player->player_image_id)) }}" class="img-responsive rounded-circle" style="width:10rem; height:10rem">
                </div>
                <div class="col-12 col-md-9">
                    <p class="col-12">
                        <strong>{{__($player->player_name)}}</strong>
                    </p>
                    <P class="col-12">{{__($player->player_position) ?: 'Nil'}}</P>
                    <a href="#exampleModalCenter2" class="btn btn-success" data-toggle="modal">Request Player</a>
                    <div class="modal fade mt-5" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-left" id="exampleModalCenterTitle" style="color:black;">Player Request
                                    </h5><br>
                                    <p class="text-left" style="color:forestgreen; font-weight:700;margin-top:30px;">{{__($player->player_name)}}</p>
                                    <img src="{{ asset(extractFromImage($player->player_image_id)) }}" class="img-responsive" style="width:20%; height:auto; border-radius: 50%; margin-left:auto;">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="color:black;">&times;</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" class="form" style="padding-left: 20px;padding-right: 20px;">
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Full Name">
                                                <span data-placeholder="full name"></span>
                                            </div>
                                            <div class="col-12 form-group">
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
                                            </div>
                                            <div class="col-12 form-group">
                                                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
                                            </div>
                                            <div class="col-12 form-group">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="type a message here..."></textarea>
                                            </div>
                                            <div class="col-md-7 col-12 row">
                                                <button type="submit" class="btn mt-2 ml-3">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-6 p-5" style="background-color:darkred">
            <ul class="col-12">
                <li>
                    <strong>NATIONALITY</strong>: {{__($player->player_state)}}</li>
                <li>
                    <strong>DATE OF BIRTH</strong>: {{__($player->player_dob)}}</li>
                <li>
                    <strong>WEIGHT</strong>: {{__($player->player_weight)}} kg</li>
                <li>
                    <strong>HEIGHT</strong>: {{__($player->player_height)}} ft</li>
            </ul>
        </div>
    </div>
</div>
@endsection
 
@section('content2')
<div class="row">
    <div class="col-12">
        <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="statistics-tab" data-toggle="tab" href="#statistics" role="tab" aria-controls="statistics"
                    aria-selected="true" style="border:none">STATISTICS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="biography-tab" data-toggle="tab" href="#biography" role="tab" aria-controls="biography" aria-selected="false">BIOGRAPHY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">GALLERY</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active p-5" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
                <table class="table" style="background-color: #f3f3f3; border:none">
                    <tbody>
                        <tr>
                            <th scope="row" style="font-weight: 10; color: #555">AT</th>
                            <td style="color: #555; font-weight:600">POSITION</td>
                        </tr>
                        <tr>
                            <th scope="row" style="font-weight: 10; color: #555"></th>
                            <td style="color: #555; font-weight:600">GAMES PLAYED</td>
                        </tr>
                        <tr>
                            <th scope="row" style="font-weight: 10; color: #555"></th>
                            <td style="color: #555; font-weight:600">MINUTES PLAYED</td>
                        </tr>
                        <tr>
                            <th scope="row" style="font-weight: 10; color: #555"></th>
                            <td style="color: #555; font-weight:600">STARTS</td>
                        </tr>
                        <tr>
                            <th scope="row" style="font-weight: 10; color: #555"></th>
                            <td style="color: #555; font-weight:600">SUBSTITUTION ON</td>
                        </tr>
                        <tr>
                            <th scope="row" style="font-weight: 10; color: #555"></th>
                            <td style="color: #555; font-weight:600">SUBSTITUTION OFF</td>
                        </tr>
                    </tbody>
                </table>
                <hr class="mt-5 mb-5" style="line-height:9rem">
                <ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true"
                            style="border:none">GENERAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="defence-discipline-tab" data-toggle="tab" href="#defence-discipline" role="tab" aria-controls="defence-discipline"
                            aria-selected="false">DEFENCE & DISCIPLINE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="attack-tab" data-toggle="tab" href="#attack" role="tab" aria-controls="attack" aria-selected="false">ATTACK</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active pt-5" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <table class="table" style="background-color: darkred; color: white; border: 1px solid white">
                            <tbody>
                                <tr>
                                    <th scope="row" style="font-weight: 10">PLAY POSITION</th>
                                    <td>{{__($player->player_position) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">TOTAL GAMES PLAYED</th>
                                    <td>{{__($player->player_games_played) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">PASSING ACCURACY</th>
                                    <td>{{__($player->player_passing_accuracy) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">GROUND DUEL WINNING</th>
                                    <td>{{__($player->player_ground_duel_winning) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">ARIEL DUEL WINNING</th>
                                    <td>{{__($player->player_ariel_duel_winning) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">RECOVERY</th>
                                    <td>{{__($player->player_recovery) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">Start Games</th>
                                    <td>{{__($player->player_interceptions) ?: 'Nil'}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade pl-4 pr-4 pt-5" id="defence-discipline" role="tabpanel" aria-labelledby="defence-discipline-tab">
                        <table class="table" style="background-color: darkred; color: white; border: 1px solid white">
                            <tbody>
                                <tr>
                                    <th scope="row" style="font-weight: 10">TACKLES WINNING</th>
                                    <td>{{__($player->player_tackles_winning) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">CLEARANCE</th>
                                    <td>{{__($player->player_clearance) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">BLOCKING</th>
                                    <td>{{__($player->player_blocking) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">INTERCEPTIONS</th>
                                    <td>{{__($player->player_goal_scoring) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">PENALTIES CONCEDED</th>
                                    <td>{{__($player->player_penalties_conceded) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">FOUL WINNINGS</th>
                                    <td>{{__($player->player_foul_winnings) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">YELLOW CARD</th>
                                    <td>Impressive</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">RED CARD</th>
                                    <td>Outstanding</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade pt-5" id="attack" role="tabpanel" aria-labelledby="attack-tab">
                        <table class="table" style="background-color: darkred; color: white; border: 1px solid white">
                            <tbody>
                                <tr>
                                    <th scope="row" style="font-weight: 10">GOAL SCORING</th>
                                    <td>{{__($player->player_goal_scoring) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">PENALTY GOALS</th>
                                    <td>{{__($player->player_goal_scoring) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">SHOOTING ACCURACY</th>
                                    <td>{{__($player->player_shooting_accuracy) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">SUCCESSFUL CROSSES</th>
                                    <td>{{__($player->player_successful_crosses) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">ASSIST ABILITY</th>
                                    <td>{{__($player->player_assist_ability) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">CHANCES CREATION</th>
                                    <td>{{__($player->player_chances_creation) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">PENALTIES WINNING</th>
                                    <td>{{__($player->player_penalties_winnings) ?: 'Nil'}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" style="font-weight: 10">OFFSIDES</th>
                                    <td>{{__($player->player_offsides) ?: 'Nil'}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade row" id="biography" role="tabpanel" aria-labelledby="biography-tab">
                <p class="col-12 p-4">
                    {{__($player->player_biography) ?: 'Nil'}}
                </p>
            </div>
            <div class="tab-pane fade p-5" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="picture-tab" data-toggle="tab" href="#picture" role="tab" aria-controls="picture" aria-selected="true">PICTURES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">VIDEOS</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active p-5" id="picture" role="tabpanel" aria-labelledby="picture-tab" style="height: 250px; overflow-y:auto; overflow-x:hidden">
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade p-5" id="video" role="tabpanel" aria-labelledby="video-tab" style="height: 250px; overflow-y:auto; overflow-x:hidden">
                        <div class="row">
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-6 pl-5 pr-5 mt-2 mb-2">
                                <div class="row">
                                    <div class="col-12 icard">
                                        <div class="row">
                                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

        <div class="mySlides">
            <div class="numbertext">1 / 12</div>
            <img src="img/FREDRICK.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 12</div>
            <img src="img/FREDRICK.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 12</div>
            <img src="img/FREDRICK.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">4 / 12</div>
            <img src="img/FREDRICK.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">5 / 12</div>
            <img src="img/FREDRICK.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">6 / 12</div>
            <img src="img/FREDRICK.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">7 / 12</div>
            <img src="img/FREDRICK.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">8 / 12</div>
            <img src="img/FREDRICK.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">9 / 12</div>
            <img src="img/FREDRICK.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">10 / 12</div>
            <img src="img/FREDRICK.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">11 / 12</div>
            <img src="img/FREDRICK.jpg" style="width:100%">
        </div>

        <div class="mySlides">
            <div class="numbertext">12 / 12</div>
            <img src="img/FREDRICK.jpg" style="width:100%">
        </div>

        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Caption text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <!-- Thumbnail image controls -->
        <div class="column">
            <img class="demo" src="img/FREDRICK.jpg" onclick="currentSlide(1)" alt="">
        </div>

        <div class="column">
            <img class="demo" src="img/FREDRICK.jpg" onclick="currentSlide(2)" alt="">
        </div>

        <div class="column">
            <img class="demo" src="img/FREDRICK.jpg" onclick="currentSlide(3)" alt="">
        </div>

        <div class="column">
            <img class="demo" src="img/FREDRICK.jpg" onclick="currentSlide(4)" alt="">
        </div>
        <div class="column">
            <img class="demo" src="img/FREDRICK.jpg" onclick="currentSlide(5)" alt="">
        </div>
        <div class="column">
            <img class="demo" src="img/FREDRICK.jpg" onclick="currentSlide(6)" alt="">
        </div>
        <div class="column">
            <img class="demo" src="img/FREDRICK.jpg" onclick="currentSlide(7)" alt="">
        </div>
        <div class="column">
            <img class="demo" src="img/FREDRICK.jpg" onclick="currentSlide(8)" alt="">
        </div>
        <div class="column">
            <img class="demo" src="img/FREDRICK.jpg" onclick="currentSlide(9)" alt="">
        </div>
        <div class="column">
            <img class="demo" src="img/FREDRICK.jpg" onclick="currentSlide(10)" alt="">
        </div>
        <div class="column">
            <img class="demo" src="img/FREDRICK.jpg" onclick="currentSlide(11)" alt="">
        </div>
        <div class="column">
            <img class="demo" src="img/FREDRICK.jpg" onclick="currentSlide(12)" alt="">
        </div>
    </div>
</div>
@endsection
 
@section('scripts')
<script>
    // Open the Modal
    function openModal() {
        document.getElementById('myModal').style.display = "block";
    }

    // Close the Modal
    function closeModal() {
        document.getElementById('myModal').style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }

</script>
@endsection