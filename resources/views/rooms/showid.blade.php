@extends ('layouts.plantilla')

@section ('title', 'Mostrar equipo')

@section ('content')
<div class="jumbotron">

<p class="text-center h3 text-primary"><span class="font-weight-bold">ROOM</span> detail:</p>
<p>id: <span class="text-primary">{{$room->id}}</span></p>
<p>Room number: <span class="bg-secondary text-light"> {{$room->guests}}</span></p>
<p>State: <span class="text-success">   {{$room->state}}</p>
<p>Guest name:   {{$room->guestName}}</p>
<p>From date:  {{$room->fromDate}}</p>
<p>To date:  {{$room->toDate}}</p>
<p>Price:  {{$room->price}}</p>

</div>
@endsection