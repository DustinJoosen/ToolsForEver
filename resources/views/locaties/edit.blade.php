@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Wijzig locatie [{{ $locatie->naam }}]</h3>
            </div>
            <div class="card-body">
                <form action="/locaties/{{ $locatie->id }}/update" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group row mt-3">
                        <label for="naam" class="col-md-4 col-form-label text-md-right">Naam</label>

                        <div class="col-md-4">
                            <input type="text" id="naam" name="naam" class="form-control @error('naam') is-invalid @enderror" value="{{ old('naam') ?? $locatie->naam }}" autofocus>

                            @error('naam')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="adres" class="col-md-4 col-form-label text-md-right">Adres</label>

                        <div class="col-md-4">
                            <input type="text" id="adres" name="adres" class="form-control @error('adres') is-invalid @enderror" value="{{ old('adres') ?? $locatie->adres }}" autofocus>

                            @error('adres')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="stad" class="col-md-4 col-form-label text-md-right">Stad</label>

                        <div class="col-md-4">
                            <input type="text" id="stad" name="stad" class="form-control @error('stad') is-invalid @enderror" value="{{ old('stad') ?? $locatie->stad }}" autofocus>

                            @error('stad')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telefoon" class="col-md-4 col-form-label text-md-right">Land</label>

                        <div class="col-md-4">
                            <input type="text" id="land" name="land" class="form-control @error('land') is-invalid @enderror" value="{{ old('land') ?? $locatie->land }}" autofocus>

                            @error('land')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-outline-primary">Sla op</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection

