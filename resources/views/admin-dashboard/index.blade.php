@extends('admin-dashboard.layouts.app')

@section('content')
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-dashboard"></i>
    </div>
    <div class="header-title">
        <h1>iPlayFootball Admin Dashboard</h1>
        <small></small>
    </div>
</section>
@endsection

<!-- Main content -->
@section('maincontent')
<section class="content">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div id="cardbox1">
                <div class="statistic-box">
                    <i class="fa fa-user-plus fa-3x"></i>
                    <div class="counter-number pull-right">
                        <span class="count-number">11</span>
                        <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                        </span>
                    </div>
                    <h3> Active Admins</h3>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div id="cardbox2">
                <div class="statistic-box">
                    <i class="fa fa-user fa-3x"></i>
                    <div class="counter-number pull-right">
                        <span class="count-number">{{$totalPlayers}}</span>
                        <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                        </span>
                    </div>
                    <h3> Total Players</h3>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div id="cardbox3">
                <div class="statistic-box">
                    <i class="fa fa-user fa-3x"></i>
                    <div class="counter-number pull-right">
                        <span class="count-number">{{$totalScouts}}</span>
                        <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                        </span>
                    </div>
                    <h3> Total Scouts</h3>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div id="cardbox4">
                <div class="statistic-box">
                    <i class="fa fa-check-square-o fa-3x"></i>
                    <div class="counter-number pull-right">
                        <span class="count-number">{{$totalPendingVerifications}}</span>
                        <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                        </span>
                    </div>
                    <h3> {{ e('Pending Verifications') }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-bd lobidisable">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Latest From Notice Board</h4>
                    </div>
                </div>
                <div class="panel-body">
                @if(count($notices) > 0)
                    @foreach($notices as $notice)
                        <div class="work-touchpoint">
                            <div class="work-touchpoint-date">
                                <span class="day">{{getDay($notice->notice_startdate)}}</span>
                                <span class="month">{{getMonth($notice->notice_startdate)}}</span>
                            </div>
                        </div>
                        <div class="detailswork">
                            <span class="label-custom label label-default pull-right">{{$notice->status->status_text}}</span>
                            <a href="#" title="headings">{{$notice->notice_title}}</a> <br>
                            <p>{{str_limit($notice->notice_desc, 30)}}</p>
                        </div>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="panel panel-bd lobidisable">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Verifications</h4>
                    </div>
                </div>
                <div class="panel-body">
                    @if(count($pendingVerifications) > 0)
                        @foreach($pendingVerifications as $pending)
                            <div class="Pendingwork">
                                <span class="label-warning label label-default pull-right">{{$pending->status->status_text}}</span>
                                <i class="fa fa-ban"></i>
                                <a href="#">{{$pending->verification_type}}</a>
                                <div class="upworkdate">
                                    <p>{{dateFormat($pending->created_at)}} for Silver Package</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="panel panel-bd lobidisable">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Latest Sign-ups</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="Workslist">
                        <div class="worklistdate">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Names</th>
                                        <th>Sign-Up Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentUsers as $user)
                                    <tr>
                                        <th scope="row">{{$user->name}}</th>
                                        <td>{{dateFormat($user->created_at)}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection