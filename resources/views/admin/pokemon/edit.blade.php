@extends('layouts.app')

@section('page-title', 'Modifica Pokémon')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <h1>
                Modifica Pkmn
            </h1>

            <form action="{{ route('pokemon.update', $pokemon->id) }}" method="POST">
                @csrf

                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nome *</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $pokemon->name }}" placeholder="Nome del Pkmn" required>
                </div>

                <div class="mb-3">
                    <label for="type_1" class="form-label">Tipo 1 *</label>
                    <input type="text" class="form-control" name="type_1" id="type_1" value="{{ $pokemon->type_1 }}" placeholder="Tipo 1 del Pkmn" required>
                </div>

                <div class="mb-3">
                    <label for="type_2" class="form-label">Tipo 2</label>
                    <input type="text" class="form-control" name="type_2" id="type_2" value="{{ $pokemon->type_2 }}" placeholder="Tipo 2 del Pkmn">
                </div>

                <div class="mb-3">
                    <label for="ev_stage" class="form-label">Stadio evolutivo *</label>
                    <input type="number" class="form-control" name="ev_stage" id="ev_stage" value="{{ $pokemon->ev_stage }}" placeholder="Stadio evolutivo del Pkmn" value="1" required>
                </div>

                <div class="mb-3">
                    <label for="shiny" class="form-label">Shiny? * (1 si, 0 no)</label>
                    <input type="number" class="form-control" name="shiny" id="shiny" value="{{ $pokemon->shiny }}" placeholder="Pkmn shiny?" min="0" max="1" step="1" value="0" required>
                </div>

                <div>
                    <button class="btn btn-warning" type="submit">
                        Aggiorna
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
