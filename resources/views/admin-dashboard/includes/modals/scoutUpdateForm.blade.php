<form class="form-horizontal" action="{{ route('scouts.update', ['id' => $data['scout']->id])}}" method="POST">        
    <fieldset>
    @method('PATCH')
    @csrf
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Scout Name:</label>
            <input type="text" name="scout_name" placeholder="Scout Name" value="{{$data['scout']->scout_name}}" class="form-control">
        </div>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Email:</label>
            <input type="email" name="scout_email" placeholder="Email" value="{{$data['scout']->scout_email}}" class="form-control">
        </div>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Mobile</label>
            <input type="text" name="scout_phone" placeholder="Mobile" value="{{$data['scout']->scout_phone}}" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Address</label><br>
            <textarea class="form-control" name="scout_address" rows="3">{{$data['scout']->scout_address}}</textarea>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Profile Package</label>
            <input type="text" placeholder="type" class="form-control">
        </div>
        <div class="form-group">
            <label>Picture upload</label>
            <input type="file" name="scout_image_id" id="scout_image_id">
        </div>
        <div id="myDIV" class="col-md-12 form-group">
            <label class="control-label">add player</label>
            <select type="email" id="myInput" placeholder="Add player" class="form-control">
                    @foreach ($data['allPlayers'] as $players)
                        <option value="{{$players->id}}">{{$players->player_email}}</option>
                    @endforeach
                </select>
                <input type="hidden" id="scoutId" value="{{$data['scout']->id}}">
                <input type="hidden" id="token" value="{{csrf_token()}}">
                <span onclick="newElement()" id="addPlayer" class="addBtn btn-add btn btn-sm">Add</span>
        </div>
        <ul id="myUL" class="assopla col-md-12 form-group" style="padding-left:20px;">
            @if(count($data['players']) > 0)
            <script>
                    var x = -1;
                    var token = document.getElementById('token').value;
                    var myNodelist = document.getElementsByClassName("assopla-list");
                    var close = document.getElementsByClassName("clos");
                </script>
                @foreach($data['players'] as $player)
                    <li class="assopla-list">{{$player->player_name}}</li>
                    <script>
                        x++;
                        var span = document.createElement("SPAN");
                        var txt = document.createTextNode("\u00D7");
                        var id = document.createAttribute("playerID");
                        id.value = {{$player->id}}
                        span.className = "clos";
                        span.setAttributeNode(id);
                        span.appendChild(txt);
                        myNodelist[x].appendChild(span);

                        // Click on a close button to hide the current list item
                        close[x].onclick = function() {
                            removePlayer(this, this.getAttribute('playerid'), token);
                        }
                    </script>
                @endforeach
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