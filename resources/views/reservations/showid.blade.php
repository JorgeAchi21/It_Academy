@extends ('layouts.plantilla')

@section ('title', 'Mostrar equipo')

@section ('content')
<div class="jumbotron">

<p class="text-center h3 text-primary"><span class="font-weight-bold">ROOM</span> detail:</p>
<p>id: <span class="text-primary">{{$reservation->id}}</span></p>
<p>room number: <span class="bg-secondary text-light"> {{$reservation->guests}}</span></p>
<p>State: <span class="text-success">   {{$reservation->state}}</p>
<p>Guest name:   {{$reservation->guestName}}</p>
<p>From date:  {{$reservation->fromDate}}</p>
<p>To date:  {{$reservation->toDate}}</p>
<p>Price:  {{$reservation->price}}</p>

</div>
@endsection