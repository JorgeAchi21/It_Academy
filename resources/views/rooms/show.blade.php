@extends ('layouts.plantilla')

@section ('title', 'Mostrar Reservas')

@section ('content')

<div class="jumbotron">
  <p class="text-center h3 text-primary"><span class="font-weight-bold">ROOMS</span> list:</p>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Room:</th>
          <th scope="col">Guests:</th>
          <th scope="col">State:</th>
          <th scope="col">Guest Name:</th>
          <th scope="col">from Date:</th>
          <th scope="col">to Date:</th>
          <th scope="col">Price:</th>
          
          <th scope="col">Show:</th>
          <th scope="col">Edit:</th>
          <th scope="col">Delete:</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($room as $item)
          <tr>
            <td class="text-white bg-secondary">
              {{$item->id}}
            </td>
            <td>
              {{$item->room}}
            </td>
            <td>
              {{$item->guests}}
            </td>
            <td>
              {{$item->state}}
            </td>
            <td>
              {{$item->guestName}}
            </td>
            <td>
              {{$item->fromDate}}
            </td>
            <td>
              {{$item->toDate}}
            </td>
            <td>
              {{$item->price}}
            </td>

            <td>
              <a href='{{route('rooms.showid', $item->id)}}' class='btn btn-success'>Show</a>
            </td>

            <td>
              <a href='{{route('rooms.edit', $item->id)}}' class='btn btn-info'>Edit</a>
            </td>

            <td>
              <form method="POST" action="{{route("rooms.destroy", $item->id)}}">
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