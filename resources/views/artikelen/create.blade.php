@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Voeg artikel toe</h3>
            </div>
            <div class="card-body">
                <form action="/artikelen/store" method="post">
                    @csrf

                    <div class="form-group row mt-3">
                        <label for="naam" class="col-md-4 col-form-label text-md-right">Naam</label>

                        <div class="col-md-4">
                            <input type="text" id="name" name="naam" class="form-control @error('naam') is-invalid @enderror" value="{{ old('naam') }}" autofocus>

                            @error('naam')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label for="fabriek_id" class="col-md-4 col-form-label text-md-right">Fabriek</label>

                        <div class="col-md-4">
                            <select name="fabriek_id" id="fabriek_id" class="custom-select">
                                <option disabled selected value>Kies fabriek</option>
                                @foreach($fabrieken as $fabriek)
                                    <option value="{{ $fabriek->id }}">{{ $fabriek->naam }}</option>
                                @endforeach
                            </select>
                        </div>

                        @error('fabriek_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-md-4 col-form-label text-md-right">Type</label>

                        <div class="col-md-4">
                            <input type="text" id="type" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}" autofocus>

                            @error('type')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="min_aantal" class="col-md-4 col-form-label text-md-right">Min aantal</label>

                        <div class="col-md-4">
                            <input type="number" min="0" id="min_aantal" name="min_aantal" class="form-control @error('min_aantal') is-invalid @enderror" value="{{ old('min_aantal') }}" autofocus>

                            @error('min_aantal')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inkoop_waarde" class="col-md-4 col-form-label text-md-right">Inkoop waarde</label>

                        <div class="col-md-4">
                            <input type="number" step="0.01" id="inkoop_waarde" name="inkoop_waarde" class="form-control @error('inkoop_waarde') is-invalid @enderror" value="{{ old('inkoop_waarde') }}" autofocus>

                            @error('inkoop_waarde')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="verkoop_waarde" class="col-md-4 col-form-label text-md-right">Verkoop waarde</label>

                        <div class="col-md-4">
                            <input type="number" step="0.01" id="verkoop_waarde" name="verkoop_waarde" class="form-control @error('verkoop_waarde') is-invalid @enderror" value="{{ old('verkoop_waarde') }}" autofocus>

                            @error('verkoop_waarde')
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

