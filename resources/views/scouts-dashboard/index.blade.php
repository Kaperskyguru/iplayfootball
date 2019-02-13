@extends('scouts-dashboard.layouts.app')
{{-- @dd($messages) --}}
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-user-circle-o"></i>
    </div>
    <div class="header-title">
        <h1>Profile</h1>
        <small>View Your Profile</small>
    </div>
</section>
@endsection

@section('maincontent')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
{{-- @dd($scout) --}}
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-header">
                    <img src="{{ asset(extractFromImage($scout->scout_image_id)) }}" class="card-header-headshot" alt="User Image">
                </div>
                <div class="card-content">
                    <div class="card-content-member text-center">
                    <h4 class="m-t-0">{{ $scout->scout_name ?: 'Nill'}}</h4>
                        <p class="m-t-0">Nill</p>
                    </div>
                    <div class="card-content-languages">
                        <div class="card-content-languages-group">
                            <div>
                                <h4>Nationality:</h4>
                            </div>
                            <div>
                                <ul>
                                    <li>
                                        {{$scout->scout_state ?: 'Nill'}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content-languages-group">
                            <div>
                                <h4>Email</h4>
                            </div>
                            <div>
                                <ul>
                                    <li>
                                            {{$scout->scout_email ?: 'Nill'}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content-languages-group">
                            <div>
                                <h4>Phone:</h4>
                            </div>
                            <div>
                                <ul>
                                    <li>
                                            {{$scout->scout_phone ?: 'Nill'}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content-languages-group">
                            <div>
                                <h4>Country:</h4>
                            </div>
                            <div>
                                <ul>
                                    <li>
                                            {{$scout->scout_state ?: 'Nill'}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content-languages-group">
                            <div>
                                <h4>Super-Sub:</h4>
                            </div>
                            <div>
                                <ul>
                                    <li>Nill</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-content-summary">
                        <p> {{$scout->scout_address ?: 'Nill'}} </p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="card-footer-stats">
                            <div>
                                <p>STATUS:</p>
                                <i class="fa fa-user"></i>
                            <span>{{ $scout->status->status_text}}</span>
                            </div>
                            <div>
                                <p>MESSAGES:</p>
                                <i class="fa fa-coffee"></i>
                                <span>350</span>
                            </div>
                            <div>
                                <p>Last online</p>
                                <span class="stats-small">3 days ago</span>
                            </div>
                        </div>
                        <div class="card-footer-message">
                                {{-- <button type="button"  class="btn btn-add btn-sm"  data-toggle="modal"  data-target="#updateModal"><i class="fa fa-pencil"></i></button> --}}
                            <a href="#customer1" data-id="{{$scout->user_id}}" data-token="<?php echo csrf_token() ?>" id="updatescout" data-toggle="modal" data-target="">
                                <h4>
                                    <i class="fa fa-user-plus"></i> Update Profile
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-8">
                <div class="row">
                    @if(is_null($scout->verify))
                    <a href="#addnot" data-toggle="modal">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div id="cardbox4">
                                    <div class="statistic-box">
                                        <i class="fa fa-check-square-o fa-3x"></i>
                                        <div class="counter-number pull-right">
                                        <span class="count-number">Unverified</span>
                                            <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                            </span>
                                        </div>
                                        <h3> Account Verification</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @else
                    @if ($scout->verify->status->status_text == 'Pending')
                    <a href="#" disabled data-toggle="modal">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div id="cardbox4">
                                    <div class="statistic-box">
                                        <i class="fa fa-check-square-o fa-3x"></i>
                                        <div class="counter-number pull-right">
                                        <span class="count-number">{{ $scout->verify->status->status_text }}</span>
                                            <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                            </span>
                                        </div>
                                        <h3> Account Verification</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @else
                    <a href="#addnot" data-toggle="modal">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div id="cardbox4">
                                    <div class="statistic-box">
                                        <i class="fa fa-check-square-o fa-3x"></i>
                                        <div class="counter-number pull-right">
                                        <span class="count-number">{{ $scout->verify->status->status_text}}</span>
                                            <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                            </span>
                                        </div>
                                        <h3> Account Verification</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @endif
               
                <div class="review-block">
                    <h4 class="col-lg-12 col-md-12 col-sm-12 text-center">Recent Messages</h4>
                    <hr/>
                    @foreach ($messages as $message)
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="review-block-img">
                                <img src="{{asset('public/players_assets/dist/img/avatar.png')}}" class="img-rounded" alt="">
                            </div>
                            <div class="review-block-name">
                                <a href="{{url('/scout/details/'.$message->id)}}">{{ $message->sender->name }}</a>
                            </div>
                            <div class="review-block-date">{{dateFormat($message->created_at)}}
                                <br/>1 day ago</div>
                            </div>
                            <div class="col-sm-9">
                                <div class="review-block-title">{{$message->message_subject}}</div>
                                <div class="review-block-description">{!! str_limit($message->message_body, 70) !!} </div>
                            </div>
                        </div>
                        <hr/>
                        @endforeach
                    </div>

            <!-- customer Modal1 -->
            <div class="modal fade" id="customer1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3><i class="fa fa-user m-r-5"></i> Update Profile</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row"> 
                                {{-- {{ route('players.update', ['id' => $data['player']->id])}} --}}
                                <div class="col-md-12" id="update_box">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <!-- Modal1 -->
            <div class="modal fade" id="addnot" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3>
                                <i class="fa fa-plus m-r-5"></i> Payment and Verification</h3>
                            <P>Fill in the fields and click on the button below to make payment.</P>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="POST" action="{{ url('/scout/verify') }}" enctype="multipart/form-data">
                                        <fieldset>
                                            @csrf
                                            <!-- Text input-->
                                            <div class="col-md-6 form-group">
                                                <label>Select Profile package</label>
                                                <select id="package" name="package" class="form-control">
                                                <option></option>
                                                <option value="13">Premium ₦50,000</option>
                                                <option value="14">Gold ₦20,000</option>
                                                <option value="15">Silver ₦2,000</option>
                                            </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <p><strong>Instruction:</strong> Upload your government issued identification e.g driver's license either your National I.D card or Voter's card.</p>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label">I.D Type</label>
                                                <input type="text" id="IDType" name="IDType" placeholder="voter's card or national i.d" class="form-control">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label">I.D Number</label>
                                                <input type="number" id="IDNumber" name="IDNumber" placeholder="unique driver's licence number" class="form-control">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label>Picture upload</label>
                                                <input type="file" name="firstFile">
                                                <input type="hidden" name="old_picture">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label>Picture upload</label>
                                                <input type="file" name="secondFile">
                                                <input type="hidden" name="old_picture">
                                            </div>
                                            <div class="col-md-12 form-group user-form-group">
                                                <input type="text" value="scout" id="accountType" name="accountType" class="hidden">
                                                <input type="number" value="{{Auth::user()->id}}" id="userID" name="userID" class="hidden">
                                                <input type="number" value="2" id="verification_status" name="verification_status" class="hidden">
                                                <div class="pull-right">
                                                    <button type="submit" class="btn btn-add btn-sm">Pay and Verify Me</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->


        </section>
        <!-- /.content -->  
        @endsection
        @section('scripts')
        <script>
            $(document).ready(function(){

                $('body').delegate('#updatescout', 'click', function(){
                    let id = $(this).data('id');
                    var token = $(this).data("token");
                    $.ajax({
                        url:'/scout/update',
                        type:'get',
                        data:{'id':id, '_token': token},
                        success: function(data) {
                            $('#update_box').html(data);
                        }
                    });
                });

            });
        </script>

        @endsection
