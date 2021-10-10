@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Wijzig fabriek [{{ $fabriek->naam }}]</h3>
            </div>
            <div class="card-body">
                <form action="/fabrieken/{{ $fabriek->id }}/update" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group row text-center mt-3">
                        <label for="naam" class="col-md-4 col-form-label text-md-right">Naam</label>

                        <div class="col-md-4">
                            <input type="text" id="name" name="naam" class="form-control @error('naam') is-invalid @enderror" value="{{ old('naam') ?? $fabriek->naam }}" autofocus>

                            @error('naam')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row text-center">
                        <label for="adres" class="col-md-4 col-form-label text-md-right">Adres</label>

                        <div class="col-md-4">
                            <input type="text" id="adres" name="adres" class="form-control @error('adres') is-invalid @enderror" value="{{ old('adres') ?? $fabriek->adres }}" autofocus>

                            @error('adres')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row text-center">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                        <div class="col-md-4">
                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $fabriek->email }}" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row text-center">
                        <label for="telefoon" class="col-md-4 col-form-label text-md-right">Telefoon</label>

                        <div class="col-md-4">
                            <input type="tel" id="telefoon" name="telefoon" class="form-control @error('telefoon') is-invalid @enderror" value="{{ old('telefoon') ?? $fabriek->telefoon }}" autofocus>

                            @error('telefoon')
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

