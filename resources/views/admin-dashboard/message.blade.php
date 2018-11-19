@extends('admin-dashboard.layouts.app')
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
                                                <a href="{{url('/admin/compose')}}" class="btn btn-add">
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
                                                <h6>Messages box</h6>
                                                <ul class="nav">
                                                    <li class="active">
                                                        <a href="{{url('/admin/messages')}}">
                                                            <i class="fa fa-inbox"></i>Inbox
                                                            <small class="label pull-right bg-green">61</small>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('/admin/sent')}}">
                                                            <i class="fa fa-envelope-o"></i>Send Mail</a>
                                                    </li>

                                                </ul>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-9 p-0 inbox-mail">
                                        <div class="mailbox-content">
                                            <a href="{{url('/admin/details')}}" class="inbox_item unread">
                                                <div class="inbox-avatar">
                                                    <img src="{{asset('admin_assets/dist/img/avatar.png')}}" class="border-green hidden-xs hidden-sm" alt="">
                                                    <div class="inbox-avatar-text">
                                                        <div class="avatar-name">Naeem Khan (3)</div>
                                                        <div>
                                                            <small>
                                                                <span class="bg-green badge avatar-text">SOME LABEL</span>
                                                                <span>
                                                                    <strong>Early access: </strong>
                                                                    <span> Lorem Ipsum is simply dummy text of the printing and
                                                                        typesetting industry.</span>
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                        <div class="date">Jan 17th</div>
                                                        <div>
                                                            <small>#1</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/admin/details')}}" class="inbox_item">
                                                <div class="inbox-avatar">
                                                    <img src="{{asset('admin_assets/dist/img/avatar2.png')}}" class="border-red hidden-xs hidden-sm" alt="">
                                                    <div class="inbox-avatar-text">
                                                        <div class="avatar-name">Tuhin Sarker</div>
                                                        <div>
                                                            <small>
                                                                <span class="bg-red badge avatar-text">SOME LABEL</span>
                                                                <span>
                                                                    <strong>Early access: </strong>
                                                                    <span>It is a long established fact that a reader will be distracted
                                                                        by the </span>
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                        <div class="date">Jan 17th</div>
                                                        <div>
                                                            <small>#2</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/admin/details')}}" class="inbox_item unread">
                                                <div class="inbox-avatar">
                                                    <img src="{{asset('admin_assets/dist/img/avatar3.png')}}" class="border-violet hidden-xs hidden-sm" alt="">
                                                    <div class="inbox-avatar-text">
                                                        <div class="avatar-name">Tanjil Ahmed (6)</div>
                                                        <div>
                                                            <small>
                                                                <span class="bg-violet badge avatar-text">SOME LABEL</span>
                                                                <span>
                                                                    <strong>Early access: </strong>
                                                                    <span>Contrary to popular belief, Lorem Ipsum is not simply
                                                                        random text.</span>
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                        <div class="date">Jan 17th</div>
                                                        <div>
                                                            <small>#3</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/admin/details')}}" class="inbox_item unread">
                                                <div class="inbox-avatar">
                                                    <img src="{{asset('admin_assets/dist/img/avatar4.png')}}" class="border-gray hidden-xs hidden-sm" alt="">
                                                    <div class="inbox-avatar-text">
                                                        <div class="avatar-name">Jahangir Alam (2)</div>
                                                        <div>
                                                            <small>
                                                                <span class="bg-gray badge avatar-text">SOME LABEL</span>
                                                                <span>
                                                                    <strong>Early access: </strong>
                                                                    <span>There are many variations of passages of Lorem Ipsum
                                                                        available, </span>
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                        <div class="date">Jan 17th</div>
                                                        <div>
                                                            <small>#4</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/admin/details')}}" class="inbox_item">
                                                <div class="inbox-avatar">
                                                    <img src="{{asset('admin_assets/dist/img/avatar5.png')}}" class="border-yellow hidden-xs hidden-sm" alt="">
                                                    <div class="inbox-avatar-text">
                                                        <div class="avatar-name">Mozammel Hoque</div>
                                                        <div>
                                                            <small>
                                                                <span class="bg-yellow badge avatar-text">SOME LABEL</span>
                                                                <span>
                                                                    <strong>Early access: </strong>
                                                                    <span>Lorem Ipsum has been the industry's standard dummy text
                                                                        .</span>
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                        <div class="date">Jan 17th</div>
                                                        <div>
                                                            <small>#5</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/admin/details')}}" class="inbox_item">
                                                <div class="inbox-avatar">
                                                    <img src="{{asset('admin_assets/dist/img/avatar.png')}}" class="border-green hidden-xs hidden-sm" alt="">
                                                    <div class="inbox-avatar-text">
                                                        <div class="avatar-name">Slaah Uddin</div>
                                                        <div>
                                                            <small>
                                                                <span class="bg-green badge avatar-text">SOME LABEL</span>
                                                                <span>
                                                                    <strong>Early access: </strong>
                                                                    <span>The point of using Lorem Ipsum is that it has ....</span>
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                        <div class="date">Jan 17th</div>
                                                        <div>
                                                            <small>#6</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/admin/details')}}" class="inbox_item">
                                                <div class="inbox-avatar">
                                                    <img src="{{asset('admin_assets/dist/img/avatar2.png')}}" class="border-red hidden-xs hidden-sm" alt="">
                                                    <div class="inbox-avatar-text">
                                                        <div class="avatar-name">Tahmina Akther</div>
                                                        <div>
                                                            <small>
                                                                <span class="bg-red badge avatar-text">SOME LABEL</span>
                                                                <span>
                                                                    <strong>Early access: </strong>
                                                                    <span>Richard McClintock, a Latin professor at Hampden-Sydney
                                                                        College in Virginia,</span>
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                        <div class="date">Jan 17th</div>
                                                        <div>
                                                            <small>#7</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/admin/details')}}" class="inbox_item">
                                                <div class="inbox-avatar">
                                                    <img src="{{asset('admin_assets/dist/img/avatar3.png')}}" class="border-violet hidden-xs hidden-sm" alt="">
                                                    <div class="inbox-avatar-text">
                                                        <div class="avatar-name">Jordyn Ouellet</div>
                                                        <div>
                                                            <small>
                                                                <span class="bg-violet badge avatar-text">SOME LABEL</span>
                                                                <span>
                                                                    <strong>Early access: </strong>
                                                                    <span>Quam nulla porttitor massa id neque aliquam vestibulum
                                                                        morbi blandit.</span>
                                                                </span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                        <div class="date">Jan 17th</div>
                                                        <div>
                                                            <small>#8</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('/admin/details')}}" class="inbox_item">
                                                <div class="inbox-avatar">
                                                    <img src="{{asset('admin_assets/dist/img/avatar4.png')}}" class="border-gray hidden-xs hidden-sm" alt="">
                                                    <div class="inbox-avatar-text">
                                                        <div class="avatar-name">Facebook</div>
                                                        <div>
                                                            <small>
                                                                <span class="bg-gray badge avatar-text">SOME LABEL</span>
                                                                <span>Quam nulla porttitor massa id neque aliquam vestibulum morbi
                                                                    blandit.</span>
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="inbox-date hidden-sm hidden-xs hidden-md">
                                                        <div class="date">Jan 17th</div>
                                                        <div>
                                                            <small>#9</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
