@extends ('layouts.plantilla')

@section ('title', 'Editar equipo')

@section ('content')

<div class="jumbotron">
  
  <p class="text-center h3 text-primary">Edit a <span class="font-weight-bold">TEAM</span>:</p>
  <p>Ruta envio form por post: {{route('team.editStore', $equipo->id)}}</p>

  <form action="{{route('team.editStore', $equipo->id)}}" method="POST">
    @csrf
    @method('PUT')

    <p>Employee ID: <span class="text-primary">{{$equipo->id}}<span></p>

      <div class="form-group">
        <label for="name">Name: *(min 2, max 50)</label>
        <input type="text" class="form-control" id="name" name="name" 
          value="{{old('name', $equipo->name)}}">

        @error('name') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="city">City: *(min 2, max 50)</label>
        <input type="text" class="form-control" id="city" name="city"
          value="{{old('city', $equipo->city)}}">
        
        @error('city') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="stadium_name">Stadium Name:  *(fecha valida)</label>
        <input type="text" class="form-control" id="stadium_name" name="stadium_name"
          value="{{old('stadium_name', $equipo->stadium_name)}}">

        @error('stadium_name') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="president">President:  *(fecha valida)</label>
        <input type="text" class="form-control" id="president" name="president"
          value="{{old('president', $equipo->president)}}">

        @error('president') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="aditional_info:">Aditional info:  *(min 0, max 100)</label>
        <input type="text" class="form-control" id="aditional_info" name="aditional_info"
          value="{{old('aditional_info', $equipo->aditional_info)}}">

        @error('aditional_info') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="text-info">Fields with * are mandatory</div>

    <button type="submit" class="btn btn-primary">Save</button>
  </form>

</div>
@endsection
