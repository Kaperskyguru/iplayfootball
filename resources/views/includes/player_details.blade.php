<div class="modal-header">
    <h5 class="modal-title text-left" id="exampleModalCenterTitle" style="color:black;">Player Info
    </h5>
    <img src="{{ asset(extractFromImage($player->player_image_id))}}" class="img-responsive" style="width:20%; height:auto; border-radius: 50%; margin-left:auto;">
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
                    {{ $player->player_state ?: 'Nill'}}
                </td>
            </tr>
            <tr>
                <th scope="row">Team</th>
                <td>
                    {{ !is_null($player->team)? $player->team->name : 'Nill'}}
                </td>
            </tr>
            <tr>
                <th scope="row">Age</th>
                <td>{{ $player->player_dob ?: 'Nill'}}</td>
            </tr>
            <tr>
                <th scope="row">Height(cm)</th>
                <td>
                    {{ $player->player_height ?: 'Nill'}}
                </td>
            </tr>
            <tr>
                <th scope="row">Weight(kg)</th>
                <td>
                    {{ $player->player_weight ?: 'Nill'}}
                </td>
            </tr>
            <tr>
                <th scope="row">Position</th>
                <td>
                    {{ $player->player_position ?: 'Nill'}}
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="modal-footer">
    <a href="{{ route('profile', ['id' => $player->id]) }}" type="button" class="btn btn-success mx-auto">View
                                    Full Profile</a>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>