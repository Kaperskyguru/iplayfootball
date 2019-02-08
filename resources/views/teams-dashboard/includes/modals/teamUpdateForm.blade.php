<form class="form-horizontal" method="POST" action="{{ route('teamUpdate', ['id' => $team->id])}}" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <fieldset>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Team Name:</label>
        <input type="text" name="name" placeholder="team Name" value="{{$team->name}}" class="form-control">
        </div>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Email:</label>
            <input type="email" name="email" placeholder="Email" value="{{$team->email}}" class="form-control">
        </div>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Mobile:</label>
            <input type="text" name="phone" placeholder="Mobile" value="{{$team->phone}}" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Address:</label><br>
            <textarea name="address" rows="3" class="form-control">{{$team->address}}</textarea>
        </div>
        {{-- <div class="col-md-6 form-group">
            <label class="control-label">team Position:</label>
            <select class="form-control">
                <option value="{{$team->position}}">{{$team->position}}</option>
                <option value="Winger">Winger</option>
                <option value="Striker">Striker</option>
                <option value="Mid-Fielder">Mid-Fielder</option>
                <option value="Defender">Defender</option>
                <option value="Goal Keeper">Goal Keepeer</option>
            </select>
        </div> --}}
        {{-- <div class="col-md-6 form-group">
            <label class="control-label">Weight</label>
            <input type="number" name="weight" value="{{$team->weight}}" placeholder="In Kg" class="form-control">
        </div> --}}
        {{-- <div class="col-md-6 form-group">
            <label class="control-label">Height</label>
            <input type="number" name="height" value="{{$team->height}}" placeholder="In Ft" class="form-control">
        </div> --}}
        <div class="col-md-6 form-group">
            <label class="control-label">Country</label>
            <input type="text" name="state" value="{{$team->state}}" placeholder="Country" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Logo</label>
            <input type="file" name="image_id" class="form-control">
        </div>
        {{-- <div class="col-md-6 form-group">
            <label class="control-label">Date of Birth</label>
            <input type="date" name="dob" value="{{strftime('%Y-%m-%d', strtotime($team->dob))}}" placeholder="DOB" class="form-control">
        </div> --}}
        {{-- <div class="col-md-6 form-group">
                <label class="control-label">About you</label>
                <textarea name="biography" placeholder="About you" class="form-control">{{$team->biography}} </textarea>
            </div> --}}
        {{-- <div class="col-md-6 form-group">
            <label class="control-label">team Package:</label>
            <select class="form-control" name="package_id">
                <option value="{{$team->package_id}}">{{$team->package->status_text}}</option>
                <option value="13">Premium ₦50,000</option>
                <option value="14">Gold ₦20,000</option>
                <option value="15">Silver ₦2,000</option>
                <option value="16">Free</option>
            </select>
        </div> --}}
        <div class="col-md-12 form-group user-form-group">
            <div class="pull-right">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-add btn-sm">Save</button>
            </div>
        </div>
    </fieldset>
</form>