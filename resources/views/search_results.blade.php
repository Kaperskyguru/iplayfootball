@extends('layouts.app')

@section('title', 'Search results')

@section('assets')
<link rel="stylesheet" href="{{asset('css/custom/c_profiles.css')}}">
@endsection

@section('header_style')
style="height:110px; position:relative"
@endsection

@section('content')
<div class="container" style="margin:60px 0">
    <div class="row" id="players_list">
        @if(count($players) > 0)
            <h2 style="font-style:italic; font-weight:lighter" class="col-md-12">Showing Search results for "<b>{{ $query }}</b>"</h2>
        @foreach($players as $player)
            <div class="col-md-4 col-sm-6 col-12  card-container">
                <div class="col-12 card" style="width:18rem">
                    <div class="col-12 card-header">
                        <i class="far fa-check-circle fa-2x" style="z-index:1;color:forestgreen;position:relative;top:7px;left:105%;"></i>
                        <div class="row">
                            <img src="{{ asset('img/FREDRICK.jpg') }}" class="img-responsive" style="width:100%; height:100%">
                        </div>
                    </div>
                    <div class="col-12 card-body">
                        <div class="row">
                            <h6 style="font-size: 20px; display:block">
                                <a data-toggle="modal" href="" style="text-decoration:underline" class="col-md-12;">{{$player->player_name}}</a>
                                <br><span style="font-size:18px; font-weight:bolder; color:gray">Position: {{$player->player_position}}</span>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @else
            <h2 style="margin:30px; font-style:italic; font-weight:lighter" class="text-center">Sorry, no results found for "<b>{{ $query }}</b>"</h2>
        @endif
    </div>
</div>
@endsection
