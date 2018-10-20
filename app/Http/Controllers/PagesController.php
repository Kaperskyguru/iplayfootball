<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mail\contactMail;
use Session;
use Illuminate\Support\Facades\Mail;
class PagesController extends Controller
{

    public function sendContact(Request $res)
    {
        $this->validate($res,
        [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'min:10',
            'phone' => 'required',
            'player_name' => 'required',
        ]);
        Mail::to($res->email)->send(new contactMail($res));
        Session::flash('success', 'Your message was sent successfully');
        return redirect('contact');
    }
}
