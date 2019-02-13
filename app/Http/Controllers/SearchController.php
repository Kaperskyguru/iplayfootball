<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Player;

class SearchController extends Controller
{
    public function index()
    {

    }

    public function search(Request $request)
    {
        if($request->ajax())
        {
            if(isset($request->position)) {
                $players=Player::where('player_position',$request->position)->get();
                return $this->displayPlayerDetails($players);
            } else {
                $players=Player::where('player_firstname','LIKE','%'.$request->search."%")
                ->orWhere('player_lastname','LIKE','%'.$request->search."%")
                ->orWhere('player_username','LIKE','%'.$request->search."%")
                ->get();
                return $this->displayPlayerDetails($players);
            }

        }
    }

    private function displayPlayerDetails($players)
    {
        if($players)
        {
            foreach ($players as $key => $player) {?>

                <div class="col-md-4 col-sm-6 col-12  card-container" id="players_list">
                    <div class="col-12 card" style="width:18rem">
                        <div class="col-12 card-header">
                            <div class="row">
                                <img src="<?php echo asset('public/img/FREDRICK.jpg');?>" class="img-responsive" style="width:100%; height:100%">
                            </div>
                        </div>
                        <div class="col-12 card-body">
                            <div class="row">
                                <p class="mx-auto p-0" style="color:black; font-size: 23px">
                                    <?php echo $player->player_firstname.' '.$player->player_lastname ?>
                                    <br>
                                    <small>Mid-Fielder</small>
                                </p>
                                <button type="button" class="btn btn-danger mx-auto" data-toggle="modal" href="#exampleModalCenter">
                                    See More...
                                </button>
                                <div class="modal fade mt-5" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-left" id="exampleModalCenterTitle" style="color:black;">Player Info
                                                </h5>
                                                <img src="<?php echo asset('public/img/FREDRICK.jpg');?>" class="img-responsive" style="width:20%; height:auto; border-radius: 50%; margin-left:auto;">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" style="color:black;">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="color:forestgreen"><?php echo $player->player_firstname.' '.$player->player_lastname ?>
                                                            </th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Nationality</th>
                                                            <td>Nigerian</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Team</th>
                                                            <td>Jacob fc</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Age</th>
                                                            <td>23</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Height(cm)</th>
                                                            <td><?php echo $player->player_height ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Weight(kg)</th>
                                                            <td><?php echo $player->player_weight ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Position</th>
                                                            <td>Mid-fielder</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="<?php echo url('/profile') ?>" type="button" class="btn btn-success mx-auto">View
                                                    Full Profile</a>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php }
        }
    }
}
