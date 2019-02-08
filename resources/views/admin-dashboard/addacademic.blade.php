@extends('admin-dashboard.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-users"></i>
    </div>
    <div class="header-title">
        <h1>Add Academy</h1>
        <small>Academy list</small>
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
                        <a class="btn btn-add " href="{{url('/admin/academics')}}">
                            <i class="fa fa-list"></i> Academy List </a>
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
                        <form class="col-sm-6" method="POST" action="{{ route('academics.store') }}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ @csrf_token() }}">
                            <div class="form-group">
                                <label>Academy Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Academy Name" required>
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
                            <div class="form-check">
                                <label>Status</label><br>
                                <label class="radio-inline">
                                    <input type="radio" name="status" value="1" checked="checked">Active</label>
                                    <label class="radio-inline"><input type="radio" name="status" value="3" >Inctive</label>
                                </div>
                                <div class="reset-button">
                                    <input type="text" class="hidden" id="role" value="5" name="role" required>
                                    <input type="hidden" class="hidden" id="type" value="academy" name="type" required>
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
