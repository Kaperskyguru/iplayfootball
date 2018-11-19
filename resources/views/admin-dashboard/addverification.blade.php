@extends('admin-dashboard.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="header-icon">
        <i class="fa fa-sticky-note-o"></i>
    </div>
    <div class="header-title">
        <h1>New Verifications</h1>
        <small>section for new account verification</small>
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
                        <a class="btn btn-add " href="{{url('/admin/verified')}}">
                            <i class="fa fa-list"></i> Verified</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="col-sm-6">
                            <div class="form-group">
                                <label>Account Type</label>
                                <select class="form-control">
                                    <option></option>
                                    <option>Player</option>
                                    <option>Scout</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Select Player / Scout</label>
                                <select class="form-control">
                                    <option></option>
                                    <option>Player</option>
                                    <option>Scout</option>
                                    <option>Player</option>
                                    <option>Scout</option>
                                    <option>Player</option>
                                    <option>Scout</option>
                                    <option>Player</option>
                                    <option>Scout</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <P>Upload as many verification documents as possible, either National I.D or voters card or international passport.<br> Accepted format PDF, JPEG, JPG, PNG.</P>
                                <label>File 1</label>
                                <input type="file" name="Docs, Docx">
                                <input type="hidden" name="Docs, Docx">
                            </div>
                            <div class="form-group">
                                <label>File 2</label>
                                <input type="file" name="picture">
                                <input type="hidden" name="old_picture">
                            </div>

                            <div class="reset-button">
                                <a href="#" class="btn btn-warning">Reset</a>
                                <a href="#" class="btn btn-add">Save</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
