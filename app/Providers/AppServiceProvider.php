<?php

namespace Iplayfootball\Providers;

use Illuminate\Support\ServiceProvider;
use Iplayfootball\Academic;
use Iplayfootball\Player;
use Iplayfootball\Scout;
use Iplayfootball\Team;
use Iplayfootball\User;

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
        $this->userDeleted();
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

    public function userDeleted()
    {
        User::deleted(function ($user) {
            switch ($user->role) {
                case 8:
                    $this->deletePlayer($user);
                    break;

                case 5:
                    $this->deleteAcademy($user);
                    break;

                case 6:
                    $this->deleteTeam($user);
                    break;

                case 7:
                    $this->deleteScout($user);
                    break;

                default:
                    break;
            }
        });
    }

    public function deleteTeam($user)
    {
        if (Team::where('user_id', $user->id)->delete()) {
            return true;
        }
        return false;
    }

    public function deletePlayer($user)
    {
        if (Player::where('user_id', $user->id)->delete()) {
            return true;
        }
        return false;
    }

    public function deleteScout($user)
    {
        if (Scout::where('user_id', $user->id)->delete()) {
            return true;
        }
        return false;
    }

    public function deleteAcademy($user)
    {
        if (Academic::where('user_id', $user->id)->delete()) {
            return true;
        }
        return false;
    }

    public function userCreated()
    {
        User::created(function ($user) {
            switch ($user->role) {
                case 8:
                    $this->createPlayer($user);
                    break;

                case 5:
                    $this->createAcademic($user);
                    break;

                case 6:
                    $this->createTeam($user);
                    break;

                case 7:
                    $this->createScout($user);
                    break;

                default:
                    break;
            }

        });
    }

    private function createPlayer($user)
    {
        $player = new Player;
        $player->player_name = $user->name;
        $player->player_phone = $user->phone;
        $player->player_email = $user->email;
        $player->user_id = $user->id;
        $player->player_state = $user->state;
        $player->player_status_id = $user->status_id;
        $player->save();

    }

    private function createScout($user)
    {
        $scout = new Scout;
        $scout->scout_name = $user->name;
        $scout->scout_phone = $user->phone;
        $scout->scout_email = $user->email;
        $scout->user_id = $user->id;
        $scout->scout_state = $user->state;
        $scout->scout_status_id = $user->status_id;
        $scout->save();

    }

    private function createTeam($user)
    {
        $team = new Team;
        $team->name = $user->name;
        $team->phone = $user->phone;
        $team->email = $user->email;
        $team->state = $user->state;
        $team->user_id = $user->id;
        $team->status_id = $user->status_id;
        $team->save();

    }

    private function createAcademic($user)
    {
        $academic = new Academic;
        $academic->academic_name = $user->name;
        $academic->academic_phone = $user->phone;
        $academic->academic_email = $user->email;
        $academic->academic_state = $user->state;
        $academic->user_id = $user->id;
        $academic->academic_status_id = $user->status_id;
        $academic->save();

    }
}
