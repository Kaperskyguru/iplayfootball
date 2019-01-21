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
                        <form class="col-sm-6" method="POST" action="{{ url('admin/scouts') }}" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="label-control" for="firstname">First Name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter First Name" required>
                            </div>
                            <div class="form-group">
                                <label class="label-control" for="lastname">Last Name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter last Name" required>
                            </div>
                            <div class="form-group">
                                <label class="label-control" for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label class="label-control" for="number">Mobile</label>
                                <input type="number" name="number" id="number" class="form-control" placeholder="Enter Mobile" required>
                            </div>
                            <div class="form-group">
                                <label class="label-control" for="sex">Sex</label><br>
                                <label class="radio-inline" for="sex"><input name="sex" id="sex" value="Male" checked="checked" type="radio">Male</label>
                                <label class="radio-inline" for="sex"><input name="sex" id="sex" value="Female" type="radio">Female</label>
                            </div>
                            <div class="form-group">
                                <label class="label-control" for="dob">Date of Birth</label>
                                <input id='minMaxExample' type="date" name="dob" id="dob" class="form-control" placeholder="Enter Date...">
                            </div>
                            <div class="form-group">
                                <label class="label-control" for="address">Address</label>
                                <textarea class="form-control" name="address" id="address" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="label-control" for="picture">Picture upload</label>
                                <input type="file" name="picture" id="picture">
                                <input type="hidden" name="old_picture">
                            </div>
                            <div class="form-group">
                                <label class="label-control" for="licence">Qualificaions/Licence</label>
                                <input type="text" name="licence" id="licence" class="form-control" placeholder="Enter qualifications" required>
                            </div>
                            <div class="form-group">
                                <label class="label-control" for="team">Clubs/Teams</label>
                                <input type="text" name="team" id="team" class="form-control" placeholder="Enter Team" required>
                            </div>

                            <div class="form-group">
                                <label class="label-control" for="notes">Other Notes</label>
                                <textarea class="form-control" name="notes" id="notes" rows="3" placeholder="type a message here..." required></textarea>
                            </div>
                            <div class="form-check">
                                <label class="label-control" class="label-control" for="dob">Status</label><br>
                                <label class="radio-inline" for="scout_status">
                                    <input type="radio" name="scout_status" id="scout_status" value="1" checked="checked">Active</label>
                                    <label class="radio-inline" for="scout_status"><input type="radio" id="scout_status" name="scout_status" value="3" >Inactive</label>
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
        <!-- /.content -->
        @endsection
