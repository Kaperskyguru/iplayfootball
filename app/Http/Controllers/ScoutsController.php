<?php

namespace App\Http\Controllers;
use App\Scout;
use App\Player;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\StoreScout;


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

    public function store(StoreScout $request)
    {
       
        
        $validated = $request->validated();
        
        $scout = new Scout;
        $scout->scout_name =  strval($validated['firstname']). ' '. strval($validated['lastname']);
        $scout->scout_phone = $validated['number'];
        $scout->scout_email = $validated['email'];
        $scout->scout_licence = $validated['licence'];
        $scout->scout_team_id = $validated['team'];
        $scout->scout_dob = $validated['dob'];
        $scout->scout_address = $validated['address'];
        $scout->scout_notes = $validated['notes'];
        $scout->scout_gender = $validated['sex'];
        $scout->scout_status_id = $validated['scout_status'];
        $scout->scout_image_id = $validated['picture']->store('images');
        if($scout->save()){
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
                    <button type="submit" id="del_YES" data-id="<?php echo $scout->id ?> " data-token="<?php echo csrf_token() ?>" class="btn btn-add btn-sm">YES</button>
                </div>
        <?php
        }
    }

    public function update(int $id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            "scout_name" => 'bail|string|min:3|max:50',
            "scout_enail" => 'bail|email|max:255',
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
                'players' => Player::where('player_associate_scout', $request->id)->get()
            ];
            return view('admin-dashboard.includes.modals.scoutUpdateForm', compact('data'))->render();
        }
    }
}
