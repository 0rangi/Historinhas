<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    protected $fillable = ['nomeGen', 'descricao'];

    public function historia(){
        return $this->hasMany('App\Models\Historia', 'genId');
    }
}
