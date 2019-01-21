@extends('admin-dashboard.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-users"></i>
    </div>
    <div class="header-title">
        <h1>Add Player</h1>
        <small>Player list</small>
    </div>
</section>
@endsection
<!-- Main content -->
@section('maincontent')
<section class="content">
    <div class="row">
        <!-- Form controls -->
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="btn-group" id="buttonlist">
                        <a class="btn btn-add " href="{{url('/admin/players')}}">
                            <i class="fa fa-list"></i> Player List </a>
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
                        <form class="col-sm-6" method="POST" action="{{ url('/admin/players') }}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ @csrf_token() }}">
                            <div class="form-group">
                                <label>Player Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Player Name" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                            </div>
                            <div class="form-group">
                                <label>Confirm password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Enter confirm password" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Mobile" required>
                            </div>
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control" id="state" name="state" placeholder="Enter State" required>
                            </div>
                            {{-- <div class="form-group">
                                <label>Picture upload</label>
                                <input type="file" name="picture" id="picture">
                                <input type="hidden" name="old_picture">
                            </div>
                            <div class="form-group">
                                <label>Height</label>
                                <input type="number" class="form-control" id="height" name="height" placeholder="Enter Height" required>
                            </div>
                            <div class="form-group">
                                <label>Weight</label>
                                <input type="number" class="form-control" id="weight" name="weight" placeholder="Enter Weight" required>
                            </div>
                            <div class="form-group">
                                <label>Facebook Id</label>
                                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Enter Facebook details" required>
                            </div>
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input id='minMaxExample' id="dob" name="dob" type="date" class="form-control" placeholder="Enter Date...">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Select Profile package</label>
                                <select class="form-control" id="package" name="package">
                                    <option value="12">Free</option>
                                    <option value="13">Premium ₦50,000</option>
                                    <option value="14">Gold ₦20,000</option>
                                    <option value="15">Silver ₦2,000</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sex</label><br>
                                <label class="radio-inline"><input name="sex" id="sex" value="Male" checked="checked" type="radio">Male</label>
                                <label class="radio-inline"><input name="sex" id="sex" value="Female" type="radio">Female</label>
                            </div> --}}
                            <div class="form-check">
                                <label>Status</label><br>
                                <label class="radio-inline">
                                    <input type="radio" name="player_status" id="player_status" value="1" checked="checked">Active</label>
                                    <label class="radio-inline"><input type="radio" name="player_status" id="player_status" value="3" >Inctive</label>
                                </div>
                                <div class="reset-button">
                                        <input type="text" class="hidden" id="role" value="8" name="role" required>
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
