<?php

namespace App\Http\Controllers;

use App\Academic;
use App\Http\Controllers\MessagesController as Messages;
use App\Http\Controllers\UsersController as users;
use App\Http\Requests\StoreUser;
use App\Player;
use App\Scout;
use App\Team;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;

class PlayersController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $verified = DB::table('players')
            ->leftJoin('verifications', 'players.user_id', '=', 'verifications.verification_user_id')
            ->where('verifications.verification_status_id', 10)
            ->select('players.*')
            ->get();
        $unverified = DB::table('players')
            ->leftJoin('verifications', 'players.user_id', '=', 'verifications.verification_user_id')
            ->where('verifications.verification_status_id', 11)
            ->select('players.*')
            ->get();

        $data = [
            'players' => Player::all(),
            'verified' => $verified,
            'unverified' => $unverified,
        ];
        return View('profiles', $data); //->with('players', $data);

    }

    public function profile($id)
    {
        $player = DB::table('players')
            ->leftJoin('verifications', 'players.user_id', '=', 'verifications.verification_user_id')
            ->where('players.id', $id)
            ->select('players.*')
            ->first();

        return View('profile', ['player' => $player]);

    }

    public function prayer_info(Request $request)
    {
        if ($request->ajax()) {
            $player = player::findOrFail($request->id);
            return view('includes.player_details', ['player' => $player])->render();
        }

    }

    public function players()
    {
        return view('admin-dashboard.Players')->with('Players', Player::all());
    }

    public function player(int $idea)
    {
        return Player::findOrFail($id);
    }

    public function store(StoreUser $request)
    {
        if (users::store($request)) {
            return redirect('admin/players/')->with('status', 'player saved!');
        }
    }

    public function delete(Request $request)
    {
        if (Player::find($request->id)->delete()) {
            return response()->json([
                'success' => 'Record has been deleted successfully!',
            ]);
        }

    }

    public function update(int $id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            "player_name" => 'bail|string|min:3|max:50',
            "player_email" => 'bail|email|max:255',
            "player_image_id" => 'nullable|image',
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

        (!array_key_exists('player_image_id', $data)) ?: $data['player_image_id'] = $data['player_image_id']->store('public/images');
        unset($data['_token']);
        unset($data['_method']);
        if (Player::whereId($id)->update($data)) {
            return redirect('admin/players/')->with('status', 'Player Updated!');
        }
    }

    public function photos()
    {
        return view('players-dashboard.photogallery');
    }

    public function videos()
    {
        return view('players-dashboard.videogallery');
    }

    public function view_delete_confirmation(Request $request)
    {
        if ($request->ajax()) {
            $player = player::findOrFail($request->id);?>
            <label class="control-label">Delete <?php echo $player->player_name ?> ?</label>
                <div class="pull-right">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                    <button type="submit" id="del_YES" data-id="<?php echo $player->user_id ?> " data-token="<?php echo csrf_token() ?>" class="btn btn-add btn-sm">YES</button>
                </div>
        <?php
}
    }

    public function view_update_box(Request $request)
    {
        if ($request->ajax()) {
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
            'player' => $player = Player::where('user_id', Auth::user()->id)->first(),
        ]);
    }

    public function playerUpdateForm(Request $request)
    {
        if ($request->ajax()) {
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
            "player_image_id" => 'nullable|image',
        ]);
        if ($validator->fails()) {
            return redirect('player/')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();
        (!array_key_exists('player_image_id', $data)) ?: $data['player_image_id'] = $data['player_image_id']->store('public/images');
        unset($data['_token']);
        unset($data['_method']);
        if (Player::whereId($id)->update($data)) {
            return redirect('player/')->with('status', 'Player Updated!');
        }
    }

    public function teamPlayersListView()
    {
        return view('teams-dashboard.Players')
            ->with('players', Player::where('player_associate_team', Auth::user()->id)->get());
    }

    public function academicPlayersListView()
    {
        return view('academics-dashboard.Players')
            ->with('players', Player::where('player_associate_academic', Auth::user()->id)->get());
    }

    public function scoutPlayersListView()
    {
        return view('scouts-dashboard.Players')
            ->with('players', Player::where('player_associate_scout', Auth::user()->id)->get());
    }
}
