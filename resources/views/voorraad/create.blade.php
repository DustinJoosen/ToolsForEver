@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Voeg toe aan voorraad</h3>
                <p>Als het aantal negatief is, wordt het ervan af getrokken</p>
            </div>
            <div class="card-body">
                <form action="/voorraad/store" method="post">
                    @csrf

                    <div class="form-group row mt-3">
                        <label for="locatie_id" class="col-md-4 col-form-label text-md-right">Locatie</label>

                        <div class="col-md-4">
                            <select name="locatie_id" id="locatie_id" class="custom-select">
                                <option disabled selected value>Kies locatie</option>
                                @foreach($locaties as $locatie)
                                    <option value="{{ $locatie->id }}">{{ $locatie->naam }}</option>
                                @endforeach
                            </select>
                        </div>

                        @error('locatie_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row mt-3">
                        <label for="artikel_id" class="col-md-4 col-form-label text-md-right">Artikel</label>

                        <div class="col-md-4">
                            <select name="artikel_id" id="artikel_id" class="custom-select">
                                <option disabled selected value>Kies artikel</option>
                                @foreach($artikels as $artikel)
                                    <option value="{{ $artikel->id }}">{{ $artikel->naam }}</option>
                                @endforeach
                            </select>
                        </div>

                        @error('locatie_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row text-center mt-3">
                        <label for="aantal" class="col-md-4 col-form-label text-md-right">Aantal</label>

                        <div class="col-md-4">
                            <input type="number" id="aantal" name="aantal" class="form-control @error('aantal') is-invalid @enderror" value="{{ old('aantal') }}" autofocus>

                            @error('aantal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-outline-primary">Voeg toe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection

