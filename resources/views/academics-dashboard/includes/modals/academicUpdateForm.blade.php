<form class="form-horizontal" method="POST" action="{{ route('academicUpdate', ['id' => $academic->id]) }}" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <fieldset>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Academic Name:</label>
        <input type="text" name="academic_name" placeholder="Academic Name" value="{{$academic->academic_name}}" class="form-control">
        </div>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Email:</label>
            <input type="email" name="academic_email" placeholder="Email" value="{{$academic->academic_email}}" class="form-control">
        </div>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Mobile:</label>
            <input type="text" name="academic_phone" placeholder="Mobile" value="{{$academic->academic_phone}}" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Address:</label><br>
            <textarea name="academic_address" rows="3" class="form-control">{{$academic->academic_address}}</textarea>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Country</label>
            <input type="text" name="academic_state" value="{{$academic->academic_state}}" placeholder="Country" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Logo</label>
            <input type="file" name="academic_image_id" class="form-control">
        </div>
        <div class="col-md-12 form-group user-form-group">
            <div class="pull-right">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-add btn-sm">Save</button>
            </div>
        </div>
    </fieldset>
</form>