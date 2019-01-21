<?php

namespace App\Providers;
use App\User;
use App\Player;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
            $this->userCreated();
            // $this->playerCreated();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function userCreated()
    {
        User::created(function ($user)
        {
            switch($user->role){
                case 8:
                $player = new Player;
                    $player->player_name = $user->name;
                    $player->player_phone = $user->phone;
                    $player->player_email = $user->email;
                    // $player->player_height = $user->height;
                    // $player->player_weight = 34;
                    $player->user_id = $user->id;
                    $player->player_status_id = $user->status_id;
                $player->save();
                break;

                case 5:
                $player = new Player;
                $player->user_id = $user->id;
                $player->save();
                break;

                case 6:
                $player = new Player;
                $player->user_id = $user->id;
                $player->save();
                break;
            }
            
        });
    }

    public function playerCreated()
    {
        Player::created(function ($player)
        {
            // dd($player->id);
            $user = new User;
            $user->role = 8;
            $user->name = $player->player_name;
            $user->phone = $player->player_phone;
            $user->state = 'Nigeria';//$player->player_state;
            $user->email = $player->player_email;
            $user->password = "kjnjskn";
            $user->save();
        });
    }
}
