<form class="form-horizontal" action="{{ route('academics.update', ['id' => $data['academic']->id])}}" method="POST">        
    <fieldset>
    @method('PATCH')
    @csrf
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Academic Name:</label>
            <input type="text" name="academic_name" placeholder="Academic Name" value="{{$data['academic']->academic_name}}" class="form-control">
        </div>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Email:</label>
            <input type="email" name="academic_email" placeholder="Email" value="{{$data['academic']->academic_email}}" class="form-control">
        </div>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Mobile</label>
            <input type="text" name="academic_phone" placeholder="Mobile" value="{{$data['academic']->academic_phone}}" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Address</label><br>
            <textarea class="form-control" name="academic_address" rows="3">{{$data['academic']->academic_address}}</textarea>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Profile Package</label>
            <input type="text" name="academic_package_id" placeholder="type" value="{{$data['academic']->academic_package_id}}" class="form-control">
        </div>
        <div id="myDIV" class="col-md-12 form-group">
            <label class="control-label">add player</label>
            <input type="email" id="myInput" placeholder="Add player" class="form-control">
            <span onclick="newElement()" id="addPlayer" data-academicId="{{$data['academic']->id}}" class="addBtn btn-add btn btn-sm">Add</span>
        </div>
        <ul id="myUL" class="assopla col-md-12 form-group" style="padding-left:20px;">
            @if(count($data['players']) > 0)
                @foreach($data['players'] as $player)
                    <li class="assopla-list">{{$player->player_name}}</li>
                @endforeach
            @else 
                <p> No player yet </p>
            @endif
        </ul>
        <div class="col-md-12 form-group user-form-group">
            <div class="pull-right">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-add btn-sm">Save</button>
            </div>
        </div>
    </fieldset>
</form>