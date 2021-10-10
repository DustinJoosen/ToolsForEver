@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Details van locatie [{{ $locatie->naam }}]</h3>

        <dl class="row mt-5">
            <dt class="col-sm-2">Naam</dt>
            <dd class="col-sm-10">{{ $locatie->naam }}</dd>

            <dt class="col-sm-2">Adres</dt>
            <dd class="col-sm-10">{{ $locatie->adres }}</dd>

            <dt class="col-sm-2">Email</dt>
            <dd class="col-sm-10">{{ $locatie->stad }}</dd>

            <dt class="col-sm-2">Telefoon</dt>
            <dd class="col-sm-10">{{ $locatie->land }}</dd>
        </dl>

        <a href="/locaties">terug</a>

    </div>
@endsection

