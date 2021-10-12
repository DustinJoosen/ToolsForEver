@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Wijzig artikel [{{ $artikel->naam }}]</h3>
            </div>
            <div class="card-body">
                <form action="/artikelen/{{ $artikel->id }}/update" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group row mt-3">
                        <label for="naam" class="col-md-4 col-form-label text-md-right">Naam</label>

                        <div class="col-md-4">
                            <input type="text" id="name" name="naam" class="form-control @error('naam') is-invalid @enderror" value="{{ old('naam') ?? $artikel->naam }}" autofocus>

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
                                @foreach($fabrieken as $fabriek)
                                    @if($fabriek->id == $artikel->fabriek_id)
                                        <option value="{{ $fabriek->id }}">{{ $fabriek->naam }}</option>
                                    @else
                                        <option value="{{ $fabriek->id }}" selected>{{ $fabriek->naam }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        @error('application_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-md-4 col-form-label text-md-right">Type</label>

                        <div class="col-md-4">
                            <input type="text" id="type" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') ?? $artikel->type }}" autofocus>

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
                            <input type="number" min="0" id="min_aantal" name="min_aantal" class="form-control @error('min_aantal') is-invalid @enderror" value="{{ old('min_aantal') ?? $artikel->min_aantal  }}" autofocus>

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
                            <input type="textx" step="0.01" id="inkoop_waarde" name="inkoop_waarde" class="form-control @error('inkoop_waarde') is-invalid @enderror" value="{{ old('inkoop_waarde') ?? $artikel->inkoop_waarde }}" autofocus>

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
                            <input type="text" id="verkoop_waarde" name="verkoop_waarde" class="form-control @error('verkoop_waarde') is-invalid @enderror" value="{{ old('verkoop_waarde') ?? $artikel->verkoop_waarde }}" autofocus>

                            @error('verkoop_waarde')
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

