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
                    <strong>ROOMS</strong> create
                </div>
                <div class="card-body card-block">
                    <form action="{{route('cool.roomsCreateStore')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="room" class="form-control-label">Room number:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="number" id="room" name="room" placeholder="numero"
                                    class="form-control" value="{{ old('room') }}">
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
                                    class="form-control" value="{{ old('guests') }}">
                                <small class="form-text text-muted">*(num int:1-6)</small>
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
                                    <option value="{{$item->value}}">
                                        {{$item->value}}
                                    </option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">*(select: limitado a la lista)</small>
                            </div>

                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="price" class="form-control-label">Price per day:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="number" id="price" name="price" placeholder="numero"
                                    class="form-control" value="{{ old('price') }}">
                                <small class="form-text text-muted">*(num int:1-200)</small>
                                @error('price') 
                                <br><small class="text-danger">*{{$message}}</small><br>
                                @enderror
                            </div>
                        </div>

                        <div class="text-info">Fields with * are mandatory</div>
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
