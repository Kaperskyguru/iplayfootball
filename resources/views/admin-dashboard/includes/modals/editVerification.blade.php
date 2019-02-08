<form class="form-horizontal" action="" method="POST">
    @csrf
    @method('PATCH')
        <fieldset>
            <!-- Text input-->
            <div class="col-md-6 form-group">
                <label class="control-label">User Name</label>
            <input type="text" name="name" value="{{$verified->user->name}}" placeholder="User Name" class="form-control">
            </div>
            <div class="col-md-6 form-group">
                <label class="control-label">Account Type</label>
            <input type="text" name="accountType" value="{{$verified->verification_type}}" placeholder="Type" class="form-control">
            </div>
            <!-- Text input-->
            <div class="col-md-6 form-group">
                <label class="control-label">status</label>
                <select class="form-control" name="status">
                    <option disabled selected value="">{{$verified->status->status_text}}</option>
                    <option value="2">Pending</option>
                    <option value="10">Verified</option>
                    <option value="20">Declined</option>
                </select>
            </div>
            <!-- Text input-->
            <div class="col-md-6 form-group">
                <label class="control-label">file1</label>
                <input disabled name="file1" type="file" class="form-control input-file" />
            </div>
            <!-- Text input-->
            <div class="col-md-6 form-group">
                <label class="control-label">file2</label>
                <input disabled name="file2" type="file" class="form-control input-file" />
            </div>
            <div class="col-md-12 form-group user-form-group">
                <div class="pull-right">
                    <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                    <button type="submit" class="btn btn-add btn-sm">Update</button>
                </div>
            </div>
        </fieldset>
    </form>