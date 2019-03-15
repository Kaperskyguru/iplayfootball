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
            strtolower($request->position);
            if (isset($request->position)) {
                if ($request->position == 'Male' || $request->position == 'Female') {
                    $players = Player::where('player_gender', $request->position)->get();
                    return view('includes.player_full_details', ['players' => $players])->render();

                } elseif (strstr($request->position, 'Under')) {
                    echo 'asa';
                    $players = Player::where('player_gender', $request->position)->get();
                    return view('includes.player_full_details', ['players' => $players])->render();
                } else {
                    $players = Player::where('player_position', $request->position)->get();
                    return view('includes.player_full_details', ['players' => $players])->render();
                }
            } else {
                $players = Player::where('player_name', 'LIKE', '%' . $request->search . "%")
                // ->orWhere('player_name', 'LIKE', '%' . $request->search . "%")
                // ->orWhere('player_username', 'LIKE', '%' . $request->search . "%")
                    ->get();
                return view('includes.player_full_details', ['players' => $players])->render();
            }

        }
    }

    public function s()
    {
        if ($request->ajax()) {
            echo ($request->position);
            if (isset($request->position)) {

                $players = Player::where('player_position', $request->position)->get();

                return view('includes.player_full_details', ['players' => $players])->render();

            } elseif (isset($request->position) && ($request->position == 'Male' || $request->position == 'Female')) {
                $players = Player::where('player_gender', $request->position)->get();

                return view('includes.player_full_details', ['players' => $players])->render();
            } else {

                $players = Player::where('player_firstname', 'LIKE', '%' . $request->search . "%")

                    ->orWhere('player_lastname', 'LIKE', '%' . $request->search . "%")

                    ->orWhere('player_username', 'LIKE', '%' . $request->search . "%")

                    ->get();

                return view('includes.player_full_details', ['players' => $players])->render();
            }
        }
    }

}
