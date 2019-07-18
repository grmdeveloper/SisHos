<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
    protected $table = "unidades";

    protected $fillable = [
        'nome',
        'endereco',
    ];

    public function unidade_especializacoes()
    {
        return $this->hasMany('App\UnidadeEspecializacao','unidade_especializacoes');
    }

}
