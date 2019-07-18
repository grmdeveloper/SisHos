<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especializacoes extends Model
{
    protected $table = "especializacoes";

    protected $fillable = [
        'nome',
    ];

    public function unidade_especializacoes()
    {
        return $this->hasMany('App\UnidadeEspecializacao','unidade_especializacoes');
    }
}
