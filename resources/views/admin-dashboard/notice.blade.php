@extends('admin-dashboard.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-file-text"></i>
    </div>
    <div class="header-title">
        <h1>Notice Board</h1>
        <small>Notice Board Summary</small>
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
                            <h4>Notices</h4>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                    <div class="btn-group">
                        <div class="buttonexport" id="buttonexport">
                            <a href="#" class="btn btn-add" data-toggle="modal" data-target="#addnot">
                                <i class="fa fa-plus"></i> Add Notice</a>
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
                                                                                            <th>Notice title</th>
                                                                                            <th>Publish date</th>
                                                                                            <th>Start date</th>
                                                                                            <th>End date</th>
                                                                                            <th>Description</th>
                                                                                            <th>Notice Visible To</th>
                                                                                            <th>status</th>
                                                                                            <th>Action</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Salary</td>
                                                                                            <td>08-08-2017</td>
                                                                                            <td>08-08-2017</td>
                                                                                            <td>08-09-2017</td>
                                                                                            <td>Monthly salary to be delay for uncircummostance</td>
                                                                                            <td>Admin</td>
                                                                                            <td>
                                                                                                <span class="label-custom label label-default">Published</span>
                                                                                            </td>
                                                                                            <td>
                                                                                                <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                                                                    <i class="fa fa-pencil"></i>
                                                                                                </button>
                                                                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delt">
                                                                                                    <i class="fa fa-trash-o"></i>
                                                                                                </button>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Salary</td>
                                                                                            <td>08-08-2017</td>
                                                                                            <td>08-08-2017</td>
                                                                                            <td>08-09-2017</td>
                                                                                            <td>Monthly salary to be delay for uncircummostance</td>
                                                                                            <td>Players</td>
                                                                                            <td>
                                                                                                <span class="label-warning label label-default">pending</span>
                                                                                            </td>
                                                                                            <td>
                                                                                                <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                                                                    <i class="fa fa-pencil"></i>
                                                                                                </button>
                                                                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delt">
                                                                                                    <i class="fa fa-trash-o"></i>
                                                                                                </button>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Off day</td>
                                                                                            <td>08-08-2017</td>
                                                                                            <td>08-08-2017</td>
                                                                                            <td>08-09-2017</td>
                                                                                            <td>tommorow is a holyday</td>
                                                                                            <td>Admin</td>
                                                                                            <td>
                                                                                                <span class="label-danger label label-default">dely</span>
                                                                                            </td>
                                                                                            <td>
                                                                                                <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                                                                    <i class="fa fa-pencil"></i>
                                                                                                </button>
                                                                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delt">
                                                                                                    <i class="fa fa-trash-o"></i>
                                                                                                </button>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal1 -->
                                                            <div class="modal fade" id="addnot" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header modal-header-primary">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                            <h3>
                                                                                <i class="fa fa-plus m-r-5"></i> add new notice</h3>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form class="form-horizontal">
                                                                                            <fieldset>
                                                                                                <!-- Text input-->
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label">Notice title</label>
                                                                                                    <input type="text" placeholder="Notice title" class="form-control">
                                                                                                </div>
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label">Publish date</label>
                                                                                                    <input type="number" placeholder="Notice title" class="form-control">
                                                                                                </div>
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label">Start date</label>
                                                                                                    <input type="number" placeholder="Notice title" class="form-control">
                                                                                                </div>
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label">End date</label>
                                                                                                    <input type="number" placeholder="Notice title" class="form-control">
                                                                                                </div>
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label">description</label>
                                                                                                    <input type="text" placeholder="description" class="form-control">
                                                                                                </div>
                                                                                                <!-- Text input-->
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label">status</label>
                                                                                                    <select class="form-control">
                                                                                                        <option></option>
                                                                                                        <option>Pending</option>
                                                                                                        <option>Publish</option>
                                                                                                        <option>Delay</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="col-md-12 form-group">
                                                                                                    <label>Notice Visible To:</label>
                                                                                                    <select class="form-control">
                                                                                                        <option></option>
                                                                                                        <option>Everyone</option>
                                                                                                        <option>Academies</option>
                                                                                                        <option>Team</option>
                                                                                                        <option>Scout</option>
                                                                                                        <option>Player</option>
                                                                                                        <option>Admin</option>
                                                                                                    </select>
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
                                                                <!-- Modal1 -->
                                                                <div class="modal fade" id="update" tabindex="-1" role="dialog">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header modal-header-primary">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                <h3>
                                                                                    <i class="fa fa-plus m-r-5"></i> Update notice board</h3>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <form class="form-horizontal">
                                                                                                <fieldset>
                                                                                                    <!-- Text input-->
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <label class="control-label">Notice title</label>
                                                                                                        <input type="text" placeholder="Notice title" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <label class="control-label">Publish date</label>
                                                                                                        <input type="number" placeholder="Notice title" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <label class="control-label">Start date</label>
                                                                                                        <input type="number" placeholder="Notice title" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <label class="control-label">End date</label>
                                                                                                        <input type="number" placeholder="Notice title" class="form-control">
                                                                                                    </div>
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <label class="control-label">description</label>
                                                                                                        <input type="text" placeholder="description" class="form-control">
                                                                                                    </div>
                                                                                                    <!-- Text input-->
                                                                                                    <div class="col-md-6 form-group">
                                                                                                        <label class="control-label">status</label>
                                                                                                        <select class="form-control">
                                                                                                            <option></option>
                                                                                                            <option>Pending</option>
                                                                                                            <option>Publish</option>
                                                                                                            <option>Delay</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                    <div class="col-md-12 form-group">
                                                                                                        <label>Notice Visible To:</label>
                                                                                                        <select class="form-control">
                                                                                                            <option></option>
                                                                                                            <option>Everyone</option>
                                                                                                            <option>Academies</option>
                                                                                                            <option>Team</option>
                                                                                                            <option>Scout</option>
                                                                                                            <option>Player</option>
                                                                                                            <option>Admin</option>
                                                                                                        </select>
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
                                                                    <!-- delete user Modal2 -->
                                                                    <div class="modal fade" id="delt" tabindex="-1" role="dialog">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header modal-header-primary">
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                    <h3>
                                                                                        <i class="fa fa-user m-r-5"></i> Delete Notice</h3>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <form class="form-horizontal">
                                                                                                    <fieldset>
                                                                                                        <div class="col-md-12 form-group user-form-group">
                                                                                                            <label class="control-label">Delete Notice</label>
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
