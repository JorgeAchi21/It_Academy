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
        <h2 class="title-1 m-b-25">Reservations:</h2>
        <h6>Total number: {{ count($reservation) }}</h6>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Client Name:</th>
                        <th>Check In:</th>
                        <th>Check Out:</th>
                        <th>Room:</th>
                        <th>Price:</th>
                        <th>Actions:</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservation as $itReservation)
                    {{-- @can ('view', $itReservation)
                        {{ $itReservation->id }}
                        {{ '-' }}
                    @endcan --}}
                    @can ('view', $itReservation)
                    <tr>
                        <td>{{ $itReservation->id }}</td>
                        <td>{{ $itReservation->clientName }}</td>
                        <td>{{ $itReservation->checkIn }}</td>
                        <td>{{ $itReservation->checkOut }}</td>
                        <td>{{ $itReservation->room }}</td>
                        <td>{{ $itReservation->price }}</td>
                        <td>  
                            <div class="table-data-feature">
                                <a href="{{ route('cool.reservationsEdit', $itReservation->id) }}" class="item" data-toggle="tooltip" 
                                    data-placement="top" title="" data-original-title="edit">
                                    <i class="zmdi zmdi-edit"></i> 
                                </a>
                                
                                <form method="POST" action="{{ route("cool.reservationsDestroy", $itReservation->id ) }}" class="item"
                                    data-placement="top" title="" data-original-title="delete">
                                    @csrf
                                    @method('DELETE')
                                    <button data-toggle="tooltip" data-placement="top" title="delete">
                                        <i class="zmdi zmdi-delete">
                                        </i>
                                    </button>
                                </form>
                                
                                <a href="{{ route('cool.reservationsShowId', $itReservation->id) }}" class="item" data-toggle="tooltip" 
                                data-placement="top" title="" data-original-title="detail...">
                                    <i class="fa fa-eye"></i> 
                                </a>

                            </div>
                        </td>
                    </tr>
                    @endcan
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection