@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Artikelen</h3>
        <a href="/artikelen/create">Voeg artikel toe</a>

        <table class="table mt-4">
            <tr>
				<th>Naam</th>
				<th>Fabriek</th>
				<th>Type</th>
				<th>Min aantal</th>
				<th>Inkoop waarde</th>
				<th>Verkoop waarde</th>
				<th></th>
            </tr>
 			@foreach($artikelen as $artikel)
                <tr>
					<td>{{ $artikel->naam }}</td>
					<td>{{ $artikel->fabriek->naam }}</td>
					<td>{{ $artikel->type }}</td>
					<td>{{ $artikel->min_aantal }}</td>
					<td>€{{ $artikel->inkoop_waarde }}</td>
					<td>€{{ $artikel->verkoop_waarde }}</td>
                    <td>
                        <a href="/artikelen/{{ $artikel->id }}/edit">Wijzig</a> |
                        <a href="/artikelen/{{ $artikel->id }}/details">Details</a> |
                        <a href="/artikelen/{{ $artikel->id }}/delete">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection

