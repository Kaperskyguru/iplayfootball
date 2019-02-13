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
                        @if ($errors->any())
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
                    </div>
                    <div class="panel-body">
                        <form class="col-sm-6" action="{{ url('admin/verification') }}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Account Type</label>
                                <select class="form-control" data-token="<?php echo csrf_token() ?>" name="accountType" id="type">
                                    <option selected disabled><small>Select a user</small></option>
                                    <option value="player" data-value="8">Players</option>
                                    <option value="scout" data-value="7">Scouts</option>
                                    <option value="team" data-value="6">Teams</option>
                                    <option value="academic" data-value="5">Academics</option>
                                </select>
                            </div>
                            <div class="form-group">
                                    <label>Select Player / Scout</label>
                                    <select class="form-control" name="userID" id="name">
                                        <option selected disabled><small>Select a user</small></option>
                                    </select>
                                </div>
                            <div class="form-group">
                                <label class="control-label">status</label>
                                <select class="form-control" name="verification_status">
                                    <option disabled selected> Select a package</option>
                                    <option value="2">Pending</option>
                                    <option value="10">Verified</option>
                                    <option value="20">Declined</option>
                                </select>
                            </div>
                
                            <div class="form-group">
                                <label class="control-label">Packages:</label>
                                <select class="form-control" name="package">
                                    <option value="16">Free</option>
                                    <option value="13">Premium ₦50,000</option>
                                    <option value="14">Gold ₦20,000</option>
                                    <option value="15">Silver ₦2,000</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">ID Type</label>
                            <input type="text" name="IDType" placeholder="Enter ID type" class="form-control">
                            </div>
                
                            <div class="form-group">
                                <label class="control-label">ID Number</label>
                            <input type="text" name="IDNumber" placeholder="Enter ID number" class="form-control">
                            </div>

                            <div class="form-group">
                                <P>Upload as many verification documents as possible, either National I.D or voters card or international passport.<br> Accepted format PDF, JPEG, JPG, PNG.</P>
                                <label>File 1</label>
                                <input type="file" name="firstFile" id="file1">
                            </div>
                            <div class="form-group">
                                <label>File 2</label>
                                <input type="file" name="secondFile" id="file2">
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
            var selected = $(this).find('option:selected');
            var type_id = selected.data('value'); 
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
