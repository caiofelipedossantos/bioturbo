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
                'uuid'      => Str::uuid(),
                'name'      => 'Acre',
                'initials'  => Str::upper('AC')
            ],
            [
                'id'        => 2,
                'uuid'      => Str::uuid(),
                'name'      => 'Alagoas',
                'initials'  => Str::upper('AL')
            ],
            [
                'id'        => 3,
                'uuid'      => Str::uuid(),
                'name'      => 'Amapá',
                'initials'  => Str::upper('AP')
            ],
            [
                'id'        => 4,
                'uuid'      => Str::uuid(),
                'name'      => 'Amazonas',
                'initials'  => Str::upper('AM')
            ],

            [
                'id'        => 5,
                'uuid'      => Str::uuid(),
                'name'      => 'Bahia',
                'initials'  => Str::upper('BA')
            ],
            [
                'id'        => 6,
                'uuid'      => Str::uuid(),
                'name'      => 'Ceará',
                'initials'  => Str::upper('CE')
            ],
            [
                'id'        => 7,
                'uuid'      => Str::uuid(),
                'name'      => 'Distrito Federal',
                'initials'  => Str::upper('DF')
            ],
            [
                'id'        => 8,
                'uuid'      => Str::uuid(),
                'name'      => 'Espírito Santo',
                'initials'  => Str::upper('ES')
            ],
            [
                'id'        => 9,
                'uuid'      => Str::uuid(),
                'name'      => 'Goiás',
                'initials'  => Str::upper('GO')
            ],
            [
                'id'        => 10,
                'uuid'      => Str::uuid(),
                'name'      => 'Maranhão',
                'initials'  => Str::upper('MA')
            ],
            [
                'id'        => 11,
                'uuid'      => Str::uuid(),
                'name'      => 'Mato Grosso',
                'initials'  => Str::upper('MT')
            ],
            [
                'id'        => 12,
                'uuid'      => Str::uuid(),
                'name'      => 'Mato Grosso do Sul',
                'initials'  => Str::upper('MS')
            ],
            [
                'id'        => 13,
                'uuid'      => Str::uuid(),
                'name'      => 'Minas Gerais',
                'initials'  => Str::upper('MG')
            ],
            [
                'id'        => 14,
                'uuid'      => Str::uuid(),
                'name'      => 'Pará',
                'initials'  => Str::upper('PA')
            ],
            [
                'id'        => 15,
                'uuid'      => Str::uuid(),
                'name'      => 'Paraíba',
                'initials'  => Str::upper('PB')
            ],
            [
                'id'        => 16,
                'uuid'      => Str::uuid(),
                'name'      => 'Paraná',
                'initials'  => Str::upper('PR')
            ],
            [
                'id'        => 17,
                'uuid'      => Str::uuid(),
                'name'      => 'Pernambuco',
                'initials'  => Str::upper('PE')
            ],
            [
                'id'        => 18,
                'uuid'      => Str::uuid(),
                'name'      => 'Piauí',
                'initials'  => Str::upper('PI')
            ],
            [
                'id'        => 19,
                'uuid'      => Str::uuid(),
                'name'      => 'Rio de Janeiro',
                'initials'  => Str::upper('RJ')
            ],
            [
                'id'        => 20,
                'uuid'      => Str::uuid(),
                'name'      => 'Rio Grande do Norte',
                'initials'  => Str::upper('RN')
            ],
            [
                'id'        => 21,
                'uuid'      => Str::uuid(),
                'name'      => 'Rio Grande do Sul',
                'initials'  => Str::upper('RS')
            ],
            [
                'id'        => 22,
                'uuid'      => Str::uuid(),
                'name'      => 'Rondônia',
                'initials'  => Str::upper('RO')
            ],
            [
                'id'        => 23,
                'uuid'      => Str::uuid(),
                'name'      => 'Roraima',
                'initials'  => Str::upper('RR')
            ],
            [
                'id'        => 24,
                'uuid'      => Str::uuid(),
                'name'      => 'Santa Catarina',
                'initials'  => Str::upper('SC')
            ],
            [
                'id'        => 25,
                'uuid'      => Str::uuid(),
                'name'      => 'São Paulo',
                'initials'  => Str::upper('SP')
            ],
            [
                'id'        => 26,
                'uuid'      => Str::uuid(),
                'name'      => 'Sergipe',
                'initials'  => Str::upper('SE')
            ],
            [
                'id'        => 27,
                'uuid'      => Str::uuid(),
                'name'      => 'Tocantins',
                'initials'  => Str::upper('TO')
            ]
        ]);
    }
}
