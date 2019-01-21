@extends('admin-dashboard.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-file-text-o"></i>
    </div>
    <div class="header-title">
        <h1>Verified</h1>
        <small>section for verified accounts</small>
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
                            <h4>Verified Users</h4>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                    <div class="btn-group">
                        <div class="buttonexport">
                            <a href="#" class="btn btn-add" data-toggle="modal" data-target="#adduser">
                                <i class="fa fa-plus"></i> Add Verified User</a>
                            </div>
                            <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bars"></i> Export Table Data</button>
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
                                                                            <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                                                            <div class="table-responsive">
                                                                                <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                                                                    <thead>
                                                                                        <tr class="info">
                                                                                            <th>Photo</th>
                                                                                            <th>User Name</th>
                                                                                            <th>Account Type</th>
                                                                                            <th>status</th>
                                                                                            <th>Action</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>

                                                                                            @foreach($Declineds as $declined)
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <img src="{{asset('admin_assets/dist/img/m2.png')}}" class="img-circle" alt="User Image" width="50" height="50">
                                                                                                </td>
                                                                                                <td>{{$declined->user->name}}</td>
                                                                                                <td>
                                                                                                    <span class="label-warning label label-default">{{$declined->verification_type}}</span>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <span class="label-custom label label-default">{{$declined->status->status_text}}</span>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#update">
                                                                                                        <i class="fa fa-pencil"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2">
                                                                                                        <i class="fa fa-trash-o"></i>
                                                                                                    </button>
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
                                                            <!-- User Modal1 -->
                                                            <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header modal-header-primary">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                            <h3>
                                                                                <i class="fa fa-plus m-r-5"></i> Edit verification status</h3>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form class="form-horizontal">
                                                                                            <fieldset>
                                                                                                <!-- Text input-->
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label">User Name</label>
                                                                                                    <input type="text" placeholder="User Name" class="form-control">
                                                                                                </div>
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label">Account Type</label>
                                                                                                    <input type="text" placeholder="Type" class="form-control">
                                                                                                </div>
                                                                                                <!-- Text input-->
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label">status</label>
                                                                                                    <input type="text" placeholder="status" class="form-control">
                                                                                                </div>
                                                                                                <!-- Text input-->
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label">file1</label>
                                                                                                    <input name="filebutton" class="input-file" type="file">
                                                                                                </div>
                                                                                                <!-- Text input-->
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label">file2</label>
                                                                                                    <input name="filebutton" class="input-file" type="file">
                                                                                                </div>
                                                                                                <div class="col-md-12 form-group user-form-group">
                                                                                                    <div class="pull-right">
                                                                                                        <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                                                                                        <button type="submit" class="btn btn-add btn-sm">Update</button>
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
                                                                <!-- User Modal1 -->
                                                                <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header modal-header-primary">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                <h3>
                                                                                    <i class="fa fa-plus m-r-5"></i> Add verified User</h3>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <form class="form-horizontal">
                                                                                                <fieldset>
                                                                                                    <!-- Text input-->
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <label class="control-label">Photo</label>
                                                                                                        <input name="filebutton" class="input-file" type="file">
                                                                                                    </div>
                                                                                                    <!-- Text input-->
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <label class="control-label">Full Name</label>
                                                                                                        <input type="text" placeholder="Full Name" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <label class="control-label">Email</label>
                                                                                                        <input type="email" placeholder="Email" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <label class="control-label">Phone Number</label>
                                                                                                        <input type="number" placeholder="Phone Number" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <label class="control-label">Date of Birth</label>
                                                                                                        <input type="date" placeholder="date of birth" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <label class="control-label">Nationality</label>
                                                                                                        <input type="text" placeholder="Nationality" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <label class="control-label">Height</label>
                                                                                                        <input type="number" placeholder="Height(ft)" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <label class="control-label">Weight</label>
                                                                                                        <input type="number" placeholder="Weight(kg)" class="form-control">
                                                                                                    </div>
                                                                                                    <!-- Text input-->
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <label class="control-label">Position</label>
                                                                                                        <input type="text" placeholder="Position" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-12 form-group user-form-group">
                                                                                                        <div class="pull-right">
                                                                                                            <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                                                                                            <button type="submit" class="btn btn-add btn-sm">Update</button>
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
                                                                    <!-- delete user Modal2 -->
                                                                    <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header modal-header-primary">
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                    <h3>
                                                                                        <i class="fa fa-user m-r-5"></i> Delete User</h3>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <form class="form-horizontal">
                                                                                                    <fieldset>
                                                                                                        <div class="col-md-12 form-group user-form-group">
                                                                                                            <label class="control-label">Delete User</label>
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

                                                                    <!-- table-export js -->
                                                                    <script src="{{asset('admin_assets/plugins/table-export/tableExport.js')}}" type="text/javascript"></script>
                                                                    <script src="{{asset('admin_assets/plugins/table-export/jquery.base64.js')}}" type="text/javascript"></script>
                                                                    <script src="{{asset('admin_assets/plugins/table-export/html2canvas.js')}}" type="text/javascript"></script>
                                                                    <script src="{{asset('admin_assets/plugins/table-export/sprintf.js')}}" type="text/javascript"></script>
                                                                    <script src="{{asset('admin_assets/plugins/table-export/jspdf.js')}}" type="text/javascript"></script>
                                                                    <script src="{{asset('admin_assets/plugins/table-export/base64.js')}}" type="text/javascript"></script>
                                                                    <!-- dataTables js -->
                                                                    <script src="{{asset('admin_assets/plugins/datatables/dataTables.min.js')}}" type="text/javascript"></script>
                                                                    @endsection
