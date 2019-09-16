<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadeEspecializacao extends Model
{
    protected $table = "unidade_especializacoes";

    protected $fillable = [
        'unidade_id',
        'especializacao_id',    
    ];
    
    public function unidade()
    {
        return $this->belongsTo('App\Unidades');
    }

    public function especializacao()
    {
        return $this->belongsTo('App\Especializacoes');
    }

}
