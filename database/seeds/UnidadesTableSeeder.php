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
        Unidades::create([
        	"nome" => 		"CLINICA DA FAMILIA JACUTINGA",
        	"endereco" => 	"R. Barão do Rio Branco, 168"
        ]);
        Unidades::create([
        	"nome" => 		"UNIDADE BÁSICA DE SAÚDE EDSON PASSOS",
        	"endereco" => 	"Av. Marechal Castelo Branco, 96"
        ]);        
        Unidades::create([
        	"nome" => 		"CLINICA DA FAMILIA DR JORGE CAMPOS",
        	"endereco" => 	"R. Sergipe,645"
        ]);        
        Unidades::create([
        	"nome" => 		"CENTRO MUNICIPAL DE SAUDE PARANA",
        	"endereco" => 	"R. Paraná, 557"
        ]);        
        Unidades::create([
        	"nome" => 		"UNIDADE BASICA DE SAUDE COSMORAMA",
        	"endereco" => 	"R. Carlos Frahia, 131"
        ]);        
        Unidades::create([
        	"nome" => 		"UNIDADE BASICA DE SAUDE BNH",
        	"endereco" => 	"Av. Oliveiras, 355"
        ]);        
        Unidades::create([
        	"nome" => 		"CLINICA DA FAMILIA SAO JOSE",
        	"endereco" => 	"Av. União, 376"
        ]);        
        Unidades::create([
        	"nome" => 		"UNIDADE DE SAUDE DA FAMILIA MARIA CRISTINA",
        	"endereco" => 	"R. Ermelinda, 190"
        ]);        
        Unidades::create([
        	"nome" => 		"POLICLÍNICA MUNICIPAL CELESTINA JOSÉ RICARDO ROSA.",
        	"endereco" => 	"R. Paraná, 557"
        ]);        
        Unidades::create([
        	"nome" => 		"CEMCAM",
        	"endereco" => 	"Av. União, 676"
        ]);        
        Unidades::create([
        	"nome" => 		"UNIDADE BASICA DE SAÚDE CHATUBA",
        	"endereco" => 	"R. Cel. França Leite, 732"
        ]);        
        Unidades::create([
        	"nome" => 		"UNIDADE BASICA DE SAUDE NOSSA SENHORA DAS GRACAS",
        	"endereco" => 	"Av. União, 676"
        ]);        
        Unidades::create([
        	"nome" => 		"CENTRO DE ESPECIALIDADE ODONTOLOGICA DE MESQUITA",
        	"endereco" => 	"Av. União, 676"
        ]);        
        Unidades::create([
        	"nome" => 		"UNIDADE DE SAUDE DA FAMILIA VALTER BORGES",
        	"endereco" => 	"R. Inácio Serra, s/n"
        ]);       
        Unidades::create([
        	"nome" => 		"CENTRO DE ESPECIALIDADES DE FISIOTERAPIA E REABILITACAO",
        	"endereco" => 	"Av. União, 676"
        ]);       
        Unidades::create([
        	"nome" => 		"UNIDADE DE SAUDE DA FAMILIA JACUTINGA",
        	"endereco" => 	"R. Tamaru, 585"
        ]);       
        Unidades::create([
        	"nome" => 		"UNIDADE BÁSICA DE SAÚDE VILA EMIL (PARQUE LUDOLF)",
        	"endereco" => 	"R. Hipólito, 845"
        ]);       
        Unidades::create([
        	"nome" => 		"UNIDADE BÁSICA DE SAÚDE BANCO DE AREIA",
        	"endereco" => 	"R. Bicuíba, 418"
        ]);       
        Unidades::create([
        	"nome" => 		"UNIDADE BÁSICA DE SAÚDE SANTA TEREZINHA",
        	"endereco" => 	"Av. Dr. Mario de Abreu, 170"
        ]);       
        Unidades::create([
        	"nome" => 		"UNIDADE DE SAUDE DA FAMILIA ANA PAULA CARLOS LOPES",
        	"endereco" => 	"Praça João Pontes, 188"
        ]); 
        Unidades::create([
        	"nome" => 		"UNIDADE DE SAUDE DA FAMILIA EDSON PASSOS",
        	"endereco" => 	"Av. Marechal Castelo Branco 96"
        ]); 
        Unidades::create([
        	"nome" => 		"UNIDADE BASICA DE SAUDE VILA NORMA",
        	"endereco" => 	"R. Higino Marzo"
        ]);
    }
}