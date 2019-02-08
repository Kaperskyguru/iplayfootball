{{-- @dd($scout) --}}
<form class="form-horizontal" method="POST" action="{{ route('scoutUpdate', ['id' => $scout->id])}}" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <fieldset>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Scout Name:</label>
        <input type="text" name="scout_name" placeholder="scout Name" value="{{$scout->scout_name}}" class="form-control">
        </div>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Email:</label>
            <input type="email" name="scout_email" placeholder="Email" value="{{$scout->scout_email}}" class="form-control">
        </div>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Mobile:</label>
            <input type="text" name="scout_phone" placeholder="Mobile" value="{{$scout->scout_phone}}" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Address:</label><br>
            <textarea name="scout_address" rows="3" class="form-control">{{$scout->scout_address}}</textarea>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Country</label>
            <input type="text" name="scout_state" value="{{$scout->scout_state}}" placeholder="Country" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Logo</label>
            <input type="file" name="scout_image_id" class="form-control">
        </div>
        <div class="col-md-12 form-group user-form-group">
            <div class="pull-right">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-add btn-sm">Save</button>
            </div>
        </div>
    </fieldset>
</form>