<?php

namespace Iplayfootball\Http\Controllers;

use Iplayfootball\Http\Requests\StoreVerification;
use Iplayfootball\Verification;
use Illuminate\Http\Request;
use Validator;
use \Illuminate\Support\Facades\Storage;

class VerificationsController extends Controller
{
    public function verifications()
    {
        return Verification::all();
    }

    public function pending(int $limit = 0)
    {
        return $pending = $limit != 0 ? Verification::where('verification_status_id', 11)
            ->take($limit)
            ->get() :
        Verification::where('verification_status_id', 11)
            ->get();
    }

    public function pendingView(int $limit = 0)
    {
        $pending = $limit != 0 ? Verification::where('verification_status_id', 11)
            ->take($limit)
            ->get() :
        Verification::where('verification_status_id', 11)
            ->get();
        return view('admin-dashboard.pendingverification')->with('Pendings', $pending);

    }

    public function verifiedView(int $limit = 0)
    {
        $verified = $limit != 0 ? Verification::where('verification_status_id', 10)
            ->take($limit)
            ->get() :
        Verification::where('verification_status_id', 10)
            ->get();
        return view('admin-dashboard.verifiedverification')->with('Verifieds', $verified);
    }

    public function declinedView(int $limit = 0)
    {
        $declined = $limit != 0 ? Verification::where('verification_status_id', 20)
            ->take($limit)
            ->get() :
        Verification::where('verification_status_id', 20)
            ->get();
        return view('admin-dashboard.declinedverification')->with('Declineds', $declined);
    }

    public function storeAll(StoreVerification $request)
    {
        $validated = $request->validated();

        $verification = new Verification;
        $verification->verification_type = $validated['accountType'];
        $verification->verification_user_id = $validated['userID'];
        $verification->verification_firstfile_id = $validated['firstFile']->store('public/images');
        $verification->verification_ID_number = $validated['IDNumber'];
        $verification->verification_secondfile_id = $validated['secondFile']->store('public/images');
        $verification->verification_ID_type = $validated['IDType'];
        $verification->verification_package = $validated['package'];
        $verification->verification_status_id = $validated['verification_status'];
        if ($verification->save()) {
            return true;
        }
        return false;
    }

    public function store(StoreVerification $request)
    {
        if ($this->storeAll($request)) {
            return redirect('admin/verified/')->with('status', 'verification saved!');
        }
    }

    public function update(int $id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            "verification_user_id" => 'integer',
            "verification_type" => 'string',
            "verification_status_id" => 'string',
            "verification_secondfile_id" => 'image',
            "verification_firstfile_id" => 'image',
            "verification_ID_type" => 'alpha_num',
            "verification_ID_number" => 'alpha_num',
            "verification_package" => 'string',
        ]);
        if ($validator->fails()) {
            return redirect('admin/verified/')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->all();
        (!array_key_exists('verification_firstfile_id', $data)) ?: $data['verification_firstfile_id'] = $data['verification_firstfile_id']->store('public/images');
        (!array_key_exists('verification_secondfile_id', $data)) ?: $data['verification_secondfile_id'] = $data['verification_secondfile_id']->store('public/images');
        unset($data['_token']);
        unset($data['_method']);
        if (Verification::whereId($id)->update($data)) {
            return redirect('admin/verified/')->with('status', 'Verification Updated!');
        }
    }

    public function playerVerification(StoreVerification $request)
    {
        if ($this->storeAll($request)) {
            return redirect('player/')->with('status', 'verification saved!');
        }
    }

    public function teamVerification(StoreVerification $request)
    {
        if ($this->storeAll($request)) {
            return redirect('team/')->with('status', 'verification saved!');
        }
    }

    public function academicVerification(StoreVerification $request)
    {
        if ($this->storeAll($request)) {
            return redirect('academic/')->with('status', 'verification saved!');
        }
    }

    public function scoutVerification(StoreVerification $request)
    {
        if ($this->storeAll($request)) {
            return redirect('scout/')->with('status', 'verification saved!');
        }
    }

    public function viewVerification(Request $request)
    {
        if ($request->ajax()) {
            return view('admin-dashboard.includes.modals.viewVerification', ['verified' => Verification::find($request->id)])->render();
        }
    }

    public function editVerification(Request $request)
    {
        if ($request->ajax()) {
            return view('admin-dashboard.includes.modals.editVerification', ['verified' => Verification::find($request->id)])->render();
        }
    }

    public function view_delete_confirmation(Request $request)
    {
        if ($request->ajax()) {
            $verification = Verification::findOrFail($request->id);?>
            <label class="control-label">Do you want to delete a verification by <?php echo $verification->user->name ?> ?</label>
                <div class="pull-right">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                    <button type="submit" id="del_YES" data-id="<?php echo $verification->id ?> " data-token="<?php echo csrf_token() ?>" class="btn btn-add btn-sm">YES</button>
                </div>
        <?php
}
    }

    public function destroy(Request $request)
    {
        if (Verification::findOrFail($request->id)->delete()) {
            return response()->json([
                'success' => 'Record has been deleted successfully!',
            ]);
        }

    }

    public function download($name)
    {
        if (Storage::disK('local')->exists('public/images/' . $name)) {
            return Storage::download('public/images/' . $name);
        } else {
            return back();
        }
    }
}
