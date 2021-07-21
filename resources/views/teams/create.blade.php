@extends ('layouts.plantilla')

@section ('title', 'Crear equipo')

@section ('content')
<div class="jumbotron">
    
    <p class="text-center h3 text-primary">Create New <span class="font-weight-bold">TEAM</span>:</p>
    <small>Info: Ruta envio form por post: {{route('team.createStore')}}</small>

    <form action="{{route('team.createStore')}}" method="POST">
      @csrf

      <div class="form-group">
        <label for="name">Name: *(min 2, max 50)</label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
        @error('name') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="city">City: *(min 2, max 50)</label>
        <input type="text" class="form-control" id="city" name="city" value="{{old('city')}}">
        @error('city')
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="stadium_name">Stadium name: *(min 2, max 50)</label>
        <input type="text" class="form-control" id="stadium_name" name="stadium_name" value="{{old('stadium_name')}}">
        @error('stadium_name') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="president">President:  *(min 2, max 50)</label>
        <input type="text" class="form-control" id="president" name="president" value="{{old('president')}}">

        @error('president') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="aditional_info">Aditional info:  (min 0, max 100)</label>
        <input type="text" class="form-control" id="aditional_info" name="aditional_info" value="{{old('aditional_info')}}">

        @error('aditional_info') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="text-info">Fields with * are mandatory</div>

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
