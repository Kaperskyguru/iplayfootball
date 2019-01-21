<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Team;
use App\Academic;
use App\Scout;
use App\User;
use App\Http\Controllers\MessagesController as Messages;
use Faker\Factory as faker;
use App\Http\Requests\StorePlayer;
use Validator;
use Hash;
use Illuminate\Support\Facades\Auth;


class PlayersController extends Controller
{
    private $faker;

    public function __construct() {
        $this->middleware('auth'); 
        $this->middleware('player');
        // $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return View('profiles')->with('players', Player::all());
    }

    public function players()
    {
        return view('admin-dashboard.Players')->with('Players', Player::all());
    }

    public function player(int $idea)
    {
        return Player::findOrFail($id);
    }

    public function store(StorePlayer $request)
    {
        $validated = $request->validated();
        
        $user = new User;
        $user->name =  $validated['name'];
        $user->phone = $validated['phone'];
        $user->email = $validated['email'];
        $user->state = $validated['state'];
        $user->role = $validated['role'];
        $user->status_id = $validated['player_status'];
        $user->password = Hash::make($validated['password']);
        // $user->user_facebook_id = $validated['facebook'];
        // $user->user_dob = $validated['dob'];
        // $user->user_address = $validated['address'];
        // $user->user_height = $validated['height'];
        // $user->user_weight = $validated['weight'];
        // $user->user_gender = $validated['sex'];
        // $user->user_status_id = $validated['user_status'];
        // $user->user_package_id = $validated['package'];
        // $user->user_image_id = $validated['picture']->store('images');
        if($user->save()){
            return redirect('admin/players/')->with('status', 'player saved!');
        }

    }

    public function delete(Request $request)
    {
        if(Player::find($request->id)->delete()) {
            return response()->json([
                'success' => 'Record has been deleted successfully!'
            ]);
        }

    }

    public function update(int $id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            "player_name" => 'bail|string|min:3|max:50',
            "player_email" => 'bail|email|max:255',
            // "player_address" => 'string',
            // "player_biography" => 'string',
            "player_phone" => 'bail|numeric|min:11',
            // "player_position" => 'string',
            // "player_games_played" => 'integer',
            // "player_minutes_played" => 'integer'
        ]);
        if ($validator->fails()) {
            return redirect('admin/players/')
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        if(Player::whereId($id)->update($data)) {
            return redirect('admin/players/')->with('status', 'Player Updated!');
        }
    }

    public function view_delete_confirmation(Request $request)
    {
        if($request->ajax())
        {
            $player = player::findOrFail($request->id);?>
            <label class="control-label">Delete <?php echo $player->player_name ?> ?</label>
                <div class="pull-right">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                    <button type="submit" id="del_YES" data-id="<?php echo $player->id ?> " data-token="<?php echo csrf_token() ?>" class="btn btn-add btn-sm">YES</button>
                </div>
        <?php
        }
    }

    public function view_update_box(Request $request)
    {
        if($request->ajax())
        {
            // $player = player::findOrFail($request->id);
            $data = [
                'player' => Player::findOrFail($request->id),
                'teams' => Team::all(),
                'academys' => Academic::all(),
                'scouts' => Scout::all(),
            ];
            return view('admin-dashboard.includes.modals.playerUpdateForm', compact('data'))->render();
        }
    }

    public function player_view()
    {
        $message = new Messages;
        return View('players-dashboard.index', [
            'user' => User::findOrFail(Auth::user()->id),
            'messages' => $message->messages(4),
            'player' => $player = Player::where('user_id', Auth::user()->id)->first()
        ]);
    }

    public function playerUpdateForm(Request $request)
    {
        if($request->ajax())
        {
            // dd($request->id);
            // $player = player::findOrFail($request->id);
            
            $player = Player::where('user_id', $request->id)->first();
            
            return view('players-dashboard.includes.modals.playerUpdateForm', ['player' => $player])->render();
        }
    } 

    public function playerUpdate(int $id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            "player_name" => 'bail|string|min:3|max:50',
            "player_email" => 'bail|email|max:255',
            "player_address" => 'nullable|string',
            // "player_biography" => 'string',
            "player_phone" => 'bail|nullable|numeric|min:11',
            "player_position" => 'nullable|string',
            "player_height" => 'nullable|integer',
            "player_weight" => 'nullable|integer',
        ]);
        if ($validator->fails()) {
            return redirect('player/')
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        if(Player::whereId($id)->update($data)) {
            return redirect('player/')->with('status', 'Player Updated!');
        }
    }
}
