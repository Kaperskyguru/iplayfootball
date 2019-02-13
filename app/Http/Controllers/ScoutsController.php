<?php

namespace App\Http\Controllers;
use App\Scout;
use App\Player;
use Validator;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\MessagesController as Messages;
use App\Http\Controllers\UsersController as users;
use App\Http\Requests\StoreUser;
use Illuminate\Support\Facades\Auth;

class ScoutsController extends Controller
{
    public function __condtruct()
    {
        $this->middleware('auth');  
    }
    
    public function scouts()
    {
        return view('admin-dashboard.scouts')->with('Scouts', Scout::all());
    }

    public function scout(int $id)
    {
        return Scout::findOrFail($id);
    }

    public function delete(Request $request)
    {
        if(Scout::find($request->id)->delete()) {
            return response()->json([
                'success' => 'Record has been deleted successfully!'
            ]);
        }

    }

    public function store(StoreUser $request)
    {
        if(users::store($request)){
            return redirect('admin/scouts/')->with('status', 'Scout saved!');
        }
    }

    public function view_delete_confirmation(Request $request)
    {
        if($request->ajax())
        {
            $scout = Scout::findOrFail($request->id);?>
            <label class="control-label">Delete <?php echo $scout->scout_name ?> ?</label>
                <div class="pull-right">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                    <button type="submit" id="del_YES" data-id="<?php echo $scout->user_id ?> " data-token="<?php echo csrf_token() ?>" class="btn btn-add btn-sm">YES</button>
                </div>
        <?php
        }
    }

    public function update(int $id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            "scout_name" => 'bail|string|min:3|max:50',
            "scout_email" => 'bail|email|max:255',
            "scout_address" => 'string',
            "scout_phone" => 'bail|numeric|min:11',
        ]);
        if ($validator->fails()) {
            return redirect('admin/scouts/')
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        if(Scout::whereId($id)->update($data)) {
            return redirect('admin/scouts/')->with('status', 'Scout Updated!');
        }
    }

    public function view_update_box(Request $request)
    {
        if($request->ajax())
        {
            // $scout = Scout::findOrFail($request->id);
            $data = [
                'scout' => Scout::findOrFail($request->id),
                'players' => Player::where('player_associate_scout', $request->id)->get(),
                'allPlayers' => Player::whereNull('player_associate_scout')->get(),
            ];
            return view('admin-dashboard.includes.modals.scoutUpdateForm', compact('data'))->render();
        }
    }

    public function scout_view()
    {
        $message = new Messages;
        return view('scouts-dashboard.index', [
            'user' => User::findOrFail(Auth::user()->id),
            'messages' => $message->messages(4),
            'scout' => Scout::where('user_id', Auth::user()->id)->first()
        ]);
    }

    public function scoutUpdateForm(Request $request)
    {
        if($request->ajax())
        {           
            $scout = Scout::where('user_id', $request->id)->first();
            return view('scouts-dashboard.includes.modals.scoutUpdateForm', ['scout' => $scout])->render();
        }
    } 

    public function scoutUpdate(int $id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => 'bail|string|min:3|max:50',
            "email" => 'bail|email|max:255',
            "address" => 'nullable|string',
            "state" => 'string',
            "phone" => 'bail|nullable|numeric|min:11',
            "image_id" => 'nullable|image'
        ]);
        if ($validator->fails()) {
            return redirect('/scout')
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->all();
        (!array_key_exists('scout_image_id', $data)) ?: $data['scout_image_id'] = $data['scout_image_id']->store('public/images');
        unset($data['_token']);
        unset($data['_method']);
        if(Scout::whereId($id)->update($data)) {
            return redirect('/scout')->with('status', 'Scout Updated!');
        }
    }

    public function setAssociatePlayer(Request $request)
    {
        if ($request->ajax()) {
            $player = Player::find($request->player);
            $name = $player->player_name;
            $player->player_associate_scout = $request->id;
            if ($player->save()) {
                return $name;
            } 
        }
    }
}
