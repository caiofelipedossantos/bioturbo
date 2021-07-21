<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            [
                'id'        => 1,
                'name'      => 'Acre',
                'initials'  => Str::upper('AC')
            ],
            [
                'id'        => 2,
                'name'      => 'Alagoas',
                'initials'  => Str::upper('AL')
            ],
            [
                'id'        => 3,
                'name'      => 'Amapá',
                'initials'  => Str::upper('AP')
            ],
            [
                'id'        => 4,
                'name'      => 'Amazonas',
                'initials'  => Str::upper('AM')
            ],

            [
                'id'        => 5,
                'name'      => 'Bahia',
                'initials'  => Str::upper('BA')
            ],
            [
                'id'        => 6,
                'name'      => 'Ceará',
                'initials'  => Str::upper('CE')
            ],
            [
                'id'        => 7,
                'name'      => 'Distrito Federal',
                'initials'  => Str::upper('DF')
            ],
            [
                'id'        => 8,
                'name'      => 'Espírito Santo',
                'initials'  => Str::upper('ES')
            ],
            [
                'id'        => 9,
                'name'      => 'Goiás',
                'initials'  => Str::upper('GO')
            ],
            [
                'id'        => 10,
                'name'      => 'Maranhão',
                'initials'  => Str::upper('MA')
            ],
            [
                'id'        => 11,
                'name'      => 'Mato Grosso',
                'initials'  => Str::upper('MT')
            ],
            [
                'id'        => 12,
                'name'      => 'Mato Grosso do Sul',
                'initials'  => Str::upper('MS')
            ],
            [
                'id'        => 13,
                'name'      => 'Minas Gerais',
                'initials'  => Str::upper('MG')
            ],
            [
                'id'        => 14,
                'name'      => 'Pará',
                'initials'  => Str::upper('PA')
            ],
            [
                'id'        => 15,
                'name'      => 'Paraíba',
                'initials'  => Str::upper('PB')
            ],
            [
                'id'        => 16,
                'name'      => 'Paraná',
                'initials'  => Str::upper('PR')
            ],
            [
                'id'        => 17,
                'name'      => 'Pernambuco',
                'initials'  => Str::upper('PE')
            ],
            [
                'id'        => 18,
                'name'      => 'Piauí',
                'initials'  => Str::upper('PI')
            ],
            [
                'id'        => 19,
                'name'      => 'Rio de Janeiro',
                'initials'  => Str::upper('RJ')
            ],
            [
                'id'        => 20,
                'name'      => 'Rio Grande do Norte',
                'initials'  => Str::upper('RN')
            ],
            [
                'id'        => 21,
                'name'      => 'Rio Grande do Sul',
                'initials'  => Str::upper('RS')
            ],
            [
                'id'        => 22,
                'name'      => 'Rondônia',
                'initials'  => Str::upper('RO')
            ],
            [
                'id'        => 23,
                'name'      => 'Roraima',
                'initials'  => Str::upper('RR')
            ],
            [
                'id'        => 24,
                'name'      => 'Santa Catarina',
                'initials'  => Str::upper('SC')
            ],
            [
                'id'        => 25,
                'name'      => 'São Paulo',
                'initials'  => Str::upper('SP')
            ],
            [
                'id'        => 26,
                'name'      => 'Sergipe',
                'initials'  => Str::upper('SE')
            ],
            [
                'id'        => 27,
                'name'      => 'Tocantins',
                'initials'  => Str::upper('TO')
            ]
        ]);
    }
}
