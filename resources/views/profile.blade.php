@extends('layouts.app')

@section('title', 'Profile')

@section('header_style')
    style="height: 600px; position:relative"
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
                        <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive rounded-circle" style="width:10rem; height:10rem">
                    </div>
                    <div class="col-12 col-md-9">
                        <p class="col-12">
                            <strong>FRANKLIN ANDY TOMA</strong>
                        </p>
                        <P class="col-12">Striker</P>
                        <a href="#exampleModalCenter2" class="btn btn-success" data-toggle="modal">Request Player</a>
                        <div class="modal fade mt-5" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-left" id="exampleModalCenterTitle" style="color:black;">Player Request
                                        </h5><br>
                                        <p class="text-left" style="color:forestgreen; font-weight:700;margin-top:30px;">Franklin Andy Toma</p>
                                        <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:20%; height:auto; border-radius: 50%; margin-left:auto;">
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
                        <strong>NATIONALITY</strong>: Nigerian</li>
                    <li>
                        <strong>DATE OF BIRTH</strong>: 17/05/1995</li>
                    <li>
                        <strong>WEIGHT</strong>: 70kg</li>
                    <li>
                        <strong>HEIGHT</strong>: 5.8ft</li>
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
                        <a class="nav-link active" id="statistics-tab" data-toggle="tab" href="#statistics" role="tab" aria-controls="statistics" aria-selected="true" style="border:none">STATISTICS</a>
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
                                <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true" style="border:none">GENERAL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="defence-discipline-tab" data-toggle="tab" href="#defence-discipline" role="tab" aria-controls="defence-discipline" aria-selected="false">DEFENCE & DISCIPLINE</a>
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
                                            <td>Outstanding</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">TOTAL GAMES PLAYED</th>
                                            <td>Impressive</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">PASSING ACCURACY</th>
                                            <td>Okay</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">GROUND DUEL WINNING</th>
                                            <td>Impressive</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">ARIEL DUEL WINNING</th>
                                            <td>Okay</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">RECOVERY</th>
                                            <td>Outstanding</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">STARTS GAMES</th>
                                            <td>Outstanding</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade pl-4 pr-4 pt-5" id="defence-discipline" role="tabpanel" aria-labelledby="defence-discipline-tab">
                                <table class="table" style="background-color: darkred; color: white; border: 1px solid white">
                                    <tbody>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">TACKLES WINNING</th>
                                            <td>Impressive</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">CLEARANCE</th>
                                            <td>Okay</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">BLOCKING</th>
                                            <td>Impressive</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">INTERCEPTIONS</th>
                                            <td>Outstanding</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">PENALTIES CONCEDED</th>
                                            <td>Okay</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">FOUL WINNINGS</th>
                                            <td>Okay</td>
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
                                            <td>Okay</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">PENALTY GOALS</th>
                                            <td>Outstanding</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">SHOOTING ACCURACY</th>
                                            <td>Impressive</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">SUCCESSFUL CROSSES</th>
                                            <td>Okay</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">ASSIST ABILITY</th>
                                            <td>Impressive</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">CHANCES CREATION</th>
                                            <td>Outstanding</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">PENALTIES WINNING</th>
                                            <td>Okay</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="font-weight: 10">OFFSIDES</th>
                                            <td>Okay</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade row" id="biography" role="tabpanel" aria-labelledby="biography-tab">
                        <p class="col-12 p-4">
                            Every media feature defines its “type” as either “range” or “discrete” in its definition table. “Discrete” media features, like pointer take their values from a set. The values may be keywords or boolean numbers (0 and 1), but the common factor is that
                            there’s no intrinsic “order” to them—none of the values are “less than” or “greater than” each other. “Range” media features like width, on the other hand, take their values from a range. Any two values can be compared
                            to see which is lesser and which is greater. The only significant difference between the two types is that “range” media features can be evaluated in a range context and accept “min-” and “max-” prefixes on their name.
                            Doing either of these changes the meaning of the feature—rather than the media feature being true when the feature exactly matches the given value, it matches when the feature is greater than/less than/equal to the given
                            value. Every media feature defines its “type” as either “range” or “discrete” in its definition table. “Discrete” media features, like pointer take their values from a set. The values may be keywords or boolean numbers
                            (0 and 1), but the common factor is that there’s no intrinsic “order” to them—none of the values are “less than” or “greater than” each other. “Range” media features like width, on the other hand, take their values from
                            a range. Any two values can be compared to see which is lesser and which is greater. The only significant difference between the two types is that “range” media features can be evaluated in a range context and accept “min-”
                            and “max-” prefixes on their name. Doing either of these changes the meaning of the feature—rather than the media feature being true when the feature exactly matches the given value, it matches when the feature is greater
                            than/less than/equal to the given value. Every media feature defines its “type” as either “range” or “discrete” in its definition table. “Discrete” media features, like pointer take their values from a set. The values may
                            be keywords or boolean numbers (0 and 1), but the common factor is that there’s no intrinsic “order” to them—none of the values are “less than” or “greater than” each other. “Range” media features like width, on the other
                            hand, take their values from a range. Any two values can be compared to see which is lesser and which is greater. The only significant difference between the two types is that “range” media features can be evaluated in
                            a range context and accept “min-” and “max-” prefixes on their name. Doing either of these changes the meaning of the feature—rather than the media feature being true when the feature exactly matches the given value, it
                            matches when the feature is greater than/less than/equal to the given value.
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
    </div>
@endsection
