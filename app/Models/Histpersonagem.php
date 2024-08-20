<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histpersonagem extends Model
{
    use HasFactory;
    protected $fillable = ['personagem_id','historia_id'];
    public function personagem(){
        return $this->belongsTo('App\Models\Personagem');
}
public function historia(){
    return $this->belongsTo('App\Models\Historia');
}
}