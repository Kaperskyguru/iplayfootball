<?php

namespace App\Http\Controllers;

use App\Verification;
use App\Http\Requests\StoreVerification;
use Illuminate\Support\Facades\Auth;

class VerificationsController extends Controller
{
    public function verifications()
    {
        return Verification::all();
    }

    public function pending(int $limit = 0)
    {
        return $pending = $limit != 0 ? Verification::where('verification_state_id', 2)
            ->take($limit)
            ->get() :
        Verification::where('verification_state_id', 2)
            ->get();
    }

    public function pendingView(int $limit = 0)
    {
        $pending = $limit != 0 ? Verification::where('verification_state_id', 2)
            ->take($limit)
            ->get() :
        Verification::where('verification_state_id', 2)
            ->get();
        return view('admin-dashboard.pendingverification')->with('Pendings', $pending);

    }

    public function verifiedView(int $limit = 0)
    {
        $verified = $limit != 0 ? Verification::where('verification_state_id', 3)
            ->take($limit)
            ->get() :
        Verification::where('verification_state_id', 3)
            ->get();
        return view('admin-dashboard.verifiedverification')->with('Verifieds', $verified);
    }

    public function declinedView(int $limit = 0)
    {
        $declined = $limit != 0 ? Verification::where('verification_state_id', 4)
            ->take($limit)
            ->get() :
        Verification::where('verification_state_id', 4)
            ->get();
        return view('admin-dashboard.declinedverification')->with('Declineds', $declined);
    }

    public function store(StoreVerification $request)
    {
        $validated = $request->validated();
        
        $verification = new Verification;
        $verification->verification_type =  $validated['accountType'];
        $verification->verification_user_id = $validated['userID'];
        $verification->verification_firstfile_id = $validated['firstFile']->store('images');
        $verification->verification_ID_number = $validated['IDNumber'];
        $verification->verification_secondfile_id = $validated['secondFile']->store('images');
        $verification->verification_ID_type = $validated['IDType'];
        $verification->verification_status_id = $validated['verification_status'];
        if($verification->save()){
            return redirect('admin/verifications/')->with('status', 'verification saved!');
        }
    }

    public function playerVerification(StoreVerification $request)
    {
        $validated = $request->validated();
        
        $verification = new Verification;
        $verification->verification_type =  $validated['accountType'];
        $verification->verification_user_id = $validated['userID'];
        $verification->verification_firstfile_id = $validated['firstFile']->store('images');
        $verification->verification_ID_number = $validated['IDNumber'];
        $verification->verification_secondfile_id = $validated['secondFile']->store('images');
        $verification->verification_ID_type = $validated['IDType'];
        $verification->verification_package = $validated['package'];
        $verification->verification_status_id = 2;
        if($verification->save()){
            return redirect('player/')->with('status', 'verification saved!');
        }
    }

    public function teamVerification(StoreVerification $request)
    {
        $validated = $request->validated();
        
        $verification = new Verification;
        $verification->verification_type =  $validated['accountType'];
        $verification->verification_user_id = $validated['userID'];
        $verification->verification_firstfile_id = $validated['firstFile']->store('images');
        $verification->verification_ID_number = $validated['IDNumber'];
        $verification->verification_secondfile_id = $validated['secondFile']->store('images');
        $verification->verification_ID_type = $validated['IDType'];
        $verification->verification_package = $validated['package'];
        $verification->verification_status_id = 2;
        if($verification->save()){
            return redirect('team/')->with('status', 'verification saved!');
        }
    }

    public function academicVerification(StoreVerification $request)
    {
        $validated = $request->validated();
        
        $verification = new Verification;
        $verification->verification_type =  $validated['accountType'];
        $verification->verification_user_id = $validated['userID'];
        $verification->verification_firstfile_id = $validated['firstFile']->store('images');
        $verification->verification_ID_number = $validated['IDNumber'];
        $verification->verification_secondfile_id = $validated['secondFile']->store('images');
        $verification->verification_ID_type = $validated['IDType'];
        $verification->verification_package = $validated['package'];
        $verification->verification_status_id = 2;
        if($verification->save()){
            return redirect('academic/')->with('status', 'verification saved!');
        }
    }
}
