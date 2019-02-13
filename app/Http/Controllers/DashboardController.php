<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PlayersController as Players;
use App\Http\Controllers\ScoutsController as Scouts;
use App\Http\Controllers\NoticesController as Notices;
use App\Http\Controllers\AcademicsController as Academics;
use App\Http\Controllers\VerificationsController as Verifications;
use App\Http\Controllers\TeamsController as Teams;
use App\Http\Controllers\MessagesController as Messages;

use App\Notice;
use App\Verification;
use App\Scout;
use App\Player;
use App\User;

use Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
        // $this->middleware('guest:admin')->except('logout');
    }

    public function index()
    {
        $notices = new Notices;
        $verification = new Verifications;

        $data = [
            'notices' => $notices->notices(5),
            'pendingVerifications' => $verification->pending(5),
            'totalScouts' => Scout::count(),
            'totalPlayers' => Player::count(),
            'totalPendingVerifications' => Verification::where('verification_status_id', 11)->count(),
            'totalActiveAdmins',
            'recentUsers' => User::orderBy('created_at', 'desc')->limit(5)->get(),
        ];
        return view('admin-dashboard.index', $data);
    }

    public function profile()
    {
        return view('admin-dashboard.profile', ['user' => User::findOrFail(Auth::user()->id)]);
    }
}
