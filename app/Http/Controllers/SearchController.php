<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {

    }

//display player profile onclick
    public function view_profile($id)
    { // the id in the url

        $players = Player::find($id);
        return view('view_profile')->with('players', $players);
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            if (isset($request->position)) {
                $players = Player::where('player_position', $request->position)->get();
                return view('includes.player_full_details', ['players' => $players])->render();
            } else {
                $players = Player::where('player_firstname', 'LIKE', '%' . $request->search . "%")
                    ->orWhere('player_lastname', 'LIKE', '%' . $request->search . "%")
                    ->orWhere('player_username', 'LIKE', '%' . $request->search . "%")
                    ->get();
                return view('includes.player_full_details', ['players' => $players])->render();
                // return $this->displayPlayerDetails($players);
            }

        }
    }

}
