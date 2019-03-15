@if(count($players) > 0) @foreach($players as $player)
<div class="col-md-4 col-sm-6 col-12  card-container" id="players_list">
    <div class="col-12 card" style="width:18rem">
        <div class="col-12 card-header">
            <div class="row">
                <img src="{{ asset(extractFromImage($player->player_image_id))}}" class="img-responsive" style="width:100%; height:100%">
            </div>
        </div>
        <div class="col-12 card-body">
            <div class="row">
                <p class="mx-auto p-0" style="color:black; font-size: 23px">
                    {{ $player->player_name}}
                    <br>
                    <small>{{ $player->player_position}}</small>
                </p>
                <button class="btn btn-danger mx-auto" id="player_details" data-player_id="{{$player->id}}" data-toggle="modal" data-token="{{csrf_token()}}" href="#exampleModalCenter">
                        See More...
                </button>
                <div class="modal fade mt-5" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="modalDetails">
                                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach @endif