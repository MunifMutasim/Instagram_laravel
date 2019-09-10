@extends('layouts.app')

@section('content')
<div class="container" style="padding-left: 206px; padding-top: 8px;">
    <div class="row">
        <div class="col-3">
            <img src="https://www.eship.ox.ac.uk/sites/default/files/styles/large/public/images/event/codecamp.jpg?itok=QNknZ7St" class="rounded-circle" style="height: 150px;">
        </div>
        <div class="col-9">
            <div>
                <h2>{{ $user->username }}</h2>
            </div>

            <div class="d-flex">
                <div style="padding-right: 20px;"><span style="font-weight: bolder;">153</span> posts</div>
                <div style="padding-right: 20px;"><span style="font-weight: bolder;">23k</span> follwers</div>
                <div style="padding-right: 20px;"><span style="font-weight: bolder;">212</span> following</div>
            </div>

            <div class="pt-3 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRSNCYKoLY2FfvWCwDjD_MhFhYZNLINs3MU0Ge9XkvDVcSNezK2" style="height: 250px; width: 300px;"></div>
        <div class="col-4"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTN1fEYQLQss0nJDDmdq-Qpsa9Ouo8h9Japaa0o7VnwIx7UsEeU" style="height: 250px; width: 300px;"></div>
        <div class="col-4"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRG_844SN7vq-zE_WO0jSacRPbmdHhuEyiaYisUf60LngGifb7S" style="height: 250px; width: 300px;"></div>
    </div>
</div>
@endsection
<!-- https://www.eship.ox.ac.uk/sites/default/files/styles/large/public/images/event/codecamp.jpg?itok=QNknZ7St -->