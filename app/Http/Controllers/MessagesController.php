<?php

namespace Iplayfootball\Http\Controllers;

use Iplayfootball\Http\Requests\StoreMessage;
use Iplayfootball\Message;
use Iplayfootball\User;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    public function sent()
    {
        return view('admin-dashboard.sentmail', [
            'Messages' => Message::where('message_type_sender', '16')
                ->where('message_sender_id', 'admin')
                ->orderBy('id', 'desc')
                ->paginate(10),
            'totalUreadMessages' => Message::where('message_type_receiver', '17')
                ->where('message_status_id', '15')
                ->where('message_receiver_id', 'admin')
                ->count(),
        ]);
    }

    public function inbox()
    {
        return view('admin-dashboard.message', [
            'Messages' => Message::where('message_receiver_id', 'admin')->orderBy('id', 'desc')
                ->paginate(10),
            'totalUreadMessages' => Message::where('message_type_receiver', '17')
                ->where('message_status_id', '15')
                ->where('message_receiver_id', 'admin')
                ->count(),
        ]);
    }
    public function details($id)
    {
        if (Message::find($id)->update(['message_status_id' => 14])) {
            return view('admin-dashboard.maildetails', [
                'message' => Message::findOrFail($id),
                'totalUreadMessages' => Message::where('message_type_receiver', '17')
                    ->where('message_status_id', '15')
                    ->where('message_receiver_id', 'admin')
                    ->count(),
            ]);
        }
    }

    public function compose()
    {
        return view('admin-dashboard.compose', [
            'totalUreadMessages' => Message::where('message_type_receiver', '17')
                ->where('message_status_id', '15')
                ->where('message_receiver_id', 'admin')
                ->count(),
        ]);
    }

    public function inboxAll()
    {
        return [
            'Messages' => Message::where('message_type_receiver', '17')
                ->where('message_status_id', '15')->where('message_receiver_id', Auth::user()->id)
                ->orderBy('id', 'desc')
                ->get(),
            'totalUreadMessages' => $this->totalUnreadMessages(),
        ];
    }

    public function sentAll()
    {
        return [
            'Messages' => Message::where('message_type_sender', '16')
                ->where('message_sender_id', Auth::user()->id)
                ->orderBy('id', 'desc')
                ->paginate(15),
            'totalUreadMessages' => $this->totalUnreadMessages(),
        ];
    }

    public function totalUnreadMessages()
    {
        return Message::where('message_type_receiver', '17')
            ->where('message_receiver_id', Auth::user()->id)
            ->where('message_status_id', '15')
            ->count();

    }

    public function messageDetails($id)
    {
        if (Message::find($id)->update(['message_status_id' => 14])) {
            return [
                'message' => Message::findOrFail($id),
                'totalUreadMessages' => $this->totalUnreadMessages(),
            ];
        }
    }

    public function storeAll(StoreMessage $request)
    {
        $validated = $request->validated();
        $message = new Message;
        $message->message_subject = $validated['subject'];
        $message->message_body = summernoteConverter($validated['body']);
        $message->message_type_sender = $request->message_type;
        $message->message_type_receiver = 17;
        $message->message_sender_id = Auth::user()->id; //$validated['sender'];
        $message->message_receiver_id = $this->getSupport($validated['to']);
        $message->message_sender_role = User::getUserType(Auth::user()->role);
        $message->message_receiver_role = User::getUserType($this->getSupport($validated['to']));
        if ($message->save()) {
            return true;
        }
        return false;
    }

    public function store(StoreMessage $request)
    {
        if ($this->storeAll($request)) {
            return redirect('admin/messages/')->with('status', 'message saved!');
        }
    }

    public function playerSendMessage(StoreMessage $request)
    {
        if ($this->storeAll($request)) {
            return redirect('player/messages/')->with('status', 'message saved!');
        }
    }

    private function getSupport(string $to)
    {
        return $to == 'Supports' ? "admin" : User::where('email', $to)->first()->id;
    }

    public function playersInboxView()
    {
        return view('players-dashboard.messages', $this->inboxAll());
    }

    public function playersSentView()
    {
        return view('players-dashboard.sentmail', $this->sentAll());
    }

    public function playersDetailsView($id)
    {

        return view('players-dashboard.maildetails', $this->messageDetails($id));

    }

    public function playersComposeView()
    {
        return view('players-dashboard.compose', ['totalUreadMessages' => $this->totalUnreadMessages()]);
    }

    public function messages(int $limit = 0)
    {
        return $limit == 0 ? Message::where('message_type_receiver', '17')->all() : Message::where('message_type_receiver', '17')
            ->take($limit)->orderBy('id', 'desc')
            ->where('message_receiver_id', Auth::user()->id)
            ->where('message_status_id', 15)
            ->get();
    }

    public function teamsInboxView()
    {
        return view('teams-dashboard.messages', $this->inboxAll());
    }

    public function teamsSentView()
    {
        return view('teams-dashboard.sentmail', $this->sentAll());
    }

    public function teamSendMessage(StoreMessage $request)
    {
        if ($this->storeAll($request)) {
            return redirect('team/messages/')->with('status', 'message sent!');
        }
    }

    public function teamComposeView()
    {
        return view('teams-dashboard.compose', ['totalUreadMessages' => $this->totalUnreadMessages()]);
    }

    public function teamDetailsView($id)
    {

        return view('teams-dashboard.maildetails', $this->messageDetails($id));

    }

    public function academicInboxView()
    {
        return view('academics-dashboard.messages', $this->inboxAll());
    }

    public function academicSentView()
    {
        return view('academics-dashboard.sentmail', $this->sentAll());
    }

    public function academicSendMessage(StoreMessage $request)
    {
        if ($this->storeAll($request)) {
            return redirect('academic/messages/')->with('status', 'message sent!');
        }
    }

    public function academicComposeView()
    {
        return view('academics-dashboard.compose', ['totalUreadMessages' => $this->totalUnreadMessages()]);
    }

    public function academicDetailsView($id)
    {

        return view('academics-dashboard.maildetails', $this->messageDetails($id));
    }

    public function scoutComposeView()
    {
        return view('scouts-dashboard.compose', ['totalUreadMessages' => $this->totalUnreadMessages()]);
    }

    public function scoutDetailsView($id)
    {

        return view('scouts-dashboard.maildetails', $this->messageDetails($id));
    }

    public function scoutInboxView()
    {
        return view('scouts-dashboard.messages', $this->inboxAll());
    }

    public function scoutSentView()
    {
        return view('scouts-dashboard.sentmail', $this->sentAll());
    }

    public function scoutSendMessage(StoreMessage $request)
    {
        if ($this->storeAll($request)) {
            return redirect('scout/messages/')->with('status', 'message sent!');
        }
    }
}
