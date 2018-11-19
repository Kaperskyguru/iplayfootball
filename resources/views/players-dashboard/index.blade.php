@extends('players-dashboard.layouts.app')

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
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-headshot"></div>
                </div>
                <div class="card-content">
                    <div class="card-content-member text-center">
                        <h4 class="m-t-0">Fredrick</h4>
                        <p class="m-t-0">Striker</p>
                    </div>
                    <div class="card-content-languages">
                        <div class="card-content-languages-group">
                            <div>
                                <h4>Nationality:</h4>
                            </div>
                            <div>
                                <ul>
                                    <li>
                                        Nigerian
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content-languages-group">
                            <div>
                                <h4>D.O.B:</h4>
                            </div>
                            <div>
                                <ul>
                                    <li>
                                        17 / 10 / 1995
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content-languages-group">
                            <div>
                                <h4>Weight:</h4>
                            </div>
                            <div>
                                <ul>
                                    <li>
                                        70kg
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content-languages-group">
                            <div>
                                <h4>Height:</h4>
                            </div>
                            <div>
                                <ul>
                                    <li>
                                        5.8ft
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
                                    <li>Yes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-content-summary">
                        <p>Every media feature defines its “type” as either “range” or “discrete” in its definition table. “Discrete” media features, like pointer take their values from a set. The values may be keywords or boolean numbers (0
                            and 1), but the common factor is that there’s no intrinsic “order” to them—none of the values are “less than” or “greater than” each other. “Range” media features like width, on the other hand, take their values
                            from a range. Any two values can be compared to see which is lesser and which is greater. </p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="card-footer-stats">
                            <div>
                                <p>STATUS:</p>
                                <i class="fa fa-user"></i>
                                <span>UnVerified</span>
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
                            <a href="#customer1" data-toggle="modal" data-target="">
                                <h4>
                                    <i class="fa fa-user-plus"></i> Update Profile
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
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
                                <div class="col-md-12">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <!-- Text input-->
                                            <div class="col-md-6 form-group">
                                                <label class="control-label">Player Name:</label>
                                                <input type="text" placeholder="Player Name" class="form-control">
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-6 form-group">
                                                <label class="control-label">Email:</label>
                                                <input type="email" placeholder="Email" class="form-control">
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-md-6 form-group">
                                                <label class="control-label">Mobile</label>
                                                <input type="number" placeholder="Mobile" class="form-control">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label">Address</label><br>
                                                <textarea name="address" rows="3" class="form-control"></textarea>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label">Player Position:</label>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option>Winger</option>
                                                    <option>Striker</option>
                                                    <option>Mid-Fielder</option>
                                                    <option>Defender</option>
                                                    <option>Goal Keepeer</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label">Weight</label>
                                                <input type="number" placeholder="In Kg" class="form-control">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label">Height</label>
                                                <input type="number" placeholder="In Ft" class="form-control">
                                            </div>
                                            <div class="col-md-12 form-group user-form-group">
                                                <div class="pull-right">
                                                    <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                                    <button type="submit" class="btn btn-add btn-sm">Save</button>
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
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <div class="col-sm-12 col-md-8">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div id="cardbox4">
                            <div class="statistic-box">
                                <i class="fa fa-check-square-o fa-3x"></i>
                                <div class="counter-number pull-right">
                                    <span class="count-number">UnVerified</span>
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                                    </span>
                                </div>
                                <h3> Account Verification</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review-block">
                    <h4 class="col-lg-12 col-md-12 col-sm-12 text-center">Recent Messages</h4>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="review-block-img">
                                <img src="{{asset('players_assets/dist/img/avatar.png')}}" class="img-rounded" alt="">
                            </div>
                            <div class="review-block-name">
                                <a href="#">nktailor</a>
                            </div>
                            <div class="review-block-date">January 29, 2016
                                <br/>1 day ago</div>
                            </div>
                            <div class="col-sm-9">
                                <div class="review-block-title">this was nice in buy</div>
                                <div class="review-block-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="review-block-img">
                                    <img src="{{asset('players_assets/dist/img/avatar2.png')}}" class="img-rounded" alt="">
                                </div>
                                <div class="review-block-name">
                                    <a href="#">nktailor</a>
                                </div>
                                <div class="review-block-date">January 29, 2016
                                    <br/>1 day ago</div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="review-block-title">this was nice in buy</div>
                                    <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="review-block-img">
                                        <img src="{{asset('players_assets/dist/img/avatar3.png')}}" class="img-rounded" alt="">
                                    </div>
                                    <div class="review-block-name">
                                        <a href="#">nktailor</a>
                                    </div>
                                    <div class="review-block-date">January 29, 2016
                                        <br/>1 day ago</div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="review-block-title">this was nice in buy</div>
                                        <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
                @endsection
