@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Accounts</h3>
        <a href="/accounts/create">Voeg account toe</a>

        <table class="table mt-4">
            <tr>
                <th>Naam</th>
                <th>Email</th>
                <th>Rol</th>
                <th></th>
            </tr>
            @foreach($accounts as $account)
                <tr>
                    <td>{{ $account->name }}</td>
                    <td>{{ $account->email }}</td>
                    <td>{{ $account->role->name }}</td>
                    <td>
                        <a href="/accounts/{{ $account->id }}/edit">Wijzig</a> |
                        <a href="/accounts/{{ $account->id }}/details">Details</a> |
                        <a href="/accounts/{{ $account->id }}/delete">Verwijder</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection

