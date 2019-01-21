@extends('players-dashboard.layouts.app')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="mailbox">
                <div class="mailbox-header">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="inbox-avatar">
                                <i class="fa fa-user-secret"> </i>
                                <div class="inbox-avatar-text hidden-xs hidden-sm">
                                    <div class="avatar-name">Alrazy</div>
                                    <div>
                                        <small>Mailbox</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="inbox-toolbar btn-toolbar">
                                <div class="btn-group">
                                    <a href="{{url('/player/messages')}}" class="btn btn-default">
                                        <span class="fa fa-long-arrow-left"></span>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a href="{{url('/player/compose')}}" class="btn btn-add">
                                        <span class="fa fa-pencil-square-o"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mailbox-body">
                    <div class="row m-0">
                        <div class="col-sm-3 p-0 inbox-nav hidden-xs hidden-sm">
                            <div class="mailbox-sideber">
                                <div class="profile-usermenu">
                                    <h6>Mailbox</h6>
                                    <ul class="nav">
                                        <li class="active">
                                            <a href="{{url('/player/messages')}}">
                                                <i class="fa fa-inbox"></i>Inbox
                                                <small class="label pull-right bg-green">61</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/player/messages/sent')}}">
                                                <i class="fa fa-envelope-o"></i>Send Mail</a>
                                            </li>
                                        </ul>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 p-0 inbox-mail">
                                <div class="inbox-avatar p-20 border-btm">
                                    <img src="{{asset('players_assets/dist/img/avatar5.png')}}" class="border-green hidden-xs hidden-sm" alt="">
                                    <div class="inbox-avatar-text">
                                        <div class="avatar-name">
                                            <strong>From: </strong> {{$message->sender->name}} -
                                        </div>
                                        <div>
                                            <small>
                                                <strong>Subject: </strong> {{$message->message_subject}}</small>
                                            </div>
                                        </div>
                                        <div class="inbox-date text-right hidden-xs hidden-sm">
                                            <!-- <div>
                                                <span class="bg-custom badge">
                                                    <small>OPPORTUNITIES</small>
                                                </span>
                                            </div> -->
                                            <div>
                                                <small>{{dateFormat($message->created_at)}}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inbox-mail-details p-20">

                                        {!! $message->message_body !!}
                                        
                                        <hr />
                                        <!-- <h4>
                                            <i class="fa fa-paperclip"></i> Attachments
                                            <span>(3)</span>
                                        </h4> -->
                                        <div class="row">
                                            <!-- <div class="col-sm-2 col-xs-4">
                                                <a href="#">
                                                    <img class="img-thumbnail img-responsive" alt="attachment" src="{{asset('players_assets/dist/img/Zipper-icon.jpg')}}"> </a>
                                                </div> -->
                                                <!-- <div class="col-sm-2 col-xs-4">
                                                    <a href="#">
                                                        <img class="img-thumbnail img-responsive" alt="attachment" src="{{asset('players_assets/dist/img/Zipper-icon.jpg')}}"> </a>
                                                    </div>
                                                    <div class="col-sm-2 col-xs-4">
                                                        <a href="#">
                                                            <img class="img-thumbnail img-responsive" alt="attachment" src="{{asset('players_assets/dist/img/Zipper-icon.jpg')}}"> </a>
                                                        </div>
                                                    </div> -->
                                                    <div class="m-t-20 border-all p-20">
                                                        <p class="p-b-20">click here to
                                                            <a href="#">Reply</a> or
                                                            <a href="{{url('/player/compose')}}">Forward</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            <!-- /.content -->
            @endsection
