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
                    <strong>RESERVATIONS</strong> create
                </div>
                <div class="card-body card-block">
                    <form action="{{ route('cool.reservationsCreateStore') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="clientName" class="form-control-label">Client Name:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="clientName" name="clientName" placeholder="texto"
                                    class="form-control" value="{{old('clientName')}}">
                                <small class="form-text text-muted"> *(text 2 to 50)</small>
                            </div>
                            @error('clientName') 
                                <br><small class="text-danger">*{{$message}}</small><br>
                            @enderror
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="checkIn" class="form-control-label">check In:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="checkIn" name="checkIn" placeholder="fecha"
                                    class="form-control" value="{{old('checkIn')}}">
                                <small class="form-text text-muted"> *(date)</small>
                            </div>
                            @error('checkIn') 
                                <br><small class="text-danger">*{{$message}}</small><br>
                            @enderror
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="checkOut" class="form-control-label">check Out:</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="checkOut" name="checkOut" placeholder="fecha"
                                    class="form-control" value="{{old('checkOut')}}">
                                <small class="form-text text-muted"> *(date)</small>
                            </div>
                            @error('checkIn') 
                                <br><small class="text-danger">*{{$message}}</small><br>
                            @enderror
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="room" class="form-control-label">Room: (Rooms available)</label>
                            </div>
                            
                            <div class="col-12 col-md-9">
                                <select class="form-control" id="room" name="roomSlct">
                                    @foreach ($roomAllow as $item)
                                    <option value="{{$item->room}}">
                                        {{$item->room}}
                                    </option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">*(select: limitado a la lista)</small>
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

        {{-- Ver datos bbdd: --}}
        {{-- @foreach ($roomAllow as $item)
            <p>{{$item->room }}-</p>
        @endforeach --}}

        {{-- select list --}}
        {{-- <div class="row form-group">
            <div class="col col-md-3">
                <label for="roomSlct" class="form-control-label">State:</label>
            </div>
            
            <div class="col-12 col-md-9">
                <select class="form-control" id="roomSlct" name="roomSlct">
                    @foreach ($roomAllow as $item)
                    <option value="{{$item->room}}">
                        {{$item->room}}
                    </option>
                    @endforeach
                </select>
                <small class="form-text text-muted">*(select: limitado a la lista)</small>
            </div>
        </div> --}}
    @endsection
