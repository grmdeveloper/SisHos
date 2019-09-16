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
        DB::table('especializacoes')->insert(['nome' => 'Assistente Social']);
        DB::table('especializacoes')->insert(['nome' => 'Fisioterapeuta']);
        DB::table('especializacoes')->insert(['nome' => 'Fonoaudiólogo']);
        DB::table('especializacoes')->insert(['nome' => 'Médico Ginecologista E Obstetra']);
        DB::table('especializacoes')->insert(['nome' => 'Médico Mastologista']);
        DB::table('especializacoes')->insert(['nome' => 'Médico Pediatra']);
        DB::table('especializacoes')->insert(['nome' => 'Nutricionista']);
        DB::table('especializacoes')->insert(['nome' => 'Psicólogo']);
        DB::table('especializacoes')->insert(['nome' => 'Cirurgiao Dentista']);
        DB::table('especializacoes')->insert(['nome' => 'Cirurgiao Dentista Odontologia Para Pacientes Com Necessidades Especiais']);
        DB::table('especializacoes')->insert(['nome' => 'Cirurgiao Dentista Protesista']);
        DB::table('especializacoes')->insert(['nome' => 'Cirurgião Dentista Endodontista']);
        DB::table('especializacoes')->insert(['nome' => 'Cirurgião Dentista Periodontista']);
        DB::table('especializacoes')->insert(['nome' => 'Cirurgião Dentista Traumatologista Bucomaxilofacial']);
        DB::table('especializacoes')->insert(['nome' => 'Fisioterapeuta Acupunturista']);
        DB::table('especializacoes')->insert(['nome' => 'Massoterapeuta']);
        DB::table('especializacoes')->insert(['nome' => 'Terapeuta Ocupacional']);
        DB::table('especializacoes')->insert(['nome' => 'Cirurgião-dentista Da Estrategia De Saude Da Familia']);
        DB::table('especializacoes')->insert(['nome' => 'Fisioterapeuta Geral']);
        DB::table('especializacoes')->insert(['nome' => 'Médico Clínico']);
        DB::table('especializacoes')->insert(['nome' => 'Médico Infectologista']);
        DB::table('especializacoes')->insert(['nome' => 'Médico Ortopedista E Traumatologista']);
        DB::table('especializacoes')->insert(['nome' => 'Psicólogo Clínico']);
        DB::table('especializacoes')->insert(['nome' => 'empty' ]);
        DB::table('especializacoes')->insert(['nome' => 'Médico Da Estratégia De Saúde Da Família' ]);
        DB::table('especializacoes')->insert(['nome' => 'Profissional De Educação Física Na Saúde' ]);
        DB::table('especializacoes')->insert(['nome' => 'Farmacêutico' ]);
        DB::table('especializacoes')->insert(['nome' => 'Cirurgiao Dentista Odontologia Para Pacientes Com Necessidades Especiais' ]);
        DB::table('especializacoes')->insert(['nome' => 'Coloproctologista Ppi' ]);
        DB::table('especializacoes')->insert(['nome' => 'Endocrinologista' ]);
        DB::table('especializacoes')->insert(['nome' => 'Enfermeiro' ]);
        DB::table('especializacoes')->insert(['nome' => 'Médico Angiologista' ]);
        DB::table('especializacoes')->insert(['nome' => 'Médico Cardiologista' ]);
        DB::table('especializacoes')->insert(['nome' => 'Médico Dermatologista' ]);
        DB::table('especializacoes')->insert(['nome' => 'Médico Gastroenterologista' ]);
        DB::table('especializacoes')->insert(['nome' => 'Médico Hematologista' ]);
        DB::table('especializacoes')->insert(['nome' => 'Médico Homeopata' ]);
        DB::table('especializacoes')->insert(['nome' => 'Médico Neurologista' ]);
        DB::table('especializacoes')->insert(['nome' => 'Médico Oftalmologista' ]);
        DB::table('especializacoes')->insert(['nome' => 'Médico Otorrinolaringologista' ]);
        DB::table('especializacoes')->insert(['nome' => 'Médico Pneumologista' ]);
        DB::table('especializacoes')->insert(['nome' => 'Médico Reumatologista' ]);
        DB::table('especializacoes')->insert(['nome' => 'Médico Urologista' ]);
        DB::table('especializacoes')->insert(['nome' => 'Nutricionista' ]);
        DB::table('especializacoes')->insert(['nome' => 'Psiquiatra' ]);
        DB::table('especializacoes')->insert(['nome' => 'Generalista' ]);
        DB::table('especializacoes')->insert(['nome' => 'Odontologia' ]);
    }
}