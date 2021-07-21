<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DealershipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dealerships')->insert([
            [
                "name" => "Eletroacre",
                "tax" => 1.277,
                "state_id" => 1
            ],
            [
                "name" => "Ceal",
                "tax" => 1.332,
                "state_id" => 2
            ],
            [
                "name" => "CEA",
                "tax" => 1.132,
                "state_id" => 3
            ],
            [
                "name" => "AmE",
                "tax" => 1.356,
                "state_id" => 4
            ],
            [
                "name" => "Coelba",
                "tax" => 1.272,
                "state_id" => 5
            ],
            [
                "name" => "Enel CE",
                "tax" => 1.167,
                "state_id" => 6
            ],
            [
                "name" => "CEB-DIS",
                "tax" => 0.945,
                "state_id" => 7
            ],
            [
                "name" => "EDP ES",
                "tax" => 1.011,
                "state_id" => 8
            ],
            [
                "name" => "ELFSM",
                "tax" => 1.22,
                "state_id" => 8
            ],
            [
                "name" => "Chesp",
                "tax" => 1.333,
                "state_id" => 9
            ],
            [
                "name" => "Enel GO",
                "tax" => 1.001,
                "state_id" => 9
            ],
            [
                "name" => "Cemar",
                "tax" => 1.452,
                "state_id" => 10
            ],
            [
                "name" => "EMT",
                "tax" => 1.3120,
                "state_id" => 11
            ],
            [
                "name" => "EMS",
                "tax" => 1.2320,
                "state_id" => 12
            ],
            [
                "name" => "Cemig-D",
                "tax" => 1.191,
                "state_id" => 13
            ],
            [
                "name" => "DMED",
                "tax" => 0.981,
                "state_id" => 13
            ],
            [
                "name" => "EMG",
                "tax" => 1.192,
                "state_id" => 13
            ],
            [
                "name" => "Celpa",
                "tax" => 1.5750,
                "state_id" => 14
            ],
            [
                "name" => "EBO",
                "tax" => 1.0520,
                "state_id" => 15
            ],
            [
                "name" => "EPB",
                "tax" => 1.2660,
                "state_id" => 15
            ],
            [
                "name" => "Castro - DIS",
                "tax" => 0.606,
                "state_id" => 16
            ],
            [
                "name" => "Ceral DIS",
                "tax" => 0.919,
                "state_id" => 16
            ],
            [
                "name" => "Cocel",
                "tax" => 1.291,
                "state_id" => 16
            ],
            [
                "name" => "Copel-DIS",
                "tax" => 0.94,
                "state_id" => 16
            ],
            [
                "name" => "Forcel",
                "tax" => 1.303,
                "state_id" => 16
            ],
            [
                "name" => "Celpe",
                "tax" => 1.2310,
                "state_id" => 17
            ],
            [
                "name" => "Cepisa",
                "tax" => 1.4090,
                "state_id" => 18
            ],
            [
                "name" => "Ceral Araruama",
                "tax" => 2.262,
                "state_id" => 19
            ],
            [
                "name" => "CERCI",
                "tax" => 2.023,
                "state_id" => 19
            ],
            [
                "name" => "Ceres",
                "tax" => 1.952,
                "state_id" => 19
            ],
            [
                "name" => "Enel RJ",
                "tax" => 1.28,
                "state_id" => 19
            ],
            [
                "name" => "ENF",
                "tax" => 1.304,
                "state_id" => 19
            ],
            [
                "name" => "Light",
                "tax" => 1.212,
                "state_id" => 19
            ],
            [
                "name" => "Cosern",
                "tax" => 1.1300,
                "state_id" => 20
            ],
            [
                "name" => "CEEE-D",
                "tax" => 1.029,
                "state_id" => 21
            ],
            [
                "name" => "CERFOX",
                "tax" => 0.981,
                "state_id" => 21
            ],
            [
                "name" => "Ceriluz",
                "tax" => 0.839,
                "state_id" => 21
            ],
            [
                "name" => "Cermissões",
                "tax" => 1.04,
                "state_id" => 21
            ],
            [
                "name" => "Certaja",
                "tax" => 1.044,
                "state_id" => 21
            ],
            [
                "name" => "Certel",
                "tax" => 0.818,
                "state_id" => 21
            ],
            [
                "name" => "CERTHIL",
                "tax" => 0.926,
                "state_id" => 21
            ],
            [
                "name" => "Cooperluz",
                "tax" => 0.676,
                "state_id" => 21
            ],
            [
                "name" => "COOPERNORTE",
                "tax" => 1.698,
                "state_id" => 21
            ],
            [
                "name" => "COOPERSUL",
                "tax" => 1.21,
                "state_id" => 21
            ],
            [
                "name" => "Coprel",
                "tax" => 0.796,
                "state_id" => 21
            ],
            [
                "name" => "Creluz-D",
                "tax" => 0.996,
                "state_id" => 21
            ],
            [
                "name" => "Creral",
                "tax" => 1.138,
                "state_id" => 21
            ],
            [
                "name" => "Demei",
                "tax" => 1.14,
                "state_id" => 21
            ],
            [
                "name" => "Eletrocar",
                "tax" => 1.399,
                "state_id" => 21
            ],
            [
                "name" => "Hidropan",
                "tax" => 1.327,
                "state_id" => 21
            ],
            [
                "name" => "MuxEnergia",
                "tax" => 0.968,
                "state_id" => 21
            ],
            [
                "name" => "RGE (agrupada)",
                "tax" => 1.055,
                "state_id" => 21
            ],
            [
                "name" => "Uhenpal",
                "tax" => 1.137,
                "state_id" => 21
            ],
            [
                "name" => "Ceron",
                "tax" => 1.1100,
                "state_id" => 22
            ],
            [
                "name" => "Roraima Energia",
                "tax" => 1.1660,
                "state_id" => 23
            ],
            [
                "name" => "CEGERO",
                "tax" => 0.555,
                "state_id" => 24
            ],
            [
                "name" => "Cejama",
                "tax" => 1.191,
                "state_id" => 24
            ],
            [
                "name" => "Celesc-DIS",
                "tax" => 0.884,
                "state_id" => 24
            ],
            [
                "name" => "Ceprag",
                "tax" => 1.391,
                "state_id" => 24
            ],
            [
                "name" => "Ceraça",
                "tax" => 1.073,
                "state_id" => 24
            ],
            [
                "name" => "Ceral Anitápolis",
                "tax" => 1.344,
                "state_id" => 24
            ],
            [
                "name" => "Cerbranorte",
                "tax" => 1.001,
                "state_id" => 24
            ],
            [
                "name" => "Cerej",
                "tax" => 1.361,
                "state_id" => 24
            ],
            [
                "name" => "Cergal",
                "tax" => 1.306,
                "state_id" => 24
            ],
            [
                "name" => "Cergapa",
                "tax" => 1.055,
                "state_id" => 24
            ],
            [
                "name" => "Cergral",
                "tax" => 1.302,
                "state_id" => 24
            ],
            [
                "name" => "Cermoful",
                "tax" => 1.318,
                "state_id" => 24
            ],
            [
                "name" => "Cerpalo",
                "tax" => 1.507,
                "state_id" => 24
            ],
            [
                "name" => "Cersad",
                "tax" => 1.147,
                "state_id" => 24
            ],
            [
                "name" => "Cersul",
                "tax" => 0.889,
                "state_id" => 24
            ],
            [
                "name" => "Certrel",
                "tax" => 1.661,
                "state_id" => 24
            ],
            [
                "name" => "Codesam",
                "tax" => 0.696,
                "state_id" => 24
            ],
            [
                "name" => "Coopera",
                "tax" => 0.753,
                "state_id" => 24
            ],
            [
                "name" => "Cooperaliança",
                "tax" => 0.967,
                "state_id" => 24
            ],
            [
                "name" => "Coopercocal",
                "tax" => 0.976,
                "state_id" => 24
            ],
            [
                "name" => "Coopermila",
                "tax" => 0.878,
                "state_id" => 24
            ],
            [
                "name" => "COOPERZEM",
                "tax" => 1.033,
                "state_id" => 24
            ],
            [
                "name" => "Coorsel",
                "tax" => 1.099,
                "state_id" => 24
            ],
            [
                "name" => "EFLJC",
                "tax" => 1.37,
                "state_id" => 24
            ],
            [
                "name" => "Eflul",
                "tax" => 1.314,
                "state_id" => 24
            ],
            [
                "name" => "Ienergia",
                "tax" => 0.962,
                "state_id" => 24
            ],
            [
                "name" => "Cedrap",
                "tax" => 1.366,
                "state_id" => 25
            ],
            [
                "name" => "Cedri",
                "tax" => 1.323,
                "state_id" => 25
            ],
            [
                "name" => "Cemirim",
                "tax" => 0.779,
                "state_id" => 25
            ],
            [
                "name" => "Cerim",
                "tax" => 1.11,
                "state_id" => 25
            ],
            [
                "name" => "Ceripa",
                "tax" => 0.947,
                "state_id" => 25
            ],
            [
                "name" => "Ceris",
                "tax" => 1.389,
                "state_id" => 25
            ],
            [
                "name" => "CERMC",
                "tax" => 0.987,
                "state_id" => 25
            ],
            [
                "name" => "Cernhe",
                "tax" => 0.962,
                "state_id" => 25
            ],
            [
                "name" => "Cerpro",
                "tax" => 0.98,
                "state_id" => 25
            ],
            [
                "name" => "CERRP",
                "tax" => 1.066,
                "state_id" => 25
            ],
            [
                "name" => "CERVAM",
                "tax" => 1.213,
                "state_id" => 25
            ],
            [
                "name" => "CPFL Paulista",
                "tax" => 0.953,
                "state_id" => 25
            ],
            [
                "name" => "CPFL Piratininga",
                "tax" => 0.933,
                "state_id" => 25
            ],
            [
                "name" => "CPFL Santa Cruz (agrupada)",
                "tax" => 0.948,
                "state_id" => 25
            ],
            [
                "name" => "EDP SP",
                "tax" => 0.955,
                "state_id" => 25
            ],
            [
                "name" => "Elektro",
                "tax" => 1.063,
                "state_id" => 25
            ],
            [
                "name" => "Enel SP",
                "tax" => 1.004,
                "state_id" => 25
            ],
            [
                "name" => "ESS (agrupada)",
                "tax" => 0.924,
                "state_id" => 25
            ],
            [
                "name" => "Cercos",
                "tax" => 1.654,
                "state_id" => 26
            ],
            [
                "name" => "ESE",
                "tax" => 1.144,
                "state_id" => 26
            ],
            [
                "name" => "Sulgipe",
                "tax" => 1.317,
                "state_id" => 26
            ],
            [
                "name" => "ETO",
                "tax" => 1.54,
                "state_id" => 27
            ]
        ]);
    }
}
