<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Pokemon;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemon = Pokemon::all();

        // prendi il file resources/views/admin/pokemon/index.blade.php
        return view('admin.pokemon.index', compact('pokemon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pokemon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newPokemon = Pokemon::create($data);
        // OPPURE
        // $newPokemon = new Pokemon;
        // $newPokemon->name = $data['name'];
        // $newPokemon->type_1 = $data['type_1'];
        // $newPokemon->type_2 = $data['type_2'];
        // $newPokemon->ev_stage = $data['ev_stage'];
        // $newPokemon->shiny = $data['shiny'];
        // $newPokemon->save();

        return redirect()->route('pokemon.show', $newPokemon->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pokemon = Pokemon::findOrFail($id);

        // prendi il file resources/views/admin/pokemon/show.blade.php
        return view('admin.pokemon.show', compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pokemon = Pokemon::findOrFail($id);

        // prendi il file resources/views/admin/pokemon/edit.blade.php
        return view('admin.pokemon.edit', compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $pokemon = Pokemon::findOrFail($id);
        $pokemon->update($data);
        // OPPURE
        // $pokemon->name = $data['name'];
        // $pokemon->type_1 = $data['type_1'];
        // $pokemon->type_2 = $data['type_2'];
        // $pokemon->ev_stage = $data['ev_stage'];
        // $pokemon->shiny = $data['shiny'];
        // $pokemon->save();

        return redirect()->route('pokemon.show', $pokemon->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pokemon = Pokemon::findOrFail($id);

        $pokemon->delete();

        return redirect()->route('pokemon.index');
    }
}
