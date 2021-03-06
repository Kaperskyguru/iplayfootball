@extends('admin-dashboard.layouts.app') 
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-file-text-o"></i>
    </div>
    <div class="header-title">
        <h1>Pending</h1>
        <small>section for pending accounts</small>
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
                            <h4>Pending Users</h4>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                    <div class="btn-group">
                        <div class="buttonexport">
                            <a href="{{url('/admin/addverification')}}" class="btn btn-add">
                                <i class="fa fa-plus"></i> Add new verification</a>
                        </div>
                        <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bars"></i> Export Table Data</button>
                        <ul class="dropdown-menu exp-drop" role="menu">
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false'});">
                                    <img src="{{asset('admin_assets/dist/img/json.png')}}" width="24" alt="logo">
                                    JSON</a>
                            </li>
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});">
                                    <img src="{{asset('admin_assets/dist/img/json.png')}}" width="24" alt="logo"> JSON
                                    (ignoreColumn)</a>
                            </li>
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'true'});">
                                    <img src="{{asset('admin_assets/dist/img/json.png')}}" width="24" alt="logo"> JSON
                                    (with Escape)</a>
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
                                    <img src="{{asset('admin_assets/dist/img/word.png')}}" width="24" alt="logo">
                                    Word</a>
                            </li>
                            <li>
                                <a href="#" onclick="$('#dataTableExample1').tableExport({type:'powerpoint',escape:'false'});">
                                    <img src="{{asset('admin_assets/dist/img/ppt.png')}}" width="24" alt="logo">
                                    PowerPoint</a>
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

                                @foreach($Pendings as $pending)
                                <tr>
                                    <td>
                                        <img src="{{asset('admin_assets/dist/img/m2.png')}}" class="img-circle" alt="User Image" width="50" height="50">
                                    </td>
                                    <td>{{$pending->user->name}}</td>
                                    <td>
                                        @if ($pending->verification_type == 'team')
                                            <span class="label-warning label label-default">{{$pending->verification_type}}</span>                                        
                                        @elseif($pending->verification_type == 'player')
                                            <span class="label-success label label-default">{{$pending->verification_type}}</span>   
                                        @else
                                            <span class="label-danger label label-default">{{$pending->verification_type}}</span>   
                                        @endif
                                    </td>
                                    <td>
                                        <span class="label-custom label label-default">{{$pending->status->status_text}}</span>
                                    </td>
                                    <td>
                                    <button type="button" class="btn btn-add btn-sm" data-id="{{$pending->id}}" data-token="{{csrf_token()}}" id="viewVerificationBtn" data-toggle="modal" data-target="#view">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-add btn-sm" data-id="{{$pending->id}}" data-token="{{csrf_token()}}" id="editVerificationBtn" data-toggle="modal" data-target="#update">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" data-id="{{$pending->id}}" data-token="{{csrf_token()}}" id="deleteVerificationBtn" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">
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

    <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3>
                        <i class="fa fa-plus m-r-5"></i> View Verification</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12" id="viewVerification">

                           
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
                        <div class="col-md-12" id="editVerification">
                            
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
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3>
                        <i class="fa fa-user m-r-5"></i> Delete User</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12" id="verification_info">
                            
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
<script>
        $(document).ready(function(){
 
             $('body').delegate('#viewVerificationBtn', 'click', function(){
                 let id = $(this).data('id');
                 var token = $(this).data("token");
                 $.ajax({
                     url:'/admin/viewverification',
                     type:'get',
                     data:{'id':id, '_token': token},
                     success: function(data) {
                         $('#viewVerification').html(data);
                     },
                     onerror: function(err){
                     }
                 });
             });

             $('body').delegate('#editVerificationBtn', 'click', function(){
                 let id = $(this).data('id');
                 var token = $(this).data("token");
                 $.ajax({
                     url:'/admin/editverification',
                     type:'get',
                     data:{'id':id, '_token': token},
                     success: function(data) {
                         $('#editVerification').html(data);
                     },
                     onerror: function(err){
                     }
                 });
             });

             $('body').delegate('#deleteVerificationBtn', 'click', function(){
            let id = $(this).data('id');
            var token = $(this).data("token");
            $.ajax({
                url:'/admin/verification/delete',
                type:'get',
                data:{'id':id, '_token': token},
                success: function(data) {
                    $('#verification_info').html(data);
                }
            });
        });

        $('body').delegate('#del_YES', 'click', function(){
            var id = $(this).data('id');
            // alert(id);
            var token = $(this).data("token");
            $.ajax({
                url:'/admin/verification/delete',
                type:'DELETE',
                data:{'id':id, '_token': token, '_method': 'DELETE'},
                success: function(data) {

                }
            });
        });


              
             $('body').delegate('#downloadfile1', 'click', function(){
                 var url = $(this).data('url');
                 window.location = "/admin/download/"+url
             });
 
        });
 </script>
@endsection