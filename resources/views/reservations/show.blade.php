@extends ('layouts.plantilla')

@section ('title', 'Mostrar Reservas')

@section ('content')

<div class="jumbotron">
  <p class="text-center h3 text-primary"><span class="font-weight-bold">RESERVATIONS</span> list:</p>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Client Name:</th>
          <th scope="col">Check In:</th>
          <th scope="col">Check Out:</th>
          <th scope="col">Room:</th>

          <th scope="col">Show:</th>
          <th scope="col">Edit:</th>
          <th scope="col">Delete:</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($reservation as $item)
          <tr>
            <td class="text-white bg-secondary">
              {{$item->id}}
            </td>
            <td>
              {{$item->clientName}}
            </td>
            <td>
              {{$item->checkIn}}
            </td>
            <td>
              {{$item->checkOut}}
            </td>
            <td>
              {{$item->room}}
            </td>

            <td>
              <a href='{{route('reservations.showid', $item->id)}}' class='btn btn-success'>Show</a>
            </td>

            <td>
              <a href='{{route('reservations.edit', $item->id)}}' class='btn btn-info'>Edit</a>
            </td>

            <td>
              <form method="POST" action="{{route("reservations.destroy", $item->id)}}">
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