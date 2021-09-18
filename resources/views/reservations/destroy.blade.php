@extends ('layouts.plantilla')

@section ('title', 'Borrar equipo')

@section ('content')


<div class="jumbotron">
    
  <p class="text-center h3 text-primary"><span class="font-weight-bold">TEAM</span> eliminated:</p>

  <p>El register id: <strong>{{$id}}</strong> was corretly deleted...</p>

  <a href="{{route('reservations.show')}}">Return to Reservation list.</a>
</div>
@endsection