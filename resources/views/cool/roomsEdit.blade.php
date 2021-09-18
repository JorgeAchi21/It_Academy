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
            <div class="card">
                <div class="card-header">
                    <strong>ROOMS</strong> edit
                </div>
                <div class="card-body card-block">
                    <form action="{{ route('cool.roomsEditStore', $room->id) }}" 
                    method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('PUT')

                        <p>Employee ID: <span class="text-primary">{{$room->id}}<span></p>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="room" class="form-control-label">Room:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="number" id="room" name="room" placeholder="numero"
                                    class="form-control" value="{{ old('room', $room->room) }}">
                                <small class="form-text text-muted">*(num int:10-500)</small>
                                @error('room') 
                                    <small class="text-danger">*{{$message}}</small><br>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="guests" class="form-control-label">Guests:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="number" id="guests" name="guests" placeholder="numero"
                                    class="form-control" value="{{ old('guests', $room->guests) }}">
                                <small class="form-text text-muted">*(num int 1-6)</small>
                                @error('guests') 
                                    <small class="text-danger">*{{$message}}</small><br>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="state" class="form-control-label">State:</label>
                            </div>
                            
                            <div class="col-12 col-md-9">
                                <select class="form-control" id="state" name="state">
                                    @foreach ($roomState_status as $item)
                                    <option value="{{$item->value}}" {{($item->value==$room->state)?'selected':''}}>
                                        {{$item->value}}
                                    </option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">*(select: limitado a la lista)</small>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="guestName" class="form-control-label">Guest Name:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="guestName" name="guestName" placeholder="texto"
                                    class="form-control" value="{{ old('guestName', $room->guestName) }}">
                                <small class="form-text text-muted">*(text 1-50)</small>
                                @error('guestName') 
                                    <small class="text-danger">*{{$message}}</small><br>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="fromDate" class="form-control-label">From Date:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="fromDate" name="fromDate" placeholder="fecha"
                                    class="form-control" value="{{ old('fromDate', $room->fromDate) }}">
                                <small class="form-text text-muted">*(fecha)</small>
                                @error('fromDate') 
                                    <small class="text-danger">*{{$message}}</small><br>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="toDate" class="form-control-label">To Date:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="toDate" name="toDate" placeholder="fecha"
                                    class="form-control" value="{{ old('toDate', $room->toDate) }}">
                                <small class="form-text text-muted">*(fecha)</small>
                                @error('toDate') 
                                    <small class="text-danger">*{{$message}}</small><br>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="price" class="form-control-label">Price:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="number" id="price" name="price" placeholder="numero"
                                    class="form-control" value="{{ old('price', $room->price) }}">
                                <small class="form-text text-muted">*(num int:1-200)</small>
                                @error('price') 
                                    <small class="text-danger">*{{$message}}</small><br>
                                @enderror
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    @endsection
