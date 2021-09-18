@extends('cool.homeBase')


@section('page')
    @php
     //variable de pagina activa
     $currentPage = "reservations";
    @endphp
    
@endsection


@section('content')

<div class="row">
    <div class="col-lg-12">
      <div class="card" style="width: 40rem;">
        
        <div class="card-body">
          <h5 class="card-title">Reservations Id detail:</h5>
          <dl class="row">
            <dt class="col-sm-3">Id:</dt>
            <dd class="col-sm-9">{{ $reservation->id }}</dd>
          
            <dt class="col-sm-3">Guests:</dt>
            <dd class="col-sm-9">{{ $reservation->clientName }}</dd>
          
            <dt class="col-sm-3">State:</dt>
            <dd class="col-sm-9">{{ $reservation->checkIn }}</dd>
          
            <dt class="col-sm-3">Gest name:</dt>
            <dd class="col-sm-9">{{ $reservation->checkOut }}</dd>
          
            <dt class="col-sm-3">Fron Date:</dt>
            <dd class="col-sm-9">{{ $reservation->room }}</dd>
                
          </dl>
        
          <a href="{{ route('cool.reservationsShow') }}" class="btn btn-primary">Go Reservation Show</a>
        </div>
        </div>
        
    </div>
</div>


@endsection