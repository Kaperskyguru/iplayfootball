<div class="modal-header">
    <h5 class="modal-title text-left" id="exampleModalCenterTitle" style="color:black;">Player Info
    </h5>
    <img src="{{ asset('img/FREDRICK.jpg')}}" class="img-responsive" style="width:20%; height:auto; border-radius: 50%; margin-left:auto;">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" style="color:black;">&times;</span></button>
</div>
<div class="modal-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" style="color:forestgreen">
                    {{ $player->player_name }}
                </th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Nationality</th>
                <td>
                    {{ $player->player_state }}
                </td>
            </tr>
            <tr>
                <th scope="row">Team</th>
                <td>
                    {{ $player->player_associate_team}}
                </td>
            </tr>
            <tr>
                <th scope="row">Age</th>
                <td>23</td>
            </tr>
            <tr>
                <th scope="row">Height(cm)</th>
                <td>
                    {{ $player->player_height }}
                </td>
            </tr>
            <tr>
                <th scope="row">Weight(kg)</th>
                <td>
                    {{ $player->player_weight }}
                </td>
            </tr>
            <tr>
                <th scope="row">Position</th>
                <td>
                    {{ $player->player_position}}
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="modal-footer">
    <a href="{{ url('/profile') }}" type="button" class="btn btn-success mx-auto">View
                                    Full Profile</a>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>