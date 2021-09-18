@extends ('layouts.plantilla')

@section ('title', 'Editar equipo')

@section ('content')

<div class="jumbotron">
  
  <p class="text-center h3 text-primary">Edit a <span class="font-weight-bold">Room</span>:</p>
  <p>Ruta envio form por post: {{route('rooms.editStore', $room->id)}}</p>

  <form action="{{route('rooms.editStore', $room->id)}}" method="POST">
    @csrf
    @method('PUT')

    <p>Employee ID: <span class="text-primary">{{$room->id}}<span></p>

      <div class="form-group">
        <label for="room">room: *(number min10-max500)</label>
        <input type="number" class="form-control" id="room" name="room" 
          value="{{old('room', $room->room)}}">

        @error('room') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="guests">Guests: *(number min1-max10)</label>
        <input type="text" class="form-control" id="guests" name="guests"
          value="{{old('guests', $room->guests)}}">
        
        @error('guests') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="state">State:  *(List)</label>
        <input type="text" class="form-control" id="state" name="state"
          value="{{old('state', $room->state)}}">

        @error('state') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="guestName">Guest Name:  *(text max50)</label>
        <input type="text" class="form-control" id="guestName" name="guestName"
          value="{{old('guestName', $room->guestName)}}">

        @error('guestName') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="fromDate:">From Date: *(date)</label>
        <input type="date" class="form-control" id="fromDate" name="fromDate"
          value="{{old('fromDate', $room->fromDate)}}">

        @error('fromDate') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="toDate:">To Date:  *(date)</label>
        <input type="date" class="form-control" id="toDate" name="toDate"
          value="{{old('toDate', $room->toDate)}}">

        @error('toDate') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="price:">Price:  *(num min1-max100)</label>
        <input type="number" class="form-control" id="price" name="price"
          value="{{old('price', $room->price)}}">

        @error('topriceDate') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="text-info">Fields with * are mandatory</div>

    <button type="submit" class="btn btn-primary">Save</button>
  </form>

</div>
@endsection
