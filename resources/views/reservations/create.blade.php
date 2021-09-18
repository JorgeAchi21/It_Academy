@extends ('layouts.plantilla')

@section ('title', 'Crear equipo')

@section ('content')
<div class="jumbotron">
    
    <p class="text-center h3 text-primary">Create New <span class="font-weight-bold">RESERVATION</span>:</p>
    <small>Info: Ruta envio form por post: {{route('reservations.createStore')}}</small>
                           
    <form action="{{route('reservations.createStore')}}" method="POST">
      @csrf

      <div class="form-group">
        <label for="clientName">Client Name: *(text 2 to 50)</label>
        <input type="text" class="form-control" id="clientName" name="clientName" value="{{old('clientName')}}">
        @error('clientName') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="checkIn">checkIn: *(date)</label>
        <input type="date" class="form-control" id="checkIn" name="checkIn" value="{{old('checkIn')}}">
        @error('checkIn')
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="checkOut">Check Out: *(limitado a la lista)select</label>
        <input type="date" class="form-control" id="checkOut" name="checkOut" value="{{old('checkOut')}}">
        @error('checkOut') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="room">room:  *(num int)</label>
        <input type="number" class="form-control" id="room" name="room" value="{{old('room')}}">

        @error('room') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="text-info">Fields with * are mandatory</div>

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
