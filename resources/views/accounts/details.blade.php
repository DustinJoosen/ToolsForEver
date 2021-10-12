@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Details van account [{{ $account->name }}]</h3>

        <dl class="row mt-5">
            <dt class="col-sm-2">Naam</dt>
            <dd class="col-sm-10">{{ $account->name }}</dd>

            <dt class="col-sm-2">Email</dt>
            <dd class="col-sm-10">{{ $account->email }}</dd>

            <dt class="col-sm-2">Role</dt>
            <dd class="col-sm-10">{{ $account->role->name }}</dd>
        </dl>

        <a href="/accounts">terug</a>

    </div>
@endsection

