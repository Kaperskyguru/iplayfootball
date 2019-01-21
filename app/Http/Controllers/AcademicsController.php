<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academic;
use App\Player;
use App\User;
use Validator;
use App\Http\Requests\StoreAcademy;

class AcademicsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('admin-dashboard.academics')->with('Academics',  Academic::all());
    }
    
    public function academic(int $id)
    {
        return Academic::findOrFail($id);
    }

    public function delete(Request $request)
    {
        if(Academic::find($request->id)->delete()) {
            return response()->json([
                'success' => 'Record has been deleted successfully!'
            ]);
        }

    }

    public function store(StoreAcademy $request)
    {
        $validated = $request->validated();
        
        $academic = new academic;
        $academic->academic_name =  strval($validated['firstname']). ' '. strval($validated['lastname']);
        $academic->academic_phone = $validated['mobile'];
        $academic->academic_email = $validated['email'];
        $academic->academic_facebook_id = $validated['facebook'];
        $academic->academic_address = $validated['address'];
        $academic->academic_status_id = $validated['academy_status'];
        $academic->academic_package_id = $validated['package'];
        $academic->academic_image_id = $validated['picture']->store('images');
        if($academic->save()){
            return redirect('admin/academics/')->with('status', 'academic saved!');
        }
    }

    public function view_delete_confirmation(Request $request)
    {
        if($request->ajax())
        {
            $academic = Academic::findOrFail($request->id);?>
            <label class="control-label">Delete <?php echo $academic->academic_name ?> ?</label>
                <div class="pull-right">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                    <button type="submit" id="del_YES" data-id="<?php echo $academic->id ?> " data-token="<?php echo csrf_token() ?>" class="btn btn-add btn-sm">YES</button>
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
            return redirect('admin/academics/')
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        if(Academic::whereId($id)->update($data)) {
            return redirect('admin/academics/')->with('status', 'Academic Updated!');
        }
    }


    public function view_update_box(Request $request)
    {
        if($request->ajax())
        {
            $data = [
                'academic' => Academic::findOrFail($request->id),
                'players' => Player::where('player_associate_academic', $request->id)->get()
            ];
            
            return view('admin-dashboard.includes.modals.academicUpdateForm', compact('data'))->render();
        }
    }
}
