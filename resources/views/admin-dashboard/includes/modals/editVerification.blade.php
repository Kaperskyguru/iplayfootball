<form class="form-horizontal" action="{{ route('verification.update', ['id' => $verified->id]) }}" method="POST">
    @csrf
    @method('PATCH')
        <fieldset>
            <!-- Text input-->
            <div class="col-md-6 form-group">
                <label class="control-label">User Name</label>
            <input type="text" value="{{$verified->user->name}}" placeholder="User Name" class="form-control">
            <input type="hidden" name="verification_user_id" value="{{$verified->user->id}}">
            </div>
            <div class="col-md-6 form-group">
                <label class="control-label">Account Type</label>
            <input type="text" name="verification_type" value="{{$verified->verification_type}}" placeholder="Type" class="form-control">
            </div>
            <!-- Text input-->
            <div class="col-md-6 form-group">
                <label class="control-label">status</label>
                <select class="form-control" name="verification_status_id">
                    <option disabled selected value="">{{$verified->status->status_text}}</option>
                    <option value="2">Pending</option>
                    <option value="10">Verified</option>
                    <option value="20">Declined</option>
                </select>
            </div>

            <div class="col-md-6 form-group">
                <label class="control-label">Packages:</label>
                <select class="form-control" name="verification_package">
                    <option disabled selected value="{{$verified->verification_package}}">Default</option>
                    <option value="13">Premium ₦50,000</option>
                    <option value="14">Gold ₦20,000</option>
                    <option value="15">Silver ₦2,000</option>
                    <option value="16">Free</option>
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label class="control-label">ID Type</label>
            <input type="text" name="verification_ID_type" value="{{$verified->verification_ID_type}}" class="form-control">
            </div>

            <div class="col-md-6 form-group">
                <label class="control-label">ID Number</label>
            <input type="text" name="verification_ID_number" value="{{$verified->verification_ID_number}}" class="form-control">
            </div>
            <!-- Text input-->
            <div class="col-md-6 form-group">
                <label class="control-label">file1</label>
                <input disabled name="verification_firstfile_id" type="file" class="form-control input-file" />
            </div>
            <!-- Text input-->
            <div class="col-md-6 form-group">
                <label class="control-label">file2</label>
                <input disabled name="verification_secondfile_id" type="file" class="form-control input-file" />
            </div>
            <div class="col-md-12 form-group user-form-group">
                <div class="pull-right">
                    <button type="button" data-dismiss="modal" class="btn btn-danger btn-sm">Cancel</button>
                    <button type="submit" class="btn btn-add btn-sm">Update</button>
                </div>
            </div>
        </fieldset>
    </form>