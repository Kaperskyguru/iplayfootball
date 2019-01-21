<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;
use Validator;
use App\Http\Requests\StoreTeam;

class TeamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        return view('admin-dashboard.teams')->with('Teams', Team::all());
    }

    public function team(int $id)
    {
        return Team::findOrFail($id);
    }

    public function delete(Request $request)
    {
        if(Team::find($request->id)->delete()) {
            return response()->json([
                'success' => 'Record has been deleted successfully!'
            ]);
        }

    }


    public function store(StoreTeam $request)
    {
        $validated = $request->validated();
        
        $team = new Team;
        $team->name =  strval($validated['firstname']). ' '. strval($validated['lastname']);
        $team->phone = $validated['number'];
        $team->email = $validated['email'];
        $team->address = $validated['address'];
        $team->type = $validated['package'];
        $team->status_id = $validated['team_status'];
        $team->image_id = $validated['picture']->store('images');
        if($team->save()){
            return redirect('admin/teams/')->with('status', 'team saved!');
        }
        
    }

    public function view_delete_confirmation(Request $request)
    {
        if($request->ajax())
        {
            $team = Team::findOrFail($request->id);?>
            <label class="control-label">Delete <?php echo $team->name ?> ?</label>
                <div class="pull-right">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                    <button type="submit" id="del_YES" data-id="<?php echo $team->id ?> " data-token="<?php echo csrf_token() ?>" class="btn btn-add btn-sm">YES</button>
                </div>
        <?php
        }
    }

    public function update(int $id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => 'bail|string|min:3|max:50',
            "enail" => 'bail|email|max:255',
            "address" => 'string',
            "phone" => 'bail|numeric|min:11',
        ]);
        if ($validator->fails()) {
            return redirect('admin/teams/')
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        if(Team::whereId($id)->update($data)) {
            return redirect('admin/teams/')->with('status', 'Team Updated!');
        }
    }


    public function view_update_box(Request $request)
    {
        if($request->ajax())
        {
            $data = [
                'team' => Team::findOrFail($request->id),
                'players' => Player::where('player_associate_team', $request->id)->get()
            ];
            
            return view('admin-dashboard.includes.modals.teamUpdateForm', compact('data'))->render();
        }
    }
}
