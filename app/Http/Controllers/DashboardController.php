<?php

namespace Iplayfootball\Http\Controllers;

use Illuminate\Http\Request;
use Iplayfootball\Http\Controllers\PlayersController as Players;
use Iplayfootball\Http\Controllers\ScoutsController as Scouts;
use Iplayfootball\Http\Controllers\NoticesController as Notices;
use Iplayfootball\Http\Controllers\AcademicsController as Academics;
use Iplayfootball\Http\Controllers\VerificationsController as Verifications;
use Iplayfootball\Http\Controllers\TeamsController as Teams;
use Iplayfootball\Http\Controllers\MessagesController as Messages;

use Iplayfootball\Notice;
use Iplayfootball\Verification;
use Iplayfootball\Scout;
use Iplayfootball\Player;
use Iplayfootball\User;

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

    public function photos()
    {
        return view('admin-dashboard.photogallery');
    }

    public function videos()
    {
        return view('admin-dashboard.videogallery');
    }
}
