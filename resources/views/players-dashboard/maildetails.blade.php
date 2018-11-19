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
                                    <a href="{{ url('/player/messages') }}" class="btn btn-default">
                                        <span class="fa fa-long-arrow-left"></span>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a href="{{ url('/player/compose') }}" class="btn btn-add">
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
                                            <a href="{{ url('/player/messages') }}">
                                                <i class="fa fa-inbox"></i>Inbox
                                                <small class="label pull-right bg-green">61</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/player/sent') }}">
                                                <i class="fa fa-envelope-o"></i>Send Mail</a>
                                            </li>

                                        </ul>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 p-0 inbox-mail">
                                <div class="inbox-avatar p-20 border-btm">
                                    <img src="assets/dist/img/avatar5.png" class="border-green hidden-xs hidden-sm" alt="">
                                    <div class="inbox-avatar-text">
                                        <div class="avatar-name">
                                            <strong>From: </strong> Tanjil Ahmed -
                                            <em>
                                                <a href="http://iPlayfootball.com.ng/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="e296838c888b8ebd838a8f8786a2879a838f928e87cc818d8f">[email&#160;protected]</a>
                                            </em>
                                        </div>
                                        <div>
                                            <small>
                                                <strong>Subject: </strong> Regd financial projections for the next five years</small>
                                            </div>
                                        </div>
                                        <div class="inbox-date text-right hidden-xs hidden-sm">
                                            <div>
                                                <span class="bg-custom badge">
                                                    <small>OPPORTUNITIES</small>
                                                </span>
                                            </div>
                                            <div>
                                                <small>Aug 21st, 11:30 PM</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inbox-mail-details p-20">
                                        <p>
                                            <strong>Hi Naeem,</strong>
                                        </p>
                                        <p>
                                            <span>It is a long established fact that a reader will be distracted by the readable
                                                content of a page when looking at its layout. The point of using Lorem
                                                Ipsum is that</span>
                                            </p>
                                            <p>
                                                <span>Maecenas sed enim ut sem viverra aliquet. Consectetur adipiscing elit ut
                                                    aliquam purus sit amet luctus.</span>
                                                    <span>Bibendum est ultricies integer quis :</span>
                                                </p>
                                                <div>
                                                    <ul>
                                                        <li>
                                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                                        </li>
                                                        <li>
                                                            <span>Quisque dictum lorem id tempus lacinia.</span>
                                                        </li>
                                                        <li>
                                                            <span>Aenean placerat metus eget dignissim sodales.</span>
                                                        </li>
                                                        <li>
                                                            <span>Vivamus pretium risus vitae nibh maximus bibendum.</span>
                                                        </li>
                                                        <li>
                                                            <span>Curabitur maximus neque eget elit fermentum, at sagittis elit gravida.</span>
                                                        </li>
                                                    </ul>
                                                    <blockquote>
                                                        <small>
                                                            <strong>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                                industry. Lorem Ipsum has been the industry's standard dummy</strong>
                                                            </small>
                                                        </blockquote>
                                                    </div>
                                                    <p>
                                                        <span>Ac tincidunt vitae semper quis lectus nulla at volutpat diam. Pellentesque
                                                            massa placerat duis ultricies.</span>
                                                        </p>
                                                        <div>
                                                            <strong>Regards,</strong>
                                                        </div>
                                                        <div>
                                                            <strong>Tanjil Ahmed</strong>
                                                        </div>
                                                        <hr>
                                                        <h4>
                                                            <i class="fa fa-paperclip"></i> Attachments
                                                            <span>(3)</span>
                                                        </h4>
                                                        <div class="row">
                                                            <div class="col-sm-2 col-xs-4">
                                                                <a href="#">
                                                                    <img class="img-thumbnail img-responsive" alt="attachment" src="assets/dist/img/Zipper-icon.jpg"> </a>
                                                                </div>
                                                                <div class="col-sm-2 col-xs-4">
                                                                    <a href="#">
                                                                        <img class="img-thumbnail img-responsive" alt="attachment" src="assets/dist/img/Zipper-icon.jpg"> </a>
                                                                    </div>
                                                                    <div class="col-sm-2 col-xs-4">
                                                                        <a href="#">
                                                                            <img class="img-thumbnail img-responsive" alt="attachment" src="assets/dist/img/Zipper-icon.jpg"> </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="m-t-20 border-all p-20">
                                                                        <p class="p-b-20">click here to
                                                                            <a href="#">Reply</a> or
                                                                            <a href="{{ url('/player/compose') }}">Forward</a>
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
