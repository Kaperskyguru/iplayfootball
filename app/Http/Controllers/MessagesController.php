<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;
use App\Http\Requests\StoreMessage;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    public function sent()
    {
        return view('admin-dashboard.sentmail',[
            'Messages'=> Message::where('message_type', '16')->orderBy('id', 'desc')->paginate(10),
            'totalUreadMessages' => Message::where('message_type', '17')->where('message_status_id', '15')->count()
            ]);
    }

    public function inbox()
    {
        return view('admin-dashboard.message', [
            'Messages'=> Message::where('message_type', '17')->orderBy('id', 'desc')->paginate(10), 
            'totalUreadMessages' => Message::where('message_type', '17')->where('message_status_id', '15')->count()
            ]);
    }
    public function details($id)
    {
        return view('admin-dashboard.maildetails', [
            'message'=> Message::findOrFail($id),
            'totalUreadMessages' => Message::where('message_type', '17')->where('message_status_id', '15')->count()
            ]);
    }

    public function compose()
    {
        return view('admin-dashboard.compose',[
        'totalUreadMessages' => Message::where('message_type', '17')->where('message_status_id', '15')->count()
        ]);
    }


    public function store(StoreMessage $request)
    {
        $validated = $request->validated();
        $message = new Message;
        $message->message_subject =  $validated['subject'];
        $message->message_body = summernoteConverter($validated['body']);
        $message->message_type = $request->message_type;
        $message->message_sender_id = Auth::user()->id;//$validated['sender'];
        $message->message_receiver_id = $this->getSupport($validated['to']);
        $message->message_sender_type = User::getUserType(Auth::user()->role);
        $message->message_receiver_type = User::getUserType($this->getSupport($validated['to']));
        if($message->save()){
            return redirect('admin/messages/')->with('status', 'message saved!');
        }
    }

    public function playerSendMessage(StoreMessage $request)
    {
        $validated = $request->validated();
        $message = new Message;
        $message->message_subject =  $validated['subject'];
        $message->message_body = summernoteConverter($validated['body']);
        $message->message_type = $request->message_type;
        $message->message_sender_id = Auth::user()->id;//$validated['sender'];
        $message->message_receiver_id = $this->getSupport($validated['to']);
        $message->message_sender_type = User::getUserType(Auth::user()->role);
        $message->message_receiver_type = User::getUserType($this->getSupport($validated['to']));
        if($message->save()){
            return redirect('player/messages/')->with('status', 'message saved!');
        }
    }


    private function getSupport(string $to)
    {
        return $to == 'Supports'? "admin" : User::where('email', $to)->first()->id;
    }

    public function playersInboxView()
    {
        return view('players-dashboard.messages', [
            'Messages' => Message::where('message_type', '17')->where('message_status_id', '15')->where('message_receiver_id',Auth::user()->id)->orderBy('id', 'desc')->get(),
            'totalUreadMessages' => Message::where('message_type', '17')->where('message_status_id', '15')->where('message_receiver_id', Auth::user()->id)->count()
        ]);
    }

    public function playersSentView()
    {
        return view('players-dashboard.sentmail',[
            'Messages'=> Message::where('message_type', '16')->where('message_receiver_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(15),
            'totalUreadMessages' => Message::where('message_type', '17')->where('message_status_id', '15')->where('message_receiver_id', Auth::user()->id)->count()
            ]);
    }

    public function playersDetailsView($id)
    {
        return view('players-dashboard.maildetails', [
            'message'=> Message::findOrFail($id),
            'totalUreadMessages' => Message::where('message_type', '17')->where('message_receiver_id', Auth::user()->id)->where('message_status_id', '15')->count()
            ]);
    }

    public function playersComposeView()
    {
        return view('players-dashboard.compose',[
        'totalUreadMessages' => Message::where('message_type', '17')->where('message_receiver_id', Auth::user()->id)->where('message_status_id', '15')->count()
        ]);
    }

    public function messages(int $limit = 0)
    {
       return $limit == 0 ? Message::where('message_type', '17')->all() : Message::where('message_type', '17')->take($limit)->orderBy('id', 'desc')->where('message_receiver_id', Auth::user()->id)->get();
    }
}
