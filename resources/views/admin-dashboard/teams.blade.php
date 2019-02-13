@extends('admin-dashboard.layouts.app') 
@section('styles')

<style>
    .assopla {
        margin: 20px;
        padding: 0;
        height: 250px;
        overflow-x: none;
        overflow-y: scroll;
    }

    .assopla .assopla-list {
        cursor: pointer;
        position: relative;
        list-style-type: none;
        padding: 12px 8px 12px 40px;
        background: #eee;
        font-size: 18px;
        transition: 0.2s;
        /* make the list items unselectable */
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Set all odd list items to a different color (zebra-stripes) */

    .assopla .assopla-list:nth-child(odd) {
        background: #f9f9f9;
    }

    /* Style the close button */

    .clos {
        position: absolute;
        right: 0;
        top: 0;
        padding: 12px 16px 12px 16px;
    }

    .clos:hover {
        background-color: #f44336;
        color: white;
    }
</style>
@endsection
 
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-users"></i>
    </div>
    <div class="header-title">
        <h1>All Teams</h1>
        <small>Team List</small>
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
                        <a href="{{url('/admin/addteam')}}">
                            <h4>Add Team</h4>
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
                            <a class="btn btn-add" href="{{url('/admin/addteam')}}"> <i class="fa fa-plus"></i> Add Team
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
                                    <th>Team Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>type</th>
                                    <th>Join</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Teams as $team)
                                <tr>
                                    <td><img src="{{ asset(extractFromImage($team->image_id)) }}" class="img-circle" alt="User Image"
                                            width="50" height="50"></td>
                                    <td>{{$team->name}}</td>
                                    <td>{{$team->phone}}</td>
                                    <td><a href="#" class="__cf_email__">{{$team->email}}</a></td>
                                    <td>{{$team->address}}</td>
                                    <td>V.I.P</td>
                                    <td>{{getFromDateAttribute($team->created_at)}}</td>
                                    <td><span class="label-custom label label-default">{{$team->status->status_text}}</span></td>
                                    <td>
                                        <button type="button" id="updateTeam" data-id="{{$team->id}}" data-token="{{ csrf_token() }}" class="btn btn-add btn-sm"
                                            data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
                                        <button type="button" id="deleteTeam" data-id="{{$team->id}}" data-token="{{ csrf_token() }}" class="btn btn-danger btn-sm"
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
    <div class="modal fade" id="customer1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3><i class="fa fa-user m-r-5"></i> Update Team Profile</h3>
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
                    <h3><i class="fa fa-user m-r-5"></i> Delete Team</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal">
                                <fieldset>
                                    <div id="team_info" class="col-md-12 form-group user-form-group">

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
<script data-cfasync="false" src="{{asset('public/js/email-decode.min.js')}}"></script>
<!-- table-export js -->
<script src="{{asset('public/admin_assets/plugins/table-export/tableExport.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin_assets/plugins/table-export/jquery.base64.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin_assets/plugins/table-export/html2canvas.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin_assets/plugins/table-export/sprintf.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin_assets/plugins/table-export/jspdf.js')}}" type="text/javascript"></script>
<script src="{{asset('public/admin_assets/plugins/table-export/base64.js')}}" type="text/javascript"></script>
<!-- SlimScroll -->
<script>
    $(document).ready(function(){

        $('body').delegate('#deleteTeam', 'click', function(){
            let id = $(this).data('id');
            var token = $(this).data("token");
            $.ajax({
                url:'/admin/teams/delete',
                type:'get',
                data:{'id':id, '_token': token},
                success: function(data) {
                    $('#team_info').html(data);
                }
            });
        });

        $('body').delegate('#del_YES', 'click', function(){
            var id = $(this).data('id');
            var token = $(this).data("token");
            $.ajax({
                url:'/admin/users/delete',
                type:'DELETE',
                data:{'id':id, '_token': token, '_method': 'DELETE'},
                success: function(data) {
                },
                onerror: function(err){
                }
            });
        });

        $('body').delegate('#updateTeam', 'click', function(){
            let id = $(this).data('id');
            var token = $(this).data("token");
            $.ajax({
                url:'/admin/teams/update',
                type:'get',
                data:{'id':id, '_token': token},
                success: function(data) {
                    $('#update_box').html(data);
                }
            });
        });

    });

   // Create a new list item when clicking on the "Add" button
   function newElement() {
            var teamId = document.getElementById('teamId').value;
            var token = document.getElementById('token').value;
            var inputValue = document.getElementById("myInput").value;
            
            if (inputValue === '') {
                alert("You must write something!");
            } else {
               addPlayer(inputValue, teamId, token);  
            }
            removeSelOption(inputValue)   
        }

        function addPlayer(playerID, teamID, token){
            $.ajax({
                url:'/admin/teams/associate',
                type:'post',
                data:{'player':playerID, 'id':teamID, '_token': token},
                success: function(data) {
                    addCloseButton(data, playerID, token);
                    return data;
                }
            });
        }

        function addCloseButton(data, playerID, token){
            var li = document.createElement("li");
            var span = document.createElement("SPAN");
            var txt = document.createTextNode("\u00D7");
            var close = document.getElementsByClassName("clos");
            span.className = "clos";
            span.appendChild(txt);
            li.appendChild(span);

            var t = document.createTextNode(data);
            li.className = "assopla-list";
            li.appendChild(t);
            document.getElementById("myUL").appendChild(li);

            //TODO: After Deleting from Database Remove from Form
            for (i = 0; i < close.length; i++) {
                close[i].onclick = function() {
                    removePlayer(this, playerID, token);
                }
            }
        }

        function removePlayer(el, playerID, token){
            $.ajax({
                url:'/admin/teams/associate',
                type:'post',
                data:{'player':playerID, 'id':null, '_token': token},
                success: function(data) {
                    var div = el.parentElement;
                    div.remove();
                }
            });
        }

        function removeSelOption(inpt){
            $("#myInput option[value='" + inpt + "']").remove();
        }   

        function validateEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

</script>
@endsection