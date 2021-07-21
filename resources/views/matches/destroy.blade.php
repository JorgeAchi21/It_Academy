@extends ('layouts.plantilla')

@section ('title', 'Borrar partido')

@section ('content')


<div class="jumbotron">
    
  <p class="text-center h3 text-primary"><span class="font-weight-bold">MATCH</span> eliminated:</p>

  <p>El register id: <strong>{{$id}}</strong> was corretly deleted...</p>

  <a href="{{route('match.show')}}">Return to MATCH list.</a>
</div>
@endsection
