@extends('admin-dashboard.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-users"></i>
    </div>
    <div class="header-title">
        <h1>Add Scout</h1>
        <small>Scout list</small>
    </div>
</section>
@endsection
@section('maincontent')
<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- Form controls -->
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="btn-group" id="buttonlist">
                        <a class="btn btn-add " href="{{url('/admin/scouts')}}">
                            <i class="fa fa-list"></i> Scout List </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="col-sm-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="Enter First Name" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter last Name" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="number" class="form-control" placeholder="Enter Mobile" required>
                            </div>
                            <div class="form-group">
                                <label>Sex</label><br>
                                <label class="radio-inline"><input name="sex" value="1" checked="checked" type="radio">Male</label>
                                <label class="radio-inline"><input name="sex" value="0" type="radio">Female</label>
                            </div>
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input id='minMaxExample' type="date" class="form-control" placeholder="Enter Date...">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Picture upload</label>
                                <input type="file" name="picture">
                                <input type="hidden" name="old_picture">
                            </div>
                            <div class="form-group">
                                <label>Qualificaions/Licence</label>
                                <input type="text" class="form-control" placeholder="Enter qualifications" required>
                            </div>
                            <div class="form-group">
                                <label>Clubs/Teams</label>
                                <input type="text" class="form-control" placeholder="Enter Team" required>
                            </div>

                            <div class="form-group">
                                <label>Other Notes</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="type a message here..." required></textarea>
                            </div>
                            <div class="form-check">
                                <label>Status</label><br>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="1" checked="checked">Active</label>
                                    <label class="radio-inline"><input type="radio" name="status" value="0" >Inactive</label>
                                </div>
                                <div class="reset-button">
                                    <a href="#" class="btn btn-warning">Reset</a>
                                    <a href="#" class="btn btn-success">Save</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
        @endsection
