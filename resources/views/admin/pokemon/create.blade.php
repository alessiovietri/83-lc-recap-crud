@extends('layouts.app')

@section('page-title', 'Crea un nuovo Pokémon')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <h1>
                Crea un nuovo Pkmn
            </h1>

            <form action="{{ route('pokemon.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nome *</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome del Pkmn" required>
                </div>

                <div class="mb-3">
                    <label for="type_1" class="form-label">Tipo 1 *</label>
                    <input type="text" class="form-control" name="type_1" id="type_1" placeholder="Tipo 1 del Pkmn" required>
                </div>

                <div class="mb-3">
                    <label for="type_2" class="form-label">Tipo 2</label>
                    <input type="text" class="form-control" name="type_2" id="type_2" placeholder="Tipo 2 del Pkmn">
                </div>

                <div class="mb-3">
                    <label for="ev_stage" class="form-label">Stadio evolutivo *</label>
                    <input type="number" class="form-control" name="ev_stage" id="ev_stage" placeholder="Stadio evolutivo del Pkmn" value="1" required>
                </div>

                <div class="mb-3">
                    <label for="shiny" class="form-label">Shiny? * (1 si, 0 no)</label>
                    <input type="number" class="form-control" name="shiny" id="shiny" placeholder="Pkmn shiny?" min="0" max="1" step="1" value="0" required>
                </div>

                <div>
                    <button class="btn btn-success" type="submit">
                        Salva
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
