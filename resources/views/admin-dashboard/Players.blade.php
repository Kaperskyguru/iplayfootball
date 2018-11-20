@extends('admin-dashboard.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-users"></i>
    </div>
    <div class="header-title">
        <h1>All Player</h1>
        <small>Player List</small>
    </div>
</section>
@endsection
@section('maincontent')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="btn-group" id="buttonexport">
                        <a href="#">
                            <h4>Add playerer</h4>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                    <div class="btn-group">
                        <div class="buttonexport" id="buttonlist">
                            <a class="btn btn-add" href="{{url('/admin/addPlayer')}}"> <i class="fa fa-plus"></i> Add Player
                            </a>
                        </div>
                        <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
                        <ul class="dropdown-menu exp-drop" role="menu">
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false'});">
                                    <img src="{{asset('admin_assets/dist/img/json.png')}}" width="24" alt="logo"> JSON</a>
                                </li>
                                <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});">
                                        <img src="{{asset('admin_assets/dist/img/json.png')}}" width="24" alt="logo"> JSON (ignoreColumn)</a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'true'});">
                                            <img src="{{asset('admin_assets/dist/img/json.png')}}" width="24" alt="logo"> JSON (with Escape)</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#" onclick="$('#dataTableExample1').tableExport({type:'xml',escape:'false'});">
                                                <img src="{{asset('admin_assets/dist/img/xml.png')}}" width="24" alt="logo"> XML</a>
                                            </li>
                                            <li>
                                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'sql'});">
                                                    <img src="{{asset('admin_assets/dist/img/sql.png')}}" width="24" alt="logo"> SQL</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});">
                                                        <img src="{{asset('admin_assets/dist/img/csv.png')}}" width="24" alt="logo"> CSV</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'txt',escape:'false'});">
                                                            <img src="{{asset('admin_assets/dist/img/txt.png')}}" width="24" alt="logo"> TXT</a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li>
                                                            <a href="#" onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});">
                                                                <img src="{{asset('admin_assets/dist/img/xls.png')}}" width="24" alt="logo"> XLS</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'doc',escape:'false'});">
                                                                    <img src="{{asset('admin_assets/dist/img/word.png')}}" width="24" alt="logo"> Word</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'powerpoint',escape:'false'});">
                                                                        <img src="{{asset('admin_assets/dist/img/ppt.png')}}" width="24" alt="logo"> PowerPoint</a>
                                                                    </li>
                                                                    <li class="divider"></li>
                                                                    <li>
                                                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'png',escape:'false'});">
                                                                            <img src="{{asset('admin_assets/dist/img/png.png')}}" width="24" alt="logo"> PNG</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});">
                                                                                <img src="{{asset('admin_assets/dist/img/pdf.png')}}" width="24" alt="logo"> PDF</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                                                    <div class="table-responsive">
                                                                        <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                                                            <thead>
                                                                                <tr class="info">
                                                                                    <th>Photo</th>
                                                                                    <th>Player Name</th>
                                                                                    <th>Mobile</th>
                                                                                    <th>Email</th>
                                                                                    <th>Player Position</th>
                                                                                    <th>type</th>
                                                                                    <th>Join</th>
                                                                                    <th>Status</th>
                                                                                    <th>Action</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td><img src="{{asset('admin_assets/dist/img/iLOGO.png')}}" class="img-circle" alt="User Image" width="50" height="50"> </td>
                                                                                    <td>MD. Alimul Alrazy</td>
                                                                                    <td>+2341234567890</td>
                                                                                    <td><a href="#" class="__cf_email__">johndoe@mail.com</a></td>
                                                                                    <td>Left Wing Forward</td>
                                                                                    <td>V.I.P</td>
                                                                                    <td>27th April,2017</td>
                                                                                    <td><span class="label-custom label label-default">Active</span></td>
                                                                                    <td>
                                                                                        <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
                                                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><img src="{{asset('admin_assets/dist/img/iLOGO.png')}}" class="img-circle" alt="User Image" width="50" height="50"> </td>
                                                                                    <td>MD. Alrazy</td>
                                                                                    <td>+2341234567890</td>
                                                                                    <td><a href="#" class="__cf_email__">johndoe@mail.com</a></td>
                                                                                    <td>Right Wing Forward</td>
                                                                                    <td>V.I.P</td>
                                                                                    <td>27th April,2017</td>
                                                                                    <td><span class="label-danger label label-default">Inctive</span></td>
                                                                                    <td>
                                                                                        <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
                                                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><img src="{{asset('admin_assets/dist/img/iLOGO.png')}}" class="img-circle" alt="User Image" width="50" height="50"> </td>
                                                                                    <td>Mrs. Jorina Begum</td>
                                                                                    <td>+2341234567890</td>
                                                                                    <td><a href="#" class="__cf_email__">johndoe@mail.com</a></td>
                                                                                    <td>Goal Keeper</td>
                                                                                    <td>V.I.P</td>
                                                                                    <td>27th April,2017</td>
                                                                                    <td><span class="label-danger label label-default">Inctive</span></td>
                                                                                    <td>
                                                                                        <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
                                                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                                                                    </td>
                                                                                </tr>
                                                                                @foreach($Players as $player)
                                                                                <tr>
                                                                                    <td><img src="{{asset('admin_assets/dist/img/iLOGO.png')}}" class="img-circle" alt="User Image" width="50" height="50"> </td>
                                                                                    <td>{{$player->player_firstname}}</td>
                                                                                    <td>+2341234567890</td>
                                                                                    <td><a href="#" class="__cf_email__">johndoe@mail.com</a></td>
                                                                                    <td>Defender</td>
                                                                                    <td>V.I.P</td>
                                                                                    <td>27th April,2017</td>
                                                                                    <td><span class="label-custom label label-default">Active</span></td>
                                                                                    <td>
                                                                                        <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
                                                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                                                                    </td>
                                                                                </tr>
                                                                                @endforeach

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
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
                                                                    <h3><i class="fa fa-user m-r-5"></i> Update Player Profile</h3>
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
                                                                                        <label class="control-label">Mobile:</label>
                                                                                        <input type="number" placeholder="Mobile" class="form-control">
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">Address:</label><br>
                                                                                        <textarea name="address" rows="3" class="form-control"></textarea>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">Player Package:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Premium ₦50,000</option>
                                                                                            <option>Gold ₦20,000</option>
                                                                                            <option>Silver ₦2,000</option>
                                                                                            <option>Free</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">Player Position:</label>
                                                                                        <input type="text" placeholder="Player Position" class="form-control">
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">Games Played:</label>
                                                                                        <input type="text" placeholder="Games Played" class="form-control">
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">Minutes Played:</label>
                                                                                        <input type="text" placeholder="Minutes Played" class="form-control">
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">Super-Substitute:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Yes</option>
                                                                                            <option>No</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">Associate Team:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Arsenal Fc</option>
                                                                                            <option>Manchester United</option>
                                                                                            <option>Manchester United</option>
                                                                                            <option>Manchester United</option>
                                                                                            <option>Manchester United</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">Associate Academy:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Arsenal Academy</option>
                                                                                            <option>Manchester Academy</option>
                                                                                            <option>Manchester Academy</option>
                                                                                            <option>Manchester Academy</option>
                                                                                            <option>Manchester Academy</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">Associate Scout:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Arsenal Fc</option>
                                                                                            <option>Manchester United</option>
                                                                                            <option>Manchester United</option>
                                                                                            <option>Manchester United</option>
                                                                                            <option>Manchester United</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-12 form-group">
                                                                                        <label class="control-label">Biography:</label><br>
                                                                                        <textarea name="biography" rows="3" class="form-control"></textarea>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">TEAM SPIRIT:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">PASSING ACCURACY:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">GROUND DUEL WINNING:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">ARIEL DUEL WINNING:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">RECOVERY:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">TACKLES WINNING:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">CLEARANCE:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">BLOCKING:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">INTERCEPTIONS:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">PENALTIES CONCEDED:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">FOUL WINNINGS:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">GOAL SCORING:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">PENALTY GOALS:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">SHOOTING ACCURACY:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">SUCCESSFUL CROSSES:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">ASSIST ABILITY:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">CHANCES CREATION:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">PENALTIES WINNING:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-6 form-group">
                                                                                        <label class="control-label">OFFSIDES:</label>
                                                                                        <select class="form-control">
                                                                                            <option></option>
                                                                                            <option>Okay</option>
                                                                                            <option>Impressive</option>
                                                                                            <option>Outstanding</option>
                                                                                        </select>
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
                                                    <!-- Modal -->
                                                    <!-- Customer Modal2 -->
                                                    <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header modal-header-primary">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    <h3><i class="fa fa-user m-r-5"></i> Delete Playerer</h3>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <form class="form-horizontal">
                                                                                <fieldset>
                                                                                    <div class="col-md-12 form-group user-form-group">
                                                                                        <label class="control-label">Delete Playerer</label>
                                                                                        <div class="pull-right">
                                                                                            <button type="button" class="btn btn-danger btn-sm">NO</button>
                                                                                            <button type="submit" class="btn btn-add btn-sm">YES</button>
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
                                                </section>
                                                <!-- /.content -->

                                                @endsection

                                                @section('scripts')
                                                <script src="{{asset('admin_assets/plugins/table-export/tableExport.js')}}" type="text/javascript"></script>
                                                <script src="{{asset('admin_assets/plugins/table-export/jquery.base64.js')}}" type="text/javascript"></script>
                                                <script src="{{asset('admin_assets/plugins/table-export/html2canvas.js')}}" type="text/javascript"></script>
                                                <script src="{{asset('admin_assets/plugins/table-export/sprintf.js')}}" type="text/javascript"></script>
                                                <script src="{{asset('admin_assets/plugins/table-export/jspdf.js')}}" type="text/javascript"></script>
                                                <script src="{{asset('admin_assets/plugins/table-export/base64.js')}}" type="text/javascript"></script>
                                                <!-- dataTables js -->
                                                <script src="{{asset('admin_assets/plugins/datatables/dataTables.min.js')}}" type="text/javascript"></script>
                                                @endsection
