<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            //Acre
            [
                'state_id' => 1,
                'name' => 'Acrelândia',
            ],
            [
                'state_id' => 1,
                'name' => 'Assis Brasil',
            ],
            [
                'state_id' => 1,
                'name' => 'Brasiléia',
            ],
            [
                'state_id' => 1,
                'name' => 'Capixaba',
            ],
            [
                'state_id' => 1,
                'name' => 'Cruzeiro do Sul',
            ],
            [
                'state_id' => 1,
                'name' => 'Feijó',
            ],
            [
                'state_id' => 1,
                'name' => 'Rio Branco',
            ],
            [
                'state_id' => 1,
                'name' => 'Sena Madureira',
            ],
            [
                'state_id' => 1,
                'name' => 'Tarauacá',
            ],
            // Alagoas
            [
                "name" => "Água Branca",
                "state_id" => 2
            ],
            [
                "name" => "Anadia",
                "state_id" => 2
            ],
            [
                "name" => "Arapiraca",
                "state_id" => 2
            ],
            [
                "name" => "Barra de São Miguel",
                "state_id" => 2
            ],
            [
                "name" => "Batalha",
                "state_id" => 2
            ],
            [
                "name" => "Coité do Nóia",
                "state_id" => 2
            ],
            [
                "name" => "Delmiro Gouveia",
                "state_id" => 2
            ],
            [
                "name" => "Feira Grande",
                "state_id" => 2
            ],
            [
                "name" => "Maceió",
                "state_id" => 2
            ],
            [
                "name" => "Marechal Deodoro",
                "state_id" => 2
            ],
            [
                "name" => "Pilar",
                "state_id" => 2
            ],
            [
                "name" => "Santana do Ipanema",
                "state_id" => 2
            ],
            [
                "name" => "São Miguel dos Campos",
                "state_id" => 2
            ],

            // Amapá

            [
                "name" => "Amapá",
                "state_id" => 3
            ],
            [
                "name" => "Calçoene",
                "state_id" => 3
            ],
            [
                "name" => "Cutias",
                "state_id" => 3
            ],
            [
                "name" => "Itaubal",
                "state_id" => 3
            ],
            [
                "name" => "Laranjal do Jari",
                "state_id" => 3
            ],
            [
                "name" => "Macapá",
                "state_id" => 3
            ],
            [
                "name" => "Porto Grande",
                "state_id" => 3
            ],
            [
                "name" => "Tartarugalzinho",
                "state_id" => 3
            ],

            // Amazonas
            [
                "name" => "Apuí",
                "state_id" => 4
            ],
            [
                "name" => "Boca do Acre",
                "state_id" => 4
            ],
            [
                "name" => "Carauari",
                "state_id" => 4
            ],
            [
                "name" => "Humaitá",
                "state_id" => 4
            ],
            [
                "name" => "Iranduba",
                "state_id" => 4
            ],
            [
                "name" => "Itacoatiara",
                "state_id" => 4
            ],
            [
                "name" => "Manacapuru",
                "state_id" => 4
            ],
            [
                "name" => "Manaus",
                "state_id" => 4
            ],
            [
                "name" => "Maués",
                "state_id" => 4
            ],

            // Bahia
            [
                "name" => "Acajutiba",
                "state_id" => 5
            ],
            [
                "name" => "Alagoinhas",
                "state_id" => 5
            ],
            [
                "name" => "Alcobaça",
                "state_id" => 5
            ],
            [
                "name" => "Amargosa",
                "state_id" => 5
            ],
            [
                "name" => "América Dourada",
                "state_id" => 5
            ],
            [
                "name" => "Anagé",
                "state_id" => 5
            ],
            [
                "name" => "Aracatu",
                "state_id" => 5
            ],
            [
                "name" => "Barreiras",
                "state_id" => 5
            ],
            [
                "name" => "Belmonte",
                "state_id" => 5
            ],
            [
                "name" => "Bom Jesus da Lapa",
                "state_id" => 5
            ],
            [
                "name" => "Brotas de Macaúbas",
                "state_id" => 5
            ],
            [
                "name" => "Buerarema",
                "state_id" => 5
            ],
            [
                "name" => "Cachoeira",
                "state_id" => 5
            ],
            [
                "name" => "Caculé",
                "state_id" => 5
            ],
            [
                "name" => "Caetité",
                "state_id" => 5
            ],
            [
                "name" => "Camaçari",
                "state_id" => 5
            ],
            [
                "name" => "Camamu",
                "state_id" => 5
            ],
            [
                "name" => "Campo Formoso",
                "state_id" => 5
            ],
            [
                "name" => "Canápolis",
                "state_id" => 5
            ],
            [
                "name" => "Candiba",
                "state_id" => 5
            ],
            [
                "name" => "Casa Nova",
                "state_id" => 5
            ],
            [
                "name" => "Conceição do Coité",
                "state_id" => 5
            ],
            [
                "name" => "Condeúba",
                "state_id" => 5
            ],
            [
                "name" => "Correntina",
                "state_id" => 5
            ],
            [
                "name" => "Dias d Ávila",
                "state_id" => 5
            ],
            [
                "name" => "Érico Cardoso",
                "state_id" => 5
            ],
            [
                "name" => "Eunápolis",
                "state_id" => 5
            ],
            [
                "name" => "Feira de Santana",
                "state_id" => 5
            ],
            [
                "name" => "Guanambi",
                "state_id" => 5
            ],
            [
                "name" => "Ibiassucê",
                "state_id" => 5
            ],
            [
                "name" => "Ibicaraí",
                "state_id" => 5
            ],
            [
                "name" => "Ibirataia",
                "state_id" => 5
            ],
            [
                "name" => "Ibitiara",
                "state_id" => 5
            ],
            [
                "name" => "Ibotirama",
                "state_id" => 5
            ],
            [
                "name" => "Ilhéus",
                "state_id" => 5
            ],
            [
                "name" => "Ipiaú",
                "state_id" => 5
            ],
            [
                "name" => "Ipirá",
                "state_id" => 5
            ],
            [
                "name" => "Irecê",
                "state_id" => 5
            ],
            [
                "name" => "Itabela",
                "state_id" => 5
            ],
            [
                "name" => "Itaberaba",
                "state_id" => 5
            ],
            [
                "name" => "Itabuna",
                "state_id" => 5
            ],
            [
                "name" => "Itacaré",
                "state_id" => 5
            ],
            [
                "name" => "Itagibá",
                "state_id" => 5
            ],
            [
                "name" => "Itamaraju",
                "state_id" => 5
            ],
            [
                "name" => "Itapetinga",
                "state_id" => 5
            ],
            [
                "name" => "Itatim",
                "state_id" => 5
            ],
            [
                "name" => "Jacobina",
                "state_id" => 5
            ],
            [
                "name" => "Jequié",
                "state_id" => 5
            ],
            [
                "name" => "João Dourado",
                "state_id" => 5
            ],
            [
                "name" => "Juazeiro",
                "state_id" => 5
            ],
            [
                "name" => "Jucuruçu",
                "state_id" => 5
            ],
            [
                "name" => "Jussiape",
                "state_id" => 5
            ],
            [
                "name" => "Lagoa Real",
                "state_id" => 5
            ],
            [
                "name" => "Lauro de Freitas",
                "state_id" => 5
            ],
            [
                "name" => "Lençóis",
                "state_id" => 5
            ],
            [
                "name" => "Licínio de Almeida",
                "state_id" => 5
            ],
            [
                "name" => "Livramento de Nossa Senhora",
                "state_id" => 5
            ],
            [
                "name" => "Luís Eduardo Magalhães",
                "state_id" => 5
            ],
            [
                "name" => "Macaúbas",
                "state_id" => 5
            ],
            [
                "name" => "Mata de São João",
                "state_id" => 5
            ],
            [
                "name" => "Medeiros Neto",
                "state_id" => 5
            ],
            [
                "name" => "Morro do Chapéu",
                "state_id" => 5
            ],
            [
                "name" => "Mortugaba",
                "state_id" => 5
            ],
            [
                "name" => "Mutuípe",
                "state_id" => 5
            ],
            [
                "name" => "Ourolândia",
                "state_id" => 5
            ],
            [
                "name" => "Palmas de Monte Alto",
                "state_id" => 5
            ],
            [
                "name" => "Paramirim",
                "state_id" => 5
            ],
            [
                "name" => "Paripiranga",
                "state_id" => 5
            ],
            [
                "name" => "Paulo Afonso",
                "state_id" => 5
            ],
            [
                "name" => "Pindobaçu",
                "state_id" => 5
            ],
            [
                "name" => "Pintadas",
                "state_id" => 5
            ],
            [
                "name" => "Planalto",
                "state_id" => 5
            ],
            [
                "name" => "Pojuca",
                "state_id" => 5
            ],
            [
                "name" => "Porto Seguro",
                "state_id" => 5
            ],
            [
                "name" => "Ribeira do Pombal",
                "state_id" => 5
            ],
            [
                "name" => "Rio Real",
                "state_id" => 5
            ],
            [
                "name" => "Ruy Barbosa",
                "state_id" => 5
            ],
            [
                "name" => "Salvador",
                "state_id" => 5
            ],
            [
                "name" => "Santa Maria da Vitória",
                "state_id" => 5
            ],
            [
                "name" => "Santana",
                "state_id" => 5
            ],
            [
                "name" => "Santo Antônio de Jesus",
                "state_id" => 5
            ],
            [
                "name" => "Santo Estêvão",
                "state_id" => 5
            ],
            [
                "name" => "São Desidério",
                "state_id" => 5
            ],
            [
                "name" => "São Felipe",
                "state_id" => 5
            ],
            [
                "name" => "São Félix do Coribe",
                "state_id" => 5
            ],
            [
                "name" => "São Sebastião do Passé",
                "state_id" => 5
            ],
            [
                "name" => "Seabra",
                "state_id" => 5
            ],
            [
                "name" => "Sebastião Laranjeiras",
                "state_id" => 5
            ],
            [
                "name" => "Senhor do Bonfim",
                "state_id" => 5
            ],
            [
                "name" => "Sento Sé",
                "state_id" => 5
            ],
            [
                "name" => "Serra do Ramalho",
                "state_id" => 5
            ],
            [
                "name" => "Serrinha",
                "state_id" => 5
            ],
            [
                "name" => "Serrolândia",
                "state_id" => 5
            ],
            [
                "name" => "Sobradinho",
                "state_id" => 5
            ],
            [
                "name" => "Teixeira de Freitas",
                "state_id" => 5
            ],
            [
                "name" => "Tucano",
                "state_id" => 5
            ],
            [
                "name" => "Ubatã",
                "state_id" => 5
            ],
            [
                "name" => "Vitória da Conquista",
                "state_id" => 5
            ],
            [
                "name" => "Wagner",
                "state_id" => 5
            ],
            [
                "name" => "Xique-Xique",
                "state_id" => 5
            ],

            // Ceará
            [
                "name" => "Acaraú",
                "state_id" => 6
            ],
            [
                "name" => "Antonina do Norte",
                "state_id" => 6
            ],
            [
                "name" => "Aquiraz",
                "state_id" => 6
            ],
            [
                "name" => "Aracati",
                "state_id" => 6
            ],
            [
                "name" => "Assaré",
                "state_id" => 6
            ],
            [
                "name" => "Aurora",
                "state_id" => 6
            ],
            [
                "name" => "Barreira",
                "state_id" => 6
            ],
            [
                "name" => "Brejo Santo",
                "state_id" => 6
            ],
            [
                "name" => "Campos Sales",
                "state_id" => 6
            ],
            [
                "name" => "Cariús",
                "state_id" => 6
            ],
            [
                "name" => "Caucaia",
                "state_id" => 6
            ],
            [
                "name" => "Crato",
                "state_id" => 6
            ],
            [
                "name" => "Eusébio",
                "state_id" => 6
            ],
            [
                "name" => "Fortaleza",
                "state_id" => 6
            ],
            [
                "name" => "Granja",
                "state_id" => 6
            ],
            [
                "name" => "Iguatu",
                "state_id" => 6
            ],
            [
                "name" => "Ipu",
                "state_id" => 6
            ],
            [
                "name" => "Itaitinga",
                "state_id" => 6
            ],
            [
                "name" => "Itapipoca",
                "state_id" => 6
            ],
            [
                "name" => "Itatira",
                "state_id" => 6
            ],
            [
                "name" => "Jaguaribe",
                "state_id" => 6
            ],
            [
                "name" => "Juazeiro do Norte",
                "state_id" => 6
            ],
            [
                "name" => "Limoeiro do Norte",
                "state_id" => 6
            ],
            [
                "name" => "Maracanaú",
                "state_id" => 6
            ],
            [
                "name" => "Maranguape",
                "state_id" => 6
            ],
            [
                "name" => "Mombaça",
                "state_id" => 6
            ],
            [
                "name" => "Morada Nova",
                "state_id" => 6
            ],
            [
                "name" => "Nova Russas",
                "state_id" => 6
            ],
            [
                "name" => "Pacajus",
                "state_id" => 6
            ],
            [
                "name" => "Parambu",
                "state_id" => 6
            ],
            [
                "name" => "Penaforte",
                "state_id" => 6
            ],
            [
                "name" => "Pindoretama",
                "state_id" => 6
            ],
            [
                "name" => "Piquet Carneiro",
                "state_id" => 6
            ],
            [
                "name" => "Quixadá",
                "state_id" => 6
            ],
            [
                "name" => "Quixelô",
                "state_id" => 6
            ],
            [
                "name" => "Quixeramobim",
                "state_id" => 6
            ],
            [
                "name" => "Russas",
                "state_id" => 6
            ],
            [
                "name" => "São João do Jaguaribe",
                "state_id" => 6
            ],
            [
                "name" => "Senador Pompeu",
                "state_id" => 6
            ],
            [
                "name" => "Sobral",
                "state_id" => 6
            ],
            [
                "name" => "Tabuleiro do Norte",
                "state_id" => 6
            ],
            [
                "name" => "Tauá",
                "state_id" => 6
            ],
            [
                "name" => "Ubajara",
                "state_id" => 6
            ],
            [
                "name" => "Uruburetama",
                "state_id" => 6
            ],
            [
                "name" => "Varjota",
                "state_id" => 6
            ],

            // Distrito Federal
            [
                "name" => "Brasília",
                "state_id" => 7
            ],

            // Espirito Santo
            [
                "name" => "Afonso Cláudio",
                "state_id" => 8
            ],
            [
                "name" => "Águia Branca",
                "state_id" => 8
            ],
            [
                "name" => "Apiacá",
                "state_id" => 8
            ],
            [
                "name" => "Aracruz",
                "state_id" => 8
            ],
            [
                "name" => "Barra de São Francisco",
                "state_id" => 8
            ],
            [
                "name" => "Cachoeiro de Itapemirim",
                "state_id" => 8
            ],
            [
                "name" => "Cariacica",
                "state_id" => 8
            ],
            [
                "name" => "Castelo",
                "state_id" => 8
            ],
            [
                "name" => "Colatina",
                "state_id" => 8
            ],
            [
                "name" => "Conceição da Barra",
                "state_id" => 8
            ],
            [
                "name" => "Domingos Martins",
                "state_id" => 8
            ],
            [
                "name" => "Fundão",
                "state_id" => 8
            ],
            [
                "name" => "Guarapari",
                "state_id" => 8
            ],
            [
                "name" => "Ibatiba",
                "state_id" => 8
            ],
            [
                "name" => "Ibiraçu",
                "state_id" => 8
            ],
            [
                "name" => "Iúna",
                "state_id" => 8
            ],
            [
                "name" => "Jaguaré",
                "state_id" => 8
            ],
            [
                "name" => "Jerônimo Monteiro",
                "state_id" => 8
            ],
            [
                "name" => "Linhares",
                "state_id" => 8
            ],
            [
                "name" => "Marataízes",
                "state_id" => 8
            ],
            [
                "name" => "Marilândia",
                "state_id" => 8
            ],
            [
                "name" => "Montanha",
                "state_id" => 8
            ],
            [
                "name" => "Muqui",
                "state_id" => 8
            ],
            [
                "name" => "Pedro Canário",
                "state_id" => 8
            ],
            [
                "name" => "Piúma",
                "state_id" => 8
            ],
            [
                "name" => "Ponto Belo",
                "state_id" => 8
            ],
            [
                "name" => "Rio Bananal",
                "state_id" => 8
            ],
            [
                "name" => "São Mateus",
                "state_id" => 8
            ],
            [
                "name" => "Serra",
                "state_id" => 8
            ],
            [
                "name" => "Sooretama",
                "state_id" => 8
            ],
            [
                "name" => "Vargem Alta",
                "state_id" => 8
            ],
            [
                "name" => "Venda Nova do Imigrante",
                "state_id" => 8
            ],
            [
                "name" => "Vila Velha",
                "state_id" => 8
            ],
            [
                "name" => "Vitória",
                "state_id" => 8
            ],

            // Goias
            [
                "name" => "Abadiânia",
                "state_id" => 9
            ],
            [
                "name" => "Acreúna",
                "state_id" => 9
            ],
            [
                "name" => "Águas Lindas de Goiás",
                "state_id" => 9
            ],
            [
                "name" => "Alexânia",
                "state_id" => 9
            ],
            [
                "name" => "Anápolis",
                "state_id" => 9
            ],
            [
                "name" => "Anicuns",
                "state_id" => 9
            ],
            [
                "name" => "Aparecida de Goiânia",
                "state_id" => 9
            ],
            [
                "name" => "Bela Vista de Goiás",
                "state_id" => 9
            ],
            [
                "name" => "Bom Jesus de Goiás",
                "state_id" => 9
            ],
            [
                "name" => "Britânia",
                "state_id" => 9
            ],
            [
                "name" => "Caldas Novas",
                "state_id" => 9
            ],
            [
                "name" => "Campinorte",
                "state_id" => 9
            ],
            [
                "name" => "Campos Verdes",
                "state_id" => 9
            ],
            [
                "name" => "Catalão",
                "state_id" => 9
            ],
            [
                "name" => "Ceres",
                "state_id" => 9
            ],
            [
                "name" => "Cezarina",
                "state_id" => 9
            ],
            [
                "name" => "Cidade Ocidental",
                "state_id" => 9
            ],
            [
                "name" => "Cocalzinho de Goiás",
                "state_id" => 9
            ],
            [
                "name" => "Corumbaíba",
                "state_id" => 9
            ],
            [
                "name" => "Edéia",
                "state_id" => 9
            ],
            [
                "name" => "Formosa",
                "state_id" => 9
            ],
            [
                "name" => "Goianésia",
                "state_id" => 9
            ],
            [
                "name" => "Goiânia",
                "state_id" => 9
            ],
            [
                "name" => "Goianira",
                "state_id" => 9
            ],
            [
                "name" => "Goiás",
                "state_id" => 9
            ],
            [
                "name" => "Goiatuba",
                "state_id" => 9
            ],
            [
                "name" => "Iaciara",
                "state_id" => 9
            ],
            [
                "name" => "Inhumas",
                "state_id" => 9
            ],
            [
                "name" => "Iporá",
                "state_id" => 9
            ],
            [
                "name" => "Itaberaí",
                "state_id" => 9
            ],
            [
                "name" => "Itapaci",
                "state_id" => 9
            ],
            [
                "name" => "Itapuranga",
                "state_id" => 9
            ],
            [
                "name" => "Itarumã",
                "state_id" => 9
            ],
            [
                "name" => "Itumbiara",
                "state_id" => 9
            ],
            [
                "name" => "Jaraguá",
                "state_id" => 9
            ],
            [
                "name" => "Jataí",
                "state_id" => 9
            ],
            [
                "name" => "Leopoldo de Bulhões",
                "state_id" => 9
            ],
            [
                "name" => "Luziânia",
                "state_id" => 9
            ],
            [
                "name" => "Mairipotaba",
                "state_id" => 9
            ],
            [
                "name" => "Matrinchã",
                "state_id" => 9
            ],
            [
                "name" => "Mineiros",
                "state_id" => 9
            ],
            [
                "name" => "Morrinhos",
                "state_id" => 9
            ],
            [
                "name" => "Nerópolis",
                "state_id" => 9
            ],
            [
                "name" => "Niquelândia",
                "state_id" => 9
            ],
            [
                "name" => "Nova Crixás",
                "state_id" => 9
            ],
            [
                "name" => "Nova Veneza",
                "state_id" => 9
            ],
            [
                "name" => "Novo Gama",
                "state_id" => 9
            ],
            [
                "name" => "Orizona",
                "state_id" => 9
            ],
            [
                "name" => "Ouvidor",
                "state_id" => 9
            ],
            [
                "name" => "Palminópolis",
                "state_id" => 9
            ],
            [
                "name" => "Petrolina de Goiás",
                "state_id" => 9
            ],
            [
                "name" => "Piranhas",
                "state_id" => 9
            ],
            [
                "name" => "Pires do Rio",
                "state_id" => 9
            ],
            [
                "name" => "Planaltina",
                "state_id" => 9
            ],
            [
                "name" => "Porangatu",
                "state_id" => 9
            ],
            [
                "name" => "Quirinópolis",
                "state_id" => 9
            ],
            [
                "name" => "Rialma",
                "state_id" => 9
            ],
            [
                "name" => "Rianápolis",
                "state_id" => 9
            ],
            [
                "name" => "Rio Verde",
                "state_id" => 9
            ],
            [
                "name" => "Sanclerlândia",
                "state_id" => 9
            ],
            [
                "name" => "Santa Helena de Goiás",
                "state_id" => 9
            ],
            [
                "name" => "Santo Antônio de Goiás",
                "state_id" => 9
            ],
            [
                "name" => "Santo Antônio do Descoberto",
                "state_id" => 9
            ],
            [
                "name" => "São João da Aliança",
                "state_id" => 9
            ],
            [
                "name" => "São Luís de Montes Belos",
                "state_id" => 9
            ],
            [
                "name" => "São Miguel do Araguaia",
                "state_id" => 9
            ],
            [
                "name" => "São Simão",
                "state_id" => 9
            ],
            [
                "name" => "Senador Canedo",
                "state_id" => 9
            ],
            [
                "name" => "Silvânia",
                "state_id" => 9
            ],
            [
                "name" => "Três Ranchos",
                "state_id" => 9
            ],
            [
                "name" => "Turvânia",
                "state_id" => 9
            ],
            [
                "name" => "Uruaçu",
                "state_id" => 9
            ],
            [
                "name" => "Valparaíso de Goiás",
                "state_id" => 9
            ],
            [
                "name" => "Vicentinópolis",
                "state_id" => 9
            ],

            // Maranhão
            [
                "name" => "Açailândia",
                "state_id" => 10
            ],
            [
                "name" => "Afonso Cunha",
                "state_id" => 10
            ],
            [
                "name" => "Alto Alegre do Maranhão",
                "state_id" => 10
            ],
            [
                "name" => "Arame",
                "state_id" => 10
            ],
            [
                "name" => "Bacabal",
                "state_id" => 10
            ],
            [
                "name" => "Balsas",
                "state_id" => 10
            ],
            [
                "name" => "Barra do Corda",
                "state_id" => 10
            ],
            [
                "name" => "Buriticupu",
                "state_id" => 10
            ],
            [
                "name" => "Capinzal do Norte",
                "state_id" => 10
            ],
            [
                "name" => "Carolina",
                "state_id" => 10
            ],
            [
                "name" => "Caxias",
                "state_id" => 10
            ],
            [
                "name" => "Chapadinha",
                "state_id" => 10
            ],
            [
                "name" => "Codó",
                "state_id" => 10
            ],
            [
                "name" => "Coroatá",
                "state_id" => 10
            ],
            [
                "name" => "Dom Pedro",
                "state_id" => 10
            ],
            [
                "name" => "Estreito",
                "state_id" => 10
            ],
            [
                "name" => "Fortaleza dos Nogueiras",
                "state_id" => 10
            ],
            [
                "name" => "Governador Edison Lobão",
                "state_id" => 10
            ],
            [
                "name" => "Imperatriz",
                "state_id" => 10
            ],
            [
                "name" => "Itinga do Maranhão",
                "state_id" => 10
            ],
            [
                "name" => "Lago da Pedra",
                "state_id" => 10
            ],
            [
                "name" => "Lajeado Novo",
                "state_id" => 10
            ],
            [
                "name" => "Mata Roma",
                "state_id" => 10
            ],
            [
                "name" => "Olho Água das Cunhãs",
                "state_id" => 10
            ],
            [
                "name" => "Paço do Lumiar",
                "state_id" => 10
            ],
            [
                "name" => "Penalva",
                "state_id" => 10
            ],
            [
                "name" => "Pinheiro",
                "state_id" => 10
            ],
            [
                "name" => "Porto Franco",
                "state_id" => 10
            ],
            [
                "name" => "Presidente Dutra",
                "state_id" => 10
            ],
            [
                "name" => "Presidente Vargas",
                "state_id" => 10
            ],
            [
                "name" => "Riachão",
                "state_id" => 10
            ],
            [
                "name" => "Santa Inês",
                "state_id" => 10
            ],
            [
                "name" => "Santa Luzia do Paruá",
                "state_id" => 10
            ],
            [
                "name" => "São Domingos do Maranhão",
                "state_id" => 10
            ],
            [
                "name" => "São João dos Patos",
                "state_id" => 10
            ],
            [
                "name" => "São José de Ribamar",
                "state_id" => 10
            ],
            [
                "name" => "São Luís",
                "state_id" => 10
            ],
            [
                "name" => "São Luís Gonzaga do Maranhão",
                "state_id" => 10
            ],
            [
                "name" => "São Raimundo das Mangabeiras",
                "state_id" => 10
            ],
            [
                "name" => "Timon",
                "state_id" => 10
            ],
            [
                "name" => "Viana",
                "state_id" => 10
            ],
            [
                "name" => "Vitória do Mearim",
                "state_id" => 10
            ],
            [
                "name" => "Vitorino Freire",
                "state_id" => 10
            ],
            [
                "name" => "Zé Doca",
                "state_id" => 10
            ],

            //Mato Grosso
            [
                "name" => "Água Boa",
                "state_id" => 11
            ],
            [
                "name" => "Alta Floresta",
                "state_id" => 11
            ],
            [
                "name" => "Alto Garças",
                "state_id" => 11
            ],
            [
                "name" => "Alto Taquari",
                "state_id" => 11
            ],
            [
                "name" => "Arenápolis",
                "state_id" => 11
            ],
            [
                "name" => "Aripuanã",
                "state_id" => 11
            ],
            [
                "name" => "Barra do Bugres",
                "state_id" => 11
            ],
            [
                "name" => "Barra do Garças",
                "state_id" => 11
            ],
            [
                "name" => "Cáceres",
                "state_id" => 11
            ],
            [
                "name" => "Campo Novo do Parecis",
                "state_id" => 11
            ],
            [
                "name" => "Campo Verde",
                "state_id" => 11
            ],
            [
                "name" => "Canarana",
                "state_id" => 11
            ],
            [
                "name" => "Chapada dos Guimarães",
                "state_id" => 11
            ],
            [
                "name" => "Cláudia",
                "state_id" => 11
            ],
            [
                "name" => "Colíder",
                "state_id" => 11
            ],
            [
                "name" => "Confresa",
                "state_id" => 11
            ],
            [
                "name" => "Conquista D Oeste",
                "state_id" => 11
            ],
            [
                "name" => "Cuiabá",
                "state_id" => 11
            ],
            [
                "name" => "Diamantino",
                "state_id" => 11
            ],
            [
                "name" => "Ipiranga do Norte",
                "state_id" => 11
            ],
            [
                "name" => "Itiquira",
                "state_id" => 11
            ],
            [
                "name" => "Jaciara",
                "state_id" => 11
            ],
            [
                "name" => "Jauru",
                "state_id" => 11
            ],
            [
                "name" => "Juara",
                "state_id" => 11
            ],
            [
                "name" => "Juína",
                "state_id" => 11
            ],
            [
                "name" => "Lucas do Rio Verde",
                "state_id" => 11
            ],
            [
                "name" => "Matupá",
                "state_id" => 11
            ],
            [
                "name" => "Mirassol do Oeste",
                "state_id" => 11
            ],
            [
                "name" => "Nobres",
                "state_id" => 11
            ],
            [
                "name" => "Nova Bandeirantes",
                "state_id" => 11
            ],
            [
                "name" => "Nova Monte Verde",
                "state_id" => 11
            ],
            [
                "name" => "Nova Mutum",
                "state_id" => 11
            ],
            [
                "name" => "Nova Ubiratã",
                "state_id" => 11
            ],
            [
                "name" => "Paranaíta",
                "state_id" => 11
            ],
            [
                "name" => "Paranatinga",
                "state_id" => 11
            ],
            [
                "name" => "Peixoto de Azevedo",
                "state_id" => 11
            ],
            [
                "name" => "Poconé",
                "state_id" => 11
            ],
            [
                "name" => "Pontes e Lacerda",
                "state_id" => 11
            ],
            [
                "name" => "Porto Alegre do Norte",
                "state_id" => 11
            ],
            [
                "name" => "Porto dos Gaúchos",
                "state_id" => 11
            ],
            [
                "name" => "Poxoréu",
                "state_id" => 11
            ],
            [
                "name" => "Primavera do Leste",
                "state_id" => 11
            ],
            [
                "name" => "Rondonópolis",
                "state_id" => 11
            ],
            [
                "name" => "Santo Antônio do Leverger",
                "state_id" => 11
            ],
            [
                "name" => "Sapezal",
                "state_id" => 11
            ],
            [
                "name" => "Sinop",
                "state_id" => 11
            ],
            [
                "name" => "Sorriso",
                "state_id" => 11
            ],
            [
                "name" => "Tabaporã",
                "state_id" => 11
            ],
            [
                "name" => "Tangará da Serra",
                "state_id" => 11
            ],
            [
                "name" => "Tapurah",
                "state_id" => 11
            ],
            [
                "name" => "Várzea Grande",
                "state_id" => 11
            ],
            [
                "name" => "Vera",
                "state_id" => 11
            ],

            //Mato Grosso do Sul
            [
                "name" => "Alcinópolis",
                "state_id" => 12
            ],
            [
                "name" => "Amambai",
                "state_id" => 12
            ],
            [
                "name" => "Angélica",
                "state_id" => 12
            ],
            [
                "name" => "Aquidauana",
                "state_id" => 12
            ],
            [
                "name" => "Aral Moreira",
                "state_id" => 12
            ],
            [
                "name" => "Bataguassu",
                "state_id" => 12
            ],
            [
                "name" => "Bela Vista",
                "state_id" => 12
            ],
            [
                "name" => "Bonito",
                "state_id" => 12
            ],
            [
                "name" => "Caarapó",
                "state_id" => 12
            ],
            [
                "name" => "Campo Grande",
                "state_id" => 12
            ],
            [
                "name" => "Chapadão do Sul",
                "state_id" => 12
            ],
            [
                "name" => "Corumbá",
                "state_id" => 12
            ],
            [
                "name" => "Coxim",
                "state_id" => 12
            ],
            [
                "name" => "Dourados",
                "state_id" => 12
            ],
            [
                "name" => "Glória de Dourados",
                "state_id" => 12
            ],
            [
                "name" => "Iguatemi",
                "state_id" => 12
            ],
            [
                "name" => "Ivinhema",
                "state_id" => 12
            ],
            [
                "name" => "Ladário",
                "state_id" => 12
            ],
            [
                "name" => "Laguna Carapã",
                "state_id" => 12
            ],
            [
                "name" => "Maracaju",
                "state_id" => 12
            ],
            [
                "name" => "Mundo Novo",
                "state_id" => 12
            ],
            [
                "name" => "Naviraí",
                "state_id" => 12
            ],
            [
                "name" => "Nova Andradina",
                "state_id" => 12
            ],
            [
                "name" => "Paranaíba",
                "state_id" => 12
            ],
            [
                "name" => "Ponta Porã",
                "state_id" => 12
            ],
            [
                "name" => "Ribas do Rio Pardo",
                "state_id" => 12
            ],
            [
                "name" => "Rio Brilhante",
                "state_id" => 12
            ],
            [
                "name" => "Rio Verde de Mato Grosso",
                "state_id" => 12
            ],
            [
                "name" => "Santa Rita do Pardo",
                "state_id" => 12
            ],
            [
                "name" => "São Gabriel do Oeste",
                "state_id" => 12
            ],
            [
                "name" => "Sete Quedas",
                "state_id" => 12
            ],
            [
                "name" => "Sonora",
                "state_id" => 12
            ],
            [
                "name" => "Três Lagoas",
                "state_id" => 12
            ],

            // Minas Gerais
            [
                "name" => "Abadia dos Dourados",
                "state_id" => 13
            ],
            [
                "name" => "Abaeté",
                "state_id" => 13
            ],
            [
                "name" => "Abre Campo",
                "state_id" => 13
            ],
            [
                "name" => "Água Comprida",
                "state_id" => 13
            ],
            [
                "name" => "Águas Formosas",
                "state_id" => 13
            ],
            [
                "name" => "Águas Vermelhas",
                "state_id" => 13
            ],
            [
                "name" => "Aimorés",
                "state_id" => 13
            ],
            [
                "name" => "Aiuruoca",
                "state_id" => 13
            ],
            [
                "name" => "Alfenas",
                "state_id" => 13
            ],
            [
                "name" => "Almenara",
                "state_id" => 13
            ],
            [
                "name" => "Alpinópolis",
                "state_id" => 13
            ],
            [
                "name" => "Alvinópolis",
                "state_id" => 13
            ],
            [
                "name" => "Andradas",
                "state_id" => 13
            ],
            [
                "name" => "Andrelândia",
                "state_id" => 13
            ],
            [
                "name" => "Araguari",
                "state_id" => 13
            ],
            [
                "name" => "Araxá",
                "state_id" => 13
            ],
            [
                "name" => "Areado",
                "state_id" => 13
            ],
            [
                "name" => "Astolfo Dutra",
                "state_id" => 13
            ],
            [
                "name" => "Baependi",
                "state_id" => 13
            ],
            [
                "name" => "Bambuí",
                "state_id" => 13
            ],
            [
                "name" => "Bandeira do Sul",
                "state_id" => 13
            ],
            [
                "name" => "Barão de Monte Alto",
                "state_id" => 13
            ],
            [
                "name" => "Barbacena",
                "state_id" => 13
            ],
            [
                "name" => "Barra Longa",
                "state_id" => 13
            ],
            [
                "name" => "Barroso",
                "state_id" => 13
            ],
            [
                "name" => "Belo Horizonte",
                "state_id" => 13
            ],
            [
                "name" => "Betim",
                "state_id" => 13
            ],
            [
                "name" => "Bicas",
                "state_id" => 13
            ],
            [
                "name" => "Bocaiúva",
                "state_id" => 13
            ],
            [
                "name" => "Bom Despacho",
                "state_id" => 13
            ],
            [
                "name" => "Bom Jardim de Minas",
                "state_id" => 13
            ],
            [
                "name" => "Bom Repouso",
                "state_id" => 13
            ],
            [
                "name" => "Brasília de Minas",
                "state_id" => 13
            ],
            [
                "name" => "Brumadinho",
                "state_id" => 13
            ],
            [
                "name" => "Bueno Brandão",
                "state_id" => 13
            ],
            [
                "name" => "Cachoeira Dourada",
                "state_id" => 13
            ],
            [
                "name" => "Caetanópolis",
                "state_id" => 13
            ],
            [
                "name" => "Caeté",
                "state_id" => 13
            ],
            [
                "name" => "Cambuí",
                "state_id" => 13
            ],
            [
                "name" => "Campina Verde",
                "state_id" => 13
            ],
            [
                "name" => "Candeias",
                "state_id" => 13
            ],
            [
                "name" => "Capim Branco",
                "state_id" => 13
            ],
            [
                "name" => "Capitão Enéas",
                "state_id" => 13
            ],
            [
                "name" => "Capitólio",
                "state_id" => 13
            ],
            [
                "name" => "Carandaí",
                "state_id" => 13
            ],
            [
                "name" => "Caratinga",
                "state_id" => 13
            ],
            [
                "name" => "Carmo de Minas",
                "state_id" => 13
            ],
            [
                "name" => "Carmo do Paranaíba",
                "state_id" => 13
            ],
            [
                "name" => "Carmópolis de Minas",
                "state_id" => 13
            ],
            [
                "name" => "Carneirinho",
                "state_id" => 13
            ],
            [
                "name" => "Cássia",
                "state_id" => 13
            ],
            [
                "name" => "Cataguases",
                "state_id" => 13
            ],
            [
                "name" => "Caxambu",
                "state_id" => 13
            ],
            [
                "name" => "Claro dos Poções",
                "state_id" => 13
            ],
            [
                "name" => "Cláudio",
                "state_id" => 13
            ],
            [
                "name" => "Conceição das Alagoas",
                "state_id" => 13
            ],
            [
                "name" => "Congonhal",
                "state_id" => 13
            ],
            [
                "name" => "Conselheiro Lafaiete",
                "state_id" => 13
            ],
            [
                "name" => "Contagem",
                "state_id" => 13
            ],
            [
                "name" => "Coração de Jesus",
                "state_id" => 13
            ],
            [
                "name" => "Coromandel",
                "state_id" => 13
            ],
            [
                "name" => "Coronel Fabriciano",
                "state_id" => 13
            ],
            [
                "name" => "Cristina",
                "state_id" => 13
            ],
            [
                "name" => "Curvelo",
                "state_id" => 13
            ],
            [
                "name" => "Divinópolis",
                "state_id" => 13
            ],
            [
                "name" => "Dores do Indaiá",
                "state_id" => 13
            ],
            [
                "name" => "Engenheiro Navarro",
                "state_id" => 13
            ],
            [
                "name" => "Ervália",
                "state_id" => 13
            ],
            [
                "name" => "Esmeraldas",
                "state_id" => 13
            ],
            [
                "name" => "Espera Feliz",
                "state_id" => 13
            ],
            [
                "name" => "Espinosa",
                "state_id" => 13
            ],
            [
                "name" => "Estiva",
                "state_id" => 13
            ],
            [
                "name" => "Estrela Dalva",
                "state_id" => 13
            ],
            [
                "name" => "Extrema",
                "state_id" => 13
            ],
            [
                "name" => "Fortaleza de Minas",
                "state_id" => 13
            ],
            [
                "name" => "Francisco Sá",
                "state_id" => 13
            ],
            [
                "name" => "Fronteira",
                "state_id" => 13
            ],
            [
                "name" => "Frutal",
                "state_id" => 13
            ],
            [
                "name" => "Goiabeira",
                "state_id" => 13
            ],
            [
                "name" => "Goianá",
                "state_id" => 13
            ],
            [
                "name" => "Governador Valadares",
                "state_id" => 13
            ],
            [
                "name" => "Guanhães",
                "state_id" => 13
            ],
            [
                "name" => "Guapé",
                "state_id" => 13
            ],
            [
                "name" => "Guaraciaba",
                "state_id" => 13
            ],
            [
                "name" => "Guarani",
                "state_id" => 13
            ],
            [
                "name" => "Guarda-Mor",
                "state_id" => 13
            ],
            [
                "name" => "Guaxupé",
                "state_id" => 13
            ],
            [
                "name" => "Ibiá",
                "state_id" => 13
            ],
            [
                "name" => "Ibirité",
                "state_id" => 13
            ],
            [
                "name" => "Igarapé",
                "state_id" => 13
            ],
            [
                "name" => "Ipanema",
                "state_id" => 13
            ],
            [
                "name" => "Ipatinga",
                "state_id" => 13
            ],
            [
                "name" => "Itabira",
                "state_id" => 13
            ],
            [
                "name" => "Itabirito",
                "state_id" => 13
            ],
            [
                "name" => "Itacarambi",
                "state_id" => 13
            ],
            [
                "name" => "Itajubá",
                "state_id" => 13
            ],
            [
                "name" => "Itaú de Minas",
                "state_id" => 13
            ],
            [
                "name" => "Itaúna",
                "state_id" => 13
            ],
            [
                "name" => "Ituiutaba",
                "state_id" => 13
            ],
            [
                "name" => "Jaboticatubas",
                "state_id" => 13
            ],
            [
                "name" => "Jaíba",
                "state_id" => 13
            ],
            [
                "name" => "Janaúba",
                "state_id" => 13
            ],
            [
                "name" => "Januária",
                "state_id" => 13
            ],
            [
                "name" => "Japaraíba",
                "state_id" => 13
            ],
            [
                "name" => "João Monlevade",
                "state_id" => 13
            ],
            [
                "name" => "João Pinheiro",
                "state_id" => 13
            ],
            [
                "name" => "Juiz de Fora",
                "state_id" => 13
            ],
            [
                "name" => "Lagoa Santa",
                "state_id" => 13
            ],
            [
                "name" => "Lavras",
                "state_id" => 13
            ],
            [
                "name" => "Leopoldina",
                "state_id" => 13
            ],
            [
                "name" => "Luz",
                "state_id" => 13
            ],
            [
                "name" => "Machado",
                "state_id" => 13
            ],
            [
                "name" => "Manga",
                "state_id" => 13
            ],
            [
                "name" => "Maria da Fé",
                "state_id" => 13
            ],
            [
                "name" => "Mariana",
                "state_id" => 13
            ],
            [
                "name" => "Mateus Leme",
                "state_id" => 13
            ],
            [
                "name" => "Miraí",
                "state_id" => 13
            ],
            [
                "name" => "Monsenhor Paulo",
                "state_id" => 13
            ],
            [
                "name" => "Montalvânia",
                "state_id" => 13
            ],
            [
                "name" => "Monte Alegre de Minas",
                "state_id" => 13
            ],
            [
                "name" => "Monte Carmelo",
                "state_id" => 13
            ],
            [
                "name" => "Montes Claros",
                "state_id" => 13
            ],
            [
                "name" => "Muriaé",
                "state_id" => 13
            ],
            [
                "name" => "Muzambinho",
                "state_id" => 13
            ],
            [
                "name" => "Nova Lima",
                "state_id" => 13
            ],
            [
                "name" => "Nova Ponte",
                "state_id" => 13
            ],
            [
                "name" => "Oliveira Fortes",
                "state_id" => 13
            ],
            [
                "name" => "Ouro Fino",
                "state_id" => 13
            ],
            [
                "name" => "Ouro Preto",
                "state_id" => 13
            ],
            [
                "name" => "Palma",
                "state_id" => 13
            ],
            [
                "name" => "Pará de Minas",
                "state_id" => 13
            ],
            [
                "name" => "Paraguaçu",
                "state_id" => 13
            ],
            [
                "name" => "Paraopeba",
                "state_id" => 13
            ],
            [
                "name" => "Passos",
                "state_id" => 13
            ],
            [
                "name" => "Patos de Minas",
                "state_id" => 13
            ],
            [
                "name" => "Patrocínio",
                "state_id" => 13
            ],
            [
                "name" => "Pedra Azul",
                "state_id" => 13
            ],
            [
                "name" => "Pedra Bonita",
                "state_id" => 13
            ],
            [
                "name" => "Pedras de Maria da Cruz",
                "state_id" => 13
            ],
            [
                "name" => "Pedro Leopoldo",
                "state_id" => 13
            ],
            [
                "name" => "Perdões",
                "state_id" => 13
            ],
            [
                "name" => "Pimenta",
                "state_id" => 13
            ],
            [
                "name" => "Pirajuba",
                "state_id" => 13
            ],
            [
                "name" => "Pirapora",
                "state_id" => 13
            ],
            [
                "name" => "Piraúba",
                "state_id" => 13
            ],
            [
                "name" => "Piumhi",
                "state_id" => 13
            ],
            [
                "name" => "Poços de Caldas",
                "state_id" => 13
            ],
            [
                "name" => "Pompéu",
                "state_id" => 13
            ],
            [
                "name" => "Ponte Nova",
                "state_id" => 13
            ],
            [
                "name" => "Porto Firme",
                "state_id" => 13
            ],
            [
                "name" => "Pouso Alegre",
                "state_id" => 13
            ],
            [
                "name" => "Ribeirão das Neves",
                "state_id" => 13
            ],
            [
                "name" => "Rio Acima",
                "state_id" => 13
            ],
            [
                "name" => "Rio Casca",
                "state_id" => 13
            ],
            [
                "name" => "Rio Paranaíba",
                "state_id" => 13
            ],
            [
                "name" => "Rochedo de Minas",
                "state_id" => 13
            ],
            [
                "name" => "Rubelita",
                "state_id" => 13
            ],
            [
                "name" => "Sacramento",
                "state_id" => 13
            ],
            [
                "name" => "Salinas",
                "state_id" => 13
            ],
            [
                "name" => "Santa Bárbara",
                "state_id" => 13
            ],
            [
                "name" => "Santa Juliana",
                "state_id" => 13
            ],
            [
                "name" => "Santa Luzia",
                "state_id" => 13
            ],
            [
                "name" => "Santa Rita de Ibitipoca",
                "state_id" => 13
            ],
            [
                "name" => "Santa Rita do Sapucaí",
                "state_id" => 13
            ],
            [
                "name" => "Santa Vitória",
                "state_id" => 13
            ],
            [
                "name" => "Santana de Pirapama",
                "state_id" => 13
            ],
            [
                "name" => "São Domingos das Dores",
                "state_id" => 13
            ],
            [
                "name" => "São Gotardo",
                "state_id" => 13
            ],
            [
                "name" => "São João del Rei",
                "state_id" => 13
            ],
            [
                "name" => "São João do Manteninha",
                "state_id" => 13
            ],
            [
                "name" => "São João do Paraíso",
                "state_id" => 13
            ],
            [
                "name" => "São João Evangelista",
                "state_id" => 13
            ],
            [
                "name" => "São João Nepomuceno",
                "state_id" => 13
            ],
            [
                "name" => "São Joaquim de Bicas",
                "state_id" => 13
            ],
            [
                "name" => "São José da Barra",
                "state_id" => 13
            ],
            [
                "name" => "São José da Lapa",
                "state_id" => 13
            ],
            [
                "name" => "São Lourenço",
                "state_id" => 13
            ],
            [
                "name" => "São Sebastião do Paraíso",
                "state_id" => 13
            ],
            [
                "name" => "São Vicente de Minas",
                "state_id" => 13
            ],
            [
                "name" => "Senador Firmino",
                "state_id" => 13
            ],
            [
                "name" => "Serra do Salitre",
                "state_id" => 13
            ],
            [
                "name" => "Sete Lagoas",
                "state_id" => 13
            ],
            [
                "name" => "Silveirânia",
                "state_id" => 13
            ],
            [
                "name" => "Simonésia",
                "state_id" => 13
            ],
            [
                "name" => "Taiobeiras",
                "state_id" => 13
            ],
            [
                "name" => "Teófilo Otoni",
                "state_id" => 13
            ],
            [
                "name" => "Timóteo",
                "state_id" => 13
            ],
            [
                "name" => "Tiradentes",
                "state_id" => 13
            ],
            [
                "name" => "Três Corações",
                "state_id" => 13
            ],
            [
                "name" => "Três Marias",
                "state_id" => 13
            ],
            [
                "name" => "Três Pontas",
                "state_id" => 13
            ],
            [
                "name" => "Ubá",
                "state_id" => 13
            ],
            [
                "name" => "Uberaba",
                "state_id" => 13
            ],
            [
                "name" => "Uberlândia",
                "state_id" => 13
            ],
            [
                "name" => "Unaí",
                "state_id" => 13
            ],
            [
                "name" => "Varginha",
                "state_id" => 13
            ],
            [
                "name" => "Varjão de Minas",
                "state_id" => 13
            ],
            [
                "name" => "Viçosa",
                "state_id" => 13
            ],

            // Para
            [
                "name" => "Abaetetuba",
                "state_id" => 14
            ],
            [
                "name" => "Acará",
                "state_id" => 14
            ],
            [
                "name" => "Altamira",
                "state_id" => 14
            ],
            [
                "name" => "Ananindeua",
                "state_id" => 14
            ],
            [
                "name" => "Bagre",
                "state_id" => 14
            ],
            [
                "name" => "Barcarena",
                "state_id" => 14
            ],
            [
                "name" => "Belém",
                "state_id" => 14
            ],
            [
                "name" => "Benevides",
                "state_id" => 14
            ],
            [
                "name" => "Bragança",
                "state_id" => 14
            ],
            [
                "name" => "Breu Branco",
                "state_id" => 14
            ],
            [
                "name" => "Breves",
                "state_id" => 14
            ],
            [
                "name" => "Canaã dos Carajás",
                "state_id" => 14
            ],
            [
                "name" => "Capanema",
                "state_id" => 14
            ],
            [
                "name" => "Capitão Poço",
                "state_id" => 14
            ],
            [
                "name" => "Castanhal",
                "state_id" => 14
            ],
            [
                "name" => "Conceição do Araguaia",
                "state_id" => 14
            ],
            [
                "name" => "Curuá",
                "state_id" => 14
            ],
            [
                "name" => "Igarapé-Açu",
                "state_id" => 14
            ],
            [
                "name" => "Ipixuna do Pará",
                "state_id" => 14
            ],
            [
                "name" => "Itaituba",
                "state_id" => 14
            ],
            [
                "name" => "Juruti",
                "state_id" => 14
            ],
            [
                "name" => "Marabá",
                "state_id" => 14
            ],
            [
                "name" => "Marapanim",
                "state_id" => 14
            ],
            [
                "name" => "Marituba",
                "state_id" => 14
            ],
            [
                "name" => "Mojuí dos Campos",
                "state_id" => 14
            ],
            [
                "name" => "Novo Progresso",
                "state_id" => 14
            ],
            [
                "name" => "Novo Repartimento",
                "state_id" => 14
            ],
            [
                "name" => "Ourilândia do Norte",
                "state_id" => 14
            ],
            [
                "name" => "Paragominas",
                "state_id" => 14
            ],
            [
                "name" => "Parauapebas",
                "state_id" => 14
            ],
            [
                "name" => "Prainha",
                "state_id" => 14
            ],
            [
                "name" => "Redenção",
                "state_id" => 14
            ],
            [
                "name" => "Rio Maria",
                "state_id" => 14
            ],
            [
                "name" => "Rondon do Pará",
                "state_id" => 14
            ],
            [
                "name" => "Santa Izabel do Pará",
                "state_id" => 14
            ],
            [
                "name" => "Santa Luzia do Pará",
                "state_id" => 14
            ],
            [
                "name" => "Santana do Araguaia",
                "state_id" => 14
            ],
            [
                "name" => "Santarém",
                "state_id" => 14
            ],
            [
                "name" => "São Domingos do Araguaia",
                "state_id" => 14
            ],
            [
                "name" => "São Domingos do Capim",
                "state_id" => 14
            ],
            [
                "name" => "São João do Araguaia",
                "state_id" => 14
            ],
            [
                "name" => "São Miguel do Guamá",
                "state_id" => 14
            ],
            [
                "name" => "Tucumã",
                "state_id" => 14
            ],
            [
                "name" => "Tucuruí",
                "state_id" => 14
            ],
            [
                "name" => "Xinguara",
                "state_id" => 14
            ],

            // Paraiba
            [
                "name" => "Alagoa Grande",
                "state_id" => 15
            ],
            [
                "name" => "Algodão de Jandaíra",
                "state_id" => 15
            ],
            [
                "name" => "Areia",
                "state_id" => 15
            ],
            [
                "name" => "Assunção",
                "state_id" => 15
            ],
            [
                "name" => "Bananeiras",
                "state_id" => 15
            ],
            [
                "name" => "Bayeux",
                "state_id" => 15
            ],
            [
                "name" => "Cajazeiras",
                "state_id" => 15
            ],
            [
                "name" => "Cajazeirinhas",
                "state_id" => 15
            ],
            [
                "name" => "Campina Grande",
                "state_id" => 15
            ],
            [
                "name" => "Catolé do Rocha",
                "state_id" => 15
            ],
            [
                "name" => "Coremas",
                "state_id" => 15
            ],
            [
                "name" => "Cuité",
                "state_id" => 15
            ],
            [
                "name" => "Guarabira",
                "state_id" => 15
            ],
            [
                "name" => "Gurjão",
                "state_id" => 15
            ],
            [
                "name" => "João Pessoa",
                "state_id" => 15
            ],
            [
                "name" => "Mamanguape",
                "state_id" => 15
            ],
            [
                "name" => "Mari",
                "state_id" => 15
            ],
            [
                "name" => "Marizópolis",
                "state_id" => 15
            ],
            [
                "name" => "Mataraca",
                "state_id" => 15
            ],
            [
                "name" => "Montadas",
                "state_id" => 15
            ],
            [
                "name" => "Monteiro",
                "state_id" => 15
            ],
            [
                "name" => "Patos",
                "state_id" => 15
            ],
            [
                "name" => "Pedras de Fogo",
                "state_id" => 15
            ],
            [
                "name" => "Pombal",
                "state_id" => 15
            ],
            [
                "name" => "Salgadinho",
                "state_id" => 15
            ],
            [
                "name" => "Santa Rita",
                "state_id" => 15
            ],
            [
                "name" => "São Bento",
                "state_id" => 15
            ],
            [
                "name" => "São João do Rio do Peixe",
                "state_id" => 15
            ],
            [
                "name" => "São José da Lagoa Tapada",
                "state_id" => 15
            ],
            [
                "name" => "Sapé",
                "state_id" => 15
            ],
            [
                "name" => "Solânea",
                "state_id" => 15
            ],
            [
                "name" => "Sousa",
                "state_id" => 15
            ],
            [
                "name" => "Uiraúna",
                "state_id" => 15
            ],

            // Paraná
            [
                "name" => "Abatiá",
                "state_id" => 16
            ],
            [
                "name" => "Almirante Tamandaré",
                "state_id" => 16
            ],
            [
                "name" => "Alto Paraíso",
                "state_id" => 16
            ],
            [
                "name" => "Alto Piquiri",
                "state_id" => 16
            ],
            [
                "name" => "Altônia",
                "state_id" => 16
            ],
            [
                "name" => "Alvorada do Sul",
                "state_id" => 16
            ],
            [
                "name" => "Ampére",
                "state_id" => 16
            ],
            [
                "name" => "Andirá",
                "state_id" => 16
            ],
            [
                "name" => "Ângulo",
                "state_id" => 16
            ],
            [
                "name" => "Apucarana",
                "state_id" => 16
            ],
            [
                "name" => "Arapongas",
                "state_id" => 16
            ],
            [
                "name" => "Arapuã",
                "state_id" => 16
            ],
            [
                "name" => "Araruna",
                "state_id" => 16
            ],
            [
                "name" => "Araucária",
                "state_id" => 16
            ],
            [
                "name" => "Assaí",
                "state_id" => 16
            ],
            [
                "name" => "Assis Chateaubriand",
                "state_id" => 16
            ],
            [
                "name" => "Astorga",
                "state_id" => 16
            ],
            [
                "name" => "Bandeirantes",
                "state_id" => 16
            ],
            [
                "name" => "Barbosa Ferraz",
                "state_id" => 16
            ],
            [
                "name" => "Barracão",
                "state_id" => 16
            ],
            [
                "name" => "Bela Vista do Paraíso",
                "state_id" => 16
            ],
            [
                "name" => "Boa Vista da Aparecida",
                "state_id" => 16
            ],
            [
                "name" => "Borrazópolis",
                "state_id" => 16
            ],
            [
                "name" => "Brasilândia do Sul",
                "state_id" => 16
            ],
            [
                "name" => "Cafelândia",
                "state_id" => 16
            ],
            [
                "name" => "Califórnia",
                "state_id" => 16
            ],
            [
                "name" => "Cambé",
                "state_id" => 16
            ],
            [
                "name" => "Campina Grande do Sul",
                "state_id" => 16
            ],
            [
                "name" => "Campo Bonito",
                "state_id" => 16
            ],
            [
                "name" => "Campo Largo",
                "state_id" => 16
            ],
            [
                "name" => "Campo Mourão",
                "state_id" => 16
            ],
            [
                "name" => "Candói",
                "state_id" => 16
            ],
            [
                "name" => "Cascavel",
                "state_id" => 16
            ],
            [
                "name" => "Castro",
                "state_id" => 16
            ],
            [
                "name" => "Cerro Azul",
                "state_id" => 16
            ],
            [
                "name" => "Chopinzinho",
                "state_id" => 16
            ],
            [
                "name" => "Cianorte",
                "state_id" => 16
            ],
            [
                "name" => "Cidade Gaúcha",
                "state_id" => 16
            ],
            [
                "name" => "Colombo",
                "state_id" => 16
            ],
            [
                "name" => "Colorado",
                "state_id" => 16
            ],
            [
                "name" => "Congonhinhas",
                "state_id" => 16
            ],
            [
                "name" => "Contenda",
                "state_id" => 16
            ],
            [
                "name" => "Cornélio Procópio",
                "state_id" => 16
            ],
            [
                "name" => "Cruzeiro do Oeste",
                "state_id" => 16
            ],
            [
                "name" => "Curitiba",
                "state_id" => 16
            ],
            [
                "name" => "Curiúva",
                "state_id" => 16
            ],
            [
                "name" => "Diamante do Norte",
                "state_id" => 16
            ],
            [
                "name" => "Dois Vizinhos",
                "state_id" => 16
            ],
            [
                "name" => "Douradina",
                "state_id" => 16
            ],
            [
                "name" => "Doutor Camargo",
                "state_id" => 16
            ],
            [
                "name" => "Engenheiro Beltrão",
                "state_id" => 16
            ],
            [
                "name" => "Faxinal",
                "state_id" => 16
            ],
            [
                "name" => "Fazenda Rio Grande",
                "state_id" => 16
            ],
            [
                "name" => "Floraí",
                "state_id" => 16
            ],
            [
                "name" => "Foz do Iguaçu",
                "state_id" => 16
            ],
            [
                "name" => "Francisco Alves",
                "state_id" => 16
            ],
            [
                "name" => "Francisco Beltrão",
                "state_id" => 16
            ],
            [
                "name" => "Goioerê",
                "state_id" => 16
            ],
            [
                "name" => "Guairaçá",
                "state_id" => 16
            ],
            [
                "name" => "Guaporema",
                "state_id" => 16
            ],
            [
                "name" => "Guaraniaçu",
                "state_id" => 16
            ],
            [
                "name" => "Guarapuava",
                "state_id" => 16
            ],
            [
                "name" => "Ibaiti",
                "state_id" => 16
            ],
            [
                "name" => "Ibema",
                "state_id" => 16
            ],
            [
                "name" => "Ibiporã",
                "state_id" => 16
            ],
            [
                "name" => "Icaraíma",
                "state_id" => 16
            ],
            [
                "name" => "Iguaraçu",
                "state_id" => 16
            ],
            [
                "name" => "Imbituva",
                "state_id" => 16
            ],
            [
                "name" => "Iretama",
                "state_id" => 16
            ],
            [
                "name" => "Itambaracá",
                "state_id" => 16
            ],
            [
                "name" => "Itambé",
                "state_id" => 16
            ],
            [
                "name" => "Itapejara do Oeste",
                "state_id" => 16
            ],
            [
                "name" => "Ivaí",
                "state_id" => 16
            ],
            [
                "name" => "Ivaiporã",
                "state_id" => 16
            ],
            [
                "name" => "Jacarezinho",
                "state_id" => 16
            ],
            [
                "name" => "Jaguapitã",
                "state_id" => 16
            ],
            [
                "name" => "Jaguariaíva",
                "state_id" => 16
            ],
            [
                "name" => "Jandaia do Sul",
                "state_id" => 16
            ],
            [
                "name" => "Janiópolis",
                "state_id" => 16
            ],
            [
                "name" => "Japurá",
                "state_id" => 16
            ],
            [
                "name" => "Jataizinho",
                "state_id" => 16
            ],
            [
                "name" => "Jesuítas",
                "state_id" => 16
            ],
            [
                "name" => "Juranda",
                "state_id" => 16
            ],
            [
                "name" => "Lindoeste",
                "state_id" => 16
            ],
            [
                "name" => "Lobato",
                "state_id" => 16
            ],
            [
                "name" => "Londrina",
                "state_id" => 16
            ],
            [
                "name" => "Luiziana",
                "state_id" => 16
            ],
            [
                "name" => "Lupionópolis",
                "state_id" => 16
            ],
            [
                "name" => "Mandaguaçu",
                "state_id" => 16
            ],
            [
                "name" => "Mandaguari",
                "state_id" => 16
            ],
            [
                "name" => "Mandirituba",
                "state_id" => 16
            ],
            [
                "name" => "Mangueirinha",
                "state_id" => 16
            ],
            [
                "name" => "Manoel Ribas",
                "state_id" => 16
            ],
            [
                "name" => "Marechal Cândido Rondon",
                "state_id" => 16
            ],
            [
                "name" => "Marialva",
                "state_id" => 16
            ],
            [
                "name" => "Marilândia do Sul",
                "state_id" => 16
            ],
            [
                "name" => "Maringá",
                "state_id" => 16
            ],
            [
                "name" => "Marmeleiro",
                "state_id" => 16
            ],
            [
                "name" => "Matelândia",
                "state_id" => 16
            ],
            [
                "name" => "Matinhos",
                "state_id" => 16
            ],
            [
                "name" => "Mauá da Serra",
                "state_id" => 16
            ],
            [
                "name" => "Medianeira",
                "state_id" => 16
            ],
            [
                "name" => "Missal",
                "state_id" => 16
            ],
            [
                "name" => "Nossa Senhora das Graças",
                "state_id" => 16
            ],
            [
                "name" => "Nova Esperança",
                "state_id" => 16
            ],
            [
                "name" => "Nova Santa Rosa",
                "state_id" => 16
            ],
            [
                "name" => "Ortigueira",
                "state_id" => 16
            ],
            [
                "name" => "Paiçandu",
                "state_id" => 16
            ],
            [
                "name" => "Palmeira",
                "state_id" => 16
            ],
            [
                "name" => "Palotina",
                "state_id" => 16
            ],
            [
                "name" => "Paraíso do Norte",
                "state_id" => 16
            ],
            [
                "name" => "Paranacity",
                "state_id" => 16
            ],
            [
                "name" => "Paranaguá",
                "state_id" => 16
            ],
            [
                "name" => "Paranavaí",
                "state_id" => 16
            ],
            [
                "name" => "Pato Bragado",
                "state_id" => 16
            ],
            [
                "name" => "Pato Branco",
                "state_id" => 16
            ],
            [
                "name" => "Pérola",
                "state_id" => 16
            ],
            [
                "name" => "Pinhais",
                "state_id" => 16
            ],
            [
                "name" => "Pinhão",
                "state_id" => 16
            ],
            [
                "name" => "Pitanga",
                "state_id" => 16
            ],
            [
                "name" => "Ponta Grossa",
                "state_id" => 16
            ],
            [
                "name" => "Porecatu",
                "state_id" => 16
            ],
            [
                "name" => "Prado Ferreira",
                "state_id" => 16
            ],
            [
                "name" => "Pranchita",
                "state_id" => 16
            ],
            [
                "name" => "Primeiro de Maio",
                "state_id" => 16
            ],
            [
                "name" => "Prudentópolis",
                "state_id" => 16
            ],
            [
                "name" => "Quatro Barras",
                "state_id" => 16
            ],
            [
                "name" => "Quedas do Iguaçu",
                "state_id" => 16
            ],
            [
                "name" => "Querência do Norte",
                "state_id" => 16
            ],
            [
                "name" => "Quinta do Sol",
                "state_id" => 16
            ],
            [
                "name" => "Realeza",
                "state_id" => 16
            ],
            [
                "name" => "Rebouças",
                "state_id" => 16
            ],
            [
                "name" => "Renascença",
                "state_id" => 16
            ],
            [
                "name" => "Reserva",
                "state_id" => 16
            ],
            [
                "name" => "Ribeirão Claro",
                "state_id" => 16
            ],
            [
                "name" => "Ribeirão do Pinhal",
                "state_id" => 16
            ],
            [
                "name" => "Rio Negro",
                "state_id" => 16
            ],
            [
                "name" => "Rolândia",
                "state_id" => 16
            ],
            [
                "name" => "Rondon",
                "state_id" => 16
            ],
            [
                "name" => "Sabáudia",
                "state_id" => 16
            ],
            [
                "name" => "Santa Cruz de Monte Castelo",
                "state_id" => 16
            ],
            [
                "name" => "Santa Fé",
                "state_id" => 16
            ],
            [
                "name" => "Santa Helena",
                "state_id" => 16
            ],
            [
                "name" => "Santa Izabel do Oeste",
                "state_id" => 16
            ],
            [
                "name" => "Santa Lúcia",
                "state_id" => 16
            ],
            [
                "name" => "Santo Antônio da Platina",
                "state_id" => 16
            ],
            [
                "name" => "Santo Inácio",
                "state_id" => 16
            ],
            [
                "name" => "São Carlos do Ivaí",
                "state_id" => 16
            ],
            [
                "name" => "São João do Ivaí",
                "state_id" => 16
            ],
            [
                "name" => "São Jorge do Ivaí",
                "state_id" => 16
            ],
            [
                "name" => "São José dos Pinhais",
                "state_id" => 16
            ],
            [
                "name" => "São Mateus do Sul",
                "state_id" => 16
            ],
            [
                "name" => "São Miguel do Iguaçu",
                "state_id" => 16
            ],
            [
                "name" => "São Pedro do Ivaí",
                "state_id" => 16
            ],
            [
                "name" => "São Tomé",
                "state_id" => 16
            ],
            [
                "name" => "Sarandi",
                "state_id" => 16
            ],
            [
                "name" => "Saudade do Iguaçu",
                "state_id" => 16
            ],
            [
                "name" => "Sengés",
                "state_id" => 16
            ],
            [
                "name" => "Sertanópolis",
                "state_id" => 16
            ],
            [
                "name" => "Siqueira Campos",
                "state_id" => 16
            ],
            [
                "name" => "Tamarana",
                "state_id" => 16
            ],
            [
                "name" => "Tapejara",
                "state_id" => 16
            ],
            [
                "name" => "Teixeira Soares",
                "state_id" => 16
            ],
            [
                "name" => "Telêmaco Borba",
                "state_id" => 16
            ],
            [
                "name" => "Terra Boa",
                "state_id" => 16
            ],
            [
                "name" => "Terra Rica",
                "state_id" => 16
            ],
            [
                "name" => "Terra Roxa",
                "state_id" => 16
            ],
            [
                "name" => "Toledo",
                "state_id" => 16
            ],
            [
                "name" => "Três Barras do Paraná",
                "state_id" => 16
            ],
            [
                "name" => "Tupãssi",
                "state_id" => 16
            ],
            [
                "name" => "Turvo",
                "state_id" => 16
            ],
            [
                "name" => "Ubiratã",
                "state_id" => 16
            ],
            [
                "name" => "Umuarama",
                "state_id" => 16
            ],
            [
                "name" => "União da Vitória",
                "state_id" => 16
            ],
            [
                "name" => "Uniflor",
                "state_id" => 16
            ],
            [
                "name" => "Vera Cruz do Oeste",
                "state_id" => 16
            ],
            [
                "name" => "Verê",
                "state_id" => 16
            ],

            //Pernambuco

            [
                "name" => "Abreu e Lima",
                "state_id" => 17
            ],
            [
                "name" => "Afogados da Ingazeira",
                "state_id" => 17
            ],
            [
                "name" => "Alagoinha",
                "state_id" => 17
            ],
            [
                "name" => "Araripina",
                "state_id" => 17
            ],
            [
                "name" => "Arcoverde",
                "state_id" => 17
            ],
            [
                "name" => "Belo Jardim",
                "state_id" => 17
            ],
            [
                "name" => "Bezerros",
                "state_id" => 17
            ],
            [
                "name" => "Bom Jardim",
                "state_id" => 17
            ],
            [
                "name" => "Cabo de Santo Agostinho",
                "state_id" => 17
            ],
            [
                "name" => "Cabrobó",
                "state_id" => 17
            ],
            [
                "name" => "Camaragibe",
                "state_id" => 17
            ],
            [
                "name" => "Carnaíba",
                "state_id" => 17
            ],
            [
                "name" => "Carpina",
                "state_id" => 17
            ],
            [
                "name" => "Caruaru",
                "state_id" => 17
            ],
            [
                "name" => "Escada",
                "state_id" => 17
            ],
            [
                "name" => "Flores",
                "state_id" => 17
            ],
            [
                "name" => "Floresta",
                "state_id" => 17
            ],
            [
                "name" => "Garanhuns",
                "state_id" => 17
            ],
            [
                "name" => "Glória do Goitá",
                "state_id" => 17
            ],
            [
                "name" => "Granito",
                "state_id" => 17
            ],
            [
                "name" => "Gravatá",
                "state_id" => 17
            ],
            [
                "name" => "Igarassu",
                "state_id" => 17
            ],
            [
                "name" => "Ilha de Itamaracá",
                "state_id" => 17
            ],
            [
                "name" => "Ipojuca",
                "state_id" => 17
            ],
            [
                "name" => "Itaquitinga",
                "state_id" => 17
            ],
            [
                "name" => "Jaboatão dos Guararapes",
                "state_id" => 17
            ],
            [
                "name" => "Limoeiro",
                "state_id" => 17
            ],
            [
                "name" => "Olinda",
                "state_id" => 17
            ],
            [
                "name" => "Ouricuri",
                "state_id" => 17
            ],
            [
                "name" => "Paulista",
                "state_id" => 17
            ],
            [
                "name" => "Pedra",
                "state_id" => 17
            ],
            [
                "name" => "Petrolina",
                "state_id" => 17
            ],
            [
                "name" => "Recife",
                "state_id" => 17
            ],
            [
                "name" => "Santa Cruz do Capibaribe",
                "state_id" => 17
            ],
            [
                "name" => "Santa Maria do Cambucá",
                "state_id" => 17
            ],
            [
                "name" => "São Caetano",
                "state_id" => 17
            ],
            [
                "name" => "São Lourenço da Mata",
                "state_id" => 17
            ],
            [
                "name" => "Serra Talhada",
                "state_id" => 17
            ],
            [
                "name" => "Tamandaré",
                "state_id" => 17
            ],
            [
                "name" => "Timbaúba",
                "state_id" => 17
            ],
            [
                "name" => "Toritama",
                "state_id" => 17
            ],
            [
                "name" => "Trindade",
                "state_id" => 17
            ],
            [
                "name" => "Vitória de Santo Antão",
                "state_id" => 17
            ],

            // Piaui
            [
                "name" => "Anísio de Abreu",
                "state_id" => 18
            ],
            [
                "name" => "Bom Jesus",
                "state_id" => 18
            ],
            [
                "name" => "Campo Maior",
                "state_id" => 18
            ],
            [
                "name" => "Castelo do Piauí",
                "state_id" => 18
            ],
            [
                "name" => "Eliseu Martins",
                "state_id" => 18
            ],
            [
                "name" => "Floriano",
                "state_id" => 18
            ],
            [
                "name" => "Francisco Macedo",
                "state_id" => 18
            ],
            [
                "name" => "Francisco Santos",
                "state_id" => 18
            ],
            [
                "name" => "Itaueira",
                "state_id" => 18
            ],
            [
                "name" => "Jaicós",
                "state_id" => 18
            ],
            [
                "name" => "Luzilândia",
                "state_id" => 18
            ],
            [
                "name" => "Monsenhor Gil",
                "state_id" => 18
            ],
            [
                "name" => "Nazária",
                "state_id" => 18
            ],
            [
                "name" => "Oeiras",
                "state_id" => 18
            ],
            [
                "name" => "Padre Marcos",
                "state_id" => 18
            ],
            [
                "name" => "Parnaíba",
                "state_id" => 18
            ],
            [
                "name" => "Paulistana",
                "state_id" => 18
            ],
            [
                "name" => "Picos",
                "state_id" => 18
            ],
            [
                "name" => "Piracuruca",
                "state_id" => 18
            ],
            [
                "name" => "Porto",
                "state_id" => 18
            ],
            [
                "name" => "São João do Piauí",
                "state_id" => 18
            ],
            [
                "name" => "São Raimundo Nonato",
                "state_id" => 18
            ],
            [
                "name" => "Teresina",
                "state_id" => 18
            ],
            [
                "name" => "União",
                "state_id" => 18
            ],
            [
                "name" => "Valença do Piauí",
                "state_id" => 18
            ],

            //Rio de Janeiro
            [
                "name" => "Angra dos Reis",
                "state_id" => 19
            ],
            [
                "name" => "Aperibé",
                "state_id" => 19
            ],
            [
                "name" => "Araruama",
                "state_id" => 19
            ],
            [
                "name" => "Areal",
                "state_id" => 19
            ],
            [
                "name" => "Armação dos Búzios",
                "state_id" => 19
            ],
            [
                "name" => "Barra do Piraí",
                "state_id" => 19
            ],
            [
                "name" => "Belford Roxo",
                "state_id" => 19
            ],
            [
                "name" => "Bom Jesus do Itabapoana",
                "state_id" => 19
            ],
            [
                "name" => "Cabo Frio",
                "state_id" => 19
            ],
            [
                "name" => "Cachoeiras de Macacu",
                "state_id" => 19
            ],
            [
                "name" => "Campos dos Goytacazes",
                "state_id" => 19
            ],
            [
                "name" => "Casimiro de Abreu",
                "state_id" => 19
            ],
            [
                "name" => "Conceição de Macabu",
                "state_id" => 19
            ],
            [
                "name" => "Duque de Caxias",
                "state_id" => 19
            ],
            [
                "name" => "Itaboraí",
                "state_id" => 19
            ],
            [
                "name" => "Itaguaí",
                "state_id" => 19
            ],
            [
                "name" => "Itaperuna",
                "state_id" => 19
            ],
            [
                "name" => "Itatiaia",
                "state_id" => 19
            ],
            [
                "name" => "Macaé",
                "state_id" => 19
            ],
            [
                "name" => "Macuco",
                "state_id" => 19
            ],
            [
                "name" => "Magé",
                "state_id" => 19
            ],
            [
                "name" => "Maricá",
                "state_id" => 19
            ],
            [
                "name" => "Mesquita",
                "state_id" => 19
            ],
            [
                "name" => "Miguel Pereira",
                "state_id" => 19
            ],
            [
                "name" => "Miracema",
                "state_id" => 19
            ],
            [
                "name" => "Natividade",
                "state_id" => 19
            ],
            [
                "name" => "Niterói",
                "state_id" => 19
            ],
            [
                "name" => "Nova Friburgo",
                "state_id" => 19
            ],
            [
                "name" => "Nova Iguaçu",
                "state_id" => 19
            ],
            [
                "name" => "Paraíba do Sul",
                "state_id" => 19
            ],
            [
                "name" => "Paraty",
                "state_id" => 19
            ],
            [
                "name" => "Paty do Alferes",
                "state_id" => 19
            ],
            [
                "name" => "Petrópolis",
                "state_id" => 19
            ],
            [
                "name" => "Pinheiral",
                "state_id" => 19
            ],
            [
                "name" => "Porciúncula",
                "state_id" => 19
            ],
            [
                "name" => "Queimados",
                "state_id" => 19
            ],
            [
                "name" => "Resende",
                "state_id" => 19
            ],
            [
                "name" => "Rio Bonito",
                "state_id" => 19
            ],
            [
                "name" => "Rio das Flores",
                "state_id" => 19
            ],
            [
                "name" => "Rio das Ostras",
                "state_id" => 19
            ],
            [
                "name" => "Rio de Janeiro",
                "state_id" => 19
            ],
            [
                "name" => "Santa Maria Madalena",
                "state_id" => 19
            ],
            [
                "name" => "Santo Antônio de Pádua",
                "state_id" => 19
            ],
            [
                "name" => "São Fidélis",
                "state_id" => 19
            ],
            [
                "name" => "São Francisco de Itabapoana",
                "state_id" => 19
            ],
            [
                "name" => "São Gonçalo",
                "state_id" => 19
            ],
            [
                "name" => "São João da Barra",
                "state_id" => 19
            ],
            [
                "name" => "São João de Meriti",
                "state_id" => 19
            ],
            [
                "name" => "São José de Ubá",
                "state_id" => 19
            ],
            [
                "name" => "São Pedro da Aldeia",
                "state_id" => 19
            ],
            [
                "name" => "Saquarema",
                "state_id" => 19
            ],
            [
                "name" => "Seropédica",
                "state_id" => 19
            ],
            [
                "name" => "Teresópolis",
                "state_id" => 19
            ],
            [
                "name" => "Valença",
                "state_id" => 19
            ],
            [
                "name" => "Volta Redonda",
                "state_id" => 19
            ],

            // Rio Grande do Norte
            [
                "name" => "Açu",
                "state_id" => 20
            ],
            [
                "name" => "Areia Branca",
                "state_id" => 20
            ],
            [
                "name" => "Caicó",
                "state_id" => 20
            ],
            [
                "name" => "Ceará-Mirim",
                "state_id" => 20
            ],
            [
                "name" => "Jandaíra",
                "state_id" => 20
            ],
            [
                "name" => "Jardim de Piranhas",
                "state_id" => 20
            ],
            [
                "name" => "Macaíba",
                "state_id" => 20
            ],
            [
                "name" => "Macau",
                "state_id" => 20
            ],
            [
                "name" => "Mossoró",
                "state_id" => 20
            ],
            [
                "name" => "Natal",
                "state_id" => 20
            ],
            [
                "name" => "Nova Cruz",
                "state_id" => 20
            ],
            [
                "name" => "Parelhas",
                "state_id" => 20
            ],
            [
                "name" => "Parnamirim",
                "state_id" => 20
            ],
            [
                "name" => "Patu",
                "state_id" => 20
            ],
            [
                "name" => "Pau dos Ferros",
                "state_id" => 20
            ],
            [
                "name" => "São Gonçalo do Amarante",
                "state_id" => 20
            ],

            // Rio Grande do Sul
            [
                "name" => "Aceguá",
                "state_id" => 21
            ],
            [
                "name" => "Agudo",
                "state_id" => 21
            ],
            [
                "name" => "Ajuricaba",
                "state_id" => 21
            ],
            [
                "name" => "Alecrim",
                "state_id" => 21
            ],
            [
                "name" => "Alegrete",
                "state_id" => 21
            ],
            [
                "name" => "Almirante Tamandaré do Sul",
                "state_id" => 21
            ],
            [
                "name" => "Alvorada",
                "state_id" => 21
            ],
            [
                "name" => "Arroio do Meio",
                "state_id" => 21
            ],
            [
                "name" => "Arroio do Sal",
                "state_id" => 21
            ],
            [
                "name" => "Arroio do Tigre",
                "state_id" => 21
            ],
            [
                "name" => "Arroio dos Ratos",
                "state_id" => 21
            ],
            [
                "name" => "Arvorezinha",
                "state_id" => 21
            ],
            [
                "name" => "Bagé",
                "state_id" => 21
            ],
            [
                "name" => "Barão de Cotegipe",
                "state_id" => 21
            ],
            [
                "name" => "Barra do Ribeiro",
                "state_id" => 21
            ],
            [
                "name" => "Bento Gonçalves",
                "state_id" => 21
            ],
            [
                "name" => "Cacequi",
                "state_id" => 21
            ],
            [
                "name" => "Cachoeira do Sul",
                "state_id" => 21
            ],
            [
                "name" => "Cachoeirinha",
                "state_id" => 21
            ],
            [
                "name" => "Cacique Doble",
                "state_id" => 21
            ],
            [
                "name" => "Campinas do Sul",
                "state_id" => 21
            ],
            [
                "name" => "Campo Bom",
                "state_id" => 21
            ],
            [
                "name" => "Candelária",
                "state_id" => 21
            ],
            [
                "name" => "Canela",
                "state_id" => 21
            ],
            [
                "name" => "Canoas",
                "state_id" => 21
            ],
            [
                "name" => "Capão da Canoa",
                "state_id" => 21
            ],
            [
                "name" => "Carazinho",
                "state_id" => 21
            ],
            [
                "name" => "Casca",
                "state_id" => 21
            ],
            [
                "name" => "Catuípe",
                "state_id" => 21
            ],
            [
                "name" => "Caxias do Sul",
                "state_id" => 21
            ],
            [
                "name" => "Cerro Largo",
                "state_id" => 21
            ],
            [
                "name" => "Condor",
                "state_id" => 21
            ],
            [
                "name" => "Coronel Bicaco",
                "state_id" => 21
            ],
            [
                "name" => "Crissiumal",
                "state_id" => 21
            ],
            [
                "name" => "Cruz Alta",
                "state_id" => 21
            ],
            [
                "name" => "Cruzaltense",
                "state_id" => 21
            ],
            [
                "name" => "Eldorado do Sul",
                "state_id" => 21
            ],
            [
                "name" => "Encantado",
                "state_id" => 21
            ],
            [
                "name" => "Encruzilhada do Sul",
                "state_id" => 21
            ],
            [
                "name" => "Erechim",
                "state_id" => 21
            ],
            [
                "name" => "Estância Velha",
                "state_id" => 21
            ],
            [
                "name" => "Esteio",
                "state_id" => 21
            ],
            [
                "name" => "Estrela Velha",
                "state_id" => 21
            ],
            [
                "name" => "Farroupilha",
                "state_id" => 21
            ],
            [
                "name" => "Faxinal do Soturno",
                "state_id" => 21
            ],
            [
                "name" => "Flores da Cunha",
                "state_id" => 21
            ],
            [
                "name" => "General Câmara",
                "state_id" => 21
            ],
            [
                "name" => "Getúlio Vargas",
                "state_id" => 21
            ],
            [
                "name" => "Gramado",
                "state_id" => 21
            ],
            [
                "name" => "Gravataí",
                "state_id" => 21
            ],
            [
                "name" => "Guaíba",
                "state_id" => 21
            ],
            [
                "name" => "Guaporé",
                "state_id" => 21
            ],
            [
                "name" => "Guarani das Missões",
                "state_id" => 21
            ],
            [
                "name" => "Horizontina",
                "state_id" => 21
            ],
            [
                "name" => "Ibiaçá",
                "state_id" => 21
            ],
            [
                "name" => "Ibiraiaras",
                "state_id" => 21
            ],
            [
                "name" => "Ibirubá",
                "state_id" => 21
            ],
            [
                "name" => "Ijuí",
                "state_id" => 21
            ],
            [
                "name" => "Ipiranga do Sul",
                "state_id" => 21
            ],
            [
                "name" => "Itaqui",
                "state_id" => 21
            ],
            [
                "name" => "Itatiba do Sul",
                "state_id" => 21
            ],
            [
                "name" => "Ivoti",
                "state_id" => 21
            ],
            [
                "name" => "Jacutinga",
                "state_id" => 21
            ],
            [
                "name" => "Jaguarão",
                "state_id" => 21
            ],
            [
                "name" => "Jaguari",
                "state_id" => 21
            ],
            [
                "name" => "Lajeado",
                "state_id" => 21
            ],
            [
                "name" => "Machadinho",
                "state_id" => 21
            ],
            [
                "name" => "Maquiné",
                "state_id" => 21
            ],
            [
                "name" => "Marau",
                "state_id" => 21
            ],
            [
                "name" => "Montauri",
                "state_id" => 21
            ],
            [
                "name" => "Montenegro",
                "state_id" => 21
            ],
            [
                "name" => "Nicolau Vergueiro",
                "state_id" => 21
            ],
            [
                "name" => "Nonoai",
                "state_id" => 21
            ],
            [
                "name" => "Nova Bassano",
                "state_id" => 21
            ],
            [
                "name" => "Nova Petrópolis",
                "state_id" => 21
            ],
            [
                "name" => "Nova Santa Rita",
                "state_id" => 21
            ],
            [
                "name" => "Novo Hamburgo",
                "state_id" => 21
            ],
            [
                "name" => "Paim Filho",
                "state_id" => 21
            ],
            [
                "name" => "Palmares do Sul",
                "state_id" => 21
            ],
            [
                "name" => "Panambi",
                "state_id" => 21
            ],
            [
                "name" => "Paraí",
                "state_id" => 21
            ],
            [
                "name" => "Pareci Novo",
                "state_id" => 21
            ],
            [
                "name" => "Parobé",
                "state_id" => 21
            ],
            [
                "name" => "Passo do Sobrado",
                "state_id" => 21
            ],
            [
                "name" => "Passo Fundo",
                "state_id" => 21
            ],
            [
                "name" => "Paverama",
                "state_id" => 21
            ],
            [
                "name" => "Pelotas",
                "state_id" => 21
            ],
            [
                "name" => "Ponte Preta",
                "state_id" => 21
            ],
            [
                "name" => "Porto Alegre",
                "state_id" => 21
            ],
            [
                "name" => "Porto Xavier",
                "state_id" => 21
            ],
            [
                "name" => "Quaraí",
                "state_id" => 21
            ],
            [
                "name" => "Quatro Irmãos",
                "state_id" => 21
            ],
            [
                "name" => "Rio Grande",
                "state_id" => 21
            ],
            [
                "name" => "Rolante",
                "state_id" => 21
            ],
            [
                "name" => "Rondinha",
                "state_id" => 21
            ],
            [
                "name" => "Roque Gonzales",
                "state_id" => 21
            ],
            [
                "name" => "Saldanha Marinho",
                "state_id" => 21
            ],
            [
                "name" => "Salto do Jacuí",
                "state_id" => 21
            ],
            [
                "name" => "Sananduva",
                "state_id" => 21
            ],
            [
                "name" => "Santa Cruz do Sul",
                "state_id" => 21
            ],
            [
                "name" => "Santa Maria",
                "state_id" => 21
            ],
            [
                "name" => "Santa Rosa",
                "state_id" => 21
            ],
            [
                "name" => "Santana do Livramento",
                "state_id" => 21
            ],
            [
                "name" => "Santiago",
                "state_id" => 21
            ],
            [
                "name" => "Santo Ângelo",
                "state_id" => 21
            ],
            [
                "name" => "Santo Antônio da Patrulha",
                "state_id" => 21
            ],
            [
                "name" => "Santo Antônio das Missões",
                "state_id" => 21
            ],
            [
                "name" => "Santo Cristo",
                "state_id" => 21
            ],
            [
                "name" => "São Borja",
                "state_id" => 21
            ],
            [
                "name" => "São Francisco de Assis",
                "state_id" => 21
            ],
            [
                "name" => "São Gabriel",
                "state_id" => 21
            ],
            [
                "name" => "São Leopoldo",
                "state_id" => 21
            ],
            [
                "name" => "São Lourenço do Sul",
                "state_id" => 21
            ],
            [
                "name" => "São Luiz Gonzaga",
                "state_id" => 21
            ],
            [
                "name" => "São Marcos",
                "state_id" => 21
            ],
            [
                "name" => "São Miguel das Missões",
                "state_id" => 21
            ],
            [
                "name" => "São Paulo das Missões",
                "state_id" => 21
            ],
            [
                "name" => "São Pedro do Sul",
                "state_id" => 21
            ],
            [
                "name" => "São Sebastião do Caí",
                "state_id" => 21
            ],
            [
                "name" => "São Valentim",
                "state_id" => 21
            ],
            [
                "name" => "Sapiranga",
                "state_id" => 21
            ],
            [
                "name" => "Sapucaia do Sul",
                "state_id" => 21
            ],
            [
                "name" => "Seberi",
                "state_id" => 21
            ],
            [
                "name" => "Sertão Santana",
                "state_id" => 21
            ],
            [
                "name" => "Soledade",
                "state_id" => 21
            ],
            [
                "name" => "Tabaí",
                "state_id" => 21
            ],
            [
                "name" => "Tapera",
                "state_id" => 21
            ],
            [
                "name" => "Taquara",
                "state_id" => 21
            ],
            [
                "name" => "Três Coroas",
                "state_id" => 21
            ],
            [
                "name" => "Três de Maio",
                "state_id" => 21
            ],
            [
                "name" => "Três Passos",
                "state_id" => 21
            ],
            [
                "name" => "Trindade do Sul",
                "state_id" => 21
            ],
            [
                "name" => "Triunfo",
                "state_id" => 21
            ],
            [
                "name" => "Tupanciretã",
                "state_id" => 21
            ],
            [
                "name" => "Uruguaiana",
                "state_id" => 21
            ],
            [
                "name" => "Vacaria",
                "state_id" => 21
            ],
            [
                "name" => "Venâncio Aires",
                "state_id" => 21
            ],
            [
                "name" => "Vera Cruz",
                "state_id" => 21
            ],
            [
                "name" => "Viamão",
                "state_id" => 21
            ],
            [
                "name" => "Westfália",
                "state_id" => 21
            ],

            // Rondonia
            [
                "name" => "Alta Floresta Do Oeste",
                "state_id" => 22
            ],
            [
                "name" => "Alto Alegre dos Parecis",
                "state_id" => 22
            ],
            [
                "name" => "Ariquemes",
                "state_id" => 22
            ],
            [
                "name" => "Buritis",
                "state_id" => 22
            ],
            [
                "name" => "Cabixi",
                "state_id" => 22
            ],
            [
                "name" => "Cacoal",
                "state_id" => 22
            ],
            [
                "name" => "Candeias do Jamari",
                "state_id" => 22
            ],
            [
                "name" => "Cerejeiras",
                "state_id" => 22
            ],
            [
                "name" => "Colorado do Oeste",
                "state_id" => 22
            ],
            [
                "name" => "Espigão Do Oeste",
                "state_id" => 22
            ],
            [
                "name" => "Guajará-Mirim",
                "state_id" => 22
            ],
            [
                "name" => "Jaru",
                "state_id" => 22
            ],
            [
                "name" => "Ji-Paraná",
                "state_id" => 22
            ],
            [
                "name" => "Nova Brasilândia D Oeste",
                "state_id" => 22
            ],
            [
                "name" => "Ouro Preto do Oeste",
                "state_id" => 22
            ],
            [
                "name" => "Pimenta Bueno",
                "state_id" => 22
            ],
            [
                "name" => "Porto Velho",
                "state_id" => 22
            ],
            [
                "name" => "Rolim de Moura",
                "state_id" => 22
            ],
            [
                "name" => "São Miguel do Guaporé",
                "state_id" => 22
            ],
            [
                "name" => "Seringueiras",
                "state_id" => 22
            ],
            [
                "name" => "Vale do Anari",
                "state_id" => 22
            ],
            [
                "name" => "Vale do Paraíso",
                "state_id" => 22
            ],
            [
                "name" => "Vilhena",
                "state_id" => 22
            ],

            // Roraima
            [
                "name" => "Boa Vista",
                "state_id" => 23
            ],
            [
                "name" => "Normandia",
                "state_id" => 23
            ],

            // Santa Catarina
            [
                "name" => "Águas de Chapecó",
                "state_id" => 24
            ],
            [
                "name" => "Águas Mornas",
                "state_id" => 24
            ],
            [
                "name" => "Anchieta",
                "state_id" => 24
            ],
            [
                "name" => "Anitápolis",
                "state_id" => 24
            ],
            [
                "name" => "Araranguá",
                "state_id" => 24
            ],
            [
                "name" => "Armazém",
                "state_id" => 24
            ],
            [
                "name" => "Balneário Camboriú",
                "state_id" => 24
            ],
            [
                "name" => "Balneário Gaivota",
                "state_id" => 24
            ],
            [
                "name" => "Bela Vista do Toldo",
                "state_id" => 24
            ],
            [
                "name" => "Biguaçu",
                "state_id" => 24
            ],
            [
                "name" => "Blumenau",
                "state_id" => 24
            ],
            [
                "name" => "Bocaina do Sul",
                "state_id" => 24
            ],
            [
                "name" => "Botuverá",
                "state_id" => 24
            ],
            [
                "name" => "Brusque",
                "state_id" => 24
            ],
            [
                "name" => "Caçador",
                "state_id" => 24
            ],
            [
                "name" => "Campo Belo do Sul",
                "state_id" => 24
            ],
            [
                "name" => "Campos Novos",
                "state_id" => 24
            ],
            [
                "name" => "Canoinhas",
                "state_id" => 24
            ],
            [
                "name" => "Chapecó",
                "state_id" => 24
            ],
            [
                "name" => "Concórdia",
                "state_id" => 24
            ],
            [
                "name" => "Criciúma",
                "state_id" => 24
            ],
            [
                "name" => "Cunha Porã",
                "state_id" => 24
            ],
            [
                "name" => "Curitibanos",
                "state_id" => 24
            ],
            [
                "name" => "Dionísio Cerqueira",
                "state_id" => 24
            ],
            [
                "name" => "Faxinal dos Guedes",
                "state_id" => 24
            ],
            [
                "name" => "Florianópolis",
                "state_id" => 24
            ],
            [
                "name" => "Fraiburgo",
                "state_id" => 24
            ],
            [
                "name" => "Gaspar",
                "state_id" => 24
            ],
            [
                "name" => "Guabiruba",
                "state_id" => 24
            ],
            [
                "name" => "Ibirama",
                "state_id" => 24
            ],
            [
                "name" => "Içara",
                "state_id" => 24
            ],
            [
                "name" => "Imbituba",
                "state_id" => 24
            ],
            [
                "name" => "Imbuia",
                "state_id" => 24
            ],
            [
                "name" => "Indaial",
                "state_id" => 24
            ],
            [
                "name" => "Irani",
                "state_id" => 24
            ],
            [
                "name" => "Itajaí",
                "state_id" => 24
            ],
            [
                "name" => "Itapema",
                "state_id" => 24
            ],
            [
                "name" => "Itapiranga",
                "state_id" => 24
            ],
            [
                "name" => "Ituporanga",
                "state_id" => 24
            ],
            [
                "name" => "Jaguaruna",
                "state_id" => 24
            ],
            [
                "name" => "Jaraguá do Sul",
                "state_id" => 24
            ],
            [
                "name" => "Joaçaba",
                "state_id" => 24
            ],
            [
                "name" => "Joinville",
                "state_id" => 24
            ],
            [
                "name" => "Lages",
                "state_id" => 24
            ],
            [
                "name" => "Laguna",
                "state_id" => 24
            ],
            [
                "name" => "Laurentino",
                "state_id" => 24
            ],
            [
                "name" => "Lauro Muller",
                "state_id" => 24
            ],
            [
                "name" => "Lontras",
                "state_id" => 24
            ],
            [
                "name" => "Luzerna",
                "state_id" => 24
            ],
            [
                "name" => "Mafra",
                "state_id" => 24
            ],
            [
                "name" => "Major Vieira",
                "state_id" => 24
            ],
            [
                "name" => "Maravilha",
                "state_id" => 24
            ],
            [
                "name" => "Mondaí",
                "state_id" => 24
            ],
            [
                "name" => "Monte Castelo",
                "state_id" => 24
            ],
            [
                "name" => "Navegantes",
                "state_id" => 24
            ],
            [
                "name" => "Palhoça",
                "state_id" => 24
            ],
            [
                "name" => "Papanduva",
                "state_id" => 24
            ],
            [
                "name" => "Pedras Grandes",
                "state_id" => 24
            ],
            [
                "name" => "Pomerode",
                "state_id" => 24
            ],
            [
                "name" => "Ponte Serrada",
                "state_id" => 24
            ],
            [
                "name" => "Porto União",
                "state_id" => 24
            ],
            [
                "name" => "Pouso Redondo",
                "state_id" => 24
            ],
            [
                "name" => "Quilombo",
                "state_id" => 24
            ],
            [
                "name" => "Rio do Sul",
                "state_id" => 24
            ],
            [
                "name" => "Rio Fortuna",
                "state_id" => 24
            ],
            [
                "name" => "Rio Negrinho",
                "state_id" => 24
            ],
            [
                "name" => "Santa Rosa do Sul",
                "state_id" => 24
            ],
            [
                "name" => "Santo Amaro da Imperatriz",
                "state_id" => 24
            ],
            [
                "name" => "São Bonifácio",
                "state_id" => 24
            ],
            [
                "name" => "São Domingos",
                "state_id" => 24
            ],
            [
                "name" => "São João do Oeste",
                "state_id" => 24
            ],
            [
                "name" => "São José",
                "state_id" => 24
            ],
            [
                "name" => "São Lourenço do Oeste",
                "state_id" => 24
            ],
            [
                "name" => "São Miguel do Oeste",
                "state_id" => 24
            ],
            [
                "name" => "Seara",
                "state_id" => 24
            ],
            [
                "name" => "Siderópolis",
                "state_id" => 24
            ],
            [
                "name" => "Sombrio",
                "state_id" => 24
            ],
            [
                "name" => "Tangará",
                "state_id" => 24
            ],
            [
                "name" => "Timbó",
                "state_id" => 24
            ],
            [
                "name" => "Tubarão",
                "state_id" => 24
            ],
            [
                "name" => "Tunápolis",
                "state_id" => 24
            ],
            [
                "name" => "União do Oeste",
                "state_id" => 24
            ],
            [
                "name" => "Urupema",
                "state_id" => 24
            ],
            [
                "name" => "Vargem Bonita",
                "state_id" => 24
            ],
            [
                "name" => "Videira",
                "state_id" => 24
            ],
            [
                "name" => "Xanxerê",
                "state_id" => 24
            ],

            // Sao Paulo
            [
                "name" => "Adamantina",
                "state_id" => 25
            ],
            [
                "name" => "Adolfo",
                "state_id" => 25
            ],
            [
                "name" => "Aguaí",
                "state_id" => 25
            ],
            [
                "name" => "Águas de Santa Bárbara",
                "state_id" => 25
            ],
            [
                "name" => "Águas de São Pedro",
                "state_id" => 25
            ],
            [
                "name" => "Altair",
                "state_id" => 25
            ],
            [
                "name" => "Alto Alegre",
                "state_id" => 25
            ],
            [
                "name" => "Álvares Machado",
                "state_id" => 25
            ],
            [
                "name" => "Americana",
                "state_id" => 25
            ],
            [
                "name" => "Américo Brasiliense",
                "state_id" => 25
            ],
            [
                "name" => "Amparo",
                "state_id" => 25
            ],
            [
                "name" => "Andradina",
                "state_id" => 25
            ],
            [
                "name" => "Anhumas",
                "state_id" => 25
            ],
            [
                "name" => "Araçatuba",
                "state_id" => 25
            ],
            [
                "name" => "Araçoiaba da Serra",
                "state_id" => 25
            ],
            [
                "name" => "Araraquara",
                "state_id" => 25
            ],
            [
                "name" => "Araras",
                "state_id" => 25
            ],
            [
                "name" => "Artur Nogueira",
                "state_id" => 25
            ],
            [
                "name" => "Assis",
                "state_id" => 25
            ],
            [
                "name" => "Atibaia",
                "state_id" => 25
            ],
            [
                "name" => "Auriflama",
                "state_id" => 25
            ],
            [
                "name" => "Avanhandava",
                "state_id" => 25
            ],
            [
                "name" => "Avaré",
                "state_id" => 25
            ],
            [
                "name" => "Bady Bassitt",
                "state_id" => 25
            ],
            [
                "name" => "Bálsamo",
                "state_id" => 25
            ],
            [
                "name" => "Bariri",
                "state_id" => 25
            ],
            [
                "name" => "Barra Bonita",
                "state_id" => 25
            ],
            [
                "name" => "Barretos",
                "state_id" => 25
            ],
            [
                "name" => "Barrinha",
                "state_id" => 25
            ],
            [
                "name" => "Barueri",
                "state_id" => 25
            ],
            [
                "name" => "Bastos",
                "state_id" => 25
            ],
            [
                "name" => "Bauru",
                "state_id" => 25
            ],
            [
                "name" => "Bebedouro",
                "state_id" => 25
            ],
            [
                "name" => "Bernardino de Campos",
                "state_id" => 25
            ],
            [
                "name" => "Bertioga",
                "state_id" => 25
            ],
            [
                "name" => "Birigui",
                "state_id" => 25
            ],
            [
                "name" => "Boa Esperança do Sul",
                "state_id" => 25
            ],
            [
                "name" => "Boituva",
                "state_id" => 25
            ],
            [
                "name" => "Botucatu",
                "state_id" => 25
            ],
            [
                "name" => "Bragança Paulista",
                "state_id" => 25
            ],
            [
                "name" => "Brodowski",
                "state_id" => 25
            ],
            [
                "name" => "Brotas",
                "state_id" => 25
            ],
            [
                "name" => "Buritama",
                "state_id" => 25
            ],
            [
                "name" => "Cabreúva",
                "state_id" => 25
            ],
            [
                "name" => "Caçapava",
                "state_id" => 25
            ],
            [
                "name" => "Caiuá",
                "state_id" => 25
            ],
            [
                "name" => "Cajamar",
                "state_id" => 25
            ],
            [
                "name" => "Campinas",
                "state_id" => 25
            ],
            [
                "name" => "Campo Limpo Paulista",
                "state_id" => 25
            ],
            [
                "name" => "Campos do Jordão",
                "state_id" => 25
            ],
            [
                "name" => "Capão Bonito",
                "state_id" => 25
            ],
            [
                "name" => "Capivari",
                "state_id" => 25
            ],
            [
                "name" => "Caraguatatuba",
                "state_id" => 25
            ],
            [
                "name" => "Carapicuíba",
                "state_id" => 25
            ],
            [
                "name" => "Cardoso",
                "state_id" => 25
            ],
            [
                "name" => "Casa Branca",
                "state_id" => 25
            ],
            [
                "name" => "Catanduva",
                "state_id" => 25
            ],
            [
                "name" => "Cedral",
                "state_id" => 25
            ],
            [
                "name" => "Cerqueira César",
                "state_id" => 25
            ],
            [
                "name" => "Charqueada",
                "state_id" => 25
            ],
            [
                "name" => "Colina",
                "state_id" => 25
            ],
            [
                "name" => "Cosmópolis",
                "state_id" => 25
            ],
            [
                "name" => "Cotia",
                "state_id" => 25
            ],
            [
                "name" => "Descalvado",
                "state_id" => 25
            ],
            [
                "name" => "Diadema",
                "state_id" => 25
            ],
            [
                "name" => "Dracena",
                "state_id" => 25
            ],
            [
                "name" => "Duartina",
                "state_id" => 25
            ],
            [
                "name" => "Elias Fausto",
                "state_id" => 25
            ],
            [
                "name" => "Elisiário",
                "state_id" => 25
            ],
            [
                "name" => "Embu das Artes",
                "state_id" => 25
            ],
            [
                "name" => "Estiva Gerbi",
                "state_id" => 25
            ],
            [
                "name" => "Fernandópolis",
                "state_id" => 25
            ],
            [
                "name" => "Ferraz de Vasconcelos",
                "state_id" => 25
            ],
            [
                "name" => "Franca",
                "state_id" => 25
            ],
            [
                "name" => "Franco da Rocha",
                "state_id" => 25
            ],
            [
                "name" => "Garça",
                "state_id" => 25
            ],
            [
                "name" => "General Salgado",
                "state_id" => 25
            ],
            [
                "name" => "Guaíra",
                "state_id" => 25
            ],
            [
                "name" => "Guará",
                "state_id" => 25
            ],
            [
                "name" => "Guarani do Oeste",
                "state_id" => 25
            ],
            [
                "name" => "Guararapes",
                "state_id" => 25
            ],
            [
                "name" => "Guaratinguetá",
                "state_id" => 25
            ],
            [
                "name" => "Guariba",
                "state_id" => 25
            ],
            [
                "name" => "Guarujá",
                "state_id" => 25
            ],
            [
                "name" => "Guarulhos",
                "state_id" => 25
            ],
            [
                "name" => "Holambra",
                "state_id" => 25
            ],
            [
                "name" => "Hortolândia",
                "state_id" => 25
            ],
            [
                "name" => "Ibaté",
                "state_id" => 25
            ],
            [
                "name" => "Ibitinga",
                "state_id" => 25
            ],
            [
                "name" => "Ibiúna",
                "state_id" => 25
            ],
            [
                "name" => "Ilha Solteira",
                "state_id" => 25
            ],
            [
                "name" => "Ilhabela",
                "state_id" => 25
            ],
            [
                "name" => "Indaiatuba",
                "state_id" => 25
            ],
            [
                "name" => "Iporanga",
                "state_id" => 25
            ],
            [
                "name" => "Ipuã",
                "state_id" => 25
            ],
            [
                "name" => "Itajobi",
                "state_id" => 25
            ],
            [
                "name" => "Itapetininga",
                "state_id" => 25
            ],
            [
                "name" => "Itapeva",
                "state_id" => 25
            ],
            [
                "name" => "Itapevi",
                "state_id" => 25
            ],
            [
                "name" => "Itapira",
                "state_id" => 25
            ],
            [
                "name" => "Itaporanga",
                "state_id" => 25
            ],
            [
                "name" => "Itapuí",
                "state_id" => 25
            ],
            [
                "name" => "Itapura",
                "state_id" => 25
            ],
            [
                "name" => "Itatiba",
                "state_id" => 25
            ],
            [
                "name" => "Itu",
                "state_id" => 25
            ],
            [
                "name" => "Itupeva",
                "state_id" => 25
            ],
            [
                "name" => "Ituverava",
                "state_id" => 25
            ],
            [
                "name" => "Jaboticabal",
                "state_id" => 25
            ],
            [
                "name" => "Jacareí",
                "state_id" => 25
            ],
            [
                "name" => "Jaguariúna",
                "state_id" => 25
            ],
            [
                "name" => "Jales",
                "state_id" => 25
            ],
            [
                "name" => "Jambeiro",
                "state_id" => 25
            ],
            [
                "name" => "Jandira",
                "state_id" => 25
            ],
            [
                "name" => "Jardinópolis",
                "state_id" => 25
            ],
            [
                "name" => "Jarinu",
                "state_id" => 25
            ],
            [
                "name" => "Jaú",
                "state_id" => 25
            ],
            [
                "name" => "Joanópolis",
                "state_id" => 25
            ],
            [
                "name" => "João Ramalho",
                "state_id" => 25
            ],
            [
                "name" => "José Bonifácio",
                "state_id" => 25
            ],
            [
                "name" => "Jundiaí",
                "state_id" => 25
            ],
            [
                "name" => "Junqueirópolis",
                "state_id" => 25
            ],
            [
                "name" => "Laranjal Paulista",
                "state_id" => 25
            ],
            [
                "name" => "Leme",
                "state_id" => 25
            ],
            [
                "name" => "Limeira",
                "state_id" => 25
            ],
            [
                "name" => "Lins",
                "state_id" => 25
            ],
            [
                "name" => "Lorena",
                "state_id" => 25
            ],
            [
                "name" => "Lucélia",
                "state_id" => 25
            ],
            [
                "name" => "Macaubal",
                "state_id" => 25
            ],
            [
                "name" => "Mairiporã",
                "state_id" => 25
            ],
            [
                "name" => "Marília",
                "state_id" => 25
            ],
            [
                "name" => "Martinópolis",
                "state_id" => 25
            ],
            [
                "name" => "Matão",
                "state_id" => 25
            ],
            [
                "name" => "Mauá",
                "state_id" => 25
            ],
            [
                "name" => "Miracatu",
                "state_id" => 25
            ],
            [
                "name" => "Mirandópolis",
                "state_id" => 25
            ],
            [
                "name" => "Mirante do Paranapanema",
                "state_id" => 25
            ],
            [
                "name" => "Mirassol",
                "state_id" => 25
            ],
            [
                "name" => "Mococa",
                "state_id" => 25
            ],
            [
                "name" => "Mogi das Cruzes",
                "state_id" => 25
            ],
            [
                "name" => "Mogi Guaçu",
                "state_id" => 25
            ],
            [
                "name" => "Mogi Mirim",
                "state_id" => 25
            ],
            [
                "name" => "Monte Alto",
                "state_id" => 25
            ],
            [
                "name" => "Monte Aprazível",
                "state_id" => 25
            ],
            [
                "name" => "Monte Azul Paulista",
                "state_id" => 25
            ],
            [
                "name" => "Monte Mor",
                "state_id" => 25
            ],
            [
                "name" => "Morro Agudo",
                "state_id" => 25
            ],
            [
                "name" => "Morungaba",
                "state_id" => 25
            ],
            [
                "name" => "Murutinga do Sul",
                "state_id" => 25
            ],
            [
                "name" => "Nhandeara",
                "state_id" => 25
            ],
            [
                "name" => "Nipoã",
                "state_id" => 25
            ],
            [
                "name" => "Novo Horizonte",
                "state_id" => 25
            ],
            [
                "name" => "Nuporanga",
                "state_id" => 25
            ],
            [
                "name" => "Olímpia",
                "state_id" => 25
            ],
            [
                "name" => "Orlândia",
                "state_id" => 25
            ],
            [
                "name" => "Osasco",
                "state_id" => 25
            ],
            [
                "name" => "Osvaldo Cruz",
                "state_id" => 25
            ],
            [
                "name" => "Ourinhos",
                "state_id" => 25
            ],
            [
                "name" => "Ouroeste",
                "state_id" => 25
            ],
            [
                "name" => "Palmital",
                "state_id" => 25
            ],
            [
                "name" => "Panorama",
                "state_id" => 25
            ],
            [
                "name" => "Paraguaçu Paulista",
                "state_id" => 25
            ],
            [
                "name" => "Paraíso",
                "state_id" => 25
            ],
            [
                "name" => "Paranapanema",
                "state_id" => 25
            ],
            [
                "name" => "Pardinho",
                "state_id" => 25
            ],
            [
                "name" => "Paulínia",
                "state_id" => 25
            ],
            [
                "name" => "Pederneiras",
                "state_id" => 25
            ],
            [
                "name" => "Pedra Bela",
                "state_id" => 25
            ],
            [
                "name" => "Pedranópolis",
                "state_id" => 25
            ],
            [
                "name" => "Peruíbe",
                "state_id" => 25
            ],
            [
                "name" => "Piedade",
                "state_id" => 25
            ],
            [
                "name" => "Pilar do Sul",
                "state_id" => 25
            ],
            [
                "name" => "Pindamonhangaba",
                "state_id" => 25
            ],
            [
                "name" => "Pinhalzinho",
                "state_id" => 25
            ],
            [
                "name" => "Piracaia",
                "state_id" => 25
            ],
            [
                "name" => "Piracicaba",
                "state_id" => 25
            ],
            [
                "name" => "Pirajuí",
                "state_id" => 25
            ],
            [
                "name" => "Pirapozinho",
                "state_id" => 25
            ],
            [
                "name" => "Pirassununga",
                "state_id" => 25
            ],
            [
                "name" => "Pitangueiras",
                "state_id" => 25
            ],
            [
                "name" => "Porto Feliz",
                "state_id" => 25
            ],
            [
                "name" => "Porto Ferreira",
                "state_id" => 25
            ],
            [
                "name" => "Potirendaba",
                "state_id" => 25
            ],
            [
                "name" => "Praia Grande",
                "state_id" => 25
            ],
            [
                "name" => "Presidente Epitácio",
                "state_id" => 25
            ],
            [
                "name" => "Presidente Prudente",
                "state_id" => 25
            ],
            [
                "name" => "Presidente Venceslau",
                "state_id" => 25
            ],
            [
                "name" => "Promissão",
                "state_id" => 25
            ],
            [
                "name" => "Quatá",
                "state_id" => 25
            ],
            [
                "name" => "Rancharia",
                "state_id" => 25
            ],
            [
                "name" => "Registro",
                "state_id" => 25
            ],
            [
                "name" => "Ribeirão Pires",
                "state_id" => 25
            ],
            [
                "name" => "Ribeirão Preto",
                "state_id" => 25
            ],
            [
                "name" => "Rio Claro",
                "state_id" => 25
            ],
            [
                "name" => "Rio das Pedras",
                "state_id" => 25
            ],
            [
                "name" => "Rosana",
                "state_id" => 25
            ],
            [
                "name" => "Sales Oliveira",
                "state_id" => 25
            ],
            [
                "name" => "Salto",
                "state_id" => 25
            ],
            [
                "name" => "Santa Bárbara do Oeste",
                "state_id" => 25
            ],
            [
                "name" => "Santa Cruz da Esperança",
                "state_id" => 25
            ],
            [
                "name" => "Santa Cruz do Rio Pardo",
                "state_id" => 25
            ],
            [
                "name" => "Santa Fé do Sul",
                "state_id" => 25
            ],
            [
                "name" => "Santana de Parnaíba",
                "state_id" => 25
            ],
            [
                "name" => "Santo Anastácio",
                "state_id" => 25
            ],
            [
                "name" => "Santo André",
                "state_id" => 25
            ],
            [
                "name" => "Santo Antônio da Alegria",
                "state_id" => 25
            ],
            [
                "name" => "Santos",
                "state_id" => 25
            ],
            [
                "name" => "São Bernardo do Campo",
                "state_id" => 25
            ],
            [
                "name" => "São Caetano do Sul",
                "state_id" => 25
            ],
            [
                "name" => "São Carlos",
                "state_id" => 25
            ],
            [
                "name" => "São João da Boa Vista",
                "state_id" => 25
            ],
            [
                "name" => "São José do Rio Preto",
                "state_id" => 25
            ],
            [
                "name" => "São José dos Campos",
                "state_id" => 25
            ],
            [
                "name" => "São Miguel Arcanjo",
                "state_id" => 25
            ],
            [
                "name" => "São Paulo",
                "state_id" => 25
            ],
            [
                "name" => "São Pedro",
                "state_id" => 25
            ],
            [
                "name" => "São Roque",
                "state_id" => 25
            ],
            [
                "name" => "São Sebastião",
                "state_id" => 25
            ],
            [
                "name" => "São Vicente",
                "state_id" => 25
            ],
            [
                "name" => "Serra Azul",
                "state_id" => 25
            ],
            [
                "name" => "Serra Negra",
                "state_id" => 25
            ],
            [
                "name" => "Sertãozinho",
                "state_id" => 25
            ],
            [
                "name" => "Severínia",
                "state_id" => 25
            ],
            [
                "name" => "Socorro",
                "state_id" => 25
            ],
            [
                "name" => "Sorocaba",
                "state_id" => 25
            ],
            [
                "name" => "Sumaré",
                "state_id" => 25
            ],
            [
                "name" => "Suzano",
                "state_id" => 25
            ],
            [
                "name" => "Tabapuã",
                "state_id" => 25
            ],
            [
                "name" => "Taiaçu",
                "state_id" => 25
            ],
            [
                "name" => "Tapiraí",
                "state_id" => 25
            ],
            [
                "name" => "Taquaritinga",
                "state_id" => 25
            ],
            [
                "name" => "Tatuí",
                "state_id" => 25
            ],
            [
                "name" => "Taubaté",
                "state_id" => 25
            ],
            [
                "name" => "Teodoro Sampaio",
                "state_id" => 25
            ],
            [
                "name" => "Tietê",
                "state_id" => 25
            ],
            [
                "name" => "Torre de Pedra",
                "state_id" => 25
            ],
            [
                "name" => "Tremembé",
                "state_id" => 25
            ],
            [
                "name" => "Tupã",
                "state_id" => 25
            ],
            [
                "name" => "Tupi Paulista",
                "state_id" => 25
            ],
            [
                "name" => "Ubatuba",
                "state_id" => 25
            ],
            [
                "name" => "Valinhos",
                "state_id" => 25
            ],
            [
                "name" => "Vargem Grande do Sul",
                "state_id" => 25
            ],
            [
                "name" => "Vargem Grande Paulista",
                "state_id" => 25
            ],
            [
                "name" => "Vinhedo",
                "state_id" => 25
            ],
            [
                "name" => "Votuporanga",
                "state_id" => 25
            ],
            [
                "name" => "Zacarias",
                "state_id" => 25
            ],

            // Sergipe

            [
                "name" => "Aracaju",
                "state_id" => 26
            ],
            [
                "name" => "Boquim",
                "state_id" => 26
            ],
            [
                "name" => "Carmópolis",
                "state_id" => 26
            ],
            [
                "name" => "Cristinápolis",
                "state_id" => 26
            ],
            [
                "name" => "Itabaiana",
                "state_id" => 26
            ],
            [
                "name" => "Lagarto",
                "state_id" => 26
            ],
            [
                "name" => "Nossa Senhora de Lourdes",
                "state_id" => 26
            ],
            [
                "name" => "Nossa Senhora do Socorro",
                "state_id" => 26
            ],
            [
                "name" => "Poço Redondo",
                "state_id" => 26
            ],
            [
                "name" => "Propriá",
                "state_id" => 26
            ],
            [
                "name" => "São Cristóvão",
                "state_id" => 26
            ],
            [
                "name" => "Simão Dias",
                "state_id" => 26
            ],

            // Tocantins
            [
                "name" => "Aliança do Tocantins",
                "state_id" => 27
            ],
            [
                "name" => "Araguaína",
                "state_id" => 27
            ],
            [
                "name" => "Araguatins",
                "state_id" => 27
            ],
            [
                "name" => "Augustinópolis",
                "state_id" => 27
            ],
            [
                "name" => "Colinas do Tocantins",
                "state_id" => 27
            ],
            [
                "name" => "Combinado",
                "state_id" => 27
            ],
            [
                "name" => "Filadélfia",
                "state_id" => 27
            ],
            [
                "name" => "Formoso do Araguaia",
                "state_id" => 27
            ],
            [
                "name" => "Gurupi",
                "state_id" => 27
            ],
            [
                "name" => "Itaguatins",
                "state_id" => 27
            ],
            [
                "name" => "Palmas",
                "state_id" => 27
            ],
            [
                "name" => "Paraíso do Tocantins",
                "state_id" => 27
            ],
            [
                "name" => "Porto Alegre do Tocantins",
                "state_id" => 27
            ],
            [
                "name" => "Porto Nacional",
                "state_id" => 27
            ],
            [
                "name" => "Sandolândia",
                "state_id" => 27
            ],
            [
                "name" => "Tocantinópolis",
                "state_id" => 27
            ]
        ]);
    }
}
