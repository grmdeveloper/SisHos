<?php

use Illuminate\Database\Seeder;
use App\Especializacoes;
class EspecializacoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Especializacoes::create([
        	'nome'=>'Cardiologista'
        ]);        Especializacoes::create([
        	'nome'=>'Enfermeiro'
        ]);        Especializacoes::create([
        	'nome'=>'Clinico Geral'
        ]);        Especializacoes::create([
        	'nome'=>'Obstetra'
        ]);        Especializacoes::create([
        	'nome'=>'Ortopedista'
        ]);        Especializacoes::create([
        	'nome'=>'Ginecologista'
        ]);        Especializacoes::create([
        	'nome'=>'Otorrino'
        ]);        Especializacoes::create([
        	'nome'=>'Urologista'
        ]);        Especializacoes::create([
        	'nome'=>'Pediatra'
        ]);        Especializacoes::create([
        	'nome'=>'Fiseoterapeuta'
        ]);        Especializacoes::create([
        	'nome'=>'Dermatologista'
        ]);        Especializacoes::create([
        	'nome'=>'Ginecologista da familia'
        ]);       Especializacoes::create([
        	'nome'=>'Hematologista'
        ]);
    }
}
