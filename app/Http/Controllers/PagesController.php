<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

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

    public function error404()
    {
        return view('404page');
    }
}
