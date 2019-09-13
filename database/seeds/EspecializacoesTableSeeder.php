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


//CEMCAM
    DB::table('especializacoes')->insert(['nome' => 'Assistente Social']);
    DB::table('especializacoes')->insert(['nome' => 'Fisioterapeuta']);
    DB::table('especializacoes')->insert(['nome' => 'Fonoaudiólogo']);
    DB::table('especializacoes')->insert(['nome' => 'Médico Ginecologista E Obstetra']);
    DB::table('especializacoes')->insert(['nome' => 'Médico Mastologista']);
    DB::table('especializacoes')->insert(['nome' => 'Médico Pediatra']);
    DB::table('especializacoes')->insert(['nome' => 'Nutricionista']);
    DB::table('especializacoes')->insert(['nome' => 'Psicólogo']);


//Centro De Especialidade Odontologica De Mesquita

    DB::table('especializacoes')->insert(['nome' => 'Cirurgiao Dentista']);
    DB::table('especializacoes')->insert(['nome' => 'Cirurgiao Dentista Odontologia Para Pacientes Com Necessidades Especiais']);
    DB::table('especializacoes')->insert(['nome' => 'Cirurgiao Dentista Protesista']);
    DB::table('especializacoes')->insert(['nome' => 'Cirurgião Dentista Endodontista']);
    DB::table('especializacoes')->insert(['nome' => 'Cirurgião Dentista Periodontista']);
    DB::table('especializacoes')->insert(['nome' => 'Cirurgião Dentista Traumatologista Bucomaxilofacial']);


//Centro De Especialidades De Fisioterapia E Reabilitacao

    DB::table('especializacoes')->insert(['nome' => 'Fisioterapeuta']);
    DB::table('especializacoes')->insert(['nome' => 'Fisioterapeuta Acupunturista']);
    DB::table('especializacoes')->insert(['nome' => 'Fonoaudiólogo']);
    DB::table('especializacoes')->insert(['nome' => 'Massoterapeuta']);
    DB::table('especializacoes')->insert(['nome' => 'Terapeuta Ocupaciona']);


//Centro Municipal De Saude Parana

    DB::table('especializacoes')->insert(['nome' => 'Assistente Social']);
    DB::table('especializacoes')->insert(['nome' => 'Cirurgiaodentista Da Estrategia De Saude Da Familia']);
    DB::table('especializacoes')->insert(['nome' => 'Fisioterapeuta Geral']);
    DB::table('especializacoes')->insert(['nome' => 'Fonoaudiólogo']);
    DB::table('especializacoes')->insert(['nome' => 'Médico Clínico']);
    DB::table('especializacoes')->insert(['nome' => 'Médico Ginecologista E Obstetra']);
    DB::table('especializacoes')->insert(['nome' => 'Médico Infectologista']);
    DB::table('especializacoes')->insert(['nome' => 'Médico Ortopedista E Traumatologista']);
    DB::table('especializacoes')->insert(['nome' => 'Médico Pediatra']);
    DB::table('especializacoes')->insert(['nome' => 'Nutricionista']);
    DB::table('especializacoes')->insert(['nome' => 'Psicólogo Clínico']);


//Clinica Da Familia Dr Jorge Campos


    DB::table('especializacoes')->insert(['nome' => 'Assistente Social' ]);
    DB::table('especializacoes')->insert(['nome' => 'Cirurgiao Dentista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Cirurgião-Dentista Da Estratégia De Saúde Da Família' ]);
    DB::table('especializacoes')->insert(['nome' => 'Fisioterapeuta Geral' ]);
    DB::table('especializacoes')->insert(['nome' => 'Fonoaudiólogo' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Clínico' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Da Estratégia De Saúde Da Família' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Pediatra' ]);
    DB::table('especializacoes')->insert(['nome' => 'Nutricionista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Profissional De Educação Física Na Saúde' ]);


//Clinica Da Familia Jacutinga

    DB::table('especializacoes')->insert(['nome' => 'Assistente Social' ]);
    DB::table('especializacoes')->insert(['nome' => 'Cirurgiao Dentista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Cirurgião-Dentista Da Estratégia De Saúde Da Família' ]);
    DB::table('especializacoes')->insert(['nome' => 'Farmacêutico' ]);
    DB::table('especializacoes')->insert(['nome' => 'Fisioterapeuta Geral' ]);
    DB::table('especializacoes')->insert(['nome' => 'Fonoaudiólogo' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Da Estratégia De Saúde Da Família' ]);
    DB::table('especializacoes')->insert(['nome' => 'Nutricionista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Profissional De Educação Física Na Saúde' ]);
    DB::table('especializacoes')->insert(['nome' => 'Psicólogo Clínico' ]);


//Clinica Da Familia Sao Jose

    DB::table('especializacoes')->insert(['nome' => 'Assistente Social' ]);
    DB::table('especializacoes')->insert(['nome' => 'Cirurgiaodentista Da Estrategia De Saude Da Familia' ]);
    DB::table('especializacoes')->insert(['nome' => 'Fisioterapeuta Geral' ]);
    DB::table('especializacoes')->insert(['nome' => 'Fonoaudiólogo' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Clínico' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Da Estratégia De Saúde Da Família' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Ginecologista E Obstetra' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Pediatra' ]);
    DB::table('especializacoes')->insert(['nome' => 'Profissional De Educação Física Na Saúde' ]);
    DB::table('especializacoes')->insert(['nome' => 'Psicólogo Clínico' ]);


//Policlínica Municipal Celestina José Ricardo Rosa

    DB::table('especializacoes')->insert(['nome' => 'Angiologista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Coloproctologista Ppi' ]);
    DB::table('especializacoes')->insert(['nome' => 'Endocrinologista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Enfermeiro' ]);
    DB::table('especializacoes')->insert(['nome' => 'Fonoaudiólogo' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Angiologista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Cardiologista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Clínico' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Dermatologista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Gastroenterologista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Hematologista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Homeopata' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Neurologista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Oftalmologista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Ortopedista E Traumatologista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Otorrinolaringologista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Pneumologista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Reumatologista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Urologista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Nutricionista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Psicólogo' ]);
    DB::table('especializacoes')->insert(['nome' => 'Psicólogo Clínico' ]);
    DB::table('especializacoes')->insert(['nome' => 'Psiquiatra' ]);
    DB::table('especializacoes')->insert(['nome' => 'Terapeuta Ocupaciona' ]);

//Unidade Basica De Saude Bnh

    DB::table('especializacoes')->insert(['nome' => 'Médico Clínico' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Ginecologista E Obstetra' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Pediatra' ]);



//Unidade Basica De Saude Cosmorama

    DB::table('especializacoes')->insert(['nome' => 'Médico Clínico' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Ginecologista E Obstetra' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Pediatra' ]);


//Unidade Basica De Saude Vila Norma

    DB::table('especializacoes')->insert(['nome' => 'Cirurgiao Dentista Odontologia Para Pacientes Com Necessidades Especiais' ]);
    DB::table('especializacoes')->insert(['nome' => 'Cirurgião-Dentista Da Estratégia De Saúde Da Família' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Clínico' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Ginecologista E Obstetra' ]);


//Unidade Basica De Saúde Chatuba

    DB::table('especializacoes')->insert(['nome' => 'Médico Clínico' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Da Estratégia De Saúde Da Família' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Ginecologista E Obstetra' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Pediatra' ]);

//Unidade Básica De Saúde Banco De Areia

    DB::table('especializacoes')->insert(['nome' => 'Médico Clínico' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Ginecologista E Obstetra' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Pediatra' ]);

//Unidade Básica De Saúde Edson Passos

    DB::table('especializacoes')->insert(['nome' => 'Generalista' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Clínico' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Ginecologista E Obstetra' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Pediatra' ]);

//Unidade Básica De Saúde Santa Terezinha
    
    DB::table('especializacoes')->insert(['nome' => 'Médico Clínico' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Ginecologista E Obstetra' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Pediatra' ]);

//Unidade Básica De Saúde Vila Emil (Parque Ludolf)

    DB::table('especializacoes')->insert(['nome' => 'Médico Clínico' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Ginecologista E Obstetra' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Pediatra' ]);

//Unidade De Saude Da Familia Ana Paula Carlos Lopes

    DB::table('especializacoes')->insert(['nome' => 'Médico Da Estratégia De Saúde Da Família' ]);
    DB::table('especializacoes')->insert(['nome' => 'Odontologia' ]);

//Unidade De Saude Da Familia Edson Passos
    
    DB::table('especializacoes')->insert(['nome' => 'Cirurgiaodentista Da Estrategia De Saude Da Familia' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Da Estratégia De Saúde Da Família ' ]);

//Unidade De Saude Da Familia Maria Cristina

    DB::table('especializacoes')->insert(['nome' => 'Cirurgião-Dentista Da Estratégia De Saúde Da Família' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Da Estratégia De Saúde Da Família' ]);

//Unidade De Saude Da Familia Valter Borges

    DB::table('especializacoes')->insert(['nome' => 'Cirurgiaodentista Da Estrategia De Saude Da Familia' ]);
    DB::table('especializacoes')->insert(['nome' => 'Médico Da Estratégia De Saúde Da Família' ]);

//Unidade De Saude Da Familia Vila Emil (Parque Ludolf)

    DB::table('especializacoes')->insert(['nome' => 'Médico Da Estratégia De Saúde Da Família' ]);
    }
}