<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\User;
use Faker\Factory as faker;

class PlayersController extends Controller
{
    private $faker;

    public function __construct() {

    }

    public function index()
    {
        return View('profiles')->with('players', Player::all());
    }

    public function players()
    {
        return Player::all();
    }

    public function player(int $idea)
    {
        return Player::findOrFail($id);
    }

    public function store()
    {

    }
}
