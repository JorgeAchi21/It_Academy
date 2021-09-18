@extends ('layouts.plantilla')

@section ('title', 'Crear equipo')

@section ('content')
<div class="jumbotron">
    
    <p class="text-center h3 text-primary">Create New <span class="font-weight-bold">ROOM</span>:</p>
    <small>Info: Ruta envio form por post: {{route('rooms.createStore')}}</small>

    <form action="{{route('rooms.createStore')}}" method="POST">
      @csrf

      <div class="form-group">
        <label for="room">Room: *(numero int 100-500)</label>
        <input type="number" class="form-control" id="room" name="room" value="v">
        @error('room') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="guests">Guests: *(num int 1-6)</label>
        <input type="number" class="form-control" id="guests" name="guests" value="{{old('guests')}}">
        @error('guests')
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="state">State: *(limitado a la lista)select</label>
        <input type="text" class="form-control" id="state" name="state" value="{{old('state')}}">
        @error('state') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="price">Price:  *(num int)</label>
        <input type="number" class="form-control" id="price" name="price" value="{{old('price')}}">

        @error('price') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="text-info">Fields with * are mandatory</div>

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
