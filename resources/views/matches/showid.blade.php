@extends ('layouts.plantilla')

@section ('title', 'Mostar partido')

@section ('content')
<div class="jumbotron">
    
    <p class="text-center h3 text-primary"><span class="font-weight-bold">MATCH</span> detail:</p>
    <p>id: <span class="text-primary">{{$equipo->id}}</span></p>
    <p>date match: <span class="text-primary"> {{$equipo->date_match}}</span></p>
    <p>Tiem match: <span class="text-success">   {{$equipo->time_match}}</p>
    <p>City:   {{$equipo->city}}</p>
    <p>Stadium name:  {{$equipo->stadium_name}}</p>
    <p>Referee: <span class="text-primary">{{$equipo->referee}}</span></p>
    <p>Local team name: <span class="bg-secondary text-light"> {{$equipo->local_team_name}}</span></p>
    <p>Local store:   {{$equipo->local_score}}</p>
    <p>Visitor team name: <span class="bg-secondary text-light">   {{$equipo->visitor_team_name}}</p>
    <p>Visitor scrore:   {{$equipo->visitor_score}}</p>
    <p>Status:  {{$equipo->status}}</p>

    <p>Informacion adicional:  {{$equipo->aditional_info}}</p>
    
</div>
@endsection