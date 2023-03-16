@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center">

            <div class="card">
                <div class="card-body">
                    <h1>
                        Pokédex
                    </h1>
                    <br>
                    <a href="{{ route('pokemon.create') }}" class="btn btn-success">
                        Crea un Pokémon
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <ul>
                        @foreach($pokemon as $singlePokemon)
                            <li>
                                {{ $singlePokemon->name }}
                                <br>
                                <a href="{{ route('pokemon.show', $singlePokemon->id) }}" class="btn btn-primary">
                                    Vedi
                                </a>
                                <br>
                                <a href="{{ route('pokemon.edit', $singlePokemon->id) }}" class="btn btn-warning">
                                    Aggiorna
                                </a>
                                <br>
                                <form onsubmit="return confirm('Sei sicuro di voler eliminare questo Pkmn?');" action="{{ route('pokemon.destroy', $singlePokemon->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Elimina
                                    </button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
