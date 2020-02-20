<?php

namespace LaraDex;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = ['name', 'avatar', 'description'];
    /* 
    Get the route key for model
    @return string */

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function pokemons(){
        return $this->hasMany('LaraDex\Pokemon');
    }

}
