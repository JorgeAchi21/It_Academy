@extends ('layouts.plantilla')

@section ('title', 'Editar equipo')

@section ('content')

<div class="jumbotron">
  
  <p class="text-center h3 text-primary">Edit a <span class="font-weight-bold">RESERVATIONS</span>:</p>
  <p>Ruta envio form por post: {{route('reservations.editStore', $reservation->id)}}</p>

  <form action="{{route('reservations.editStore', $reservation->id)}}" method="POST">
    @csrf
    @method('PUT')

    <p>Employee ID: <span class="text-primary">{{$reservation->id}}<span></p>

      <div class="form-group">
        <label for="clientName">Client name: *(text min2-max50)</label>
        <input type="text" class="form-control" id="clientName" name="clientName" 
          value="{{old('clientName', $reservation->clientName)}}">

        @error('clientName') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="checkIn">Check In: *(date)</label>
        <input type="date" class="form-control" id="checkIn" name="checkIn"
          value="{{old('checkIn', $reservation->checkIn)}}">
        
        @error('checkIn') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="checkOut">Check Out:  *(date)</label>
        <input type="date" class="form-control" id="checkOut" name="checkOut"
          value="{{old('checkOut', $reservation->checkOut)}}">

        @error('checkOut') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="room">room:  *(number )</label>
        <input type="number" class="form-control" id="room" name="room"
          value="{{old('room', $reservation->room)}}">

        @error('room') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>
      

      <div class="text-info">Fields with * are mandatory</div>

    <button type="submit" class="btn btn-primary">Save</button>
  </form>

</div>
@endsection
