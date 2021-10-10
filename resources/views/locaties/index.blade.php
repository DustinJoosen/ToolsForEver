@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Locaties</h3>
        <a href="/locaties/create">Voeg locatie toe</a>

        <table class="table mt-4">
            <tr>
                <th>Naam</th>
                <th>Adres</th>
                <th>Stad</th>
                <th>Land</th>
                <th></th>
            </tr>
            @foreach($locaties as $locatie)
                <tr>
                    <td>{{ $locatie->naam }}</td>
                    <td>{{ $locatie->adres }}</td>
                    <td>{{ $locatie->stad }}</td>
                    <td>{{ $locatie->land }}</td>
                    <td>
                        <a href="/locaties/{{ $locatie->id }}/edit">Wijzig</a> |
                        <a href="/locaties/{{ $locatie->id }}/details">Details</a> |
                        <a href="/locaties/{{ $locatie->id }}/delete">Verwijder</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection

