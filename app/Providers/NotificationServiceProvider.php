<?php

namespace App\Providers;

use App\Message;
use App\User;
use App\Http\Requests\StoreMessage;
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
            $messages = Message::where('message_type', '17')->where('message_status_id', '15')->limit(10)->orderBy('id', 'desc')->get();
            $view->with('messages', $messages);
        });
    }

    private function playerMessages()
    {
        view()->composer('players-dashboard.layouts.app', function($view) {
            $messages = Message::where('message_type', '17')->where('message_status_id', '15')->where('message_receiver_id', Auth::user()->id)->limit(10)->orderBy('id', 'desc')->get();
            $view->with('messages', $messages);
        });
    }


    private function teamMessages()
    {
        view()->composer('teams-dashboard.layouts.app', function($view) {
            $messages = Message::where('message_type', '17')->where('message_status_id', '15')->where('message_receiver_id', Auth::user()->id)->limit(10)->orderBy('id', 'desc')->get();
            $view->with('messages', $messages);
        });
    }
}
