@extends('layouts.app')

@section('content')
    <div class="container">
       <h3>Bestellijst</h3>

        <table class="voorraad_table mt-4">
            <tr>
                <th>Product</th>
                <th>Type</th>
                <th>Fabriek</th>
                <th>Minimumaantal</th>
                <th>Aantal te bestellen</th>
            </tr>

            @foreach($locaties as $locatie)
                @if(count($locatie->artikelen) < 1)
                    @continue
                @endif

                <tr>
                    <th colspan="5">{{ $locatie->naam }}</th>
                </tr>
                @foreach($locatie->artikelen as $artikel)
                    @if($artikel->min_aantal < $artikel->pivot->aantal)
                        @continue
                    @endif
                    <tr>
                        <td>{{ $artikel->naam }}</td>
                        <td>{{ $artikel->type }}</td>
                        <td>{{ $artikel->fabriek->naam }}</td>
                        <td>{{ $artikel->min_aantal }}</td>
                        <td>{{ $artikel->min_aantal - $artikel->pivot->aantal }}</td>
                    </tr>
                @endforeach
            @endforeach


        </table>
    </div>
@endsection
