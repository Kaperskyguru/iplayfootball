@extends('admin-dashboard.layouts.app')
@section('content')
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="header-icon">
                    <i class="fa fa-suitcase"></i>
                </div>
                <div class="header-title">
                    <h1>New Recurring invoices</h1>
                    <small>New Recurring invoices Details</small>
                </div>
            </section>
            @endsection
            @section('maincontent')
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel lobidisable panel-bd">
                            <div class="panel-heading">
                                <div class="btn-group" id="buttonexport">
                                    <a href="#">
                                        <h4>New Recurring invoices</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form class="col-sm-6">
                                    <div class="form-group">
                                        <label>Reference No.</label>
                                        <input type="text" class="form-control" placeholder="Ref No." required>
                                    </div>
                                    <div class="form-group">
                                        <label>Recurring Every</label>
                                        <select class="form-control">
                                            <option>Day</option>
                                            <option>Week</option>
                                            <option>Month</option>
                                            <option>Year</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Department:</label>
                                        <select class="form-control">
                                            <option>Technology</option>
                                            <option>Grapics design</option>
                                            <option>Sports</option>
                                            <option>Food</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <div class=" input-group date form_date redate">
                                            <input id='minMaxExample' type="text" name="year" class="form-control years">
                                            <span class="input-group-addon">
                                                <a href="#">
                                                    <i class="fa fa-calendar"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <div class=" input-group date form_date redate">
                                            <input id='minMaxExample2' type="text" name="year" class="form-control years">
                                            <span class="input-group-addon">
                                                <a href="#">
                                                    <i class="fa fa-calendar"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Client</label>
                                        <select class="form-control">
                                            <option>Ricky Martin</option>
                                            <option>Ed sheeren</option>
                                            <option>Alan walker</option>
                                            <option>Enriquie</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Notes</label>
                                        <br>
                                        <textarea class="form-control" name="text" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Save As Draft" name="save_as_draft" class="btn btn-warning">
                                        <input type="submit" value="Update" name="update" class="btn btn-add">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endsection
            @section('maincontent')
