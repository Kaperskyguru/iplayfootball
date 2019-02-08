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
        <h1>All Scouts</h1>
        <small>Scout List</small>
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
                        <a href="{{url('/admin/addscout')}}">
                            <h4>Add Scout</h4>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                    <div class="btn-group">
                        <div class="buttonexport" id="buttonlist">
                            <a class="btn btn-add" href="{{url('/admin/addscout')}}"> <i class="fa fa-plus"></i> Add Scout
                            </a>
                        </div>
                        @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
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
                                                                                    <th>Scout Name</th>
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
                                                                                @foreach($Scouts as $scout)
                                                                                <tr>
                                                                                    <td><img src="{{ asset(extractFromImage($scout->scout_image_id)) }}" class="img-circle" alt="User Image" width="50" height="50"> </td>
                                                                                    <td>{{$scout->scout_name}}</td>
                                                                                    <td>{{$scout->scout_phone}}</td>
                                                                                    <td><a href="#" class="__cf_email__">{{$scout->scout_email}}</a></td>
                                                                                    <td>{{$scout->scout_address}}</td>
                                                                                    <td>V.I.P</td>
                                                                                    <td>{{dateFormat($scout->created_at)}}</td>
                                                                                    <td><span class="label-custom label label-default">{{$scout->status->status_text}}</span></td>
                                                                                    <td>
                                                                                        <button type="button" class="btn btn-add btn-sm" id="updateScout" data-id="{{$scout->id}}" data-token="{{ csrf_token() }}" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
                                                                                        <button type="button" id="deleteScout" data-id="{{$scout->id}}" data-token="{{ csrf_token() }}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
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
                                                                    <h3><i class="fa fa-user m-r-5"></i> Update Scout Profile</h3>
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
                                                                    <h3><i class="fa fa-user m-r-5"></i> Delete Playerer</h3>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <form class="form-horizontal">
                                                                                <fieldset>
                                                                                    <div id="scout_info" class="col-md-12 form-group user-form-group">
                                                                                     
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
                                                <script data-cfasync="false" src="{{asset('js/email-decode.min.js')}}"></script>
                                                <!-- table-export js -->
                                                <script src="{{asset('admin_assets/plugins/table-export/tableExport.js')}}" type="text/javascript"></script>
                                                <script src="{{asset('admin_assets/plugins/table-export/jquery.base64.js')}}" type="text/javascript"></script>
                                                <script src="{{asset('admin_assets/plugins/table-export/html2canvas.js')}}" type="text/javascript"></script>
                                                <script src="{{asset('admin_assets/plugins/table-export/sprintf.js')}}" type="text/javascript"></script>
                                                <script src="{{asset('admin_assets/plugins/table-export/jspdf.js')}}" type="text/javascript"></script>
                                                <script src="{{asset('admin_assets/plugins/table-export/base64.js')}}" type="text/javascript"></script>
                                                <script>

                                                    $(document).ready(function(){

                                                        $('body').delegate('#deleteScout', 'click', function(){
                                                            let id = $(this).data('id');
                                                            var token = $(this).data("token");
                                                            $.ajax({
                                                                url:'/admin/scouts/delete',
                                                                type:'get',
                                                                data:{'id':id, '_token': token},
                                                                success: function(data) {
                                                                    $('#scout_info').html(data);
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

                                                                }
                                                            });
                                                        });

                                                        $('body').delegate('#updateScout', 'click', function(){
                                                            let id = $(this).data('id');
                                                            var token = $(this).data("token");
                                                            $.ajax({
                                                                url:'/admin/scouts/update',
                                                                type:'get',
                                                                data:{'id':id, '_token': token},
                                                                success: function(data) {
                                                                    $('#update_box').html(data);
                                                                }
                                                            });
                                                        });

                                                    });
                                                // Create a "close" button and append it to each list item
                                                var myNodelist = document.getElementsByClassName("assopla-list");
                                                var i;
                                                for (i = 0; i < myNodelist.length; i++) {
                                                    var span = document.createElement("SPAN");
                                                    var txt = document.createTextNode("\u00D7");
                                                    span.className = "clos";
                                                    span.appendChild(txt);
                                                    myNodelist[i].appendChild(span);
                                                }

                                                // Click on a close button to hide the current list item
                                                var close = document.getElementsByClassName("clos");
                                                var i;
                                                for (i = 0; i < close.length; i++) {
                                                    close[i].onclick = function() {
                                                        var div = this.parentElement;
                                                        div.style.display = "none";
                                                    }
                                                }

                                                /* Add a "checked" symbol when clicking on a list item
                                                var list = document.querySelector('ul');
                                                list.addEventListener('click', function(ev) {
                                                if (ev.target.tagName === 'LI') {
                                                ev.target.classList.toggle('checked');
                                            }
                                        }, false);*/

                                        // Create a new list item when clicking on the "Add" button
                                        function newElement() {
                                            var li = document.createElement("li");
                                            var inputValue = document.getElementById("myInput").value;
                                            var t = document.createTextNode(inputValue);
                                            li.className = "assopla-list";
                                            li.appendChild(t);
                                            if (inputValue === '') {
                                                alert("You must write something!");
                                            } else {
                                                document.getElementById("myUL").appendChild(li);
                                            }
                                            document.getElementById("myInput").value = "";

                                            var span = document.createElement("SPAN");
                                            var txt = document.createTextNode("\u00D7");
                                            span.className = "clos";
                                            span.appendChild(txt);
                                            li.appendChild(span);

                                            for (i = 0; i < close.length; i++) {
                                                close[i].onclick = function() {
                                                    var div = this.parentElement;
                                                    div.style.display = "none";
                                                }
                                            }
                                        }
                                        </script>
                                        @endsection
