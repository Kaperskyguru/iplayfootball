@extends('admin-dashboard.layouts.app')
@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@endsection
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
                                <i class="fa fa-user-circle-o"></i>
                                <div class="inbox-avatar-text hidden-xs hidden-sm">
                                    <div class="avatar-name">{{Auth::user()->name}}</div>
                                    <div>
                                        <small>Mailbox</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="inbox-toolbar btn-toolbar">
                                <div class="btn-group">
                                    <a href="{{url('/admin/messages')}}" class="btn btn-default">
                                        <span class="fa fa-long-arrow-left"></span>
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
                                            <a href="{{url('/admin/messages')}}">
                                                <i class="fa fa-inbox"></i>Inbox
                                                <small class="label pull-right bg-green">{{$totalUreadMessages}}</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/admin/messages/sent')}}">
                                                <i class="fa fa-envelope-o"></i>Send Mail</a>
                                            </li>

                                        </ul>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 p-0 inbox-mail p-20">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                                <form action="{{ url('admin/messages') }}" method="POST">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-md-2 col-form-label text-right">To :</label>
                                        <div class="col-sm-9 col-md-10">
                                            <input class="form-control" name="to" type="text" id="to">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-md-2 col-form-label text-right">Subject :</label>
                                        <div class="col-sm-9 col-md-10">
                                            <input class="form-control" type="text" name="subject" id="subjejct">
                                        </div>
                                    </div>
                                    <!-- summernote -->
                                    <textarea id="summernote" name="body" class="summernote"></textarea>
                                    <div class="hidden-xs hidden-sm btn-group">
                                        <button type="button" class="text-center btn btn-default">DISCARD</button>
                                        <button type="button" class="btn btn-default">SAVE</button>
                                    </div>
                                    <div class="btn-group pull-right">
                                    <input type="hidden" name="_token" value="{{ @csrf_token() }}">
                                    <input type="hidden" name="message_type" id="message_type" value="16">
                                        <button type="submit" class="btn btn-add">SEND</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
    @endsection
    @section('scripts')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>    
 
    <!-- <script src="{{asset('admin_assets/plugins/summernote/summernote.js')}}" type="text/javascript"></script> -->
    <script>
    //Summernote
    function sumnote() {
        var note = $('#summernote');
        $(note).summernote({
            height: 200, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    }
    sumnote();
    </script>
    @endsection
