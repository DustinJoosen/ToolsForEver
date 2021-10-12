@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Details van artikel [{{ $artikel->naam }}]</h3>

        <dl class="row mt-5">
            <dt class="col-sm-2">Naam</dt>
            <dd class="col-sm-10">{{ $artikel->naam }}</dd>

            <dt class="col-sm-2">Fabriek</dt>
            <dd class="col-sm-10">{{ $artikel->fabriek->naam }}</dd>

            <dt class="col-sm-2">Type</dt>
            <dd class="col-sm-10">{{ $artikel->type }}</dd>

            <dt class="col-sm-2">Min aantal</dt>
            <dd class="col-sm-10">{{ $artikel->min_aantal }}</dd>

            <dt class="col-sm-2">Inkoop Waarde</dt>
            <dd class="col-sm-10">€{{ $artikel->inkoop_waarde }}</dd>

            <dt class="col-sm-2">Verkoop Waarde</dt>
            <dd class="col-sm-10">€{{ $artikel->verkoop_waarde }}</dd>
        </dl>

        <a href="/artikelen">terug</a>

    </div>
@endsection

