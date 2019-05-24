<?php

namespace Iplayfootball\Providers;

use Iplayfootball\Message;
use Iplayfootball\User;
use Iplayfootball\Scout;
use Iplayfootball\Team;
use Iplayfootball\Academic;
use Iplayfootball\Player;
use Iplayfootball\Http\Requests\StoreMessage;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->adminMessages();
        $this->playerMessages();
        $this->teamMessages();
        $this->academicMessages();
        $this->scoutMessages();

        view()->composer('layouts.app.blade', function ($view)
        {
           
            $this->switcher();
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function adminMessages()
    {

        view()->composer('admin-dashboard.layouts.app', function($view) {
            $messages = Message::where('message_type_receiver', '17')->where('message_status_id', '15')->limit(10)->orderBy('id', 'desc')->get();
            // $admin = User::where('user_id', Auth::user()->id)->where('role', 9)->first();
            $view->with('messages', $messages);
        });
    }

    private function playerMessages()
    {
        view()->composer('players-dashboard.layouts.app', function($view) {
            $messages = Message::where('message_type_receiver', '17')->where('message_status_id', '15')->where('message_receiver_id', Auth::user()->id)->limit(10)->orderBy('id', 'desc')->get();
            $player = Player::where('user_id', Auth::user()->id)->first();
            $view->with(['messages' => $messages, 'player'=>$player]);
        });
    }


    private function teamMessages()
    {
        view()->composer('teams-dashboard.layouts.app', function($view) {
            $messages = Message::where('message_type_receiver', '17')->where('message_status_id', '15')->where('message_receiver_id', Auth::user()->id)->limit(10)->orderBy('id', 'desc')->get();
            $team = Team::where('user_id', Auth::user()->id)->first();
            $view->with(['messages' => $messages, 'team'=>$team]);
        });
    }

    private function academicMessages()
    {
        view()->composer('academics-dashboard.layouts.app', function($view) {
            $messages = Message::where('message_type_receiver', '17')->where('message_status_id', '15')->where('message_receiver_id', Auth::user()->id)->limit(10)->orderBy('id', 'desc')->get();
            $academic = Academic::where('user_id', Auth::user()->id)->first();
            $view->with(['messages' => $messages, 'academic'=>$academic]);
        });
    }

    private function scoutMessages()
    {
        
        view()->composer('scouts-dashboard.layouts.app', function($view) {
            $messages = Message::where('message_type_receiver', '17')->where('message_status_id', '15')->where('message_receiver_id', Auth::user()->id)->limit(10)->orderBy('id', 'desc')->get();
            $scout = Scout::where('user_id', Auth::user()->id)->first();
            $view->with(['messages' => $messages, 'scout'=>$scout]);
        });
    }

    private function switcher()
    {
        
        switch(Auth::user()->role){
            case 9:
            
                $this->adminMessages();
                break;
            case 6:
                $this->teamMessages();
                break;
            case 8:
                $this->playerMessages();
                break;
            case 5:
                $this->academicMessages();
                break;
            case 7:
                $this->scoutMessages();
                break;
            default:
                break;
        }
    }
}
