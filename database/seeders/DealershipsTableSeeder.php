<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
                "uuid"      => Str::uuid(),
                "name" => "Eletroacre",
                "tax" => 1.277,
                "state_id" => 1
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Ceal",
                "tax" => 1.332,
                "state_id" => 2
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "CEA",
                "tax" => 1.132,
                "state_id" => 3
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "AmE",
                "tax" => 1.356,
                "state_id" => 4
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Coelba",
                "tax" => 1.272,
                "state_id" => 5
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Enel CE",
                "tax" => 1.167,
                "state_id" => 6
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "CEB-DIS",
                "tax" => 0.945,
                "state_id" => 7
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "EDP ES",
                "tax" => 1.011,
                "state_id" => 8
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "ELFSM",
                "tax" => 1.22,
                "state_id" => 8
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Chesp",
                "tax" => 1.333,
                "state_id" => 9
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Enel GO",
                "tax" => 1.001,
                "state_id" => 9
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cemar",
                "tax" => 1.452,
                "state_id" => 10
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "EMT",
                "tax" => 1.3120,
                "state_id" => 11
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "EMS",
                "tax" => 1.2320,
                "state_id" => 12
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cemig-D",
                "tax" => 1.191,
                "state_id" => 13
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "DMED",
                "tax" => 0.981,
                "state_id" => 13
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "EMG",
                "tax" => 1.192,
                "state_id" => 13
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Celpa",
                "tax" => 1.5750,
                "state_id" => 14
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "EBO",
                "tax" => 1.0520,
                "state_id" => 15
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "EPB",
                "tax" => 1.2660,
                "state_id" => 15
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Castro - DIS",
                "tax" => 0.606,
                "state_id" => 16
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Ceral DIS",
                "tax" => 0.919,
                "state_id" => 16
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cocel",
                "tax" => 1.291,
                "state_id" => 16
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Copel-DIS",
                "tax" => 0.94,
                "state_id" => 16
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Forcel",
                "tax" => 1.303,
                "state_id" => 16
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Celpe",
                "tax" => 1.2310,
                "state_id" => 17
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cepisa",
                "tax" => 1.4090,
                "state_id" => 18
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Ceral Araruama",
                "tax" => 2.262,
                "state_id" => 19
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "CERCI",
                "tax" => 2.023,
                "state_id" => 19
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Ceres",
                "tax" => 1.952,
                "state_id" => 19
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Enel RJ",
                "tax" => 1.28,
                "state_id" => 19
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "ENF",
                "tax" => 1.304,
                "state_id" => 19
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Light",
                "tax" => 1.212,
                "state_id" => 19
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cosern",
                "tax" => 1.1300,
                "state_id" => 20
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "CEEE-D",
                "tax" => 1.029,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "CERFOX",
                "tax" => 0.981,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Ceriluz",
                "tax" => 0.839,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cermissões",
                "tax" => 1.04,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Certaja",
                "tax" => 1.044,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Certel",
                "tax" => 0.818,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "CERTHIL",
                "tax" => 0.926,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cooperluz",
                "tax" => 0.676,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "COOPERNORTE",
                "tax" => 1.698,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "COOPERSUL",
                "tax" => 1.21,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Coprel",
                "tax" => 0.796,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Creluz-D",
                "tax" => 0.996,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Creral",
                "tax" => 1.138,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Demei",
                "tax" => 1.14,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Eletrocar",
                "tax" => 1.399,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Hidropan",
                "tax" => 1.327,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "MuxEnergia",
                "tax" => 0.968,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "RGE (agrupada)",
                "tax" => 1.055,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Uhenpal",
                "tax" => 1.137,
                "state_id" => 21
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Ceron",
                "tax" => 1.1100,
                "state_id" => 22
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Roraima Energia",
                "tax" => 1.1660,
                "state_id" => 23
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "CEGERO",
                "tax" => 0.555,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cejama",
                "tax" => 1.191,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Celesc-DIS",
                "tax" => 0.884,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Ceprag",
                "tax" => 1.391,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Ceraça",
                "tax" => 1.073,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Ceral Anitápolis",
                "tax" => 1.344,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cerbranorte",
                "tax" => 1.001,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cerej",
                "tax" => 1.361,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cergal",
                "tax" => 1.306,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cergapa",
                "tax" => 1.055,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cergral",
                "tax" => 1.302,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cermoful",
                "tax" => 1.318,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cerpalo",
                "tax" => 1.507,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cersad",
                "tax" => 1.147,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cersul",
                "tax" => 0.889,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Certrel",
                "tax" => 1.661,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Codesam",
                "tax" => 0.696,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Coopera",
                "tax" => 0.753,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cooperaliança",
                "tax" => 0.967,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Coopercocal",
                "tax" => 0.976,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Coopermila",
                "tax" => 0.878,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "COOPERZEM",
                "tax" => 1.033,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Coorsel",
                "tax" => 1.099,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "EFLJC",
                "tax" => 1.37,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Eflul",
                "tax" => 1.314,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Ienergia",
                "tax" => 0.962,
                "state_id" => 24
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cedrap",
                "tax" => 1.366,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cedri",
                "tax" => 1.323,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cemirim",
                "tax" => 0.779,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cerim",
                "tax" => 1.11,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Ceripa",
                "tax" => 0.947,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Ceris",
                "tax" => 1.389,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "CERMC",
                "tax" => 0.987,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cernhe",
                "tax" => 0.962,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cerpro",
                "tax" => 0.98,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "CERRP",
                "tax" => 1.066,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "CERVAM",
                "tax" => 1.213,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "CPFL Paulista",
                "tax" => 0.953,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "CPFL Piratininga",
                "tax" => 0.933,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "CPFL Santa Cruz (agrupada)",
                "tax" => 0.948,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "EDP SP",
                "tax" => 0.955,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Elektro",
                "tax" => 1.063,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Enel SP",
                "tax" => 1.004,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "ESS (agrupada)",
                "tax" => 0.924,
                "state_id" => 25
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Cercos",
                "tax" => 1.654,
                "state_id" => 26
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "ESE",
                "tax" => 1.144,
                "state_id" => 26
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "Sulgipe",
                "tax" => 1.317,
                "state_id" => 26
            ],
            [
                "uuid"      => Str::uuid(),
                "name" => "ETO",
                "tax" => 1.54,
                "state_id" => 27
            ]
        ]);
    }
}
