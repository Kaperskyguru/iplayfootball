<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ScoutsController extends Controller
{
    public function scouts()
    {
        return Scout::all();
    }

    public function store()
    {

    }
}
