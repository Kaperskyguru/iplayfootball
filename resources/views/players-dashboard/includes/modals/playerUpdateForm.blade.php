<form class="form-horizontal" method="POST" action="{{ route('playerUpdate', ['id' => $player->id])}}" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <fieldset>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Player Name:</label>
        <input type="text" name="player_name" placeholder="Player Name" value="{{$player->player_name}}" class="form-control">
        </div>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Email:</label>
            <input type="email" name="player_email" placeholder="Email" value="{{$player->player_email}}" class="form-control">
        </div>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Mobile:</label>
            <input type="text" name="player_phone" placeholder="Mobile" value="{{$player->player_phone}}" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Address:</label><br>
            <textarea name="player_address" rows="3" class="form-control">{{$player->player_address}}</textarea>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Player Position:</label>
            <select class="form-control">
                <option value="{{$player->player_position}}">{{$player->player_position}}</option>
                <option value="Winger">Winger</option>
                <option value="Striker">Striker</option>
                <option value="Mid-Fielder">Mid-Fielder</option>
                <option value="Defender">Defender</option>
                <option value="Goal Keeper">Goal Keepeer</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Weight</label>
            <input type="number" name="player_weight" value="{{$player->player_weight}}" placeholder="In Kg" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Height</label>
            <input type="number" name="player_height" value="{{$player->player_height}}" placeholder="In Ft" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Country</label>
            <input type="text" name="player_state" value="{{$player->player_state}}" placeholder="Country" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Date of Birth</label>
            <input type="date" name="player_dob" value="{{strftime('%Y-%m-%d', strtotime($player->player_dob))}}" placeholder="DOB" class="form-control">
        </div>
        <div class="col-md-6 form-group">
                <label class="control-label">About you</label>
                <textarea name="player_biography" placeholder="About you" class="form-control">{{$player->player_biography}} </textarea>
            </div>
        {{-- <div class="col-md-6 form-group">
            <label class="control-label">Player Package:</label>
            <select class="form-control" name="player_package_id">
                <option value="{{$player->player_package_id}}">{{$player->package->status_text}}</option>
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