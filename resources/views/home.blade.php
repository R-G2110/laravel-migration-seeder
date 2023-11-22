@extends('layouts.main')

@section('content')

    <div class="container">

        <table class="table table-bordered border-primary">
            <thead>
              <tr>
                <th scope="col">Treno</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Partenza da</th>
                <th scope="col">Ore</th>
                <th scope="col">Arrivo a</th>
                <th scope="col">Ore</th>
                <th scope="col">N° carrozze</th>
                <th scope="col">Stato</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                    <th scope="row">{{ $train->company }}</th>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->wagons }}</td>
                    <td>
                        @if ($train->cancelled)
                            <p>Cancellato</p>
                        @elseif ($train->in_time)
                            <p>In orario</p>
                        @else
                            <p>In ritardo di </p>
                        @endif
                    </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div
@endsection
