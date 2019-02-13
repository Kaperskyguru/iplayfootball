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
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
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
                                    <img src="{{asset('public/admin_assets/dist/img/json.png')}}" width="24" alt="logo"> JSON</a>
                            </li>
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});">
                                        <img src="{{asset('public/admin_assets/dist/img/json.png')}}" width="24" alt="logo"> JSON (ignoreColumn)</a>
                            </li>
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'true'});">
                                            <img src="{{asset('public/admin_assets/dist/img/json.png')}}" width="24" alt="logo"> JSON (with Escape)</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'xml',escape:'false'});">
                                                <img src="{{asset('public/admin_assets/dist/img/xml.png')}}" width="24" alt="logo"> XML</a>
                            </li>
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'sql'});">
                                                    <img src="{{asset('public/admin_assets/dist/img/sql.png')}}" width="24" alt="logo"> SQL</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});">
                                                        <img src="{{asset('public/admin_assets/dist/img/csv.png')}}" width="24" alt="logo"> CSV</a>
                            </li>
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'txt',escape:'false'});">
                                                            <img src="{{asset('public/admin_assets/dist/img/txt.png')}}" width="24" alt="logo"> TXT</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});">
                                                                <img src="{{asset('public/admin_assets/dist/img/xls.png')}}" width="24" alt="logo"> XLS</a>
                            </li>
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'doc',escape:'false'});">
                                                                    <img src="{{asset('public/admin_assets/dist/img/word.png')}}" width="24" alt="logo"> Word</a>
                            </li>
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'powerpoint',escape:'false'});">
                                                                        <img src="{{asset('public/admin_assets/dist/img/ppt.png')}}" width="24" alt="logo"> PowerPoint</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'png',escape:'false'});">
                                                                            <img src="{{asset('public/admin_assets/dist/img/png.png')}}" width="24" alt="logo"> PNG</a>
                            </li>
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});">
                                                                                <img src="{{asset('public/admin_assets/dist/img/pdf.png')}}" width="24" alt="logo"> PDF</a>
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

                                @foreach($Players as $player)
                                <tr>
                                    <td><img src="{{ asset(extractFromImage($player->player_image_id)) }}" class="img-circle"
                                            alt="User Image" width="50" height="50"> </td>
                                    <td>{{$player->player_name}}</td>
                                    <td>{{$player->player_phone}}</td>
                                    <td><a href="#" class="__cf_email__">{{$player->player_email}}</a></td>
                                    <td>{{$player->player_position}}</td>
                                    <td>V.I.P</td>
                                    <td>{{dateFormat($player->created_at)}}</td>
                                    <td><span class="label-custom label label-default">{{$player->status['status_text']}}</span></td>
                                    <td>
                                        <button type="button" data-id="{{$player->id}}" class="btn btn-add btn-sm" data-token="<?php echo csrf_token() ?>" data-toggle="modal"
                                            id="updatePlayer" data-target="#updateModal"><i class="fa fa-pencil"></i></button>
                                        <button type="button" data-id="{{$player->id}}" id="deletePlayer" data-token="<?php echo csrf_token() ?>" class="btn btn-danger btn-sm"
                                            data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
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
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3><i class="fa fa-user m-r-5"></i> Update Player Profile</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12" id="update_box">

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
                    <h3><i class="fa fa-user m-r-5"></i> Delete Player</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal">
                                <fieldset>
                                    <div id="player_info" class="col-md-12 form-group user-form-group">

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
<script src="{{asset('public/admin_assets/plugins/table-export/tableExport.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin_assets/plugins/table-export/jquery.base64.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin_assets/plugins/table-export/html2canvas.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin_assets/plugins/table-export/sprintf.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin_assets/plugins/table-export/jspdf.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin_assets/plugins/table-export/base64.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function(){

        $('body').delegate('#deletePlayer', 'click', function(){
            let id = $(this).data('id');
            var token = $(this).data("token");
            $.ajax({
                url:'/admin/players/delete',
                type:'get',
                data:{'id':id, '_token': token},
                success: function(data) {
                    $('#player_info').html(data);
                }
            });
        });

        $('body').delegate('#del_YES', 'click', function(){
            var id = $(this).data('id');
            // alert(id);
            var token = $(this).data("token");
            $.ajax({
                url:'/admin/users/delete',
                type:'DELETE',
                data:{'id':id, '_token': token, '_method': 'DELETE'},
                success: function(data) {

                }
            });
        });


        $('body').delegate('#updatePlayer', 'click', function(){
            let id = $(this).data('id');
            var token = $(this).data("token");
            $.ajax({
                url:'/admin/players/update',
                type:'get',
                data:{'id':id, '_token': token},
                success: function(data) {
                    // alert(data);
                    $('#update_box').html(data);
                }
            });
        });

    });
</script>
@endsection