@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Waarde ToolsForEver</h3>

        <table class="voorraad_table mt-4">
            <tr>
                <th>Product</th>
                <th>Type</th>
                <th>Fabriek</th>
                <th>Aantal</th>
                <th>Prijs</th>
                <th>Inkoopprijs</th>
                <th>Verkoopprijs</th>
            </tr>

            @foreach($locaties as $locatie)
                @if(count($locatie->artikelen) < 1)
                    @continue
                @endif

                <tr>
                    <th colspan="8">{{ $locatie->naam }}</th>
                </tr>
                @foreach($locatie->artikelen as $artikel)
                    <tr>
                        <td>{{ $artikel->naam }}</td>
                        <td>{{ $artikel->type }}</td>
                        <td>{{ $artikel->fabriek->naam }}</td>
                        <td>{{ $artikel->pivot->aantal }}</td>
                        <td>€{{ $artikel->inkoop_waarde }}</td>
                        <td style="text-align:right">€{{ floatval($artikel->inkoop_waarde) * $artikel->pivot->aantal }}</td>
                        <td style="text-align:right">€{{ floatval($artikel->verkoop_waarde) * $artikel->pivot->aantal }}</td>
                    </tr>

                @endforeach

                <tr style="text-align:right">
                    <td colspan="5">Totaal locatie</td>
                    <td><b>€{{ $locatie->waardes["inkoop"] }}</b></td>
                    <td><b>€{{ $locatie->waardes["verkoop"] }}</b></td>
                </tr>

            @endforeach

            <tr style="border-top:4px solid black; text-align:right" >
                <td colspan="5"><b>Eindtotaal</b></td>
                <td><b>€{{ $eindtotaal["inkoop"] }}</b></td>
                <td><b>€{{ $eindtotaal["uitkoop"] }}</b></td>
            </tr>

        </table>

    </div>
@endsection
