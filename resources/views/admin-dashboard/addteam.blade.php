@extends('admin-dashboard.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="fa fa-users"></i>
        </div>
        <div class="header-title">
            <h1>Add Team</h1>
            <small>Team list</small>
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
                            <a class="btn btn-add " href="{{url('/admin/teams')}}">
                                <i class="fa fa-list"></i> Team List </a>
                        </div>
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
                    <div class="panel-body">
                        <form class="col-sm-6" method="POST" action="{{ url('admin/teams') }}" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter First Name" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter last Name" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="number" name="number" id="number" class="form-control" placeholder="Enter Mobile" required>
                            </div>
                            <div class="form-group">
                                <label>Picture upload</label>
                                <input type="file" name="picture" id="picture">
                                <input type="hidden" name="old_picture">
                            </div>
                            <div class="form-group">
                                <label>Height</label>
                                <input type="number" name="height" id="height" class="form-control" placeholder="Enter Height" required>
                            </div>
                            <div class="form-group">
                                <label>Weight</label>
                                <input type="number" name="weight" id="weight" class="form-control" placeholder="Enter Weight" required>
                            </div>
                            <div class="form-group">
                                <label>Facebook Id</label>
                                <input type="text" name="facebook" id="facebook" class="form-control" placeholder="Enter Facebook details" required>
                            </div>
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input name="dob" id="dob" type="date" class="form-control" placeholder="Enter Date...">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Select Profile package</label>
                                <select class="form-control" name="package" id="package">
                                    <option value="12">Silver ₦2,000</option>
                                    <option value="13">Gold ₦20,000</option>
                                    <option value="14">Premium ₦50,000</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sex</label><br>
                                <label class="radio-inline"><input name="sex" value="Male" checked="checked" type="radio">Male</label>
                                <label class="radio-inline"><input name="sex" value="Female" type="radio">Female</label>
                            </div>
                            <div class="form-check">
                                <label>Status</label><br>
                                <label class="radio-inline">
                         <input type="radio" name="team_status" value="1" checked="checked">Active</label>
                                <label class="radio-inline"><input type="radio" name="team_status" value="3" >Inctive</label>
                            </div>
                            <div class="reset-button">
                                <input type="hidden" name="_token" value="{{ @csrf_token() }}">
                                <button type="reset" class="btn btn-warning">Reset</button>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
