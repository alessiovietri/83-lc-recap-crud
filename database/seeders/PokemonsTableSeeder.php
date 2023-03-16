<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Pokemon;

class PokemonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemon = [
            [
                'name' => 'Charmander',
                'type_1' => 'Fuoco',
                'type_2' => null,
                'ev_stage' => 1,
                'shiny' => true,
            ],
            [
                'name' => 'Arcanine',
                'type_1' => 'Fuoco',
                'type_2' => null,
                'ev_stage' => 2,
                'shiny' => false,
            ],
            [
                'name' => 'Lucario',
                'type_1' => 'Acciaio',
                'type_2' => 'Lotta',
                'ev_stage' => 2,
                'shiny' => true,
            ],
            [
                'name' => 'Tyranitar',
                'type_1' => 'Buio',
                'type_2' => 'Roccia',
                'ev_stage' => 3,
                'shiny' => false,
            ],
            [
                'name' => 'Zekrom',
                'type_1' => 'Elettro',
                'type_2' => 'Drago',
                'ev_stage' => 1,
                'shiny' => true,
            ]
        ];

        foreach ($pokemon as $singlePokemon) {
            $newPokemon = new Pokemon;
            $newPokemon->name = $singlePokemon['name'];
            $newPokemon->type_1 = $singlePokemon['type_1'];
            $newPokemon->type_2 = $singlePokemon['type_2'];
            $newPokemon->ev_stage = $singlePokemon['ev_stage'];
            $newPokemon->shiny = $singlePokemon['shiny'];
            $newPokemon->save();
        }
    }
}
