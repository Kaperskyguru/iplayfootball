<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>iPlayFootball Player Panel</title>
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="{{asset('players_assets/dist/img/ico/iLOGO.png')}}" type="image/x-icon">

    <!-- jquery-ui css -->
    <link href="{{asset('players_assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap -->
    <link href="{{asset('players_assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('players_assets/plugins/lobipanel/lobipanel.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Pace css -->
    <link href="{{asset('players_assets/plugins/pace/flash.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link href="{{asset('players_assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Pe-icon -->
    <link href="{{asset('players_assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css" />
    <!-- Themify icons -->
    <link href="{{asset('players_assets/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('players_assets/dist/css/stylecrm.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin_assets/plugins/datatables/dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    @yield('styles')
</head>

<body class="hold-transition sidebar-mini">
    <!--preloader-->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Site wrapper -->
    <div class="wrapper">
        <header class="main-header">
            <a href="{{ url('/player') }}" class="logo">
                <!-- Logo -->
                <span class="logo-mini">
                    <img src="{{asset('players_assets/dist/img/iLOGO.png')}}" alt="" style="width:70%; height:70%">
                </span>
                <span class="logo-lg">
                    <img src="{{asset('players_assets/dist/img/iLOGO.png')}}" alt="">
                </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <!-- Sidebar toggle button-->
                    <span class="sr-only">Toggle navigation</span>
                    <span class="pe-7s-angle-left-circle"></span>
                </a>
                <!-- searchbar-->
                {{-- <a href="#search">
                    <span class="pe-7s-search"></span>
                </a> --}}
                <div id="search">
                    <button type="button" class="close">×</button>
                    <form>
                        <input type="search" value="" placeholder="Search.." />
                        {{-- <button type="submit" class="btn btn-add">Search...</button> --}}
                    </form>
                </div>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages -->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="{{ count($messages) == 0 ?: 'dropdown'}}">
                                <i class="pe-7s-mail"></i>
                                <span class="label label-success">{{ count($messages)}}</span>
                            </a>
                            
                            <ul class="dropdown-menu">
                                <li>
                                    <ul class="menu">
                                        @foreach ($messages as $message)
                                        <li>
                                            <!-- start message -->
                                            <a href="{{url('/admin/details/'.$message->id)}}" class="border-gray">
                                                <div class="pull-left">
                                                    <img src="{{asset('admin_assets/dist/img/avatar.png')}}" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>{{ $message->sender->name}}</h4>
                                                <p>{{ $message->message_subject}}</p>
                                                <span class="badge badge-success badge-massege"><small>{{getHours($message->created_at)}} hours ago</small>
                                                </span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- Notifications -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="pe-7s-bell"></i>
                                <span class="label label-warning">7</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="#" class="border-gray">
                                                <i class="fa fa-dot-circle-o color-green"></i>Change Your font style</a>
                                            </li>
                                            <li>
                                                <a href="#" class="border-gray">
                                                    <i class="fa fa-dot-circle-o color-red"></i> check the system ststus..</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="border-gray">
                                                        <i class="fa fa-dot-circle-o color-yellow"></i> Add more admin...</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="border-gray">
                                                            <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="border-gray">
                                                                <i class="fa fa-dot-circle-o color-yellow"></i> Add more admin...</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="border-gray">
                                                                    <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                               
                                                <!-- user -->
                                                <li class="dropdown dropdown-user">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <img src="{{ asset(extractFromImage($team->image_id))}}" class="img-circle" width="45" height="45" alt="user">
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="{{ url('/team') }}">
                                                                <i class="fa fa-user"></i> User Profile</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ url('/team/messages') }}">
                                                                    <i class="fa fa-inbox"></i> Inbox</a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                        <i class="fa fa-sign-out"></i> Signout
                                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                            {{ csrf_field() }}
                                                                        </form>
                                                                    </a>
                                                                </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    </div> 
                                                </nav>
                                            </header>
                                                            <!-- =============================================== -->
                                                            <!-- Left side column. contains the sidebar -->
                                                            <aside class="main-sidebar">
                                                                <!-- sidebar -->
                                                                <div class="sidebar">
                                                                    <!-- sidebar menu -->
                                                                    <ul class="sidebar-menu">
                                                                        <li class="active">
                                                                            <a href="{{ url('/team') }}">
                                                                                <i class="fa fa-tachometer"></i>
                                                                                <span>Dashboard</span>
                                                                                <span class="pull-right-container">
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{ url('/team/players') }}">
                                                                                <i class="fa fa-users"></i>
                                                                                <span>Players</span>
                                                                                <span class="pull-right-container">
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{ url('/team/messages') }}">
                                                                                <i class="fa fa-envelope"></i>
                                                                                <span>Messages</span>
                                                                                <span class="pull-right-container">
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{ url('/team/notices') }}">
                                                                                <i class="fa fa-file-text"></i>
                                                                                <span>Notice Board</span>
                                                                                <span class="pull-right-container">
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        {{-- <li>
                                                                            <a href="{{ url('/player/') }}">
                                                                                <i class="fa fa-lock"></i>
                                                                                <span>Insurance</span>
                                                                                <span class="pull-right-container">
                                                                                </span>
                                                                            </a>
                                                                        </li> --}}
                                                                    </ul>
                                                                </div>
                                                                <!-- /.sidebar -->
                                                            </aside>

                                                            <!-- Content Wrapper. Contains page content -->
                                                            <div class="content-wrapper">

                                                                @yield('content')

                                                                @yield('maincontent')

                                                            </div>
                                                            <!-- /.content-wrapper -->
                                                            <footer class="main-footer">
                                                                <strong>Copyright &copy; 2017-2018
                                                                    <a href="/">iPlayFootball</a>.</strong> All rights reserved.
                                                                </footer>
                                                            </div>
                                                            <!-- ./wrapper -->

                                                            <!-- jQuery -->
                                                            <script src="{{asset('players_assets/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
                                                            <!-- jquery-ui -->
                                                            <script src="{{asset('players_assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js')}}" type="text/javascript"></script>
                                                            <!-- Bootstrap -->
                                                            <script src="{{asset('players_assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
                                                            <!-- lobipanel -->
                                                            <script src="{{asset('players_assets/plugins/lobipanel/lobipanel.min.js')}}" type="text/javascript"></script>
                                                            <!-- Pace js -->
                                                            <script src="{{asset('players_assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
                                                            <!-- SlimScroll -->
                                                            <script src="{{asset('players_assets/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
                                                            <!-- FastClick -->
                                                            <script src="{{asset('players_assets/plugins/fastclick/fastclick.min.js')}}" type="text/javascript"></script>
                                                            <!-- CRMadmin frame -->
                                                            <script src="{{asset('players_assets/dist/js/custom.js')}}" type="text/javascript"></script>
                                                            <!-- End Core Plugins
                                                            =====================================================================-->
                                                            <!-- Start Theme label Script
                                                            =====================================================================-->
                                                            <script src="{{asset('admin_assets/plugins/datatables/dataTables.min.js')}}" type="text/javascript"></script>
                                                            <!-- Dashboard js -->
                                                            <script src="{{asset('players_assets/dist/js/dashboard.js')}}" type="text/javascript"></script>
                                                            <script>
                                                                $('#dataTableExample1').dataTable();
                                                            </script>
                                                            <!-- End Theme label Script
                                                            =====================================================================-->
                                                            @yield('scripts')
                                                        </body>

                                                        </html>
