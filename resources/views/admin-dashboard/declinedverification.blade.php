@extends('admin-dashboard.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-file-text-o"></i>
    </div>
    <div class="header-title">
        <h1>Quotes</h1>
        <small>Quotes List</small>
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
                            <h4>Quotes</h4>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                    <div class="btn-group">
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
                                                                                        <th>Serial No.</th>
                                                                                        <th>Account</th>
                                                                                        <th>Subject Name</th>
                                                                                        <th>Amount</th>
                                                                                        <th>Entry Date</th>
                                                                                        <th>Expired Date</th>
                                                                                        <th>Stage</th>
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>01</td>
                                                                                        <td>Eileen Gusikowski</td>
                                                                                        <td>Networking</td>
                                                                                        <td>$ 1,658.00</td>
                                                                                        <td>05/02/2017</td>
                                                                                        <td>15/06/2017</td>
                                                                                        <td>
                                                                                            <span class="label label-custom">Draft</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1">
                                                                                                <i class="fa fa-pencil"></i>
                                                                                            </button>
                                                                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2">
                                                                                                <i class="fa fa-trash-o"></i>
                                                                                            </button>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>02</td>
                                                                                        <td>Eileen Walker</td>
                                                                                        <td>design</td>
                                                                                        <td>$ 1,564.00</td>
                                                                                        <td>05/03/2017</td>
                                                                                        <td>15/09/2017</td>
                                                                                        <td>
                                                                                            <span class="label label-info">transfer</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1">
                                                                                                <i class="fa fa-pencil"></i>
                                                                                            </button>
                                                                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2">
                                                                                                <i class="fa fa-trash-o"></i>
                                                                                            </button>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>03</td>
                                                                                        <td>Maria gardoki</td>
                                                                                        <td>Technology</td>
                                                                                        <td>$ 1,564.00</td>
                                                                                        <td>05/03/2017</td>
                                                                                        <td>15/07/2017</td>
                                                                                        <td>
                                                                                            <span class="label label-custom">Draft</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1">
                                                                                                <i class="fa fa-pencil"></i>
                                                                                            </button>
                                                                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2">
                                                                                                <i class="fa fa-trash-o"></i>
                                                                                            </button>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>04</td>
                                                                                        <td>Stefen smith</td>
                                                                                        <td>Lan Configuration</td>
                                                                                        <td>$ 1,541.00</td>
                                                                                        <td>05/06/2017</td>
                                                                                        <td>15/09/2017</td>
                                                                                        <td>
                                                                                            <span class="label label-warning">cheques</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1">
                                                                                                <i class="fa fa-pencil"></i>
                                                                                            </button>
                                                                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2">
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
                                                        <!-- quote Modal1 -->
                                                        <div class="modal fade" id="customer1" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header modal-header-primary">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                        <h3>
                                                                            <i class="fa fa-user m-r-5"></i> Update Quotes</h3>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <form class="form-horizontal">
                                                                                        <fieldset>
                                                                                            <!-- Text input-->
                                                                                            <div class="col-md-4 form-group">
                                                                                                <label class="control-label">Subject name</label>
                                                                                                <input type="text" placeholder="Subject" class="form-control">
                                                                                            </div>
                                                                                            <!-- Text input-->
                                                                                            <div class="col-md-4 form-group">
                                                                                                <label class="control-label">Account</label>
                                                                                                <input type="text" placeholder="Account" class="form-control">
                                                                                            </div>
                                                                                            <!-- Text input-->
                                                                                            <div class="col-md-4 form-group">
                                                                                                <label class="control-label">Amount</label>
                                                                                                <input type="number" placeholder="Amount" class="form-control">
                                                                                            </div>
                                                                                            <div class="col-md-6 form-group">
                                                                                                <label class="control-label">Entry Date</label>
                                                                                                <input type="text" placeholder="Entry Date" class="form-control">
                                                                                            </div>
                                                                                            <div class="col-md-6 form-group">
                                                                                                <label class="control-label">Expire Date</label>
                                                                                                <input type="text" placeholder="Expire Date" class="form-control">
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
                                                            <!-- quote delete Modal2 -->
                                                            <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header modal-header-primary">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                            <h3>
                                                                                <i class="fa fa-user m-r-5"></i> Delete Quotes</h3>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <form class="form-horizontal">
                                                                                            <fieldset>
                                                                                                <div class="col-md-12 form-group user-form-group">
                                                                                                    <label class="control-label">Delete Quotes</label>
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
