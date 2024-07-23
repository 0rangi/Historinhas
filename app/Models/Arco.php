<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arco extends Model
{
    use HasFactory;
    protected $fillable = ['descricaoArco','nomeArco'];
    public function personagem(){
        return $this->belongsTo('App\Models\Personagem');
    }
}
