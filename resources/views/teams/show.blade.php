@extends ('layouts.plantilla')

@section ('title', 'Mostrar equipos')

@section ('content')

<div class="jumbotron">
  <p class="text-center h3 text-primary"><span class="font-weight-bold">TEAMS</span> list:</p>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name:</th>
          <th scope="col">City:</th>
          <th scope="col">Stadium name:</th>
          <th scope="col">President:</th>
          <th scope="col">Detail:</th>
          <th scope="col">Edit:</th>
          <th scope="col">Delete:</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($equipo as $item)
          <tr>
            <td class="text-white bg-secondary">
              {{$item->id}}
            </td>
            <td>
              {{$item->name}}
            </td>
            <td>
              {{$item->city}}
            </td>
            <td>
              {{$item->stadium_name}}
            </td>
            <td>
              {{$item->president}}
            </td>

            <td>
              <a href='{{route('team.showid', $item->id)}}' class='btn btn-success'>Show</a>
            </td>

            <td>
              <a href='{{route('team.edit', $item->id)}}' class='btn btn-info'>Edit</a>
            </td>

            <td>
              <form method="POST" action="{{route("team.destroy", $item->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection