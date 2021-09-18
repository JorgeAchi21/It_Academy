@extends('cool.homeBase')


@section('page')
    @php
     //variable de pagina activa
     $currentPage = "rooms";
    @endphp
    
@endsection


@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2 class="title-1 m-b-25">Rooms:</h2>
        <h6>Total number: {{ count($room) }}</h6>
        
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Room:</th>
                        <th>Guests:</th>
                        <th>State:</th>
                        <th>Guest Name:</th>
                        <th>FromDate:</th>
                        <th>ToDate:</th>
                        <th>Price:</th>
                        <th>Actions:</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($room as $itemRoom)
                    {{-- @can ('view', $itemRoom)
                    {{ $itemRoom->id }}
                    {{ '-' }}
                    @endcan --}}
                    
                    @can ('view', $itemRoom)
                    <tr>
                        <td>{{ $itemRoom->id }}</td>
                        <td>{{ $itemRoom->room }}</td>
                        <td>{{ $itemRoom->guests }}</td>
                        <td>{{ $itemRoom->state }}</td>
                        <td>{{ $itemRoom->guestName }}</td>
                        <td>{{ $itemRoom->fromDate }}</td>
                        <td>{{ $itemRoom->toDate }}</td>
                        <td>{{ $itemRoom->price }}</td>
                        <td>  
                            <div class="table-data-feature">
                                <a href="{{ route('cool.roomsEdit', $itemRoom->id) }}" class="item" data-toggle="tooltip" 
                                    data-placement="top" title="" data-original-title="edit">
                                    <i class="zmdi zmdi-edit"></i> 
                                </a>

                                <form method="POST" action="{{ route("cool.roomsDestroy", $itemRoom->id) }}" class="item"
                                    data-placement="top" title="" data-original-title="delete">
                                    @csrf
                                    @method('DELETE')
                                    <button data-toggle="tooltip" data-placement="top" title="delete"><i class="zmdi zmdi-delete"></i></button>
                                </form>

                                <a href="{{ route('cool.roomsShowId', $itemRoom->id) }}" class="item" data-toggle="tooltip" 
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