@extends ('layouts.plantilla')

@section ('title', 'Editar partido')

@section ('content')

<div class="jumbotron">
  
  <p class="text-center h3 text-primary">Edit a <span class="font-weight-bold">MATCH</span>:</p>
  <form action="{{route('match.editStore', $partido->id)}}" method="POST">
    @csrf
    @method('PUT')

    <p>Employee ID: <span class="text-primary">{{$partido->id}}<span></p>

      <div class="form-group">
        <label for="date_match">Date match: *(date)</label>
        <input type="text" class="form-control" id="date_match" name="date_match" 
          value="{{old('date_match', $partido->date_match)}}">

        @error('date_match')  
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="city">City: *(min 2, max 50)</label>
        <input type="text" class="form-control" id="city" name="city"
          value="{{old('city', $partido->city)}}">
        
        @error('city') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="stadium_name">Stadium Name:  *(min 2, max 50)</label>
        <input type="text" class="form-control" id="stadium_name" name="stadium_name"
          value="{{old('stadium_name', $partido->stadium_name)}}">

        @error('stadium_name') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="referee">referee:  *(min 2, max 50)</label>
        <input type="text" class="form-control" id="referee" name="referee"
          value="{{old('referee', $partido->referee)}}">

        @error('referee') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>
      
      <div class="form-group">
        <label for="local_team_name">Local team name:  *(min 2, max 50)</label>
        <input type="text" class="form-control" id="local_team_name" name="local_team_name"
          value="{{old('local_team_name', $partido->local_team_name)}}">

        @error('local_team_name') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="local_score">Local score:  *(number)</label>
        <input type="number" class="form-control" id="local_score" name="local_score"
          value="{{old('local_score', $partido->local_score)}}">

        @error('local_score') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="visitor_team_name">Visitor team name:  *(min 2, max 50)</label>
        <input type="text" class="form-control" id="visitor_team_name" name="visitor_team_name"
          value="{{old('visitor_team_name', $partido->visitor_team_name)}}">

        @error('visitor_team_name') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="visitor_score">Visitor score:  *(number)</label>
        <input type="number" class="form-control" id="visitor_score" name="visitor_score"
          value="{{old('visitor_score', $partido->visitor_score)}}">

        @error('visitor_score') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="match_status">Status:  (list select)</label>
        <select class="form-control" id="match_status" name="status">
          @foreach ($match_status as $item)
              <option value="{{$item->value}}" {{($item==$partido->status)?'selected':''}}>
                {{$item->value}}
              </option>
          @endforeach
        </select>

        @error('status') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="aditional_info:">Aditional info:  *(min 0, max 100)</label>
        <input type="text" class="form-control" id="aditional_info" name="aditional_info"
          value="{{old('aditional_info', $partido->aditional_info)}}">

        @error('aditional_info') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="text-info">Fields with * are mandatory</div>

    <button type="submit" class="btn btn-primary">Save</button>
  </form>

</div>
@endsection
