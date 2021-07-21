@extends ('layouts.plantilla')

@section ('title', 'Mostrar equipo')

@section ('content')
<div class="jumbotron">

<p class="text-center h3 text-primary"><span class="font-weight-bold">TEAM</span> detail:</p>
<p>id: <span class="text-primary">{{$equipo->id}}</span></p>
<p>Name: <span class="bg-secondary text-light"> {{$equipo->name}}</span></p>
<p>City: <span class="text-success">   {{$equipo->city}}</p>
<p>Stadium name:   {{$equipo->stadium_name}}</p>
<p>President:  {{$equipo->president}}</p>
<p>Informacion adicional:  {{$equipo->aditional_info}}</p>

</div>
@endsection