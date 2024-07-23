<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    use HasFactory;
    protected $fillable = ['nomePersonagem', 'descricaoPersonagem', 'idade'];

    public function arco(){
        return $this->hasMany('App\Models\Arco', 'idArco');
    }
}
