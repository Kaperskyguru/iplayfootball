<?php

namespace App\Http\Controllers;

use App\Academic;
use App\Http\Controllers\MessagesController as Messages;
use App\Http\Controllers\UsersController as users;
use App\Http\Requests\StoreUser;
use App\Player;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AcademicsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin-dashboard.academics')->with('Academics', Academic::all());
    }

    public function academic(int $id)
    {
        return Academic::findOrFail($id);
    }

    public function delete(Request $request)
    {
        if (Academic::find($request->id)->delete()) {
            return response()->json([
                'success' => 'Record has been deleted successfully!',
            ]);
        }

    }

    public function store(StoreUser $request)
    {
        if (users::store($request)) {
            return redirect('admin/academics/')->with('status', 'Academy saved!');
        }
    }

    public function view_delete_confirmation(Request $request)
    {
        if ($request->ajax()) {
            $academic = Academic::findOrFail($request->id);?>
            <label class="control-label">Delete <?php echo $academic->academic_name ?> ?</label>
                <div class="pull-right">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                    <button type="submit" id="del_YES" data-id="<?php echo $academic->user_id ?> " data-token="<?php echo csrf_token() ?>" class="btn btn-add btn-sm">YES</button>
                </div>
        <?php
}
    }

    public function update(int $id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => 'bail|string|min:3|max:50',
            "email" => 'bail|email|max:255',
            "address" => 'string',
            "phone" => 'bail|numeric|min:11',
            "academic_image_id" => 'nullable|image',
        ]);
        if ($validator->fails()) {
            return redirect('admin/academics/')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();
        (!array_key_exists('academic_image_id', $data)) ?: $data['academic_image_id'] = $data['academic_image_id']->store('public/images');
        unset($data['_token']);
        unset($data['_method']);
        if (Academic::whereId($id)->update($data)) {
            return redirect('admin/academics/')->with('status', 'Academic Updated!');
        }
    }

    public function view_update_box(Request $request)
    {
        if ($request->ajax()) {
            $data = [
                'academic' => Academic::findOrFail($request->id),
                'players' => Player::where('player_associate_academic', $request->id)->get(),
                'allPlayers' => Player::whereNull('player_associate_academic')->get(),
            ];
            // where('player_associate_academic', '!=', $request->id)->or
            return view('admin-dashboard.includes.modals.academicUpdateForm', compact('data'))->render();
        }
    }

    public function academic_view()
    {
        $message = new Messages;
        return view('academics-dashboard.index', [
            'user' => User::findOrFail(Auth::user()->id),
            'messages' => $message->messages(4),
            'academy' => Academic::where('user_id', Auth::user()->id)->first(),
        ]);
    }

    public function academicUpdateForm(Request $request)
    {
        if ($request->ajax()) {
            $academic = Academic::where('user_id', $request->id)->first();
            return view('academics-dashboard.includes.modals.academicUpdateForm', ['academic' => $academic])->render();
        }
    }

    public function academicUpdate(int $id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => 'bail|string|min:3|max:50',
            "email" => 'bail|email|max:255',
            "address" => 'nullable|string',
            "state" => 'string',
            "phone" => 'bail|nullable|numeric|min:11',
            "academic_image_id" => 'nullable|image',
        ]);
        if ($validator->fails()) {
            return redirect('/academic')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();
        (!array_key_exists('academic_image_id', $data)) ?: $data['academic_image_id'] = $data['academic_image_id']->store('public/images');
        unset($data['_token']);
        unset($data['_method']);
        if (Academic::whereId($id)->update($data)) {
            return redirect('/academic')->with('status', 'academic Updated!');
        }
    }

    public function setAssociatePlayer(Request $request)
    {
        if ($request->ajax()) {
            $player = Player::find($request->player);
            $name = $player->player_name;
            $player->player_associate_academic = $request->id;
            if ($player->save()) {
                return $name;
            } 
        }
    }
}
