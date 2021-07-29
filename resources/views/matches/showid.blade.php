@extends ('layouts.plantilla')

@section ('title', 'Mostar partido')

@section ('content')
<div class="jumbotron">
    
    <p class="text-center h3 text-primary"><span class="font-weight-bold">MATCH</span> detail:</p>
    <p>id: <span class="text-primary">{{$partido->id}}</span></p>
    <p>date match: <span class="text-primary"> {{$partido->date_match}}</span></p>
    <p>Tiem match: <span class="text-success">   {{$partido->time_match}}</p>
    <p>City:   {{$partido->city}}</p>
    <p>Stadium name:  {{$partido->stadium_name}}</p>
    <p>Referee: <span class="text-primary">{{$partido->referee}}</span></p>
    <p>Local team name: <span class="bg-secondary text-light"> {{$partido->local_team_name}}</span></p>
    <p>Local store:   {{$partido->local_score}}</p>
    <p>Visitor team name: <span class="bg-secondary text-light">   {{$partido->visitor_team_name}}</p>
    <p>Visitor scrore:   {{$partido->visitor_score}}</p>
    <p>Status:  {{$partido->status}}</p>

    <p>Informacion adicional:  {{$partido->aditional_info}}</p>
    
</div>
@endsection