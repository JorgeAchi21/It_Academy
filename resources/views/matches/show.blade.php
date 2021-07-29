@extends ('layouts.plantilla')

@section('title', 'Mostar partidos')

@section('content')

    <div class="jumbotron">
        <p class="text-center h3 text-primary"><span class="font-weight-bold">MATCHES</span> list:</p>

{{--         <p>ini can</p>
        @can('view', $partido[0])
            <p>Dentro del can:</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, nemo.</p>
        @endcan
        <p>fin del can</p> --}}

        <h6>Total number of MATCHES: {{ count($partido) }}</h6>
{{--         <h3>Total own MATCHES: {{ count(Auth::user()->partido) }}</h3> --}}

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date match:</th>
                    <th scope="col">Time match:</th>
                    <th scope="col">City:</th>
                    <th scope="col">Stadium name:</th>
                    <th scope="col">Referee:</th>
                    <th scope="col">Local team name:</th>
                    <th scope="col">Local score:</th>
                    <th scope="col">Visitor team name:</th>
                    <th scope="col">Visitor score:</th>
                    <th scope="col">Status:</th>

                    <th scope="col">Detail:</th>
                    <th scope="col">Edit:</th>
                    <th scope="col">Delete:</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($partido as $item)
                    @can('view', $item)
                        <tr>
                            <td class="text-white bg-secondary">
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->date_match }}
                            </td>
                            <td>
                                {{ $item->time_match }}
                            </td>
                            <td>
                                {{ $item->city }}
                            </td>
                            <td>
                                {{ $item->stadium_name }}
                            </td>
                            <td>
                                {{ $item->referee }}
                            </td>
                            <td>
                                {{ $item->local_team_name }}
                            </td>
                            <td>
                                {{ $item->local_score }}
                            </td>
                            <td>
                                {{ $item->visitor_team_name }}
                            </td>
                            <td>
                                {{ $item->visitor_score }}
                            </td>
                            <td>
                                {{ $item->status }}
                            </td>

                            <td>
                                <a href='{{ route('match.showid', $item->id) }}' class='btn btn-success'>Show</a>
                            </td>

                            @if (auth()->check())
                                @if (auth()->user()->hasRole('admin'))

                                    <td>
                                        <a href='{{ route('match.edit', $item->id) }}' class='btn btn-info'>Edit</a>
                                    </td>

                                    <td>
                                        <form method="POST" action="{{ route('match.destroy', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>

                                @endif
                            @endif
                        </tr>
                    @endcan
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
