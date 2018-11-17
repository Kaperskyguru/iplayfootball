<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{
    public function index()
    {
        return View('profiles')->with('players', Player::all());
    }
}
