@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Details van fabriek [{{ $fabriek->naam }}]</h3>

        <dl class="row mt-5">
            <dt class="col-sm-2">Naam</dt>
            <dd class="col-sm-10">{{ $fabriek->naam }}</dd>

            <dt class="col-sm-2">Adres</dt>
            <dd class="col-sm-10">{{ $fabriek->adres }}</dd>

            <dt class="col-sm-2">Email</dt>
            <dd class="col-sm-10">
                <a href="mailto:{{ $fabriek->email }}">{{ $fabriek->email }}</a>
            </dd>

            <dt class="col-sm-2">Telefoon</dt>
            <dd class="col-sm-10">
                <a href="tel:{{ $fabriek->telefoon }}">{{ $fabriek->telefoon }}</a>
            </dd>
        </dl>


    </div>
@endsection

