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
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bars"></i> Export Table Data</button>
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
                                                                                    @foreach($Notices as $notice)
                                                                                        <tr>
                                                                                            <td><a href="#readNoticeModal" data-id="{{$notice->id}}" data-toggle="modal" id="readNotice" style="color:black;" data-token="<?php echo csrf_token() ?>">{{$notice->notice_title}}</a></td>
                                                                                            <td>{{dateFormat($notice->notice_publishdate)}}</td>
                                                                                            <td>{{dateFormat($notice->notice_publishdate)}}</td>
                                                                                            <td>{{dateFormat($notice->notice_enddate)}}</td>
                                                                                            <td>{{$notice->notice_desc}}</td>
                                                                                            <td>{{$notice->visibleTo->status_text}}</td>
                                                                                            <td>
                                                                                                <span class="label-custom label label-default">{{$notice->status->status_text}}</span>
                                                                                            </td>
                                                                                            <td>
                                                                                                <button type="button" data-token="{{csrf_token() }}" id="updateNotice" data-id="{{$notice->id}}" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update">
                                                                                                    <i class="fa fa-pencil"></i>
                                                                                                </button>
                                                                                                <button type="button" id="deleteNotice" data-token="{{csrf_token() }}" data-id="{{$notice->id}}" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delt">
                                                                                                    <i class="fa fa-trash-o"></i>
                                                                                                </button>
                                                                                            </td>
                                                                                        </tr>
                                                                                    @endforeach
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
                                                                                        <form class="form-horizontal" method="POST" action="{{ url('admin/notices') }}">
                                                                                        @method('POST')
                                                                                        @csrf
                                                                                            <fieldset>
                                                                                            <!-- <input type="hidden" name="_token" value="{{ @csrf_token() }}"> -->
                                                                                                <!-- Text input-->
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label" for="title">Notice title</label>
                                                                                                    <input type="text" name="title" id="title" placeholder="Notice title" class="form-control">
                                                                                                </div>
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label" for="notice_publishdate">Publish date</label>
                                                                                                    <input type="date" name="notice_publishdate" id="notice_publishdate" placeholder="Notice published date" class="form-control">
                                                                                                </div>
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label" for="notice_startdate">Start date</label>
                                                                                                    <input type="date" placeholder="Notice start date" name="notice_startdate" id="notice_startdate" class="form-control">
                                                                                                </div>
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label" for="notice_enddate">End date</label>
                                                                                                    <input type="date" placeholder="Notice end date" name="notice_enddate" id="notice_enddate" class="form-control">
                                                                                                </div>
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label" for="desc">description</label>
                                                                                                    <textarea type="text" name="desc" id="desc" placeholder="description" class="form-control"> </textarea>  
                                                                                                </div>
                                                                                                <!-- Text input-->
                                                                                                <div class="col-md-6 form-group">
                                                                                                    <label class="control-label" for="notice_status">status</label>
                                                                                                    <select class="form-control" name="notice_status" id="notice_status">
                                                                                                        <option value="2">Pending</option>
                                                                                                        <option value="1">Publish</option>
                                                                                                        <option value="3">Delay</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="col-md-12 form-group">
                                                                                                    <label class="control-label" for="visibility_id">Notice Visible To:</label>
                                                                                                    <select name="visibility_id" name="visibility_id" class="form-control">
                                                                                                        <option value="4">Everyone</option>
                                                                                                        <option value="5">Academies</option>
                                                                                                        <option value="6">Team</option>
                                                                                                        <option value="7">Scout</option>
                                                                                                        <option value="8">Player</option>
                                                                                                        <option value="9">Admin</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="col-md-12 form-group user-form-group">
                                                                                                    <div class="pull-right">
                                                                                                        <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                                                                                        <button type="submit" class="btn btn-add btn-sm">Send</button>
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
                                                                                        <div class="col-md-12" id="notice_update_info">
                                                                                
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
                                                                                                        <div id="notice_info" class="col-md-12 form-group user-form-group">
                                                                                                            
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
                                                                    <div class="modal fade" id="readNoticeModal" tabindex="-1" role="dialog">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header modal-header-primary">
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                        <h3>
                                                                                            <i class="fa fa-file-text m-r-5"></i> Read notice</h3>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12" id="noticeReadForm">
                                                                                                
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
                                                                        </section>
                                                                    @endsection
                                                                    @section('scripts')
                                                                    <!-- table-export js -->
                                                                    <script src="{{asset('public/admin_assets/plugins/table-export/tableExport.js')}}" type="text/javascript"></script>
                                                                    <script src="{{asset('public/admin_assets/plugins/table-export/jquery.base64.js')}}" type="text/javascript"></script>
                                                                    <script src="{{asset('public/admin_assets/plugins/table-export/html2canvas.js')}}" type="text/javascript"></script>
                                                                    <script src="{{asset('public/admin_assets/plugins/table-export/sprintf.js')}}" type="text/javascript"></script>
                                                                    <script src="{{asset('public/admin_assets/plugins/table-export/jspdf.js')}}" type="text/javascript"></script>
                                                                    <script src="{{asset('public/admin_assets/plugins/table-export/base64.js')}}" type="text/javascript"></script>
                                                                    <script>
                                                                        $(document).ready(function(){

                                                                            $('body').delegate('#deleteNotice', 'click', function(){
                                                                                let id = $(this).data('id');
                                                                                var token = $(this).data("token");
                                                                                $.ajax({
                                                                                    url:'/admin/notices/delete',
                                                                                    type:'get',
                                                                                    data:{'id':id, '_token': token},
                                                                                    success: function(data) {
                                                                                        $('#notice_info').html(data);
                                                                                    }
                                                                                });
                                                                            });

                                                                            $('body').delegate('#del_YES', 'click', function(){
                                                                                var id = $(this).data('id');
                                                                                var token = $(this).data("token");
                                                                                $.ajax({
                                                                                    url:'/admin/notices/delete',
                                                                                    type:'DELETE',
                                                                                    data:{'id':id, '_token': token, '_method': 'DELETE'},
                                                                                    success: function(data) {

                                                                                    }
                                                                                });
                                                                            });

                                                                            $('body').delegate('#updateNotice', 'click', function(){
                                                                                var id = $(this).data('id');
                                                                                var token = $(this).data("token");
                                                                                $.ajax({
                                                                                    url:'/admin/notices/update',
                                                                                    type:'get',
                                                                                    data:{'id':id, '_token': token, '_method': 'get'},
                                                                                    success: function(data) {
                                                                                        $('#notice_update_info').html(data);
                                                                                    }
                                                                                });
                                                                            });

                                                                            // $('body').delegate('#update', 'click', function(){
                                                                            //     var id = $(this).data('id');
                                                                            //     var token = $(this).data("token");
                                                                            //     $.ajax({
                                                                            //         url:'/admin/notices/update',
                                                                            //         type:'PUT',
                                                                            //         data:{'id':id, '_token': token, '_method': 'PUT'},
                                                                            //         success: function(data) {

                                                                            //         }
                                                                            //     });
                                                                            // });

                                                                            $('body').delegate('#readNotice', 'click', function(){
                                                                                let id = $(this).data('id');
                                                                                var token = $(this).data("token");
                                                                                $.ajax({
                                                                                    url:'/admin/notices/read',
                                                                                    type:'get',
                                                                                    data:{'id':id, '_token': token},
                                                                                    success: function(data) {
                                                                                        // alert(data);
                                                                                        $('#noticeReadForm').html(data);
                                                                                    }
                                                                                });
                                                                            });
                                                                        });
                                                                    </script>
                                                                     @endsection
