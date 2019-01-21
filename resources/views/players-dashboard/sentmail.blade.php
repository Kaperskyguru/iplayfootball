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
                                            <i class="fa fa-user-circle fa-lg"></i>
                                            <div class="inbox-avatar-text hidden-xs hidden-sm">
                                                <div class="avatar-name">Alrazy</div>
                                                <div>
                                                    <small>Messages</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="inbox-toolbar btn-toolbar">
                                            <div class="btn-group">
                                                <a href="{{url('/player/compose')}}" class="btn btn-add">
                                                    <span class="fa fa-pencil-square-o"></span>
                                                </a>
                                            </div>
                                            <!--<div class="btn-group">
                                                <a href="#" class="btn btn-default">
                                                    <span class="fa fa-reply"></span>
                                                </a>
                                                <a href="#" class="hidden-xs hidden-sm btn btn-default">
                                                    <span class="fa fa-reply-all"></span>
                                                </a>
                                                <a href="#" class="btn btn-default">
                                                    <span class="fa fa-share"></span>
                                                </a>
                                            </div>
                                            <div class="hidden-xs hidden-sm btn-group">
                                                <button type="button" class="text-center btn btn-danger">
                                                    <span class="fa fa-exclamation"></span>
                                                </button>
                                                <button type="button" class="btn btn-danger">
                                                    <span class="fa fa-trash"></span>
                                                </button>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mailbox-body">
                                <div class="row m-0">
                                    <div class="col-sm-3 p-0 inbox-nav hidden-xs hidden-sm">
                                        <div class="mailbox-sideber">
                                            <div class="profile-usermenu">
                                                <h6>Messages box</h6>
                                                <ul class="nav">
                                                    <li>
                                                        <a href="{{url('/player/messages')}}">
                                                            <i class="fa fa-inbox"></i>Inbox
                                                            <small class="label pull-right bg-green">{{$totalUreadMessages}}</small>
                                                        </a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="{{url('/player/messages/sent')}}">
                                                            <i class="fa fa-envelope-o"></i>Send Mail</a>
                                                    </li>

                                                </ul>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-9 p-0 inbox-mail">
                                        <div class="mailbox-content">
                                        @foreach($Messages as $message)
                                            <a href="{{url('/player/details/'.$message->id)}}" class="inbox_item unread">
                                                <div class="inbox-avatar">
                                                    <img src="{{asset('players_assets/dist/img/avatar.png')}}" class="border-green hidden-xs hidden-sm" alt="">
                                                    <div class="inbox-avatar-text">
                                                        <div class="avatar-name">{{$message->sender->name}}</div>
                                                        <div>
                                                            <small>
                                                                <span class="bg-green badge avatar-text">{{ $message->message_sender_type}}</span>
                                                                <span>
                                                                    <strong>{{ $message->message_subject}} </strong><br/>
                                                                    {{-- <span> {{ str_limit($message->message_body, 70) }}</span> --}}
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                        <div class="date">{{dateFormat($message->created_at)}}</div>
                                                        <!-- <div>
                                                            <small>#1</small>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </a>
                                            @endforeach
                                        </div>
                                        <div class="">{{ $Messages->links() }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endsection
