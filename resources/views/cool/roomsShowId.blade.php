@extends('cool.homeBase')


@section('page')
    @php
    //variable de pagina activa
    $currentPage = 'rooms';
    @endphp

@endsection


@section('content')

    <div class="row">
        <div class="col-lg-12">

            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title">Rooms Id detail::</h5>
                    <dl class="row">
                        <dt class="col-sm-3">Id:</dt>
                        <dd class="col-sm-9">{{ $room->id }}</dd>

                        <dt class="col-sm-3">Guests:</dt>
                        <dd class="col-sm-9">{{ $room->guests }}</dd>

                        <dt class="col-sm-3">State:</dt>
                        <dd class="col-sm-9">{{ $room->state }}</dd>

                        <dt class="col-sm-3">Gest name:</dt>
                        <dd class="col-sm-9">{{ $room->gestName }}</dd>

                        <dt class="col-sm-3">Fron Date:</dt>
                        <dd class="col-sm-9">{{ $room->fronDate }}</dd>

                        <dt class="col-sm-3">To Date:</dt>
                        <dd class="col-sm-9">{{ $room->toDate }}</dd>

                        <dt class="col-sm-3">Price:</dt>
                        <dd class="col-sm-9">{{ $room->price }}</dd>

                    </dl>
                    <a href="{{ route('cool.roomsShow') }}" class="btn btn-primary">Go Room Show</a>
                </div>
            </div>

        </div>
    </div>

@endsection
