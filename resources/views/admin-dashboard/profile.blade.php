@extends('admin-dashboard.layouts.app')
@section('content')

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="header-icon">
                    <i class="fa fa-user-circle-o"></i>
                </div>
                <div class="header-title">
                    <h1>Profile</h1>
                    <small>Admin Profile Details(Changes and Activities On This Account are Monitored)</small>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-md-push-1">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-header-headshot"></div>
                            </div>
                            <div class="card-content">
                                <div class="card-content-member text-center">
                                    <h4 class="m-t-0">Dannito</h4>
                                    <p class="m-t-0">Super Admin</p>
                                </div>
                                <div class="card-content-languages">
                                    <div class="card-content-languages-group">
                                        <div>
                                            <h4>Branch:</h4>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>
                                                    Port Harcourt
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content-languages-group">
                                        <div>
                                            <h4>Title:</h4>
                                        </div>
                                        <div>
                                            <ul>
                                                <li>Head, Customer Relations</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content-summary">
                                    <h4 class="text-center">Responsiblities:</h4>
                                    <p>I get my hands dirty with making sure that all our users are happy. Most times I'm training other support staff.</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="card-footer-stats">
                                    <div>
                                        <p>PROJECTS:</p>
                                        <i class="fa fa-users"></i>
                                        <span>241</span>
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
                                    <a href="#">
                                        <h4>
                                            <i class="fa fa-comments"></i> Update Profile
                                        </h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->
            @endsection
