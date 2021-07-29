@extends ('layouts.plantilla')

@section ('title', 'Crear partido')

@section ('content')
<div class="jumbotron">
    
    <p class="text-center h3 text-primary">Create New <span class="font-weight-bold">MATCH</span></p>
    <small>Info: Ruta envio form por post: {{route('match.createStore')}}</small>


    <form action="{{route('match.createStore')}}" method="POST">
      @csrf

      <div class="form-group">
        <label for="date_match">Date match:  *(valid date)</label>
        <input type="date" class="form-control" id="date_match" name="date_match" value="{{old('date_match')}}">
        @error('date_match') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="time_match">Time match:  *(valid time)</label>
        <input type="text" class="form-control" id="time_match" name="time_match" value="{{old('time_match')}}">

        @error('time_match') 
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
        <label for="stadium_name">Stadium name:  *(min 2, max 50)</label>
        <input type="text" class="form-control" id="stadium_name" name="stadium_name" value="{{old('stadium_name')}}">

        @error('stadium_name') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="referee">Referee:  *(min 2, max 50)</label>
        <input type="text" class="form-control" id="referee" name="referee" value="{{old('referee')}}">

        @error('referee') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="local_team_name">Local team name:  *(min 2, max 50)</label>
        <input type="text" class="form-control" id="local_team_name" name="local_team_name" value="{{old('local_team_name')}}">

        @error('local_team_name') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="local_score">Local score:  *(number)</label>
        <input type="number" class="form-control" id="local_score" name="local_score" value="{{old('local_score')}}">

        @error('local_score') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="visitor_team_name">Visitor team name:  *(min 2, max 50)</label>
        <input type="text" class="form-control" id="visitor_team_name" name="visitor_team_name" value="{{old('visitor_team_name')}}">

        @error('visitor_team_name') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="visitor_score">Visitor score:  *(number)</label>
        <input type="number" class="form-control" id="visitor_score" name="visitor_score" value="{{old('visitor_score')}}">

        @error('visitor_score') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="match_status">Status:  *(list select)</label>
        <select class="form-control" id="match_status" name="status">
          @foreach ($match_status as $item)
              <option value="{{$item->value}}">
                {{$item->value}}
              </option>
          @endforeach
        </select>

        @error('status') 
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
