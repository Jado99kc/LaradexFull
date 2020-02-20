<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;
use LaraDex\Pokemon;
use LaraDex\Trainer;

class PokemonController extends Controller
{
    public function index(Trainer $trainer, Request $request){
        if($request->ajax()){
            //$pokemons = $trainer->pokemons;
            return response()->json($trainer->pokemons, 200);
           
        }
        return view('pokemons.index');
    }

    public function store(Trainer $trainer,Request $request){

        if($request->ajax()){
            $pokemon =  new Pokemon();
            $pokemon->name = $request->input('name');
            $pokemon->picture = $request->input('picture');
            $pokemon->trainer()->associate($trainer)->save();
            $pokemon->save();

            return response()->json([
                //"Trainer"=>$trainer,
                "Message"=>"Pokemon creado correctamente",
                "pokemon"=> $pokemon
            ],200);
        }
    }
}
