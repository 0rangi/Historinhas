<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    use HasFactory;
    protected $fillable = ['nomeHist','descricaoHist','autor','paginas','classificacao',];
    public function genero(){
        return $this->belongsTo('App\Models\Genero');
    }
}
