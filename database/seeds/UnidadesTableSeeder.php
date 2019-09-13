<?php

use Illuminate\Database\Seeder;
use App\Unidades;
class UnidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('unidades')->insert(['nome' => 'CEMCAM',
                    "endereco" =>   "Av. União, 676"
        ]);

        DB::table('unidades')->insert(['nome' => 'Centro De Especialidade Odontologica De Mesquita',            
            "endereco" =>   "Av. União, 676"
        ]);

        DB::table('unidades')->insert(['nome' => 'Centro De Especialidades De Fisioterapia E Reabilitacao',
                    "endereco" =>   "Av. União, 676"
        ]);

        DB::table('unidades')->insert(['nome' => 'Centro Municipal De Saude Parana',            
            "endereco" =>   "R. Paraná, 557"]);

        DB::table('unidades')->insert(['nome' => 'Clinica Da Familia Dr Jorge Campos',
            "endereco" =>     "R. Sergipe,645"]);

        DB::table('unidades')->insert(['nome' => 'Clinica Da Familia Jacutinga', 
            'endereco' =>   'R. Barão do Rio Branco, 168']);

        DB::table('unidades')->insert(['nome' => 'Clinica Da Familia Sao Jose', 
                    "endereco" =>   "Av. União, 376"
        ]);

        DB::table('unidades')->insert(['nome' => 'Policlínica Municipal Celestina José Ricardo Rosa',
                    "endereco" =>   "R. Paraná, 557"
        ]);

        DB::table('unidades')->insert(['nome' => 'Unidade Basica De Saude Bnh',
                    "endereco" =>   "Av. Oliveiras, 355"
        ]);

        DB::table('unidades')->insert(['nome' => 'Unidade Basica De Saude Cosmorama',
                    "endereco" =>   "R. Carlos Frahia, 131"
        ]);

        DB::table('unidades')->insert(['nome' => 'Unidade Basica De Saude Vila Norma',
                    "endereco" =>   "R. Higino Marzo"
        ]);

        DB::table('unidades')->insert(['nome' => 'Unidade Basica De Saúde Chatuba',
                    "endereco" =>   "R. Cel. França Leite, 732"
        ]);

        DB::table('unidades')->insert(['nome' => 'Unidade Básica De Saúde Banco De Areia',
                    "endereco" =>   "R. Bicuíba, 418"
        ]);

        DB::table('unidades')->insert(['nome' => 'Unidade Básica De Saúde Edson Passos',
            "endereco" =>    "Av. Marechal Castelo Branco, 96"
        ]);

        DB::table('unidades')->insert(['nome' => 'Unidade Básica De Saúde Santa Terezinha',
                    "endereco" =>   "Av. Dr. Mario de Abreu, 170"
        ]);

        DB::table('unidades')->insert(['nome' => 'Unidade Básica De Saúde Vila Emil (Parque Ludolf)',
                    "endereco" =>   "R. Hipólito, 845"
        ]);

        DB::table('unidades')->insert(['nome' => 'Unidade De Saude Da Familia Ana Paula Carlos Lopes',
                    "endereco" =>   "Praça João Pontes, 188"
        ]);

        DB::table('unidades')->insert(['nome' => 'Unidade De Saude Da Familia Edson Passos',
                    "endereco" =>   "Av. Marechal Castelo Branco 96"
        ]);

        DB::table('unidades')->insert(['nome' => 'Unidade De Saude Da Familia Maria Cristina',
                    "endereco" =>   "R. Ermelinda, 190"
        ]);

        DB::table('unidades')->insert(['nome' => 'Unidade De Saude Da Familia Valter Borges',
                    "endereco" =>   "R. Inácio Serra, s/n"
        ]);

        DB::table('unidades')->insert(['nome' => 'Unidade De Saude Da Familia Vila Emil (Parque Ludolf)',
                    "endereco" =>   "R. Hipólito, 845"
        ]);
    }
}