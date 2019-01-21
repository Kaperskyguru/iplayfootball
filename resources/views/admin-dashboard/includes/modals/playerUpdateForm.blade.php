<form class="form-horizontal" method="POST" action="{{ route('players.update', ['id' => $data['player']->id])}}" enctype="multipart/form-data">
    <fieldset>
    @method('PATCH')
    @csrf
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Player Name:</label>
            <input type="text" name="player_name" placeholder="Player Name" value="{{$data['player']->player_name}}" class="form-control">
        </div>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Email:</label>
            <input type="email" name="player_email" placeholder="Email" value="{{$data['player']->player_email}}" class="form-control">
        </div>
        <!-- Text input-->
        <div class="col-md-6 form-group">
            <label class="control-label">Mobile:</label>
            <input type="text" name="player_phone" placeholder="Mobile" value="{{$data['player']->player_phone}}" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Address:</label><br>
            <textarea name="player_address" rows="3" class="form-control">{{$data['player']->player_address}}</textarea>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Player Package:</label>
            <select class="form-control" name="player_package_id">
                <option value="{{$data['player']->player_package_id}}"></option>
                <option value="13">Premium ₦50,000</option>
                <option value="14">Gold ₦20,000</option>
                <option value="15">Silver ₦2,000</option>
                <option value="16">Free</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Player Position:</label>
            <input type="text" name="player_position" placeholder="Player Position" value="{{$data['player']->player_position}}" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Games Played:</label>
            <input type="number" name="player_games_played" value="{{$data['player']->player_games_played}}" placeholder="Games Played" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Minutes Played:</label>
            <input type="number" name="player_minutes_played" value="{{$data['player']->player_minutes_played}}" placeholder="Minutes Played" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Super-Substitute:</label>
            <select class="form-control" name="player_super_substitute">
                <option value="{{$data['player']->player_super_substitute}}"></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Associate Team:</label>
            <select class="form-control"name="player_associate_team" >
                <option  value="{{$data['player']->player_associate_team}}"></option>
                @foreach($data['teams'] as $team)
                    <option value="{{$team->id}}">{{$team->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Associate Academy:</label>
            <select class="form-control" name="player_associate_academic">
                <option value="{{$data['player']->player_associate_academic}}"></option>
                @foreach($data['academys'] as $academy)
                    <option value="{{$academy->id}}">{{$academy->academic_name}}</option>
                @endforeach

            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">Associate Scout:</label>
            <select class="form-control" name="player_associate_scout">
                <option value="{{$data['player']->player_associate_scout}}"></option>
                @foreach($data['scouts'] as $scout)
                    <option value="{{$scout->id}}">{{$scout->scout_name}}</option>
                @endforeach

            </select>
        </div>
        <div class="col-md-12 form-group">
            <label class="control-label">Biography:</label><br>
            <textarea name="player_biography" rows="3" class="form-control">{{$data['player']->player_biography}}</textarea>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">TEAM SPIRIT:</label>
            <select class="form-control" name="player_team_spirit">
            <option value="{{$data['player']->player_team_spirit}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">PASSING ACCURACY:</label>
            <select class="form-control" name="player_passing_accuracy">
            <option value="{{$data['player']->player_passing_accuracy}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">GROUND DUEL WINNING:</label>
            <select class="form-control" name="player_ground_duel_winning">
                <option value="{{$data['player']->player_ground_duel_winning}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">ARIEL DUEL WINNING:</label>
            <select class="form-control" name="player_ariel_duel_winning">
                <option value="{{$data['player']->player_ariel_duel_winning}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">RECOVERY:</label>
            <select class="form-control" name="player_recovery">
                <option value="{{$data['player']->player_recovery}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">TACKLES WINNING:</label>
            <select class="form-control" name="player_tackles_winning">
                <option value="{{$data['player']->player_tackles_winning}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">CLEARANCE:</label>
            <select class="form-control" name="player_clearance">
                <option value="{{$data['player']->player_clearance}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">BLOCKING:</label>
            <select class="form-control" name="player_blocking">
                <option value="{{$data['player']->player_blocking}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">INTERCEPTIONS:</label>
            <select class="form-control" name="player_interceptions">
                <option value="{{$data['player']->player_interceptions}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">PENALTIES CONCEDED:</label>
            <select class="form-control" name="player_penalties_conceded">
                <option value="{{$data['player']->player_penalties_conceded}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">FOUL WINNINGS:</label>
            <select class="form-control" name="player_foul_winnings">
                <option value="{{$data['player']->player_foul_winnings}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">GOAL SCORING:</label>
            <select class="form-control" name="player_goal_scoring">
                <option value="{{$data['player']->player_goal_scoring}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">PENALTY GOALS:</label>
            <select class="form-control" name="player_penalty_goals">
                <option value="{{$data['player']->player_penalty_goals}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">SHOOTING ACCURACY:</label>
            <select class="form-control" name="player_shooting_accuracy">
                <option value="{{$data['player']->player_shooting_accuracy}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">SUCCESSFUL CROSSES:</label>
            <select class="form-control" name="player_successful_crosses">
                <option value="{{$data['player']->player_successful_crosses}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">ASSIST ABILITY:</label>
            <select class="form-control" name="player_assist_ability">
                <option value="{{$data['player']->player_assist_ability}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">CHANCES CREATION:</label>
            <select class="form-control" name="player_chances_creation">
                <option value="{{$data['player']->player_chances_creation}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">PENALTIES WINNING:</label>
            <select class="form-control" name="player_penalties_winnings">
                <option value="{{$data['player']->player_penalties_winnings}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label class="control-label">OFFSIDES:</label>
            <select class="form-control" name="player_offsides">
                <option value="{{$data['player']->player_offsides}}"></option>
                <option value="Okay">Okay</option>
                <option value="Impressive">Impressive</option>
                <option value="Outstanding">Outstanding</option>
            </select>
        </div>
        <div class="col-md-12 form-group user-form-group">
            <div class="pull-right">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-add btn-sm">Save</button>
            </div>
        </div>
    </fieldset>
</form>