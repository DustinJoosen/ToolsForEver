@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Fabrieken</h3>
        <a href="/fabrieken/create">Voeg fabriek toe</a>

        <table class="table mt-4">
            <tr>
                <th>Naam</th>
                <th>Adres</th>
                <th>Email</th>
                <th>Telefoon</th>
                <th></th>
            </tr>
            @foreach($fabrieken as $fabriek)
                <tr>
                    <td>{{ $fabriek->naam }}</td>
                    <td>{{ $fabriek->adres }}</td>
                    <td>{{ $fabriek->email }}</td>
                    <td>{{ $fabriek->telefoon }}</td>
                    <td>
                        <a href="/fabrieken/{{ $fabriek->id }}/edit">Wijzig</a> |
                        <a href="/fabrieken/{{ $fabriek->id }}/details">Details</a> |
                        <a href="/fabrieken/{{ $fabriek->id }}/delete">Verwijder</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection

