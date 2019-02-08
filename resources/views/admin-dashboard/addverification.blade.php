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
                                <select class="form-control" data-token="<?php echo csrf_token() ?>" name="type" id="type">
                                    <option selected disabled><small>Select a user</small></option>
                                    <option value="8">Players</option>
                                    <option value="7">Scouts</option>
                                    <option value="6">Teams</option>
                                    <option value="5">Academics</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Select Player / Scout</label>
                                <select class="form-control" name="name" id="name">
                                    <option selected disabled><small>Select a user</small></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <P>Upload as many verification documents as possible, either National I.D or voters card or international passport.<br> Accepted format PDF, JPEG, JPG, PNG.</P>
                                <label>File 1</label>
                                <input type="file" name="file1" id="file1">
                                <input type="hidden" name="Docs, Docx">
                            </div>
                            <div class="form-group">
                                <label>File 2</label>
                                <input type="file" ame="file2" id="file2">
                                <input type="hidden" name="old_picture">
                            </div>

                            <div class="reset-button">
                            <input type="hidden" name="_token" value="{{ @csrf_token() }}">
                                <button type="reset" class="btn btn-warning">Reset</button>
                                <button type="submit" class="btn btn-add">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
    @section('scripts')
    <script>
        $('#type').change(function () {
            var type_id = $(this).val();
            var token = $(this).data("token");
            $.ajax({
                url: '/admin/usersByRole',
                method: "get",
                data: {'_token': token, 'type_id': type_id},
                success: function (data) {
                    $('#name').empty();
                    $('#name').html(data);
                },
                onerror: function (err) {
                    alert(err);
                }
            });
        });
    </script>
    @endsection
