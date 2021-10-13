@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Voorraad ToolsForEver</h3>
        <table class="voorraad_table mt-4">
            <tr>
                <th>Product</th>
                <th>Type</th>
                <th>Fabriek</th>
                <th>Aantal</th>
                <th>Inkoopprijs</th>
                <th>Verkoopprijs</th>
            </tr>

            @foreach($locaties as $locatie)
                @if(count($locatie->artikelen) < 1)
                    @continue
                @endif

                <tr>
                    <th colspan="6">{{ $locatie->naam }}</th>
                </tr>
                @foreach($locatie->artikelen as $artikel)
                    <tr>
                        <td>{{ $artikel->naam }}</td>
                        <td>{{ $artikel->type }}</td>
                        <td>{{ $artikel->fabriek->naam }}</td>
                        <td>{{ $artikel->pivot->aantal }}</td>
                        <td style="text-align:right">€{{ $artikel->inkoop_waarde }}</td>
                        <td style="text-align:right">€{{ $artikel->verkoop_waarde }}</td>
                    </tr>
                @endforeach
            @endforeach


        </table>

    </div>
@endsection
