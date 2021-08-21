<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            [
                "uuid" => "d5b87585-995a-42c3-838a-4bf8c70cae54",
                "state_id" => 13,
                "name" => "Abadia dos Dourados",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "ee5a2a15-4077-43c6-95bf-ba019bc80756",
                "state_id" => 9,
                "name" => "Abadiânia",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "95b9eb39-5205-4370-b54b-e03e2a06f9df",
                "state_id" => 13,
                "name" => "Abaeté",
                "solar_incidence" => "4.4625"
            ],
            [
                "uuid" => "a3723f0e-66da-4e0a-b574-9ff38b7c516d",
                "state_id" => 14,
                "name" => "Abaetetuba",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "13a6be61-1d11-40ef-987d-aeee8a3206ba",
                "state_id" => 16,
                "name" => "Abatiá",
                "solar_incidence" => "4.27875"
            ],
            [
                "uuid" => "4862bc56-db65-470d-be08-d693eabf91cd",
                "state_id" => 13,
                "name" => "Abre Campo",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "e5cc1ba8-0a8f-4c46-a256-b4f54d78517c",
                "state_id" => 17,
                "name" => "Abreu e Lima",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "efea12ac-4c02-479b-b78b-02c2a34adf9e",
                "state_id" => 10,
                "name" => "Açailândia",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "44a64663-f257-40a3-a62e-0f2a551b8031",
                "state_id" => 5,
                "name" => "Acajutiba",
                "solar_incidence" => "4.43625"
            ],
            [
                "uuid" => "5e9be7a3-7e1f-430a-a335-a40ae581a5d1",
                "state_id" => 14,
                "name" => "Acará",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "96a6b40b-50b9-4645-8bfc-da198936c377",
                "state_id" => 6,
                "name" => "Acaraú",
                "solar_incidence" => "5.4075"
            ],
            [
                "uuid" => "1de309db-403c-4a96-87df-d991abf19dae",
                "state_id" => 21,
                "name" => "Aceguá",
                "solar_incidence" => "4.01625"
            ],
            [
                "uuid" => "3ba150a1-f7fc-4dfc-8731-91e8e3464363",
                "state_id" => 1,
                "name" => "Acrelândia",
                "solar_incidence" => "4.1475"
            ],
            [
                "uuid" => "7e0d8988-c97f-40a8-ad50-5142f4aa8c03",
                "state_id" => 9,
                "name" => "Acreúna",
                "solar_incidence" => "4.5325"
            ],
            [
                "uuid" => "a7fbb088-c7ac-4def-947f-c7dfa6dfe35c",
                "state_id" => 20,
                "name" => "Açu",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "b6ecc6ff-9634-43f1-82e7-28991960883a",
                "state_id" => 25,
                "name" => "Adamantina",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "2c693644-3459-488e-a7df-d48a7b9d4ccc",
                "state_id" => 25,
                "name" => "Adolfo",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "d2077006-3e26-4ea9-a8ce-7390105287f6",
                "state_id" => 17,
                "name" => "Afogados da Ingazeira",
                "solar_incidence" => "5.1625"
            ],
            [
                "uuid" => "e08b0887-f4f7-440e-8a6e-143b4364964c",
                "state_id" => 8,
                "name" => "Afonso Cláudio",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "7b1a6735-ba1f-4866-83dc-74f70dbcde9e",
                "state_id" => 10,
                "name" => "Afonso Cunha",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "67cb30ee-fa45-4220-8f78-49a3bdd0ad32",
                "state_id" => 11,
                "name" => "Água Boa",
                "solar_incidence" => "4.55"
            ],
            [
                "uuid" => "fe28bd63-08e5-4c52-962d-12a6558346ea",
                "state_id" => 2,
                "name" => "Água Branca",
                "solar_incidence" => "5.5"
            ],
            [
                "uuid" => "cc9d73c9-d69c-4d0c-98a7-0ab97f24ec00",
                "state_id" => 13,
                "name" => "Água Comprida",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "345190d6-133d-4774-84bb-81adfa7ca623",
                "state_id" => 25,
                "name" => "Aguaí",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "09d99b5b-1ee8-4844-893d-ffeb702ad23b",
                "state_id" => 24,
                "name" => "Águas de Chapecó",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "b8d5c71b-97b9-4783-9e43-ac4d9e3204ea",
                "state_id" => 25,
                "name" => "Águas de Santa Bárbara",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "633d5ea9-c8a6-4387-85f1-c5e18d17940a",
                "state_id" => 25,
                "name" => "Águas de São Pedro",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "546b3498-24a4-4cb0-8cdf-b4437b3e8767",
                "state_id" => 13,
                "name" => "Águas Formosas",
                "solar_incidence" => "4.13"
            ],
            [
                "uuid" => "59a99800-a53f-480b-be80-48eb79e8114c",
                "state_id" => 9,
                "name" => "Águas Lindas de Goiás",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "3cd023a7-d145-4013-a111-c6e81fb17ea7",
                "state_id" => 24,
                "name" => "Águas Mornas",
                "solar_incidence" => "3.535"
            ],
            [
                "uuid" => "58aac603-09a3-43be-9a92-71c7b05fda79",
                "state_id" => 13,
                "name" => "Águas Vermelhas",
                "solar_incidence" => "4.48"
            ],
            [
                "uuid" => "016cb3ff-e5de-4fdc-be87-2ff776e9ddc2",
                "state_id" => 21,
                "name" => "Agudo",
                "solar_incidence" => "3.98125"
            ],
            [
                "uuid" => "e13d1d6d-b669-4cca-8a9d-c157aa2aae44",
                "state_id" => 8,
                "name" => "Águia Branca",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "a98c4cb7-19e9-4b07-944d-2e51a3817749",
                "state_id" => 13,
                "name" => "Aimorés",
                "solar_incidence" => "4.08625"
            ],
            [
                "uuid" => "38412ca2-085c-4816-878e-b896ef2b8849",
                "state_id" => 13,
                "name" => "Aiuruoca",
                "solar_incidence" => "4.34875"
            ],
            [
                "uuid" => "55ebd948-5b29-4232-ab28-7ac4b63dd021",
                "state_id" => 21,
                "name" => "Ajuricaba",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "1581b8c2-a77d-4fff-ba17-2a26498db005",
                "state_id" => 15,
                "name" => "Alagoa Grande",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "d24693b4-43dd-4a9f-be2d-d868a5c68915",
                "state_id" => 17,
                "name" => "Alagoinha",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "86a58a62-02e6-412f-be53-ae6c6b0f19ec",
                "state_id" => 5,
                "name" => "Alagoinhas",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "6b62b04b-3c1f-4c80-8405-1fa2b5b79926",
                "state_id" => 12,
                "name" => "Alcinópolis",
                "solar_incidence" => "4.54125"
            ],
            [
                "uuid" => "dd2473ba-7896-4d4e-9555-82e67194007d",
                "state_id" => 5,
                "name" => "Alcobaça",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "414f0c4e-eea8-4d4a-b558-a4bb45b324a3",
                "state_id" => 21,
                "name" => "Alecrim",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "23b1c4e6-1d43-4e79-bdf9-f7f9ef1cdf18",
                "state_id" => 21,
                "name" => "Alegrete",
                "solar_incidence" => "4.15625"
            ],
            [
                "uuid" => "6fd6d616-5af0-4224-8da9-ae7755166933",
                "state_id" => 9,
                "name" => "Alexânia",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "6b6beed4-b08a-4d1d-9885-d926262a7445",
                "state_id" => 13,
                "name" => "Alfenas",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "1c3582a9-dfe7-4995-87c0-da8547d82d3d",
                "state_id" => 15,
                "name" => "Algodão de Jandaíra",
                "solar_incidence" => "5.1275"
            ],
            [
                "uuid" => "e809b1c5-5239-45ff-b13e-258bd5f8ab17",
                "state_id" => 27,
                "name" => "Aliança do Tocantins",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "a629bf5b-d5e7-4705-b090-c2adf4ed4ab3",
                "state_id" => 13,
                "name" => "Almenara",
                "solar_incidence" => "4.235"
            ],
            [
                "uuid" => "942c1e25-e705-4602-b23a-b893eda38ae4",
                "state_id" => 16,
                "name" => "Almirante Tamandaré",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "5e67d91a-cc90-4388-b67e-52b1df5f1b47",
                "state_id" => 21,
                "name" => "Almirante Tamandaré do Sul",
                "solar_incidence" => "4.01625"
            ],
            [
                "uuid" => "5faa701f-f247-4e4f-b7ce-d6f2fbaa05db",
                "state_id" => 13,
                "name" => "Alpinópolis",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "ff36a925-75cc-430f-a97f-833a42bf222a",
                "state_id" => 11,
                "name" => "Alta Floresta",
                "solar_incidence" => "4.34"
            ],
            [
                "uuid" => "93a26b57-b6b0-4a34-b30a-6fda7371085d",
                "state_id" => 22,
                "name" => "Alta Floresta Do Oeste",
                "solar_incidence" => "4.20875"
            ],
            [
                "uuid" => "885c1b19-5b93-4f4b-8806-64055f5b8ba4",
                "state_id" => 25,
                "name" => "Altair",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "eedd04aa-0323-45ef-a4ed-694b81f5afa3",
                "state_id" => 14,
                "name" => "Altamira",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "613fc96d-8d0d-45d8-9068-6eedea0b727f",
                "state_id" => 25,
                "name" => "Alto Alegre",
                "solar_incidence" => "4.3575"
            ],
            [
                "uuid" => "e8586d62-0d35-45d5-8a1e-6bf1edb9f92b",
                "state_id" => 10,
                "name" => "Alto Alegre do Maranhão",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "76c6cbf6-e94a-42db-9b75-e9bf8736bd84",
                "state_id" => 22,
                "name" => "Alto Alegre dos Parecis",
                "solar_incidence" => "4.20875"
            ],
            [
                "uuid" => "fa2ab70b-1185-42dd-8f5a-8eb42690f64d",
                "state_id" => 11,
                "name" => "Alto Garças",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "f67da14d-abc8-439b-adee-2fa2680a3c0e",
                "state_id" => 16,
                "name" => "Alto Paraíso",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "79cbe1b1-eacf-4888-99a9-877643954b9c",
                "state_id" => 16,
                "name" => "Alto Piquiri",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "a67efbf8-5294-4f9a-bfd7-e535be69462f",
                "state_id" => 11,
                "name" => "Alto Taquari",
                "solar_incidence" => "4.43625"
            ],
            [
                "uuid" => "3d9f44b0-6167-4881-bb47-c275edb8a9e3",
                "state_id" => 16,
                "name" => "Altônia",
                "solar_incidence" => "4.2875"
            ],
            [
                "uuid" => "e041e001-d822-48eb-b88d-e85bad872a1b",
                "state_id" => 25,
                "name" => "Álvares Machado",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "0f449dff-8ecc-4dc2-babe-b66cdb362f1b",
                "state_id" => 13,
                "name" => "Alvinópolis",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "1a7a46ce-a722-4092-b57a-1715980c3565",
                "state_id" => 21,
                "name" => "Alvorada",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "ca49dad7-e205-44bd-92b5-d84a32eefcf4",
                "state_id" => 16,
                "name" => "Alvorada do Sul",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "a7a34bce-7e31-4d6d-bb41-2f266a46744f",
                "state_id" => 12,
                "name" => "Amambai",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "d4775225-19b1-49dd-80d2-ced50373f25d",
                "state_id" => 3,
                "name" => "Amapá",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "f9ed3cbf-64d6-4cb7-99a6-07265ab0ccb2",
                "state_id" => 5,
                "name" => "Amargosa",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "0295d4cd-f7c2-4986-ac8c-7e1d91bcbe09",
                "state_id" => 5,
                "name" => "América Dourada",
                "solar_incidence" => "4.96125"
            ],
            [
                "uuid" => "a7d1422b-f397-4c7e-949b-01dcae417140",
                "state_id" => 25,
                "name" => "Americana",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "b4142f8b-1f38-43a1-b76f-be82e4a671d6",
                "state_id" => 25,
                "name" => "Américo Brasiliense",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "d74e1c30-b137-4335-a026-4ba0a6ae93c1",
                "state_id" => 25,
                "name" => "Amparo",
                "solar_incidence" => "5.1625"
            ],
            [
                "uuid" => "9fa1a75f-c57b-4269-8e78-b7faf9cc0755",
                "state_id" => 16,
                "name" => "Ampére",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "d974dd07-bc9b-41f1-8e9c-5a7bfa364ee6",
                "state_id" => 2,
                "name" => "Anadia",
                "solar_incidence" => "5.41"
            ],
            [
                "uuid" => "2fd94f04-45d4-4811-ae74-93369d7ab790",
                "state_id" => 5,
                "name" => "Anagé",
                "solar_incidence" => "4.7425"
            ],
            [
                "uuid" => "a54a9248-6df3-46f6-b528-4a4ca0c7d2e1",
                "state_id" => 14,
                "name" => "Ananindeua",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "893ea891-41fa-4640-ac50-eda0bb3a0099",
                "state_id" => 9,
                "name" => "Anápolis",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "0c9a89aa-7c03-4057-944a-50f7431eb33c",
                "state_id" => 24,
                "name" => "Anchieta",
                "solar_incidence" => "3.955"
            ],
            [
                "uuid" => "3550c6bb-505c-4f26-a6ef-0570bf4ab6bf",
                "state_id" => 16,
                "name" => "Andirá",
                "solar_incidence" => "4.27875"
            ],
            [
                "uuid" => "2941a35e-0b59-4d23-abbe-b12299d0bba1",
                "state_id" => 13,
                "name" => "Andradas",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "dd5d93f7-5dc9-4f35-a306-4279b9605c19",
                "state_id" => 25,
                "name" => "Andradina",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "08123935-3a5a-45f9-aef4-bca1e350ef06",
                "state_id" => 13,
                "name" => "Andrelândia",
                "solar_incidence" => "4.34875"
            ],
            [
                "uuid" => "ead5a28b-88ca-491e-b9db-dfe6091a21b3",
                "state_id" => 12,
                "name" => "Angélica",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "0806f208-2a92-40c8-9d21-f8517f634250",
                "state_id" => 19,
                "name" => "Angra dos Reis",
                "solar_incidence" => "4.01625"
            ],
            [
                "uuid" => "ba1ed932-7ad4-4142-8002-00b0bb5ca197",
                "state_id" => 16,
                "name" => "Ângulo",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "a79baf99-dd4d-4845-8663-b1c60cb797e4",
                "state_id" => 25,
                "name" => "Anhumas",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "1d342ab6-d887-44f2-b282-923546e89aec",
                "state_id" => 9,
                "name" => "Anicuns",
                "solar_incidence" => "4.62"
            ],
            [
                "uuid" => "823feada-03bb-40b0-926e-d96554ad0bc9",
                "state_id" => 18,
                "name" => "Anísio de Abreu",
                "solar_incidence" => "4.92625"
            ],
            [
                "uuid" => "83ee33a4-87a4-4de6-bbd3-2203c345d334",
                "state_id" => 24,
                "name" => "Anitápolis",
                "solar_incidence" => "3.605"
            ],
            [
                "uuid" => "5a24ed4a-7a70-4c76-8b99-d91ce7c45701",
                "state_id" => 6,
                "name" => "Antonina do Norte",
                "solar_incidence" => "4.9175"
            ],
            [
                "uuid" => "a7d47f5c-87d4-4187-b225-f4c41827c015",
                "state_id" => 9,
                "name" => "Aparecida de Goiânia",
                "solar_incidence" => "4.62"
            ],
            [
                "uuid" => "847fdbe6-985d-4bae-923d-56309940e94d",
                "state_id" => 19,
                "name" => "Aperibé",
                "solar_incidence" => "3.9725"
            ],
            [
                "uuid" => "11f52ac8-1caa-4f27-8b1b-eae904e69d23",
                "state_id" => 8,
                "name" => "Apiacá",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "faac14fa-0e8d-40ea-b4c6-fadbd2c2c469",
                "state_id" => 16,
                "name" => "Apucarana",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "2e2efb43-729b-40f0-a45e-03c785700933",
                "state_id" => 4,
                "name" => "Apuí",
                "solar_incidence" => "4.13"
            ],
            [
                "uuid" => "cec85d70-d701-4331-9e14-0efc64f524f5",
                "state_id" => 12,
                "name" => "Aquidauana",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "8212f2ed-104e-47c7-b52d-5c398f82ecb3",
                "state_id" => 6,
                "name" => "Aquiraz",
                "solar_incidence" => "5.11"
            ],
            [
                "uuid" => "2a585a1f-dba5-4abf-9d93-0a81fdcfde1f",
                "state_id" => 26,
                "name" => "Aracaju",
                "solar_incidence" => "4.59375"
            ],
            [
                "uuid" => "9ae96438-d2ba-4d31-8c40-9e3c763d2773",
                "state_id" => 6,
                "name" => "Aracati",
                "solar_incidence" => "5.08375"
            ],
            [
                "uuid" => "1f068dde-f114-41f5-9aaf-ded23333e905",
                "state_id" => 5,
                "name" => "Aracatu",
                "solar_incidence" => "4.7425"
            ],
            [
                "uuid" => "fdcb19c6-f2a0-4ecf-95e2-18561090251d",
                "state_id" => 25,
                "name" => "Araçatuba",
                "solar_incidence" => "4.50625"
            ],
            [
                "uuid" => "3b9fc0f6-c5c8-4fe5-99c0-d9e23f51852f",
                "state_id" => 25,
                "name" => "Araçoiaba da Serra",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "ff603883-5359-4229-8b03-24464e59ee24",
                "state_id" => 8,
                "name" => "Aracruz",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "4fe8f5e0-8285-41a0-95c8-85d810832cf9",
                "state_id" => 27,
                "name" => "Araguaína",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "e5234714-e5f2-41ee-adb5-b416e6a1d967",
                "state_id" => 13,
                "name" => "Araguari",
                "solar_incidence" => "4.6375"
            ],
            [
                "uuid" => "36f98446-fb3e-4583-95a5-4a75696f2554",
                "state_id" => 27,
                "name" => "Araguatins",
                "solar_incidence" => "4.34"
            ],
            [
                "uuid" => "ef70ace1-1576-4828-ab49-eb0f56c217a9",
                "state_id" => 12,
                "name" => "Aral Moreira",
                "solar_incidence" => "4.3575"
            ],
            [
                "uuid" => "7bcdb257-1278-4176-9788-3c708c129e2b",
                "state_id" => 10,
                "name" => "Arame",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "3aa5f52f-f316-4b67-85e9-85afe2e20387",
                "state_id" => 2,
                "name" => "Arapiraca",
                "solar_incidence" => "5.41"
            ],
            [
                "uuid" => "f2bbc273-d65c-42c3-8d9d-db221125d90d",
                "state_id" => 16,
                "name" => "Arapongas",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "6687c10b-75c2-44a8-8e0a-1ab683d7df03",
                "state_id" => 16,
                "name" => "Arapuã",
                "solar_incidence" => "4.19125"
            ],
            [
                "uuid" => "621081a8-2841-421b-b01e-6b8b4d70cd4b",
                "state_id" => 24,
                "name" => "Araranguá",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "c53f36be-f3f0-43d9-a0ed-ab45cdebdc75",
                "state_id" => 25,
                "name" => "Araraquara",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "12e1aa08-8e41-4919-b4c8-c57ba180cded",
                "state_id" => 25,
                "name" => "Araras",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "7e70951b-7042-480e-92df-34cf28552c80",
                "state_id" => 17,
                "name" => "Araripina",
                "solar_incidence" => "4.97875"
            ],
            [
                "uuid" => "e673b7c7-57f9-4a6f-a60a-3255368c973a",
                "state_id" => 19,
                "name" => "Araruama",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "eb9de26a-fc42-4f93-b55a-c8106ccffd5a",
                "state_id" => 16,
                "name" => "Araruna",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "ddc572f2-f482-41ff-9525-8b8a7ad38090",
                "state_id" => 16,
                "name" => "Araucária",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "a8cc02e7-ef4d-4514-94a0-68de9b0e8b24",
                "state_id" => 13,
                "name" => "Araxá",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "7fc0a7dc-d92f-4f51-b5f3-3637cc5f20b7",
                "state_id" => 17,
                "name" => "Arcoverde",
                "solar_incidence" => "5.0225"
            ],
            [
                "uuid" => "4a80d6bb-cb0c-47b1-8d4a-e048e3645717",
                "state_id" => 13,
                "name" => "Areado",
                "solar_incidence" => "4.45375"
            ],
            [
                "uuid" => "2973c333-68b7-4191-a1e8-001f2e49b694",
                "state_id" => 19,
                "name" => "Areal",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "511e6b9b-38f5-4048-9834-963faecbf505",
                "state_id" => 15,
                "name" => "Areia",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "169b3535-b023-44ca-8a06-2d67937a0c71",
                "state_id" => 20,
                "name" => "Areia Branca",
                "solar_incidence" => "4.59375"
            ],
            [
                "uuid" => "9d6b86e2-c52a-47da-91aa-0e74f3a3cbc0",
                "state_id" => 11,
                "name" => "Arenápolis",
                "solar_incidence" => "4.34875"
            ],
            [
                "uuid" => "aa6383c1-81a5-4885-8632-47b02e8204b0",
                "state_id" => 11,
                "name" => "Aripuanã",
                "solar_incidence" => "4.26125"
            ],
            [
                "uuid" => "90b395a5-f829-4e25-b095-7fb521a90f77",
                "state_id" => 22,
                "name" => "Ariquemes",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "81c1f75c-8012-47bd-a26e-f5731cf75c71",
                "state_id" => 19,
                "name" => "Armação dos Búzios",
                "solar_incidence" => "4.0425"
            ],
            [
                "uuid" => "6ebfd090-edd0-49f2-a881-05117beaea19",
                "state_id" => 24,
                "name" => "Armazém",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "3a3a270d-8eb4-4221-ba7d-2426432f82c9",
                "state_id" => 21,
                "name" => "Arroio do Meio",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "955448fc-e139-4b48-9bd5-6524f6eb58f9",
                "state_id" => 21,
                "name" => "Arroio do Sal",
                "solar_incidence" => "3.7275"
            ],
            [
                "uuid" => "c10d1568-9199-436f-9a9c-409a6304ddfb",
                "state_id" => 21,
                "name" => "Arroio do Tigre",
                "solar_incidence" => "3.98125"
            ],
            [
                "uuid" => "417caa96-5400-4432-8db6-46fb6a81c446",
                "state_id" => 21,
                "name" => "Arroio dos Ratos",
                "solar_incidence" => "3.8675"
            ],
            [
                "uuid" => "7cc86822-9e33-47f4-8ad3-5c6a8a951928",
                "state_id" => 25,
                "name" => "Artur Nogueira",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "3a4dfc40-b053-4c4e-a851-5297ddba4da2",
                "state_id" => 21,
                "name" => "Arvorezinha",
                "solar_incidence" => "4.01625"
            ],
            [
                "uuid" => "1e1b66f8-8e81-4c50-9636-bb0d4c4db761",
                "state_id" => 16,
                "name" => "Assaí",
                "solar_incidence" => "4.27875"
            ],
            [
                "uuid" => "e448472a-4242-473e-9118-a899a0c59cf3",
                "state_id" => 6,
                "name" => "Assaré",
                "solar_incidence" => "4.9175"
            ],
            [
                "uuid" => "17f6a323-f35c-42dd-850a-b25aa2913c1e",
                "state_id" => 25,
                "name" => "Assis",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "81e04486-0825-49bd-a4bc-88de764c0f17",
                "state_id" => 1,
                "name" => "Assis Brasil",
                "solar_incidence" => "4.76"
            ],
            [
                "uuid" => "1d04b68f-e86f-4f6e-9dc7-9ead23a06997",
                "state_id" => 16,
                "name" => "Assis Chateaubriand",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "180d4312-3a87-4be7-98f8-dc6b99462cfa",
                "state_id" => 15,
                "name" => "Assunção",
                "solar_incidence" => "5.06625"
            ],
            [
                "uuid" => "b0baf898-577a-4141-927c-6990071ada66",
                "state_id" => 13,
                "name" => "Astolfo Dutra",
                "solar_incidence" => "3.9725"
            ],
            [
                "uuid" => "3549e58a-1a91-4a21-873c-6daa5272f1df",
                "state_id" => 16,
                "name" => "Astorga",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "5a148b11-229d-48be-a21b-157f7f3b4797",
                "state_id" => 25,
                "name" => "Atibaia",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "6e899038-3c65-4194-8c71-08b4c71ce4d7",
                "state_id" => 27,
                "name" => "Augustinópolis",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "334cfdbe-5794-4a98-a469-9cd543bf99e6",
                "state_id" => 25,
                "name" => "Auriflama",
                "solar_incidence" => "4.5325"
            ],
            [
                "uuid" => "b7f1a99d-bf18-422d-bc5f-f7d469c60b28",
                "state_id" => 6,
                "name" => "Aurora",
                "solar_incidence" => "3.605"
            ],
            [
                "uuid" => "9ffd5abb-51a8-4f53-a4f7-2ccdc4e7833e",
                "state_id" => 25,
                "name" => "Avanhandava",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "0c8641e0-6469-4a78-9466-393b029aa8d6",
                "state_id" => 25,
                "name" => "Avaré",
                "solar_incidence" => "4.20875"
            ],
            [
                "uuid" => "518cde08-90ff-436b-9507-b9e23edf0b45",
                "state_id" => 10,
                "name" => "Bacabal",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "0f9c70e7-f2b7-4fcb-b0ff-788c990f33cd",
                "state_id" => 25,
                "name" => "Bady Bassitt",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "9e0bc3e1-26d5-46ad-b78a-091adc6ac061",
                "state_id" => 13,
                "name" => "Baependi",
                "solar_incidence" => "4.34875"
            ],
            [
                "uuid" => "57793108-57b4-47b8-9dc6-8967cb59a3fe",
                "state_id" => 21,
                "name" => "Bagé",
                "solar_incidence" => "4.01625"
            ],
            [
                "uuid" => "854aca23-7dbd-4f43-b683-174a8b0c2132",
                "state_id" => 14,
                "name" => "Bagre",
                "solar_incidence" => "4.3575"
            ],
            [
                "uuid" => "6c7e00c8-8e38-47f1-a8ee-034cf30dfb2a",
                "state_id" => 24,
                "name" => "Balneário Camboriú",
                "solar_incidence" => "3.45625"
            ],
            [
                "uuid" => "d16e1c84-0730-4769-8c2e-499fefb0a040",
                "state_id" => 24,
                "name" => "Balneário Gaivota",
                "solar_incidence" => "3.7275"
            ],
            [
                "uuid" => "05c5924a-ddc8-4879-b779-5fb71d9e22ea",
                "state_id" => 25,
                "name" => "Bálsamo",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "363f9778-48c1-4650-9c3b-97ed81b4d7a8",
                "state_id" => 10,
                "name" => "Balsas",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "161bbcde-8010-45e9-be5b-0ca278cdc66b",
                "state_id" => 13,
                "name" => "Bambuí",
                "solar_incidence" => "4.445"
            ],
            [
                "uuid" => "fd7d8042-59a0-40e8-a0f9-7857adcd3394",
                "state_id" => 15,
                "name" => "Bananeiras",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "8fe4dce9-88dd-4e74-9338-703392ce2c46",
                "state_id" => 13,
                "name" => "Bandeira do Sul",
                "solar_incidence" => "4.45375"
            ],
            [
                "uuid" => "245f6e03-1e77-46bf-8705-7dc0d0116a9b",
                "state_id" => 16,
                "name" => "Bandeirantes",
                "solar_incidence" => "4.48875"
            ],
            [
                "uuid" => "537eaec1-be61-421f-b120-405627a9de18",
                "state_id" => 21,
                "name" => "Barão de Cotegipe",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "0403b849-f31b-4154-9619-f41f389997f5",
                "state_id" => 13,
                "name" => "Barão de Monte Alto",
                "solar_incidence" => "3.9725"
            ],
            [
                "uuid" => "f7e4c5e8-0e5d-4628-bb51-b02016bcec5b",
                "state_id" => 13,
                "name" => "Barbacena",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "ba874b0e-a8e9-4667-9f2c-f5f35694503b",
                "state_id" => 16,
                "name" => "Barbosa Ferraz",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "11ee889c-cc92-43e2-9062-035d6d0f5213",
                "state_id" => 14,
                "name" => "Barcarena",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "98feecf8-058a-47c4-a927-59dbc4320dd0",
                "state_id" => 25,
                "name" => "Bariri",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "bb95bb23-b2f1-4f75-918f-80982e498360",
                "state_id" => 25,
                "name" => "Barra Bonita",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "790a5df2-ae47-4d7c-a3b3-878be1e3c01d",
                "state_id" => 8,
                "name" => "Barra de São Francisco",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "6ba9c474-0313-425b-a75d-7e4ce9f9a249",
                "state_id" => 2,
                "name" => "Barra de São Miguel",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "5cdc9925-fa6e-43f4-bae9-885b7ced3c1c",
                "state_id" => 11,
                "name" => "Barra do Bugres",
                "solar_incidence" => "4.3225"
            ],
            [
                "uuid" => "0cd8d6f8-1c46-4505-9385-8b6a37774bc3",
                "state_id" => 10,
                "name" => "Barra do Corda",
                "solar_incidence" => "4.4625"
            ],
            [
                "uuid" => "36cfe413-a05e-45cf-acc4-4a3a5f6787ec",
                "state_id" => 11,
                "name" => "Barra do Garças",
                "solar_incidence" => "4.48"
            ],
            [
                "uuid" => "9f637e47-ed91-426c-a95e-c215b83713a0",
                "state_id" => 19,
                "name" => "Barra do Piraí",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "0d3c4e2f-061b-42ea-91a7-dfd074db45aa",
                "state_id" => 21,
                "name" => "Barra do Ribeiro",
                "solar_incidence" => "3.8675"
            ],
            [
                "uuid" => "f575f5f0-c896-4270-bc0c-2f681ef0c308",
                "state_id" => 13,
                "name" => "Barra Longa",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "bde63a4d-b479-43c7-8f41-069839c32db8",
                "state_id" => 16,
                "name" => "Barracão",
                "solar_incidence" => "4.03375"
            ],
            [
                "uuid" => "14f9af69-fde4-49ff-a626-5d17c177c7b9",
                "state_id" => 6,
                "name" => "Barreira",
                "solar_incidence" => "4.71625"
            ],
            [
                "uuid" => "42f3181c-b8e2-495a-9a16-c302c455f0e9",
                "state_id" => 5,
                "name" => "Barreiras",
                "solar_incidence" => "4.935"
            ],
            [
                "uuid" => "0ba667da-7c35-4a60-b7b2-aa0dbf1e2dca",
                "state_id" => 25,
                "name" => "Barretos",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "50099e1e-8dcc-4d88-ace3-75d66e047a7a",
                "state_id" => 25,
                "name" => "Barrinha",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "5a43b043-08bd-4e6d-832f-9292edd32ad2",
                "state_id" => 13,
                "name" => "Barroso",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "1aa517f9-54fa-4b4a-9273-276f1e0fff7a",
                "state_id" => 25,
                "name" => "Barueri",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "08b8c26e-0396-46a4-81d6-c99230694b90",
                "state_id" => 25,
                "name" => "Bastos",
                "solar_incidence" => "4.50625"
            ],
            [
                "uuid" => "7b1829d0-29a1-4cc4-bcaa-5dcb60896220",
                "state_id" => 12,
                "name" => "Bataguassu",
                "solar_incidence" => "4.43625"
            ],
            [
                "uuid" => "629d681a-77b1-41a1-86ae-aba036926059",
                "state_id" => 2,
                "name" => "Batalha",
                "solar_incidence" => "4.8125"
            ],
            [
                "uuid" => "1c3d6fec-d44b-42e8-93bf-ce9bb5617812",
                "state_id" => 25,
                "name" => "Bauru",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "6bb67da7-0f7c-4158-91ea-3ae95da4828a",
                "state_id" => 15,
                "name" => "Bayeux",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "7137a5ac-3e7f-4439-a39b-caa42a0d7060",
                "state_id" => 25,
                "name" => "Bebedouro",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "b20cfa85-25d7-48ea-98ab-688c53399981",
                "state_id" => 12,
                "name" => "Bela Vista",
                "solar_incidence" => "4.38375"
            ],
            [
                "uuid" => "e304127a-487e-4908-959f-e1907cb8122d",
                "state_id" => 9,
                "name" => "Bela Vista de Goiás",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "cb06eb6d-e8b3-408b-89c2-9cf3ba559b51",
                "state_id" => 16,
                "name" => "Bela Vista do Paraíso",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "f84b9137-f215-408a-830a-24f00906b19d",
                "state_id" => 24,
                "name" => "Bela Vista do Toldo",
                "solar_incidence" => "3.75375"
            ],
            [
                "uuid" => "51980e39-deda-4f67-a618-21ee90549082",
                "state_id" => 14,
                "name" => "Belém",
                "solar_incidence" => "4.73375"
            ],
            [
                "uuid" => "d8606aa4-f6bf-4ea9-ba11-e0762fd19694",
                "state_id" => 19,
                "name" => "Belford Roxo",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "9aa6c0aa-ffaa-4be9-af7c-dfbaa8b68eed",
                "state_id" => 5,
                "name" => "Belmonte",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "fcfc68c8-f55f-41f6-b89d-9b29fa07be3b",
                "state_id" => 13,
                "name" => "Belo Horizonte",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "d6175efa-cfda-4cce-afad-05ec16caf0af",
                "state_id" => 17,
                "name" => "Belo Jardim",
                "solar_incidence" => "4.9175"
            ],
            [
                "uuid" => "594ac7a0-7bd4-4ee8-916a-65ffd3d31926",
                "state_id" => 14,
                "name" => "Benevides",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "af53e4c5-0920-4720-b8fb-2d3549d8add9",
                "state_id" => 21,
                "name" => "Bento Gonçalves",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "ec6ce5d8-33aa-4f5a-bd84-ffa2d4f2c0a6",
                "state_id" => 25,
                "name" => "Bernardino de Campos",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "21454859-84c0-4dbd-881b-07823bbd14be",
                "state_id" => 25,
                "name" => "Bertioga",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "538b2ad0-b035-4441-92cd-6dc0402468fe",
                "state_id" => 13,
                "name" => "Betim",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "f475a8f0-931e-4cc0-aa3e-8f0645379894",
                "state_id" => 17,
                "name" => "Bezerros",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "bcf04216-2090-45f4-af8a-988b01d2a7d0",
                "state_id" => 13,
                "name" => "Bicas",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "fcff3be3-8a04-4fd4-9d03-6495b1299921",
                "state_id" => 24,
                "name" => "Biguaçu",
                "solar_incidence" => "3.535"
            ],
            [
                "uuid" => "8abe48fe-6f53-4ac0-ba4d-78d9e5d16b7c",
                "state_id" => 25,
                "name" => "Birigui",
                "solar_incidence" => "4.50625"
            ],
            [
                "uuid" => "a6a5bdf0-78e0-4f02-be86-0c29b669d729",
                "state_id" => 24,
                "name" => "Blumenau",
                "solar_incidence" => "3.5875"
            ],
            [
                "uuid" => "49a44f1f-ffca-4756-bb40-9f78d82ba3ef",
                "state_id" => 25,
                "name" => "Boa Esperança do Sul",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "232011ac-bf71-4bb5-9563-4fbc3bd4ccfa",
                "state_id" => 23,
                "name" => "Boa Vista",
                "solar_incidence" => "4.375"
            ],
            [
                "uuid" => "49cdb998-795a-4060-ba5b-b20835ce044c",
                "state_id" => 16,
                "name" => "Boa Vista da Aparecida",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "2a86fab6-dcc1-4ef2-952e-4dafb445252b",
                "state_id" => 4,
                "name" => "Boca do Acre",
                "solar_incidence" => "4.1125"
            ],
            [
                "uuid" => "bbe2d8b9-e7c8-454b-b192-5b51fb2ac033",
                "state_id" => 24,
                "name" => "Bocaina do Sul",
                "solar_incidence" => "3.605"
            ],
            [
                "uuid" => "ae055d26-45bd-4814-8346-3f861f4da693",
                "state_id" => 13,
                "name" => "Bocaiúva",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "1cf6b5e1-8744-4434-8252-618a8e34d9a6",
                "state_id" => 25,
                "name" => "Boituva",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "a2946d21-3251-43d2-a9b2-85729b39d5c2",
                "state_id" => 13,
                "name" => "Bom Despacho",
                "solar_incidence" => "4.4625"
            ],
            [
                "uuid" => "a2f8f146-b395-4693-97ef-ca647fb01f10",
                "state_id" => 17,
                "name" => "Bom Jardim",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "d89e0d36-6915-4a39-bfcd-f3f674549875",
                "state_id" => 13,
                "name" => "Bom Jardim de Minas",
                "solar_incidence" => "4.34875"
            ],
            [
                "uuid" => "d00e420c-d979-4803-8f57-5e3188175b81",
                "state_id" => 18,
                "name" => "Bom Jesus",
                "solar_incidence" => "5.0575"
            ],
            [
                "uuid" => "8ea3268c-4460-413c-af24-9dbfa5f09228",
                "state_id" => 5,
                "name" => "Bom Jesus da Lapa",
                "solar_incidence" => "5.01375"
            ],
            [
                "uuid" => "b586813a-4ddd-4489-9de0-59dbf9daacf5",
                "state_id" => 9,
                "name" => "Bom Jesus de Goiás",
                "solar_incidence" => "4.64625"
            ],
            [
                "uuid" => "b3abc799-0e8a-44a1-a9e0-5dfd7ecc47c4",
                "state_id" => 19,
                "name" => "Bom Jesus do Itabapoana",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "ca98242f-755c-4508-98e0-a1d2c1ec64d8",
                "state_id" => 13,
                "name" => "Bom Repouso",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "e002abc1-1729-449a-976c-68dbb2dcefec",
                "state_id" => 12,
                "name" => "Bonito",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "c22467ce-5c1d-42ca-bba3-5a1b7de8decf",
                "state_id" => 26,
                "name" => "Boquim",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "8fe0311e-85cf-4959-9817-2b7652d6d3e6",
                "state_id" => 16,
                "name" => "Borrazópolis",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "9b070131-4a31-48a3-8b58-201bdeca907d",
                "state_id" => 25,
                "name" => "Botucatu",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "f59f9eee-3340-441b-a634-b409d253a855",
                "state_id" => 24,
                "name" => "Botuverá",
                "solar_incidence" => "3.605"
            ],
            [
                "uuid" => "178aeeed-f39d-4f88-aa76-9ac9c267b367",
                "state_id" => 14,
                "name" => "Bragança",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "984a820f-174a-48e3-9cac-ba5578a011a8",
                "state_id" => 25,
                "name" => "Bragança Paulista",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "17f0ab07-a04f-490c-8270-93ba980701fb",
                "state_id" => 16,
                "name" => "Brasilândia do Sul",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "4a618826-861c-4693-bfa3-829e099ad939",
                "state_id" => 1,
                "name" => "Brasiléia",
                "solar_incidence" => "4.1825"
            ],
            [
                "uuid" => "c9f2db3b-9158-49df-978e-8f72197811a9",
                "state_id" => 7,
                "name" => "Brasília",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "e017e74f-4c1f-4729-9daf-4d24859c42e6",
                "state_id" => 13,
                "name" => "Brasília de Minas",
                "solar_incidence" => "4.87375"
            ],
            [
                "uuid" => "b93cf7bd-dfdd-4256-a273-78161d00a5bd",
                "state_id" => 6,
                "name" => "Brejo Santo",
                "solar_incidence" => "4.9875"
            ],
            [
                "uuid" => "eea7f807-b6cd-40c7-8d47-40d1ca6652a6",
                "state_id" => 14,
                "name" => "Breu Branco",
                "solar_incidence" => "4.38375"
            ],
            [
                "uuid" => "762ce576-49fa-43bc-93b6-da080452f370",
                "state_id" => 14,
                "name" => "Breves",
                "solar_incidence" => "4.3575"
            ],
            [
                "uuid" => "3aa31abc-9ffe-486e-9370-21a86b2831dd",
                "state_id" => 9,
                "name" => "Britânia",
                "solar_incidence" => "4.55875"
            ],
            [
                "uuid" => "fdf9e1bb-deef-44e0-aa9e-53704c048ae3",
                "state_id" => 25,
                "name" => "Brodowski",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "0498eb2d-8f31-4892-bae5-5f7abe1e3bad",
                "state_id" => 25,
                "name" => "Brotas",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "a52abb10-c42c-4094-9053-df3630152187",
                "state_id" => 5,
                "name" => "Brotas de Macaúbas",
                "solar_incidence" => "5.13625"
            ],
            [
                "uuid" => "5ea746c7-716c-4993-93c9-65ff54123db9",
                "state_id" => 13,
                "name" => "Brumadinho",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "9ebdb9a3-c77c-4090-8476-a7daec2a48ab",
                "state_id" => 24,
                "name" => "Brusque",
                "solar_incidence" => "3.535"
            ],
            [
                "uuid" => "e68cbc15-fd8f-4231-940a-f927dafcf700",
                "state_id" => 13,
                "name" => "Bueno Brandão",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "2235a0b3-5792-4ec2-ba23-ef34729dbe14",
                "state_id" => 5,
                "name" => "Buerarema",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "13cb6ec0-06e6-47a3-8cd1-b00a42e26fee",
                "state_id" => 25,
                "name" => "Buritama",
                "solar_incidence" => "4.50625"
            ],
            [
                "uuid" => "9ba0baa4-5d17-42f4-97ba-f8806c12cc4a",
                "state_id" => 10,
                "name" => "Buriticupu",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "7974f516-f9ef-4aee-b99e-c69484d86791",
                "state_id" => 22,
                "name" => "Buritis",
                "solar_incidence" => "4.2"
            ],
            [
                "uuid" => "2df356cd-0166-4862-baf1-5c71017b0362",
                "state_id" => 12,
                "name" => "Caarapó",
                "solar_incidence" => "4.3225"
            ],
            [
                "uuid" => "d56d98eb-0cf7-44c8-9b21-beee6267a3ec",
                "state_id" => 22,
                "name" => "Cabixi",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "d29819da-c802-4512-b1c7-66010ee6c4e9",
                "state_id" => 17,
                "name" => "Cabo de Santo Agostinho",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "3d35941e-4014-4ff4-842b-e695a3d715fd",
                "state_id" => 19,
                "name" => "Cabo Frio",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "f78d1da3-aaf7-4f63-80e0-129ace387058",
                "state_id" => 25,
                "name" => "Cabreúva",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "435436fd-4e0d-4c51-8d41-4cc54ddf3a44",
                "state_id" => 17,
                "name" => "Cabrobó",
                "solar_incidence" => "4.83875"
            ],
            [
                "uuid" => "b4d9be9d-cbf0-4478-8ed7-8bc48e1f729a",
                "state_id" => 24,
                "name" => "Caçador",
                "solar_incidence" => "4.025"
            ],
            [
                "uuid" => "8f04f731-3b80-4902-9cfa-0074611bd513",
                "state_id" => 25,
                "name" => "Caçapava",
                "solar_incidence" => "3.85875"
            ],
            [
                "uuid" => "2808aa59-0d8e-473b-908e-f508d9fdec24",
                "state_id" => 21,
                "name" => "Cacequi",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "f9c1c223-904b-4d76-b4c1-e072ab6bfe95",
                "state_id" => 11,
                "name" => "Cáceres",
                "solar_incidence" => "4.43625"
            ],
            [
                "uuid" => "3cf06410-b88a-4799-b04b-612a10c23f64",
                "state_id" => 5,
                "name" => "Cachoeira",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "7b593373-cc13-4022-adcb-83de3c5f88b2",
                "state_id" => 21,
                "name" => "Cachoeira do Sul",
                "solar_incidence" => "3.94625"
            ],
            [
                "uuid" => "b5497150-99e9-4d16-a852-71e68694e0d0",
                "state_id" => 13,
                "name" => "Cachoeira Dourada",
                "solar_incidence" => "4.64625"
            ],
            [
                "uuid" => "1ed18658-7d33-427c-ab11-7115363114cc",
                "state_id" => 19,
                "name" => "Cachoeiras de Macacu",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "24aa258f-8d0c-4455-a41a-0c72e53c817d",
                "state_id" => 21,
                "name" => "Cachoeirinha",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "40387da3-86df-421b-832b-0c37b5db2c61",
                "state_id" => 8,
                "name" => "Cachoeiro de Itapemirim",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "82c77e8d-a10d-4dfb-bc0a-ec9c7de3d619",
                "state_id" => 21,
                "name" => "Cacique Doble",
                "solar_incidence" => "4.03375"
            ],
            [
                "uuid" => "13e9b0a8-f188-481a-8012-19ba763b17bf",
                "state_id" => 22,
                "name" => "Cacoal",
                "solar_incidence" => "4.20875"
            ],
            [
                "uuid" => "99aaefb1-7fef-460c-ac26-5bee77f22d84",
                "state_id" => 5,
                "name" => "Caculé",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "244507f1-1a7b-4fe3-a11c-07524abc79e9",
                "state_id" => 13,
                "name" => "Caetanópolis",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "af1aadb1-6e29-4222-aa83-4646eb1bd2eb",
                "state_id" => 13,
                "name" => "Caeté",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "335b6897-4778-47a7-9d50-419ba577ce13",
                "state_id" => 5,
                "name" => "Caetité",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "a820c60a-7f14-4aac-9240-cf17b5a128de",
                "state_id" => 16,
                "name" => "Cafelândia",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "d246db2c-3f47-42bd-b7da-774969e27e18",
                "state_id" => 20,
                "name" => "Caicó",
                "solar_incidence" => "5.20625"
            ],
            [
                "uuid" => "0bcb70ac-f4a4-4ad6-a2eb-a573fdcbe4e7",
                "state_id" => 25,
                "name" => "Caiuá",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "8a1ccdd4-9ddd-43bd-b6da-99d40d59f434",
                "state_id" => 25,
                "name" => "Cajamar",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "38e9bf52-d869-49c0-98bd-2a5af6662cea",
                "state_id" => 15,
                "name" => "Cajazeiras",
                "solar_incidence" => "5.0575"
            ],
            [
                "uuid" => "f45a8b4d-1e65-4fa2-bc79-3c2a5a737555",
                "state_id" => 15,
                "name" => "Cajazeirinhas",
                "solar_incidence" => "5.20625"
            ],
            [
                "uuid" => "aa244263-c243-434d-b149-5663c90f24ad",
                "state_id" => 3,
                "name" => "Calçoene",
                "solar_incidence" => "4.95"
            ],
            [
                "uuid" => "d0c0725b-92ac-49ee-810a-b9124967bb1e",
                "state_id" => 9,
                "name" => "Caldas Novas",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "eda104ca-d9eb-4699-98be-29530bb15ec2",
                "state_id" => 16,
                "name" => "Califórnia",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "3073bc90-e0ea-47a9-8f44-65019c224148",
                "state_id" => 5,
                "name" => "Camaçari",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "a68640b8-ee65-42dd-b173-58b44a849177",
                "state_id" => 5,
                "name" => "Camamu",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "e30ee834-fe5c-446f-b0d3-570dc81aa76f",
                "state_id" => 17,
                "name" => "Camaragibe",
                "solar_incidence" => "5.15375"
            ],
            [
                "uuid" => "b1bc498d-647a-49cd-9dae-0e7a8ee29013",
                "state_id" => 16,
                "name" => "Cambé",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "c0af9bc6-3bc5-4b27-afad-3a8b3d050618",
                "state_id" => 13,
                "name" => "Cambuí",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "f7c854d1-3f40-4387-a5be-af6ed5f17fc7",
                "state_id" => 15,
                "name" => "Campina Grande",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "119c5ce7-7ad6-47bc-9185-3b24f740b8f5",
                "state_id" => 16,
                "name" => "Campina Grande do Sul",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "d063f33f-8d30-49ae-8037-cadc93d757fb",
                "state_id" => 13,
                "name" => "Campina Verde",
                "solar_incidence" => "4.6375"
            ],
            [
                "uuid" => "6cfb02cb-f3ee-47d3-ade2-8929b438f5ba",
                "state_id" => 25,
                "name" => "Campinas",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "12fa85f2-9d00-4719-a134-7d87c66fc089",
                "state_id" => 21,
                "name" => "Campinas do Sul",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "857d7ef0-9827-45d3-9a70-1780da379c3e",
                "state_id" => 9,
                "name" => "Campinorte",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "0342c2c2-2c71-47ee-880f-22d0d26a2c49",
                "state_id" => 24,
                "name" => "Campo Belo do Sul",
                "solar_incidence" => "3.91125"
            ],
            [
                "uuid" => "1b3257a7-d036-4505-a870-9bcfad004a46",
                "state_id" => 21,
                "name" => "Campo Bom",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "7d413510-e0ed-48a2-bb88-cf2aef902a2b",
                "state_id" => 16,
                "name" => "Campo Bonito",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "f930262c-78a0-4244-a0e2-871d080c68cc",
                "state_id" => 5,
                "name" => "Campo Formoso",
                "solar_incidence" => "4.8125"
            ],
            [
                "uuid" => "211cbc08-15a1-4c11-8b37-8f0dc66d1434",
                "state_id" => 12,
                "name" => "Campo Grande",
                "solar_incidence" => "4.4625"
            ],
            [
                "uuid" => "6b0df05f-db53-47f6-aafa-ddc8c511fc51",
                "state_id" => 16,
                "name" => "Campo Largo",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "91371b8d-402f-4ee8-9e42-b27f84eb1586",
                "state_id" => 25,
                "name" => "Campo Limpo Paulista",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "9fc2e8b0-50cd-498e-b483-fe1c023fca65",
                "state_id" => 18,
                "name" => "Campo Maior",
                "solar_incidence" => "4.94375"
            ],
            [
                "uuid" => "221a4572-8211-4150-8e04-ba831ccfea2f",
                "state_id" => 16,
                "name" => "Campo Mourão",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "b48b9a9c-ca77-4405-98d5-d39b9e45a766",
                "state_id" => 11,
                "name" => "Campo Novo do Parecis",
                "solar_incidence" => "4.34"
            ],
            [
                "uuid" => "1c9b3556-bce8-4f0a-a2d7-dbd93d6f3e82",
                "state_id" => 11,
                "name" => "Campo Verde",
                "solar_incidence" => "4.445"
            ],
            [
                "uuid" => "e4ad7dbe-a2fe-42b3-a1f9-d87e6c3bec69",
                "state_id" => 25,
                "name" => "Campos do Jordão",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "a82539d9-184c-444e-a907-96c258bed731",
                "state_id" => 19,
                "name" => "Campos dos Goytacazes",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "4aaf0413-7c18-47dd-bc05-612ba23b9e19",
                "state_id" => 24,
                "name" => "Campos Novos",
                "solar_incidence" => "4.03375"
            ],
            [
                "uuid" => "c1c583d1-0901-4c9e-ba1c-9971caf03259",
                "state_id" => 6,
                "name" => "Campos Sales",
                "solar_incidence" => "4.97875"
            ],
            [
                "uuid" => "855a0ec1-2465-4350-9a76-3e42764e5bb1",
                "state_id" => 9,
                "name" => "Campos Verdes",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "c43d66f3-de3d-4e0a-b61d-455216dbfb35",
                "state_id" => 14,
                "name" => "Canaã dos Carajás",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "abad307c-db86-4e67-8065-f7610483a258",
                "state_id" => 5,
                "name" => "Canápolis",
                "solar_incidence" => "4.8825"
            ],
            [
                "uuid" => "0dc55e45-64c4-4a00-a01d-9a746a0b4aa5",
                "state_id" => 11,
                "name" => "Canarana",
                "solar_incidence" => "4.5675"
            ],
            [
                "uuid" => "66d5b1c8-524d-4ba0-b4ba-da89a0cda0dd",
                "state_id" => 13,
                "name" => "Candeias",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "2e4114a3-0fde-40dc-b92c-a93fd5e6760f",
                "state_id" => 22,
                "name" => "Candeias do Jamari",
                "solar_incidence" => "4.15625"
            ],
            [
                "uuid" => "a9369630-ba55-4370-9f54-04d6ed82b0fc",
                "state_id" => 21,
                "name" => "Candelária",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "65c0a520-cba6-4975-8cbc-03e0752dcd29",
                "state_id" => 5,
                "name" => "Candiba",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "a67b93d6-2fa9-4f2c-a1e7-3b3d9636d67d",
                "state_id" => 16,
                "name" => "Candói",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "449880a4-cc31-4049-85ce-59bfbf3933cd",
                "state_id" => 21,
                "name" => "Canela",
                "solar_incidence" => "3.80625"
            ],
            [
                "uuid" => "e910ec0e-0a2e-4942-96a5-67dc040cee61",
                "state_id" => 21,
                "name" => "Canoas",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "26af7c00-2113-40ed-bddd-87aef1561dea",
                "state_id" => 24,
                "name" => "Canoinhas",
                "solar_incidence" => "3.75375"
            ],
            [
                "uuid" => "e263958c-7986-40cd-8287-3de525972fa6",
                "state_id" => 14,
                "name" => "Capanema",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "305ce7c0-5970-45c3-8445-36748c50ccd4",
                "state_id" => 25,
                "name" => "Capão Bonito",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "19190b95-7955-463b-835a-fdeffdb57493",
                "state_id" => 21,
                "name" => "Capão da Canoa",
                "solar_incidence" => "3.80625"
            ],
            [
                "uuid" => "cef55b33-6575-4504-872f-9476d061eb69",
                "state_id" => 13,
                "name" => "Capim Branco",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "b5c6bd43-c6a0-449e-bab1-236932f0c55f",
                "state_id" => 10,
                "name" => "Capinzal do Norte",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "d732ca48-71c7-42cb-b499-f26c0104d105",
                "state_id" => 13,
                "name" => "Capitão Enéas",
                "solar_incidence" => "4.83"
            ],
            [
                "uuid" => "4e3f5136-24e9-405f-a618-8797190a4c14",
                "state_id" => 14,
                "name" => "Capitão Poço",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "cc5e3c06-66ae-41a3-a778-dc1cff4eacbe",
                "state_id" => 13,
                "name" => "Capitólio",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "d99512df-78d8-45a4-b3e8-831b6a49fe94",
                "state_id" => 25,
                "name" => "Capivari",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "d3dc4e82-8171-4886-b0b7-0923bd2ab784",
                "state_id" => 1,
                "name" => "Capixaba",
                "solar_incidence" => "4.19125"
            ],
            [
                "uuid" => "bd8a560d-1335-4c42-8f57-a22d07ea3735",
                "state_id" => 25,
                "name" => "Caraguatatuba",
                "solar_incidence" => "3.85875"
            ],
            [
                "uuid" => "584320e6-58e0-4fad-8ae5-edd861bd653d",
                "state_id" => 13,
                "name" => "Carandaí",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "fa3c315a-5249-4a23-aa3c-7139cdc6433c",
                "state_id" => 25,
                "name" => "Carapicuíba",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "97c8456e-b4ef-49b1-b42c-a728a63f623c",
                "state_id" => 13,
                "name" => "Caratinga",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "80643e39-5afd-48e1-99d4-d564d253aeeb",
                "state_id" => 4,
                "name" => "Carauari",
                "solar_incidence" => "4.05125"
            ],
            [
                "uuid" => "40532f5d-bf16-4430-8f35-58127691bc3e",
                "state_id" => 21,
                "name" => "Carazinho",
                "solar_incidence" => "4.01625"
            ],
            [
                "uuid" => "8194d082-4a2c-4881-b8cd-eb613a9c6d55",
                "state_id" => 25,
                "name" => "Cardoso",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "e8fec756-aaa2-4e9a-996f-9176af5e0924",
                "state_id" => 8,
                "name" => "Cariacica",
                "solar_incidence" => "3.955"
            ],
            [
                "uuid" => "177fa6e8-7422-49f6-ae07-872f31ea0332",
                "state_id" => 6,
                "name" => "Cariús",
                "solar_incidence" => "4.9175"
            ],
            [
                "uuid" => "f93639be-fea9-41df-ac46-314a1118b936",
                "state_id" => 13,
                "name" => "Carmo de Minas",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "526d9acb-5476-40f1-aee0-8e566e9b86c2",
                "state_id" => 13,
                "name" => "Carmo do Paranaíba",
                "solar_incidence" => "4.62875"
            ],
            [
                "uuid" => "9ca1e767-08f1-4973-8830-0144c08086e0",
                "state_id" => 26,
                "name" => "Carmópolis",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "dd14b766-08c9-4cdc-b763-e26eb22c720f",
                "state_id" => 13,
                "name" => "Carmópolis de Minas",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "04298dc7-7410-4b96-9c22-f290a5da571a",
                "state_id" => 17,
                "name" => "Carnaíba",
                "solar_incidence" => "5.1625"
            ],
            [
                "uuid" => "ca44fa70-61e1-4c72-97a4-7f974129ca46",
                "state_id" => 13,
                "name" => "Carneirinho",
                "solar_incidence" => "4.59375"
            ],
            [
                "uuid" => "d45e7e23-9750-4ef5-bf40-24b6ef09ac83",
                "state_id" => 10,
                "name" => "Carolina",
                "solar_incidence" => "4.4625"
            ],
            [
                "uuid" => "6cbec3bf-01eb-4797-9e81-d1ce2907dc36",
                "state_id" => 17,
                "name" => "Carpina",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "a6f0ccaf-7617-47bf-bd33-4c7768143f33",
                "state_id" => 17,
                "name" => "Caruaru",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "1bcb4026-b7e0-4f86-b180-dc9f8fef11df",
                "state_id" => 25,
                "name" => "Casa Branca",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "592519ae-3bc2-4f49-a481-acee9eef1e7b",
                "state_id" => 5,
                "name" => "Casa Nova",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "d3e98877-7a01-473f-8714-159dc9fe709c",
                "state_id" => 21,
                "name" => "Casca",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "e6c48dc6-ad82-4c19-bccd-dab93310107c",
                "state_id" => 16,
                "name" => "Cascavel",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "b97686f4-c4ab-4f0b-8c50-ac172b233fb2",
                "state_id" => 19,
                "name" => "Casimiro de Abreu",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "fc74fbbc-2bde-4959-a557-bed0c42120a1",
                "state_id" => 13,
                "name" => "Cássia",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "2c97c3d8-f011-49df-bc5f-4eab13da57bc",
                "state_id" => 14,
                "name" => "Castanhal",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "1f6b5303-1d74-408d-8631-826f65000528",
                "state_id" => 8,
                "name" => "Castelo",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "3dcf3955-7d13-4e27-850b-48b8419c11d5",
                "state_id" => 18,
                "name" => "Castelo do Piauí",
                "solar_incidence" => "4.9875"
            ],
            [
                "uuid" => "424f09c5-5c44-408f-b9a2-eb207c6703c9",
                "state_id" => 16,
                "name" => "Castro",
                "solar_incidence" => "4.15625"
            ],
            [
                "uuid" => "192db09c-0275-4dd2-b143-e73a84d9b1e5",
                "state_id" => 13,
                "name" => "Cataguases",
                "solar_incidence" => "3.9725"
            ],
            [
                "uuid" => "11cfbd0d-8b1c-4415-9e86-9268a482c038",
                "state_id" => 9,
                "name" => "Catalão",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "7c0cbe25-70f1-4a2b-a058-fc89b902acca",
                "state_id" => 25,
                "name" => "Catanduva",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "c26d3bf2-ac40-406b-92f0-5c8b5211902b",
                "state_id" => 15,
                "name" => "Catolé do Rocha",
                "solar_incidence" => "5.20625"
            ],
            [
                "uuid" => "19b15023-1fe3-4c77-8c89-d2b22695cf4b",
                "state_id" => 21,
                "name" => "Catuípe",
                "solar_incidence" => "4.10375"
            ],
            [
                "uuid" => "08827ad2-09e4-4977-9af7-6508a1fe4f1d",
                "state_id" => 6,
                "name" => "Caucaia",
                "solar_incidence" => "5.11"
            ],
            [
                "uuid" => "43ab770b-a081-47ca-aea9-451407de3a07",
                "state_id" => 13,
                "name" => "Caxambu",
                "solar_incidence" => "4.34875"
            ],
            [
                "uuid" => "31dd6e95-766e-4111-86eb-7767362c20f3",
                "state_id" => 10,
                "name" => "Caxias",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "5b5c9b0a-156d-42ed-8571-99335f97fd16",
                "state_id" => 21,
                "name" => "Caxias do Sul",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "81e6f1b2-fc18-4373-a054-805df8515df0",
                "state_id" => 20,
                "name" => "Ceará-Mirim",
                "solar_incidence" => "4.8825"
            ],
            [
                "uuid" => "b9cfd871-c14f-49f9-854f-7b0d9789cff4",
                "state_id" => 25,
                "name" => "Cedral",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "32636704-505d-4237-8fe7-d23d3c4812aa",
                "state_id" => 22,
                "name" => "Cerejeiras",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "d718f901-77d4-456f-a5a8-92aa22a43f6c",
                "state_id" => 9,
                "name" => "Ceres",
                "solar_incidence" => "4.61125"
            ],
            [
                "uuid" => "64401939-11a7-4e45-ac76-39569ffc9f73",
                "state_id" => 25,
                "name" => "Cerqueira César",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "68279efd-575e-42d4-bda9-b78c09a71cc7",
                "state_id" => 16,
                "name" => "Cerro Azul",
                "solar_incidence" => "4.08625"
            ],
            [
                "uuid" => "645ffed8-e125-4281-bbe4-403fffeea99c",
                "state_id" => 21,
                "name" => "Cerro Largo",
                "solar_incidence" => "4.10375"
            ],
            [
                "uuid" => "3c310957-4871-48fc-b949-5babcb0a0f6a",
                "state_id" => 9,
                "name" => "Cezarina",
                "solar_incidence" => "4.62"
            ],
            [
                "uuid" => "bc248db9-a391-4ddf-87e9-0eda13f6721f",
                "state_id" => 11,
                "name" => "Chapada dos Guimarães",
                "solar_incidence" => "4.445"
            ],
            [
                "uuid" => "0880662d-e16c-47ae-a05d-96960bb27185",
                "state_id" => 12,
                "name" => "Chapadão do Sul",
                "solar_incidence" => "4.48"
            ],
            [
                "uuid" => "53824b9e-33ef-4ef2-8e1e-4ccd25bd1177",
                "state_id" => 10,
                "name" => "Chapadinha",
                "solar_incidence" => "4.5325"
            ],
            [
                "uuid" => "4fc0c148-a9f4-446a-8e16-0129079b9de0",
                "state_id" => 24,
                "name" => "Chapecó",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "49d9523c-b8d1-485c-9e87-fa0bb27c5231",
                "state_id" => 25,
                "name" => "Charqueada",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "794c02ba-cef0-48be-8a4e-87cb867ff41e",
                "state_id" => 16,
                "name" => "Chopinzinho",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "eb1b253b-5a84-4f28-aa0b-051627f2cc8e",
                "state_id" => 16,
                "name" => "Cianorte",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "bafbb154-362a-4a11-be89-541a7cc4d33b",
                "state_id" => 16,
                "name" => "Cidade Gaúcha",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "38826c02-d0be-4853-8d31-de98743d77e7",
                "state_id" => 9,
                "name" => "Cidade Ocidental",
                "solar_incidence" => "4.62875"
            ],
            [
                "uuid" => "0c349f81-d135-42dd-bf24-976776bb8684",
                "state_id" => 13,
                "name" => "Claro dos Poções",
                "solar_incidence" => "4.76875"
            ],
            [
                "uuid" => "b13286e0-8e29-43a3-96bf-e3519ce41b40",
                "state_id" => 11,
                "name" => "Cláudia",
                "solar_incidence" => "4.48875"
            ],
            [
                "uuid" => "aeef33cf-1ecd-4290-90e8-5daa752fa6a9",
                "state_id" => 13,
                "name" => "Cláudio",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "eca54b94-6aa5-48d2-b535-344b1e574766",
                "state_id" => 9,
                "name" => "Cocalzinho de Goiás",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "3e895a8a-733c-4f90-bcf5-deb6dc0accf0",
                "state_id" => 10,
                "name" => "Codó",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "91da4e09-a618-4d1b-b399-220939af6a8b",
                "state_id" => 2,
                "name" => "Coité do Nóia",
                "solar_incidence" => "4.73375"
            ],
            [
                "uuid" => "f582275d-312b-4ce3-b7f9-8c52093f8b7c",
                "state_id" => 8,
                "name" => "Colatina",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "a76ef111-9f5f-4012-a4a7-f9192d19a043",
                "state_id" => 11,
                "name" => "Colíder",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "b177b633-8ab7-4db2-a63e-a4a3c3cc30ce",
                "state_id" => 25,
                "name" => "Colina",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "55472a1d-0a1b-449c-ad58-63c2412ece19",
                "state_id" => 27,
                "name" => "Colinas do Tocantins",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "bef9b182-ab92-4beb-80a7-aab351ddd74f",
                "state_id" => 16,
                "name" => "Colombo",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "111e7794-6a7f-4d88-acc2-740643007717",
                "state_id" => 16,
                "name" => "Colorado",
                "solar_incidence" => "4.01625"
            ],
            [
                "uuid" => "e8288876-5c91-4f56-bf3b-11b25c5bc906",
                "state_id" => 22,
                "name" => "Colorado do Oeste",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "f76a28a5-75e2-4589-92e6-bad5f0c4521f",
                "state_id" => 27,
                "name" => "Combinado",
                "solar_incidence" => "4.8825"
            ],
            [
                "uuid" => "af131661-ceac-415b-b4c1-835049ca14fa",
                "state_id" => 8,
                "name" => "Conceição da Barra",
                "solar_incidence" => "4.05125"
            ],
            [
                "uuid" => "6c0e56d1-06f6-40bd-b9b4-56bf3d45e4be",
                "state_id" => 13,
                "name" => "Conceição das Alagoas",
                "solar_incidence" => "4.62875"
            ],
            [
                "uuid" => "c81f9b18-5548-46b1-9186-886dbb512f7b",
                "state_id" => 19,
                "name" => "Conceição de Macabu",
                "solar_incidence" => "4.0425"
            ],
            [
                "uuid" => "df402c3e-c4be-438b-b21a-bb3ae57a6072",
                "state_id" => 14,
                "name" => "Conceição do Araguaia",
                "solar_incidence" => "4.48875"
            ],
            [
                "uuid" => "a281a0d8-8056-49f6-a316-4cfdd81a1c1c",
                "state_id" => 5,
                "name" => "Conceição do Coité",
                "solar_incidence" => "4.375"
            ],
            [
                "uuid" => "cc363f69-24bc-4a82-baa7-e58c40dcf3ad",
                "state_id" => 24,
                "name" => "Concórdia",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "472c546d-5208-4535-a23f-422b2c9f8ce3",
                "state_id" => 5,
                "name" => "Condeúba",
                "solar_incidence" => "4.7425"
            ],
            [
                "uuid" => "a00f8fa0-cea0-4f62-8d59-34237d63d6c9",
                "state_id" => 21,
                "name" => "Condor",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "66f839ae-2396-41a2-9163-41138024124a",
                "state_id" => 11,
                "name" => "Confresa",
                "solar_incidence" => "4.50625"
            ],
            [
                "uuid" => "7a6bafff-46fe-4e0d-a950-13b32da85b20",
                "state_id" => 13,
                "name" => "Congonhal",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "af0e9a1e-73a3-48e0-9a73-766c779a3223",
                "state_id" => 16,
                "name" => "Congonhinhas",
                "solar_incidence" => "4.27875"
            ],
            [
                "uuid" => "d93a2ccc-7d40-48d2-9148-fc0f90c2276a",
                "state_id" => 11,
                "name" => "Conquista D Oeste",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "2c72767b-8622-4c22-b4eb-8d5f9598b013",
                "state_id" => 13,
                "name" => "Conselheiro Lafaiete",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "726218f8-0b92-4572-9229-d533e7e5e640",
                "state_id" => 13,
                "name" => "Contagem",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "eaab0d1d-2f83-4389-9d8f-c62545921d39",
                "state_id" => 16,
                "name" => "Contenda",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "e118d571-fe80-4108-bea8-2f59e126fc7b",
                "state_id" => 13,
                "name" => "Coração de Jesus",
                "solar_incidence" => "4.87375"
            ],
            [
                "uuid" => "bbc08a5c-f3a2-494f-9410-c1a309cc4664",
                "state_id" => 15,
                "name" => "Coremas",
                "solar_incidence" => "5.1625"
            ],
            [
                "uuid" => "934fee61-fd79-4952-baf3-c30e8b165e25",
                "state_id" => 16,
                "name" => "Cornélio Procópio",
                "solar_incidence" => "4.27875"
            ],
            [
                "uuid" => "630cf892-1de8-41ab-9fae-afee68c94fd9",
                "state_id" => 10,
                "name" => "Coroatá",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "edb8cd2d-17b1-4652-965e-6d2cd20303f2",
                "state_id" => 13,
                "name" => "Coromandel",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "4063f785-c177-47e8-9faa-b4020e1f02db",
                "state_id" => 21,
                "name" => "Coronel Bicaco",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "7e9920c2-14fc-4bce-bc1a-5c36a8815a06",
                "state_id" => 13,
                "name" => "Coronel Fabriciano",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "bc1d6ed3-09c0-4461-90dc-efcd36bdfe35",
                "state_id" => 5,
                "name" => "Correntina",
                "solar_incidence" => "4.8825"
            ],
            [
                "uuid" => "a878c653-bf9b-45d6-8ab7-b1c89c79e2e3",
                "state_id" => 12,
                "name" => "Corumbá",
                "solar_incidence" => "4.40125"
            ],
            [
                "uuid" => "514fc0fe-3af3-442d-a597-507d2e7fee47",
                "state_id" => 9,
                "name" => "Corumbaíba",
                "solar_incidence" => "4.6375"
            ],
            [
                "uuid" => "5124efb8-306d-4601-8f66-212951299a77",
                "state_id" => 25,
                "name" => "Cosmópolis",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "bf2ed034-3de3-480a-ab5d-1daf718f3651",
                "state_id" => 25,
                "name" => "Cotia",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "eec5851c-0929-4af7-8f83-b3b8c386790d",
                "state_id" => 12,
                "name" => "Coxim",
                "solar_incidence" => "4.55"
            ],
            [
                "uuid" => "9bfda7df-f72e-4fb5-87d7-034d402294f3",
                "state_id" => 6,
                "name" => "Crato",
                "solar_incidence" => "4.85625"
            ],
            [
                "uuid" => "b95d515a-eb75-4763-831c-1b21fd9fc01c",
                "state_id" => 24,
                "name" => "Criciúma",
                "solar_incidence" => "4.31"
            ],
            [
                "uuid" => "bc47a447-7365-4cb7-843c-c62fc4b5652f",
                "state_id" => 21,
                "name" => "Crissiumal",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "a3875b79-e8b9-4d0a-a4a6-422da035b8ba",
                "state_id" => 13,
                "name" => "Cristina",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "6b20a2ec-7eeb-45bd-814b-9d05fe764f0b",
                "state_id" => 26,
                "name" => "Cristinápolis",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "c7ddfee8-0389-4f4f-a4cb-79d70b19a503",
                "state_id" => 21,
                "name" => "Cruz Alta",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "4d46dc18-3d14-4761-b23d-b5bea5f0bd9c",
                "state_id" => 21,
                "name" => "Cruzaltense",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "6b2d5ce4-9a65-432f-92f9-31864d5d6079",
                "state_id" => 16,
                "name" => "Cruzeiro do Oeste",
                "solar_incidence" => "4.2875"
            ],
            [
                "uuid" => "3607c2a4-cb39-41ec-baf2-f100d9a8b4a3",
                "state_id" => 1,
                "name" => "Cruzeiro do Sul",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "6c41861d-e27c-4707-82e4-36bf63b45730",
                "state_id" => 11,
                "name" => "Cuiabá",
                "solar_incidence" => "4.4275"
            ],
            [
                "uuid" => "00d03682-d843-4aa1-856d-b4a334c3d907",
                "state_id" => 15,
                "name" => "Cuité",
                "solar_incidence" => "5.1275"
            ],
            [
                "uuid" => "f7441939-5f6e-4e0e-ae74-9fcb0cb85228",
                "state_id" => 24,
                "name" => "Cunha Porã",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "d086b083-02ba-4bee-9256-a8e0fc21f815",
                "state_id" => 16,
                "name" => "Curitiba",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "4a39832f-ccfb-4187-bb56-4cd5b8c78f0c",
                "state_id" => 24,
                "name" => "Curitibanos",
                "solar_incidence" => "3.91125"
            ],
            [
                "uuid" => "c7ff6e77-05aa-4c64-9bd1-a583af4bd08c",
                "state_id" => 16,
                "name" => "Curiúva",
                "solar_incidence" => "4.15625"
            ],
            [
                "uuid" => "26c1c22c-7358-4dca-a45c-0727509a71ba",
                "state_id" => 14,
                "name" => "Curuá",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "c821f911-d56a-4432-967e-522eec8e3167",
                "state_id" => 13,
                "name" => "Curvelo",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "9f9085e7-4ad1-4639-96e3-226eeea01dcc",
                "state_id" => 3,
                "name" => "Cutias",
                "solar_incidence" => "4.82"
            ],
            [
                "uuid" => "a57dace3-b954-45b8-91a7-10fa95a3b7eb",
                "state_id" => 2,
                "name" => "Delmiro Gouveia",
                "solar_incidence" => "4.8125"
            ],
            [
                "uuid" => "45494b12-769d-4d63-860a-5e61389a10b5",
                "state_id" => 25,
                "name" => "Descalvado",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "6839fc71-c5e3-448d-bfc7-baa83954baeb",
                "state_id" => 25,
                "name" => "Diadema",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "76386714-b2dc-4950-a576-121c64b43049",
                "state_id" => 16,
                "name" => "Diamante do Norte",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "e5a381d0-38c2-4d45-ac36-3e51fd8f147c",
                "state_id" => 11,
                "name" => "Diamantino",
                "solar_incidence" => "4.34875"
            ],
            [
                "uuid" => "ff9b49b8-8453-43cd-a2fb-ab200b6d7eb3",
                "state_id" => 5,
                "name" => "Dias d Ávila",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "b49f6307-a02d-4517-a8c9-4f4d7ff0eea2",
                "state_id" => 24,
                "name" => "Dionísio Cerqueira",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "bb77e390-c5f1-4161-98d9-5d478bc15704",
                "state_id" => 13,
                "name" => "Divinópolis",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "c48001c0-976b-4fc8-97ca-18383de35136",
                "state_id" => 16,
                "name" => "Dois Vizinhos",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "2b6df9be-2b52-495f-b5de-54f321bc68d9",
                "state_id" => 10,
                "name" => "Dom Pedro",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "0cc285be-f8a5-45a6-856b-bb0aec6ba57a",
                "state_id" => 8,
                "name" => "Domingos Martins",
                "solar_incidence" => "3.955"
            ],
            [
                "uuid" => "dfe6b691-9cfe-4f93-a910-932289c6f02e",
                "state_id" => 13,
                "name" => "Dores do Indaiá",
                "solar_incidence" => "4.4625"
            ],
            [
                "uuid" => "1762138a-c2af-4d88-a117-a8282eee5ae0",
                "state_id" => 16,
                "name" => "Douradina",
                "solar_incidence" => "4.3225"
            ],
            [
                "uuid" => "a622c25a-a7ea-41fa-abf1-31311b2a1e00",
                "state_id" => 12,
                "name" => "Dourados",
                "solar_incidence" => "4.3225"
            ],
            [
                "uuid" => "0619536f-0387-4845-90bb-8ed110828925",
                "state_id" => 16,
                "name" => "Doutor Camargo",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "116e6cce-72f5-4083-85f2-8ebdb74071ee",
                "state_id" => 25,
                "name" => "Dracena",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "159ebded-d03a-4870-b01a-736fd86cc438",
                "state_id" => 25,
                "name" => "Duartina",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "949116da-8e10-4f3a-b37c-adb15dfc04fa",
                "state_id" => 19,
                "name" => "Duque de Caxias",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "3e9b185c-03de-4337-9ba2-4339883b4c62",
                "state_id" => 9,
                "name" => "Edéia",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "4a429139-793b-43bb-854d-8490cd62511d",
                "state_id" => 21,
                "name" => "Eldorado do Sul",
                "solar_incidence" => "3.8675"
            ],
            [
                "uuid" => "be620a6b-8504-4faa-9863-38c24210ebc3",
                "state_id" => 25,
                "name" => "Elias Fausto",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "2eb22207-75c4-4f57-a405-631985e1b01b",
                "state_id" => 18,
                "name" => "Eliseu Martins",
                "solar_incidence" => "4.80375"
            ],
            [
                "uuid" => "357ebaee-a64b-4776-86a5-f1a7255f5f98",
                "state_id" => 25,
                "name" => "Elisiário",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "d78fcde3-9dda-4fdb-ad89-403ae0f06d5a",
                "state_id" => 25,
                "name" => "Embu das Artes",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "568b9e80-a7ac-40ca-b2b1-3370d09c9c9c",
                "state_id" => 21,
                "name" => "Encantado",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "9c6d1ee8-6c3e-49a8-be5e-9fd185e50354",
                "state_id" => 21,
                "name" => "Encruzilhada do Sul",
                "solar_incidence" => "3.94625"
            ],
            [
                "uuid" => "ff930101-02a1-43b4-9bdb-4d6156f6ada7",
                "state_id" => 16,
                "name" => "Engenheiro Beltrão",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "74460dd8-a452-4672-b7ba-6cc5ea54bfc2",
                "state_id" => 13,
                "name" => "Engenheiro Navarro",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "0b77ac40-8b22-4e68-8e81-9dd8ee032259",
                "state_id" => 21,
                "name" => "Erechim",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "3aa9fa4f-6c1e-4b56-98cf-9a7bc8f41575",
                "state_id" => 5,
                "name" => "Érico Cardoso",
                "solar_incidence" => "5.0925"
            ],
            [
                "uuid" => "a09fae3f-f5d7-4105-9a7c-c22dd803d4b4",
                "state_id" => 13,
                "name" => "Ervália",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "6b76d8c2-03b8-42a2-8cc6-6894cc1515fd",
                "state_id" => 17,
                "name" => "Escada",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "b9c0c1ea-a460-46dd-8166-1bd27bf7a9c7",
                "state_id" => 13,
                "name" => "Esmeraldas",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "1fcd25e4-7ae9-4e0d-b9ff-bd85b75484c0",
                "state_id" => 13,
                "name" => "Espera Feliz",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "19e51c69-1404-426f-b947-a649eb8c00cf",
                "state_id" => 22,
                "name" => "Espigão Do Oeste",
                "solar_incidence" => "4.20875"
            ],
            [
                "uuid" => "6be6a100-3ada-4021-bdc0-376566a274ba",
                "state_id" => 13,
                "name" => "Espinosa",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "bbe537e1-148d-4cf7-a54f-c603aa39330c",
                "state_id" => 21,
                "name" => "Estância Velha",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "0e9f3f39-5c05-40b2-908d-af5a7ec91542",
                "state_id" => 21,
                "name" => "Esteio",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "d944f303-54c9-4ee6-9b12-3a91eaa80511",
                "state_id" => 13,
                "name" => "Estiva",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "b9ea5fc8-7d29-4ca3-9dd0-7daeff8c25c7",
                "state_id" => 25,
                "name" => "Estiva Gerbi",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "fb49e0ed-2748-4147-a8b7-7e8e44b75f9d",
                "state_id" => 10,
                "name" => "Estreito",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "7a78a6c9-836d-4134-8004-730e77f52130",
                "state_id" => 13,
                "name" => "Estrela Dalva",
                "solar_incidence" => "3.9725"
            ],
            [
                "uuid" => "83d3e220-6b06-46fb-b9bc-dd07a8afc661",
                "state_id" => 21,
                "name" => "Estrela Velha",
                "solar_incidence" => "3.98125"
            ],
            [
                "uuid" => "c343bb9c-7e47-414f-8871-3fb96f76afc1",
                "state_id" => 5,
                "name" => "Eunápolis",
                "solar_incidence" => "4.10375"
            ],
            [
                "uuid" => "4413eebe-93b8-4b28-a4fe-56e74218df29",
                "state_id" => 6,
                "name" => "Eusébio",
                "solar_incidence" => "5.11"
            ],
            [
                "uuid" => "e661463d-6463-48e8-8677-dee045478753",
                "state_id" => 13,
                "name" => "Extrema",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "197897ce-6bf8-4aa2-bfb5-d9068265b338",
                "state_id" => 21,
                "name" => "Farroupilha",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "8f530f8c-46b0-4593-8be2-b81b159d7b5f",
                "state_id" => 16,
                "name" => "Faxinal",
                "solar_incidence" => "4.19125"
            ],
            [
                "uuid" => "1426bc92-47b7-4291-b321-072ac3e97df6",
                "state_id" => 21,
                "name" => "Faxinal do Soturno",
                "solar_incidence" => "3.98125"
            ],
            [
                "uuid" => "fd1786b3-03ca-435d-a29b-f2db28c6e8d6",
                "state_id" => 24,
                "name" => "Faxinal dos Guedes",
                "solar_incidence" => "4.08625"
            ],
            [
                "uuid" => "e7d03052-0155-422f-a4df-90b46445aeba",
                "state_id" => 16,
                "name" => "Fazenda Rio Grande",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "dcf25b35-a8e4-4db5-aeaa-1829e0efa286",
                "state_id" => 1,
                "name" => "Feijó",
                "solar_incidence" => "4.08625"
            ],
            [
                "uuid" => "71c7575b-682d-40ab-a0f8-a90b0f9378bd",
                "state_id" => 5,
                "name" => "Feira de Santana",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "8419f579-0ce8-4d94-8fc2-b9b0d7ce6907",
                "state_id" => 2,
                "name" => "Feira Grande",
                "solar_incidence" => "4.73375"
            ],
            [
                "uuid" => "fefe18de-4deb-402a-be53-152432c6ab51",
                "state_id" => 25,
                "name" => "Fernandópolis",
                "solar_incidence" => "4.5325"
            ],
            [
                "uuid" => "7228300a-0f08-4b35-a96f-90c81b7779fe",
                "state_id" => 25,
                "name" => "Ferraz de Vasconcelos",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "701d4c8a-5a91-459c-abbb-fe7c788d5056",
                "state_id" => 27,
                "name" => "Filadélfia",
                "solar_incidence" => "4.4625"
            ],
            [
                "uuid" => "2c2d55ca-35a2-4733-a155-99a4507f46ba",
                "state_id" => 16,
                "name" => "Floraí",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "41908388-8832-4e44-a0b4-8644de4e7e7f",
                "state_id" => 17,
                "name" => "Flores",
                "solar_incidence" => "5.1625"
            ],
            [
                "uuid" => "82ee1dc2-47f1-440f-9890-9e406c677a0b",
                "state_id" => 21,
                "name" => "Flores da Cunha",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "652e7754-465b-477b-b2a0-6b38cc94a76c",
                "state_id" => 17,
                "name" => "Floresta",
                "solar_incidence" => "4.92625"
            ],
            [
                "uuid" => "306c8e2d-5a47-460b-9d03-dd359527fbdb",
                "state_id" => 18,
                "name" => "Floriano",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "d57b7133-d387-4c0d-bc6d-7a5584bfe60b",
                "state_id" => 24,
                "name" => "Florianópolis",
                "solar_incidence" => "3.535"
            ],
            [
                "uuid" => "77f6df2b-47da-47af-b7d0-536aca4aa57a",
                "state_id" => 9,
                "name" => "Formosa",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "51923620-3095-408a-8d5d-5bf7027a3103",
                "state_id" => 27,
                "name" => "Formoso do Araguaia",
                "solar_incidence" => "4.62875"
            ],
            [
                "uuid" => "208130d5-3c8d-4b22-bfe7-7d5a64d195a2",
                "state_id" => 6,
                "name" => "Fortaleza",
                "solar_incidence" => "5.11"
            ],
            [
                "uuid" => "601eb4a2-f9d3-4d8f-bda7-68dcabb00070",
                "state_id" => 13,
                "name" => "Fortaleza de Minas",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "c8ad8697-172a-4e0c-ac27-d0d53dcef015",
                "state_id" => 10,
                "name" => "Fortaleza dos Nogueiras",
                "solar_incidence" => "4.48875"
            ],
            [
                "uuid" => "757b9714-2a01-4adc-ab61-53e8864f0a61",
                "state_id" => 16,
                "name" => "Foz do Iguaçu",
                "solar_incidence" => "4.1825"
            ],
            [
                "uuid" => "6a58fd94-34ee-4f5b-8135-ca4eb086c285",
                "state_id" => 24,
                "name" => "Fraiburgo",
                "solar_incidence" => "3.91125"
            ],
            [
                "uuid" => "5bc979b4-7e37-44d8-a5bc-554fbf3871fe",
                "state_id" => 25,
                "name" => "Franca",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "3f574006-0cc9-41df-9c70-61aa9e6c86e8",
                "state_id" => 16,
                "name" => "Francisco Alves",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "27e25580-3dcc-402d-b5f9-207a792e4022",
                "state_id" => 16,
                "name" => "Francisco Beltrão",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "1e912a85-488f-4759-9008-859ca1679988",
                "state_id" => 18,
                "name" => "Francisco Macedo",
                "solar_incidence" => "4.97875"
            ],
            [
                "uuid" => "8093b651-97b1-476c-be2a-99f6258a218a",
                "state_id" => 13,
                "name" => "Francisco Sá",
                "solar_incidence" => "4.83"
            ],
            [
                "uuid" => "3e1ccb5a-d401-4925-bd9d-62a52cbbcf8c",
                "state_id" => 18,
                "name" => "Francisco Santos",
                "solar_incidence" => "4.89125"
            ],
            [
                "uuid" => "cf79d232-a59e-4fde-8a2b-51f5b9f5be04",
                "state_id" => 25,
                "name" => "Franco da Rocha",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "2a1e12a3-3a3f-4ef0-bc7f-26c5ba938d5b",
                "state_id" => 13,
                "name" => "Fronteira",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "1cd77f1f-734c-46f9-b12f-1b2288c45a3b",
                "state_id" => 13,
                "name" => "Frutal",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "297b20d4-8e87-4c33-84f8-5de43ca2ca24",
                "state_id" => 8,
                "name" => "Fundão",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "74fd104f-0585-495b-baf4-143b9fa8ce97",
                "state_id" => 17,
                "name" => "Garanhuns",
                "solar_incidence" => "4.9175"
            ],
            [
                "uuid" => "9006c19b-08c9-4bd7-b773-b90e6e6f2e84",
                "state_id" => 25,
                "name" => "Garça",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "a03f7fbd-6840-49bb-b1fe-febc3c9a76e9",
                "state_id" => 24,
                "name" => "Gaspar",
                "solar_incidence" => "3.45625"
            ],
            [
                "uuid" => "c667001b-1e83-4f0c-914b-ffa71aabbbd0",
                "state_id" => 21,
                "name" => "General Câmara",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "9fa8bb13-0b31-4d98-a74c-bb7d64f411e3",
                "state_id" => 25,
                "name" => "General Salgado",
                "solar_incidence" => "4.5325"
            ],
            [
                "uuid" => "8de516be-2f51-4c95-894a-a8d3ef36cdbb",
                "state_id" => 21,
                "name" => "Getúlio Vargas",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "356463a5-9196-4ae3-a62e-9d89e15f1f57",
                "state_id" => 12,
                "name" => "Glória de Dourados",
                "solar_incidence" => "4.3225"
            ],
            [
                "uuid" => "47c2d398-3d2b-4d64-b9fe-da93ed91d835",
                "state_id" => 17,
                "name" => "Glória do Goitá",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "3b34ee11-ca16-48df-80e8-563a772391d9",
                "state_id" => 13,
                "name" => "Goiabeira",
                "solar_incidence" => "4.10375"
            ],
            [
                "uuid" => "2c33d539-d7bf-4a37-8e75-5d97d9e61cc2",
                "state_id" => 13,
                "name" => "Goianá",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "366301df-5a0e-4c68-b3a3-87af473ff4b4",
                "state_id" => 9,
                "name" => "Goianésia",
                "solar_incidence" => "4.61125"
            ],
            [
                "uuid" => "b04126b1-19d8-4f9e-9a11-3a932e4f4f8a",
                "state_id" => 9,
                "name" => "Goiânia",
                "solar_incidence" => "4.62"
            ],
            [
                "uuid" => "6b79cce5-51fb-4705-a552-c2a0f36e124d",
                "state_id" => 9,
                "name" => "Goianira",
                "solar_incidence" => "4.62"
            ],
            [
                "uuid" => "cd0718fa-0ea4-4aa2-a757-e3141291b8c0",
                "state_id" => 9,
                "name" => "Goiás",
                "solar_incidence" => "4.6375"
            ],
            [
                "uuid" => "1c5772f4-3e6c-4b32-8315-18b98d103d5c",
                "state_id" => 9,
                "name" => "Goiatuba",
                "solar_incidence" => "4.64625"
            ],
            [
                "uuid" => "153860ef-c195-4c61-a5a3-6df78a10ea57",
                "state_id" => 16,
                "name" => "Goioerê",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "c7a7422e-a4e1-408d-aa35-9ac0f5210d6c",
                "state_id" => 10,
                "name" => "Governador Edison Lobão",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "87718e4d-3cfe-4016-a0cd-bd23f95355a2",
                "state_id" => 13,
                "name" => "Governador Valadares",
                "solar_incidence" => "4.10375"
            ],
            [
                "uuid" => "3fc830f9-30ce-4960-9409-3b7532c24824",
                "state_id" => 21,
                "name" => "Gramado",
                "solar_incidence" => "3.80625"
            ],
            [
                "uuid" => "086b1880-d961-4ad2-a9c6-778c2925cca1",
                "state_id" => 17,
                "name" => "Granito",
                "solar_incidence" => "4.85625"
            ],
            [
                "uuid" => "785d3865-bc5c-4ae7-9680-571db8e45485",
                "state_id" => 6,
                "name" => "Granja",
                "solar_incidence" => "4.7775"
            ],
            [
                "uuid" => "7b93d775-01a8-4b97-ba87-5616db5a312c",
                "state_id" => 17,
                "name" => "Gravatá",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "56fe01dc-46fe-4e98-ae5e-be26afef755a",
                "state_id" => 21,
                "name" => "Gravataí",
                "solar_incidence" => "3.80625"
            ],
            [
                "uuid" => "0adff9b4-15a1-4e53-af51-6907cfcf0375",
                "state_id" => 24,
                "name" => "Guabiruba",
                "solar_incidence" => "3.535"
            ],
            [
                "uuid" => "b631286a-88c5-471a-9c16-869c3516506a",
                "state_id" => 21,
                "name" => "Guaíba",
                "solar_incidence" => "3.8675"
            ],
            [
                "uuid" => "29974f6a-45c5-4110-a535-16a96dcbc46c",
                "state_id" => 25,
                "name" => "Guaíra",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "6022868c-8f3d-48ed-a92b-8c85aa5a6404",
                "state_id" => 16,
                "name" => "Guairaçá",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "533d7800-6345-446e-bd1e-d7ca49ee0c5d",
                "state_id" => 22,
                "name" => "Guajará-Mirim",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "a780ef01-6a7b-4c5e-96eb-cba2358dc150",
                "state_id" => 5,
                "name" => "Guanambi",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "a56c879a-f761-459d-8011-a006e30dd2af",
                "state_id" => 13,
                "name" => "Guanhães",
                "solar_incidence" => "4.1475"
            ],
            [
                "uuid" => "a0817734-b151-45f8-b69f-aa8a4bc3de9b",
                "state_id" => 13,
                "name" => "Guapé",
                "solar_incidence" => "4.445"
            ],
            [
                "uuid" => "dad01481-6c3b-46c3-a8d1-91f4860f409d",
                "state_id" => 21,
                "name" => "Guaporé",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "c88b8558-2e2a-4e46-bc71-8ea6ce403f07",
                "state_id" => 16,
                "name" => "Guaporema",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "143a4c60-df4d-4909-b272-e7730490480a",
                "state_id" => 25,
                "name" => "Guará",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "7c96d664-c98e-4098-9ea3-8e54a5fd676d",
                "state_id" => 15,
                "name" => "Guarabira",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "a303bb19-92c0-4640-b676-1abaebc975b1",
                "state_id" => 13,
                "name" => "Guaraciaba",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "79f4af54-2e14-4b4c-bfb2-3902ec0ed0d8",
                "state_id" => 13,
                "name" => "Guarani",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "2a5bae1b-3299-4e70-84da-79bcfdf8c218",
                "state_id" => 21,
                "name" => "Guarani das Missões",
                "solar_incidence" => "4.10375"
            ],
            [
                "uuid" => "3370fc58-24ef-4a45-a12c-c3dcf425c31b",
                "state_id" => 25,
                "name" => "Guarani do Oeste",
                "solar_incidence" => "4.5325"
            ],
            [
                "uuid" => "743e1ac9-e21d-4855-a172-fa5a03fe87bf",
                "state_id" => 16,
                "name" => "Guaraniaçu",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "7c8ed10e-99dd-467c-996d-51e033ffa770",
                "state_id" => 8,
                "name" => "Guarapari",
                "solar_incidence" => "3.955"
            ],
            [
                "uuid" => "fbc80953-3c81-4f03-9162-7fbb169b6b9e",
                "state_id" => 16,
                "name" => "Guarapuava",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "d0980062-4d92-408b-9dd9-41761b9d3cd4",
                "state_id" => 25,
                "name" => "Guararapes",
                "solar_incidence" => "4.50625"
            ],
            [
                "uuid" => "49077c9f-9032-4209-869b-ac18e7655af8",
                "state_id" => 25,
                "name" => "Guaratinguetá",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "b184d3e0-03fe-47a2-b59f-7b5a0e3f17c1",
                "state_id" => 13,
                "name" => "Guarda-Mor",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "c71ae2e3-d5ad-45a4-8918-b5d3100c2a99",
                "state_id" => 25,
                "name" => "Guariba",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "729b4780-dc42-451c-9252-40f22afdc412",
                "state_id" => 25,
                "name" => "Guarujá",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "289ba782-6870-4796-b94d-d914ea1e2ed5",
                "state_id" => 25,
                "name" => "Guarulhos",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "1e93b27c-8486-40d5-87d5-be8abfe28e46",
                "state_id" => 13,
                "name" => "Guaxupé",
                "solar_incidence" => "4.45375"
            ],
            [
                "uuid" => "0f537f05-ce48-4a76-ac00-41bf1bde6705",
                "state_id" => 15,
                "name" => "Gurjão",
                "solar_incidence" => "5.06625"
            ],
            [
                "uuid" => "0f9982b2-5a3a-4364-842a-63ad31694840",
                "state_id" => 27,
                "name" => "Gurupi",
                "solar_incidence" => "4.62875"
            ],
            [
                "uuid" => "3262a54a-b436-4603-8cf3-cb1dffa80cb8",
                "state_id" => 25,
                "name" => "Holambra",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "76d49417-cac3-4413-b100-e95f8505a738",
                "state_id" => 21,
                "name" => "Horizontina",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "7f70b9b2-7576-4232-bde9-c68e61809421",
                "state_id" => 25,
                "name" => "Hortolândia",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "5679337e-7c81-4391-92b4-d5343c6c6d02",
                "state_id" => 4,
                "name" => "Humaitá",
                "solar_incidence" => "4.1475"
            ],
            [
                "uuid" => "2c920d2d-6d80-498b-a116-08dc5e554d05",
                "state_id" => 9,
                "name" => "Iaciara",
                "solar_incidence" => "4.75125"
            ],
            [
                "uuid" => "268ad52b-2777-46a6-963e-40f4f7601308",
                "state_id" => 16,
                "name" => "Ibaiti",
                "solar_incidence" => "4.27875"
            ],
            [
                "uuid" => "17a80c9f-e30f-4278-942e-d9b3c371e012",
                "state_id" => 25,
                "name" => "Ibaté",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "eaceaaae-46b0-4c25-99e7-0ec214c77f73",
                "state_id" => 8,
                "name" => "Ibatiba",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "c38a4473-e7fd-420b-9c26-10ff08e6fdac",
                "state_id" => 16,
                "name" => "Ibema",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "be7a5679-c4ad-4757-bf80-f0fee80e5e1b",
                "state_id" => 13,
                "name" => "Ibiá",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "298acde6-b7e1-4447-9acd-a6035d44fb8a",
                "state_id" => 21,
                "name" => "Ibiaçá",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "86deaef6-e24e-4d3d-aa39-b9b793f2a352",
                "state_id" => 5,
                "name" => "Ibiassucê",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "69d5984c-8eab-4c5d-aad2-cb505161c1d9",
                "state_id" => 5,
                "name" => "Ibicaraí",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "3581c99a-8907-4ad3-83b1-5f2a83e71b7e",
                "state_id" => 16,
                "name" => "Ibiporã",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "07fe1fed-656f-4fae-86ce-d47357f21a15",
                "state_id" => 8,
                "name" => "Ibiraçu",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "6f14b036-a42f-4500-9e69-c0cc51861178",
                "state_id" => 21,
                "name" => "Ibiraiaras",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "d9fb4122-137b-4bec-a8db-21b1bb4f405d",
                "state_id" => 24,
                "name" => "Ibirama",
                "solar_incidence" => "3.605"
            ],
            [
                "uuid" => "3a770548-e436-4b97-8d1c-a0a4d09b4ecb",
                "state_id" => 5,
                "name" => "Ibirataia",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "8a982cbf-9c09-4015-995c-fcddeed77569",
                "state_id" => 13,
                "name" => "Ibirité",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "d5703e2d-3354-4ef1-b883-8066c4377959",
                "state_id" => 21,
                "name" => "Ibirubá",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "86819e47-68d1-4722-b25c-e4e6cad62868",
                "state_id" => 5,
                "name" => "Ibitiara",
                "solar_incidence" => "5.15375"
            ],
            [
                "uuid" => "5d0a6b83-cf2c-4cd2-b2cb-457eb58113f2",
                "state_id" => 25,
                "name" => "Ibitinga",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "af743670-0d73-4efe-9376-7bbc45754392",
                "state_id" => 25,
                "name" => "Ibiúna",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "a2b1541a-e7be-4a83-923a-b80751e96d13",
                "state_id" => 5,
                "name" => "Ibotirama",
                "solar_incidence" => "4.99625"
            ],
            [
                "uuid" => "e5ac3003-3b2f-426f-a673-7de09c60903b",
                "state_id" => 24,
                "name" => "Içara",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "3756fd2c-cd4b-403b-a014-d54851c57725",
                "state_id" => 16,
                "name" => "Icaraíma",
                "solar_incidence" => "4.2875"
            ],
            [
                "uuid" => "36a97338-fc50-48f0-a8a6-a7dab2d1ca86",
                "state_id" => 13,
                "name" => "Igarapé",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "519df47c-8f32-4396-95e8-57b5991b8b87",
                "state_id" => 14,
                "name" => "Igarapé-Açu",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "73c43986-2827-45cc-a592-67af78428043",
                "state_id" => 17,
                "name" => "Igarassu",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "ad9162ac-2f73-43d8-8752-af025cd8764e",
                "state_id" => 16,
                "name" => "Iguaraçu",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "3aa6f7d3-3adf-40aa-af6b-1ffff7a55555",
                "state_id" => 12,
                "name" => "Iguatemi",
                "solar_incidence" => "4.235"
            ],
            [
                "uuid" => "35308c71-7b3a-42e7-ab8a-00effb7d6741",
                "state_id" => 6,
                "name" => "Iguatu",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "8f4d55f4-e291-4ec8-9085-ecf44a715d08",
                "state_id" => 21,
                "name" => "Ijuí",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "3e677693-0919-4f2d-a01b-d3102a2cc816",
                "state_id" => 17,
                "name" => "Ilha de Itamaracá",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "ab0ab1eb-7171-49a5-b148-8d5d24ef958b",
                "state_id" => 25,
                "name" => "Ilha Solteira",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "d77ea8ec-a49b-4c7f-9051-03b53b7953c9",
                "state_id" => 25,
                "name" => "Ilhabela",
                "solar_incidence" => "3.85875"
            ],
            [
                "uuid" => "15204b36-73fd-4f11-b540-7bbe130618ac",
                "state_id" => 5,
                "name" => "Ilhéus",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "ad3f0b63-8c8e-4325-b065-d0aa93c5d4e5",
                "state_id" => 24,
                "name" => "Imbituba",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "bafba535-d8be-4707-bbd3-a4390c1e76f2",
                "state_id" => 16,
                "name" => "Imbituva",
                "solar_incidence" => "3.89375"
            ],
            [
                "uuid" => "70b769df-addc-41cb-8d2f-eb4d45e4544a",
                "state_id" => 24,
                "name" => "Imbuia",
                "solar_incidence" => "3.605"
            ],
            [
                "uuid" => "824f274e-77ee-42c2-b02e-64ace53c8f79",
                "state_id" => 10,
                "name" => "Imperatriz",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "b8afc635-4d9f-41b4-8b47-f032953b7c02",
                "state_id" => 24,
                "name" => "Indaial",
                "solar_incidence" => "3.5875"
            ],
            [
                "uuid" => "7aa25c67-bffa-44cb-839b-1cc5e38e0435",
                "state_id" => 25,
                "name" => "Indaiatuba",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "6dbc06cc-f585-4025-a2ed-02a081a69410",
                "state_id" => 9,
                "name" => "Inhumas",
                "solar_incidence" => "4.62"
            ],
            [
                "uuid" => "6bd14e69-13bd-4d6f-94d9-89257d9da283",
                "state_id" => 13,
                "name" => "Ipanema",
                "solar_incidence" => "4.08625"
            ],
            [
                "uuid" => "8c3788af-07ab-43cc-852b-36eec667e3a3",
                "state_id" => 13,
                "name" => "Ipatinga",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "11fc1107-212c-4539-a1c3-1de7cec93b15",
                "state_id" => 5,
                "name" => "Ipiaú",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "339713fb-c857-423c-80a4-1db4c838b33c",
                "state_id" => 5,
                "name" => "Ipirá",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "f04a1b33-3ad5-4846-bf5a-05470f52bf10",
                "state_id" => 11,
                "name" => "Ipiranga do Norte",
                "solar_incidence" => "4.45375"
            ],
            [
                "uuid" => "004113e7-0cb3-4a3c-b332-bd22aaf47a4e",
                "state_id" => 21,
                "name" => "Ipiranga do Sul",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "b515d219-b8e7-4a1a-acf7-2bdf0bcdcd2e",
                "state_id" => 14,
                "name" => "Ipixuna do Pará",
                "solar_incidence" => "4.50625"
            ],
            [
                "uuid" => "c5f19e6d-05c4-44a5-a87d-533ede701a69",
                "state_id" => 17,
                "name" => "Ipojuca",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "ca22ec1f-be8b-4902-83ec-5bd6b3b5024a",
                "state_id" => 9,
                "name" => "Iporá",
                "solar_incidence" => "4.54125"
            ],
            [
                "uuid" => "cc7e4e62-b5e3-4519-bbb3-b2c99431deb5",
                "state_id" => 25,
                "name" => "Iporanga",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "ae0eed1a-67fe-42ea-b8bc-e6696bfabb3a",
                "state_id" => 6,
                "name" => "Ipu",
                "solar_incidence" => "4.94375"
            ],
            [
                "uuid" => "87cbce45-1c8a-4905-ab3b-1c17e3737e3e",
                "state_id" => 25,
                "name" => "Ipuã",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "8f9c814c-7d39-4863-93eb-8fab459a41db",
                "state_id" => 4,
                "name" => "Iranduba",
                "solar_incidence" => "4.05125"
            ],
            [
                "uuid" => "01f338b1-ba42-45db-a1e8-e66b334e9ad8",
                "state_id" => 24,
                "name" => "Irani",
                "solar_incidence" => "4.03375"
            ],
            [
                "uuid" => "c4a19a8d-f484-4f02-8fa4-04fda69625ae",
                "state_id" => 5,
                "name" => "Irecê",
                "solar_incidence" => "4.96125"
            ],
            [
                "uuid" => "4bc7b574-8783-4c57-bcc8-6f977b3bb57f",
                "state_id" => 16,
                "name" => "Iretama",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "ca5d1a09-5a4e-476d-9dce-d025ea2062df",
                "state_id" => 26,
                "name" => "Itabaiana",
                "solar_incidence" => "4.59375"
            ],
            [
                "uuid" => "73f161c4-48aa-438a-8a22-35f7fa1e5d82",
                "state_id" => 5,
                "name" => "Itabela",
                "solar_incidence" => "4.10375"
            ],
            [
                "uuid" => "045884f5-7622-462b-a0b4-402833bfb711",
                "state_id" => 5,
                "name" => "Itaberaba",
                "solar_incidence" => "4.34875"
            ],
            [
                "uuid" => "bfe63348-fbf4-457e-a2dd-5782a0461c69",
                "state_id" => 9,
                "name" => "Itaberaí",
                "solar_incidence" => "4.62"
            ],
            [
                "uuid" => "a6cbfa1f-e2ce-41ef-b661-35f1844c3dee",
                "state_id" => 13,
                "name" => "Itabira",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "198054d8-3196-4947-8ad0-e6be01d36bb4",
                "state_id" => 13,
                "name" => "Itabirito",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "6ca74bfc-ac3a-47ea-9a53-ffd8bdfd90e3",
                "state_id" => 19,
                "name" => "Itaboraí",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "b7baa66d-6087-45f0-a3bf-e524e0fb6c98",
                "state_id" => 5,
                "name" => "Itabuna",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "8c18066a-b7eb-4f80-bf67-2e0aa257c5b9",
                "state_id" => 13,
                "name" => "Itacarambi",
                "solar_incidence" => "4.85625"
            ],
            [
                "uuid" => "567881af-b20d-402d-892e-6957d2b185b3",
                "state_id" => 5,
                "name" => "Itacaré",
                "solar_incidence" => "4.795"
            ],
            [
                "uuid" => "97f76b61-18c9-45a9-b89f-a959aac04391",
                "state_id" => 4,
                "name" => "Itacoatiara",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "969ba7de-fd0a-49dd-b899-841541007290",
                "state_id" => 5,
                "name" => "Itagibá",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "b39230f2-8b67-49bd-84db-f7496a6965ca",
                "state_id" => 19,
                "name" => "Itaguaí",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "a07056ca-4c50-44b2-bd7c-185f5df22f3f",
                "state_id" => 27,
                "name" => "Itaguatins",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "22ada26e-5813-4ddd-af0a-77ebd47d1c37",
                "state_id" => 6,
                "name" => "Itaitinga",
                "solar_incidence" => "5.11"
            ],
            [
                "uuid" => "5c03d251-804e-4eaf-8ce7-7fc249a052af",
                "state_id" => 14,
                "name" => "Itaituba",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "4dc702d9-29f4-41a1-a3d2-a938cb15f6e8",
                "state_id" => 24,
                "name" => "Itajaí",
                "solar_incidence" => "3.45625"
            ],
            [
                "uuid" => "db2aae47-efd7-4976-82fa-1a25028f7c6d",
                "state_id" => 25,
                "name" => "Itajobi",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "58425fe6-4dba-4cd7-b4a2-b3eec8f75473",
                "state_id" => 13,
                "name" => "Itajubá",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "003e1a97-216a-4d55-89a5-0762ba787d53",
                "state_id" => 5,
                "name" => "Itamaraju",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "7cc95668-b193-4b3b-a7ea-d6c0f0f96d25",
                "state_id" => 16,
                "name" => "Itambaracá",
                "solar_incidence" => "4.27875"
            ],
            [
                "uuid" => "f52c7618-e9b5-4d9f-8023-d9e9c198305e",
                "state_id" => 16,
                "name" => "Itambé",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "3896d887-830c-4d1d-aa15-79406d438c1d",
                "state_id" => 9,
                "name" => "Itapaci",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "a1f73006-3e1f-491b-a6ff-2ae36afb9c33",
                "state_id" => 16,
                "name" => "Itapejara do Oeste",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "ddcd0a53-9d93-4b11-8c1b-baff367e148a",
                "state_id" => 24,
                "name" => "Itapema",
                "solar_incidence" => "3.535"
            ],
            [
                "uuid" => "cbd62e25-0a11-4476-b614-903f7e13b74e",
                "state_id" => 19,
                "name" => "Itaperuna",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "a2a6c201-a416-4019-b408-bc0eb6f0d0f7",
                "state_id" => 5,
                "name" => "Itapetinga",
                "solar_incidence" => "4.3225"
            ],
            [
                "uuid" => "299f6b5c-ffa7-4f06-9c88-cb9d8cb74fa8",
                "state_id" => 25,
                "name" => "Itapetininga",
                "solar_incidence" => "4.20875"
            ],
            [
                "uuid" => "6dc3a97b-4456-4347-a1fa-d425b79f709e",
                "state_id" => 25,
                "name" => "Itapeva",
                "solar_incidence" => "4.20875"
            ],
            [
                "uuid" => "b705ff73-4aab-4118-9214-2dd2454fa4c6",
                "state_id" => 25,
                "name" => "Itapevi",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "a406679a-0575-4bd9-be29-0f9387d9e605",
                "state_id" => 6,
                "name" => "Itapipoca",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "72f8d3ef-d351-4858-bc9e-ec0e55b38b7c",
                "state_id" => 25,
                "name" => "Itapira",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "c7ea4f77-a24b-4b98-9630-9ad00ce7f2c6",
                "state_id" => 24,
                "name" => "Itapiranga",
                "solar_incidence" => "4.01625"
            ],
            [
                "uuid" => "85db97dd-380d-4794-8f3a-ad310e223db7",
                "state_id" => 25,
                "name" => "Itaporanga",
                "solar_incidence" => "4.9875"
            ],
            [
                "uuid" => "ce84d3d3-a73c-4a7c-af43-af66103a0b08",
                "state_id" => 25,
                "name" => "Itapuí",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "68aacb91-0fab-43b7-b3b2-fa09e98997d4",
                "state_id" => 25,
                "name" => "Itapura",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "bc2b429c-7a67-4ee4-b658-268381ea6076",
                "state_id" => 9,
                "name" => "Itapuranga",
                "solar_incidence" => "4.61125"
            ],
            [
                "uuid" => "98c8eccb-4c7d-428c-b25a-138a7591dab5",
                "state_id" => 21,
                "name" => "Itaqui",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "15ebc8c8-5a36-433f-bc43-a97b2387d46f",
                "state_id" => 17,
                "name" => "Itaquitinga",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "b88c2305-b8d6-48f7-93c0-0809ebdc0259",
                "state_id" => 9,
                "name" => "Itarumã",
                "solar_incidence" => "4.48875"
            ],
            [
                "uuid" => "d6d3bfb8-b591-432f-a134-d3dec72f8a38",
                "state_id" => 19,
                "name" => "Itatiaia",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "e3b9cc7b-3b30-47bb-83f9-41a1d1c4c16b",
                "state_id" => 25,
                "name" => "Itatiba",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "dd785ce8-8991-4df7-9456-a5417d71fcd5",
                "state_id" => 21,
                "name" => "Itatiba do Sul",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "a0cf08b6-fc73-4406-993c-b2344a4dad9f",
                "state_id" => 5,
                "name" => "Itatim",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "717c6343-11b9-43d3-9766-23487a258f20",
                "state_id" => 6,
                "name" => "Itatira",
                "solar_incidence" => "4.7775"
            ],
            [
                "uuid" => "fd8eea07-34b7-4920-bafd-97896876f669",
                "state_id" => 13,
                "name" => "Itaú de Minas",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "4a09f55c-7a86-49bc-bf1b-879ede51412b",
                "state_id" => 3,
                "name" => "Itaubal",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "fd1079ee-bf47-484c-9bfa-6eac71fa5908",
                "state_id" => 18,
                "name" => "Itaueira",
                "solar_incidence" => "4.76"
            ],
            [
                "uuid" => "3e9b7c35-97c1-483a-b2e8-76452313793a",
                "state_id" => 13,
                "name" => "Itaúna",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "53fded27-4dc7-47b8-b4d0-0bd7c9355eb5",
                "state_id" => 10,
                "name" => "Itinga do Maranhão",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "9f872eb0-d4cf-4fa8-a258-c95aa4e30291",
                "state_id" => 11,
                "name" => "Itiquira",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "ebe5da65-b7ae-461b-8cb5-2b55d0295f1e",
                "state_id" => 25,
                "name" => "Itu",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "3f073c39-0388-46e5-a822-016c12dd2ff3",
                "state_id" => 13,
                "name" => "Ituiutaba",
                "solar_incidence" => "4.64625"
            ],
            [
                "uuid" => "bcb2ab7d-7e00-4704-b41f-abba5ba3a645",
                "state_id" => 9,
                "name" => "Itumbiara",
                "solar_incidence" => "4.64625"
            ],
            [
                "uuid" => "86f5f49f-c0dc-4df4-97d3-2a6140c23b48",
                "state_id" => 25,
                "name" => "Itupeva",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "8d86b9ad-3dad-4329-a739-df00a4e06448",
                "state_id" => 24,
                "name" => "Ituporanga",
                "solar_incidence" => "3.605"
            ],
            [
                "uuid" => "91205730-fe60-4b33-8d5a-00dd3f3cafec",
                "state_id" => 25,
                "name" => "Ituverava",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "d9d7b5b2-1341-4bac-b757-26337c8cddc1",
                "state_id" => 8,
                "name" => "Iúna",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "cf94e6a2-cd88-4e91-887e-89eb81405052",
                "state_id" => 16,
                "name" => "Ivaí",
                "solar_incidence" => "3.89375"
            ],
            [
                "uuid" => "2a2d2097-2b6b-4c81-824b-530f4478823a",
                "state_id" => 16,
                "name" => "Ivaiporã",
                "solar_incidence" => "4.19125"
            ],
            [
                "uuid" => "63dd17c8-e1d6-4f9a-a7d8-9d5ba3dc2601",
                "state_id" => 12,
                "name" => "Ivinhema",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "2ce79a4f-2382-4bb4-b866-24626de153ab",
                "state_id" => 21,
                "name" => "Ivoti",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "4bf2f172-71cd-4d29-89c4-19fb13b09caf",
                "state_id" => 17,
                "name" => "Jaboatão dos Guararapes",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "ced8e6bd-d7c3-4517-a442-6007f7b62ea2",
                "state_id" => 25,
                "name" => "Jaboticabal",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "7f82beab-377e-4264-aa55-d424cb143762",
                "state_id" => 13,
                "name" => "Jaboticatubas",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "67b8cb2f-efc4-4df8-8481-f7b1ae8ede04",
                "state_id" => 25,
                "name" => "Jacareí",
                "solar_incidence" => "3.85875"
            ],
            [
                "uuid" => "67f3cf97-bddc-4ae9-9f7c-03d6dfe95ac2",
                "state_id" => 16,
                "name" => "Jacarezinho",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "8158a0f3-42d8-4e84-90b4-3c5562f54ae3",
                "state_id" => 11,
                "name" => "Jaciara",
                "solar_incidence" => "4.38375"
            ],
            [
                "uuid" => "b0465b31-f012-4220-ad6f-abf01aa989e2",
                "state_id" => 5,
                "name" => "Jacobina",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "28eaab56-a09b-4759-aa5f-119f1acb77e5",
                "state_id" => 21,
                "name" => "Jacutinga",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "8b9ff7cc-9dc1-487b-8324-08afed41bc69",
                "state_id" => 16,
                "name" => "Jaguapitã",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "3bf2fcdf-7acd-4e05-8eca-1f3271a04808",
                "state_id" => 21,
                "name" => "Jaguarão",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "b7cdbb97-19db-4489-b245-1817783a6a06",
                "state_id" => 8,
                "name" => "Jaguaré",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "79bcba87-c96d-4970-ad6d-64ac7560bd3b",
                "state_id" => 21,
                "name" => "Jaguari",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "9d2344c3-3109-44e3-a498-9177f57065f6",
                "state_id" => 16,
                "name" => "Jaguariaíva",
                "solar_incidence" => "4.03375"
            ],
            [
                "uuid" => "9a063d90-7132-4ea8-808d-1de5b0d68385",
                "state_id" => 6,
                "name" => "Jaguaribe",
                "solar_incidence" => "4.935"
            ],
            [
                "uuid" => "464e632c-12bd-453b-8615-a6b93592ce17",
                "state_id" => 25,
                "name" => "Jaguariúna",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "79342b56-a55d-433d-bb85-cae37b9b35fa",
                "state_id" => 24,
                "name" => "Jaguaruna",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "d95d1b0d-10d0-491f-ae3a-b97e8c83e1c7",
                "state_id" => 13,
                "name" => "Jaíba",
                "solar_incidence" => "4.94375"
            ],
            [
                "uuid" => "7bdcef2a-a343-4c54-9007-08eb357eee69",
                "state_id" => 18,
                "name" => "Jaicós",
                "solar_incidence" => "4.97"
            ],
            [
                "uuid" => "84f302eb-34cc-465d-ab3f-d626c1903396",
                "state_id" => 25,
                "name" => "Jales",
                "solar_incidence" => "4.5325"
            ],
            [
                "uuid" => "4d780b84-0adf-45ee-88ed-36b009cd82c0",
                "state_id" => 25,
                "name" => "Jambeiro",
                "solar_incidence" => "3.85875"
            ],
            [
                "uuid" => "77d514ea-9b62-4027-beb0-b460ef89249f",
                "state_id" => 13,
                "name" => "Janaúba",
                "solar_incidence" => "4.94375"
            ],
            [
                "uuid" => "c0ad530d-91d5-4b83-871b-fea2fc428c30",
                "state_id" => 16,
                "name" => "Jandaia do Sul",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "06dda408-570b-4b8f-8cfd-53d59f380efd",
                "state_id" => 20,
                "name" => "Jandaíra",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "d559b3f2-10d0-46f4-8ab1-e21732087d5d",
                "state_id" => 25,
                "name" => "Jandira",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "6356bea7-8f9e-4657-95bf-b6922d896d6d",
                "state_id" => 16,
                "name" => "Janiópolis",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "38225ca4-8e44-4e53-8b58-f430a1a208b8",
                "state_id" => 13,
                "name" => "Januária",
                "solar_incidence" => "4.85625"
            ],
            [
                "uuid" => "c71f0483-3739-4e10-9abb-e7c5f1ecbd6f",
                "state_id" => 13,
                "name" => "Japaraíba",
                "solar_incidence" => "4.445"
            ],
            [
                "uuid" => "a054bd14-000f-4877-ab82-2cd531a31017",
                "state_id" => 16,
                "name" => "Japurá",
                "solar_incidence" => "3.99875"
            ],
            [
                "uuid" => "53a213a4-f136-4466-bb7d-5303d468129e",
                "state_id" => 9,
                "name" => "Jaraguá",
                "solar_incidence" => "4.61125"
            ],
            [
                "uuid" => "45600875-e124-4e40-a98f-74acd5ad995f",
                "state_id" => 24,
                "name" => "Jaraguá do Sul",
                "solar_incidence" => "3.5875"
            ],
            [
                "uuid" => "853b61b7-f8f1-43c6-95e9-80d1807ef018",
                "state_id" => 20,
                "name" => "Jardim de Piranhas",
                "solar_incidence" => "5.20625"
            ],
            [
                "uuid" => "b8683e4a-1063-499b-92a1-6e3574812bc8",
                "state_id" => 25,
                "name" => "Jardinópolis",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "d9d1713d-7570-41a3-bb34-c416d82a3a2f",
                "state_id" => 25,
                "name" => "Jarinu",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "595fe51f-3496-49f3-9642-da423673187d",
                "state_id" => 22,
                "name" => "Jaru",
                "solar_incidence" => "4.17375"
            ],
            [
                "uuid" => "b2011a5b-e547-4a44-ac3b-5e346bfb2941",
                "state_id" => 9,
                "name" => "Jataí",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "c772f3f7-a127-4943-9339-bca18d9efa40",
                "state_id" => 16,
                "name" => "Jataizinho",
                "solar_incidence" => "4.27875"
            ],
            [
                "uuid" => "5468c38d-9d53-4fd7-91d9-5af0ffccabea",
                "state_id" => 25,
                "name" => "Jaú",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "ebd7b6e8-db8e-4145-b0e3-a509241295e9",
                "state_id" => 11,
                "name" => "Jauru",
                "solar_incidence" => "4.3225"
            ],
            [
                "uuid" => "9f298013-500f-44e6-ab3f-d1cc08878cce",
                "state_id" => 5,
                "name" => "Jequié",
                "solar_incidence" => "4.4275"
            ],
            [
                "uuid" => "2bb31ef3-c6f9-4481-b2cb-9f2c74bb4c94",
                "state_id" => 8,
                "name" => "Jerônimo Monteiro",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "0efcac8d-5d08-4971-a569-4c0af241b5be",
                "state_id" => 16,
                "name" => "Jesuítas",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "40de18e9-6511-481b-b4ca-b345fd8d542d",
                "state_id" => 22,
                "name" => "Ji-Paraná",
                "solar_incidence" => "4.2"
            ],
            [
                "uuid" => "8ffe6b10-a9e5-45b1-96af-baa416ed79c7",
                "state_id" => 24,
                "name" => "Joaçaba",
                "solar_incidence" => "4.03375"
            ],
            [
                "uuid" => "d1d09351-010e-4505-9cee-20711b8dd184",
                "state_id" => 25,
                "name" => "Joanópolis",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "5d218856-f941-4d40-b537-12887d1d851c",
                "state_id" => 5,
                "name" => "João Dourado",
                "solar_incidence" => "4.96125"
            ],
            [
                "uuid" => "b6fcf236-ba07-40cb-b955-902bfddef241",
                "state_id" => 13,
                "name" => "João Monlevade",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "5f07576e-614b-45db-a532-aa12b98f3e66",
                "state_id" => 15,
                "name" => "João Pessoa",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "99f62a98-9376-464b-8b2e-a105040dc586",
                "state_id" => 13,
                "name" => "João Pinheiro",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "c7a774b2-3dd8-44c6-9cd4-aa242372cb6f",
                "state_id" => 25,
                "name" => "João Ramalho",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "f86793a0-e575-452c-b3e3-b04de3fb4a0a",
                "state_id" => 24,
                "name" => "Joinville",
                "solar_incidence" => "3.45625"
            ],
            [
                "uuid" => "1984c193-8bcf-40e9-979c-cd23ff2330ea",
                "state_id" => 25,
                "name" => "José Bonifácio",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "fe89cf4d-776f-41c1-8bcc-90cbeab39fbe",
                "state_id" => 11,
                "name" => "Juara",
                "solar_incidence" => "4.34"
            ],
            [
                "uuid" => "3eb349db-dcf9-4c76-ad2a-d5c6c7d3a908",
                "state_id" => 5,
                "name" => "Juazeiro",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "704f4b82-71d1-4935-ba5f-db3cfe8d53f1",
                "state_id" => 6,
                "name" => "Juazeiro do Norte",
                "solar_incidence" => "4.85625"
            ],
            [
                "uuid" => "75d59a38-4f23-4782-b203-c166b54f3658",
                "state_id" => 5,
                "name" => "Jucuruçu",
                "solar_incidence" => "4.235"
            ],
            [
                "uuid" => "8a11a923-9fb2-443d-b943-7f64c0e52b83",
                "state_id" => 11,
                "name" => "Juína",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "84ca68c1-c084-4df1-a568-45fb3773d6c2",
                "state_id" => 13,
                "name" => "Juiz de Fora",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "d653abb0-6810-4a81-b2c6-b44d75cd2bd7",
                "state_id" => 25,
                "name" => "Jundiaí",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "563f71c6-d031-4937-9a14-097b01de77fa",
                "state_id" => 25,
                "name" => "Junqueirópolis",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "4245d3cf-3e4c-434c-804a-723b70f0f3ac",
                "state_id" => 16,
                "name" => "Juranda",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "c6104a90-761a-466a-aced-277192ce4b67",
                "state_id" => 14,
                "name" => "Juruti",
                "solar_incidence" => "4.24375"
            ],
            [
                "uuid" => "bf5a649d-cd34-4071-a4b3-9ad2673c799a",
                "state_id" => 5,
                "name" => "Jussiape",
                "solar_incidence" => "4.87375"
            ],
            [
                "uuid" => "d12f3c90-e594-408f-8017-5904ac75329f",
                "state_id" => 12,
                "name" => "Ladário",
                "solar_incidence" => "4.40125"
            ],
            [
                "uuid" => "217fa8e9-1ed3-46a8-8454-a5247ed6d237",
                "state_id" => 26,
                "name" => "Lagarto",
                "solar_incidence" => "4.59375"
            ],
            [
                "uuid" => "9d9b35a5-f504-4fb7-8e25-42a2a4e47dff",
                "state_id" => 24,
                "name" => "Lages",
                "solar_incidence" => "3.91125"
            ],
            [
                "uuid" => "f0cf980c-bf1f-450c-a334-f2e92f704d72",
                "state_id" => 10,
                "name" => "Lago da Pedra",
                "solar_incidence" => "4.34875"
            ],
            [
                "uuid" => "04d98654-f325-4265-bdf8-fbc1b14bde47",
                "state_id" => 5,
                "name" => "Lagoa Real",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "60efb714-30be-4aee-ae9c-072fcb846681",
                "state_id" => 13,
                "name" => "Lagoa Santa",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "e1f36003-2b3d-4f83-966a-f969ece55fa3",
                "state_id" => 24,
                "name" => "Laguna",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "454f3f38-d675-4282-ad34-dfdc5d1aa6d6",
                "state_id" => 12,
                "name" => "Laguna Carapã",
                "solar_incidence" => "4.3575"
            ],
            [
                "uuid" => "5a5ce8f8-8b2f-4373-ae80-41f2941ecd60",
                "state_id" => 21,
                "name" => "Lajeado",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "57b0aeca-8222-4006-bb44-56e13d344086",
                "state_id" => 10,
                "name" => "Lajeado Novo",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "09b46806-b7b4-45bb-bb6f-40dc24fde76f",
                "state_id" => 3,
                "name" => "Laranjal do Jari",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "bf975c55-3676-4b88-9c4d-112f2a8671b0",
                "state_id" => 25,
                "name" => "Laranjal Paulista",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "87329a27-e562-4cd2-bcca-c2b6601abfbb",
                "state_id" => 24,
                "name" => "Laurentino",
                "solar_incidence" => "3.605"
            ],
            [
                "uuid" => "ca83a21f-63f8-4960-ae9f-c35a1378cf04",
                "state_id" => 5,
                "name" => "Lauro de Freitas",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "48ddad9b-bf63-4de7-8697-57274aa76547",
                "state_id" => 24,
                "name" => "Lauro Muller",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "68d16ed4-b5de-424e-b5cb-5efee947ba2b",
                "state_id" => 13,
                "name" => "Lavras",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "87b4de30-adf1-4791-acd3-ce8bec940110",
                "state_id" => 25,
                "name" => "Leme",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "e60a791b-093f-4b30-af61-0496e7a80b8e",
                "state_id" => 5,
                "name" => "Lençóis",
                "solar_incidence" => "4.8475"
            ],
            [
                "uuid" => "abfc91d8-ae23-4b5d-9b73-36fa1581f94a",
                "state_id" => 13,
                "name" => "Leopoldina",
                "solar_incidence" => "3.9725"
            ],
            [
                "uuid" => "8eb1c15f-19ba-423d-852a-eaf6faf1ccca",
                "state_id" => 9,
                "name" => "Leopoldo de Bulhões",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "e5fd51ef-b120-491e-8e14-c339e6476e5a",
                "state_id" => 5,
                "name" => "Licínio de Almeida",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "3e03323a-1264-482b-9d8d-88d0110ac937",
                "state_id" => 25,
                "name" => "Limeira",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "77fbee48-0aec-42fa-a482-d606041dea61",
                "state_id" => 17,
                "name" => "Limoeiro",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "a2729a8a-340d-47bf-869e-a555eee2a4ee",
                "state_id" => 6,
                "name" => "Limoeiro do Norte",
                "solar_incidence" => "4.935"
            ],
            [
                "uuid" => "b8586f04-4360-4d3d-8d82-d676b4aa90d6",
                "state_id" => 16,
                "name" => "Lindoeste",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "5c4e9620-8b2a-4775-b0ed-9efa178dcb36",
                "state_id" => 8,
                "name" => "Linhares",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "f7a01731-fe98-4581-8178-51f348da5250",
                "state_id" => 25,
                "name" => "Lins",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "fad52382-f8bc-4eae-92c1-29d2b8a528ae",
                "state_id" => 5,
                "name" => "Livramento de Nossa Senhora",
                "solar_incidence" => "4.87375"
            ],
            [
                "uuid" => "d5c78ae3-8a77-4ef2-8847-077c757caf96",
                "state_id" => 16,
                "name" => "Lobato",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "3ab4e500-f45a-47fd-a977-b06dfb4eccd9",
                "state_id" => 16,
                "name" => "Londrina",
                "solar_incidence" => "4.92"
            ],
            [
                "uuid" => "baacc06c-86ca-4bd9-96be-784d461c443a",
                "state_id" => 24,
                "name" => "Lontras",
                "solar_incidence" => "3.605"
            ],
            [
                "uuid" => "8b94633d-c39e-4d92-ab0c-4989a032c1ef",
                "state_id" => 25,
                "name" => "Lorena",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "6f85dd44-6532-4612-818d-7bb40b2d6671",
                "state_id" => 11,
                "name" => "Lucas do Rio Verde",
                "solar_incidence" => "4.445"
            ],
            [
                "uuid" => "46c4266a-2c33-4434-9957-f60e3034c589",
                "state_id" => 25,
                "name" => "Lucélia",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "2ca748ee-75d3-454d-9184-cff969519380",
                "state_id" => 5,
                "name" => "Luís Eduardo Magalhães",
                "solar_incidence" => "4.78625"
            ],
            [
                "uuid" => "d24892e3-8d78-4ff7-bf73-f01e856fc013",
                "state_id" => 16,
                "name" => "Luiziana",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "6783e0c5-1a82-4697-b0d7-5bd5640a237a",
                "state_id" => 16,
                "name" => "Lupionópolis",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "9f403151-5d0e-4205-b565-a9753600d4ac",
                "state_id" => 13,
                "name" => "Luz",
                "solar_incidence" => "4.4625"
            ],
            [
                "uuid" => "a85c2dfe-390c-4eb5-a84c-0f74b139b474",
                "state_id" => 24,
                "name" => "Luzerna",
                "solar_incidence" => "4.03375"
            ],
            [
                "uuid" => "f2e592e0-1e1b-477c-8d71-02a943f41c4b",
                "state_id" => 9,
                "name" => "Luziânia",
                "solar_incidence" => "4.62875"
            ],
            [
                "uuid" => "48378fb6-655d-4352-b5d4-a7e7bd3d7831",
                "state_id" => 18,
                "name" => "Luzilândia",
                "solar_incidence" => "4.73375"
            ],
            [
                "uuid" => "911ff5ba-9527-43b9-b011-012079a9f754",
                "state_id" => 19,
                "name" => "Macaé",
                "solar_incidence" => "4.0425"
            ],
            [
                "uuid" => "36572502-a045-4f14-bf24-70f7654a3ad3",
                "state_id" => 20,
                "name" => "Macaíba",
                "solar_incidence" => "4.8825"
            ],
            [
                "uuid" => "7a1bd944-6bff-41cd-9ae5-ce1155ab0843",
                "state_id" => 3,
                "name" => "Macapá",
                "solar_incidence" => "4.2875"
            ],
            [
                "uuid" => "c6449ab5-3b81-48fc-ba1e-12665d8cff6f",
                "state_id" => 20,
                "name" => "Macau",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "82546fe6-4480-4675-94c4-06f9ccca90ea",
                "state_id" => 25,
                "name" => "Macaubal",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "56f54829-66cd-47da-8f69-b9edbb6834e5",
                "state_id" => 5,
                "name" => "Macaúbas",
                "solar_incidence" => "5.0925"
            ],
            [
                "uuid" => "56a1262e-642b-4f0f-bdcf-8fac7cb201fe",
                "state_id" => 2,
                "name" => "Maceió",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "e5b340f4-c95d-4bbb-a852-9c12584831a7",
                "state_id" => 21,
                "name" => "Machadinho",
                "solar_incidence" => "4.03375"
            ],
            [
                "uuid" => "d641a0c7-c1e4-4c30-b1ad-60d3ed23c413",
                "state_id" => 13,
                "name" => "Machado",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "e08853c2-8e91-4151-8e67-b01913cede1a",
                "state_id" => 19,
                "name" => "Macuco",
                "solar_incidence" => "3.9725"
            ],
            [
                "uuid" => "730c4650-37e3-401c-bfa7-7f1a366252ed",
                "state_id" => 24,
                "name" => "Mafra",
                "solar_incidence" => "3.5875"
            ],
            [
                "uuid" => "32f5e9f5-52bd-4d14-beed-bf20534e043b",
                "state_id" => 19,
                "name" => "Magé",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "b9b48251-5aa3-4d2d-b409-775d07651148",
                "state_id" => 25,
                "name" => "Mairiporã",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "27eeb597-139d-4f38-9a18-7592e877300f",
                "state_id" => 9,
                "name" => "Mairipotaba",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "0b55044e-7cb5-47fb-bc01-2c54fb32da24",
                "state_id" => 24,
                "name" => "Major Vieira",
                "solar_incidence" => "3.75375"
            ],
            [
                "uuid" => "5a6301f8-b252-4c1c-b278-071a23ec7890",
                "state_id" => 15,
                "name" => "Mamanguape",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "2abc1013-2321-4e80-af89-96fffa06b40d",
                "state_id" => 4,
                "name" => "Manacapuru",
                "solar_incidence" => "4.05125"
            ],
            [
                "uuid" => "d5763271-904e-40f1-ba1b-a60c35016bee",
                "state_id" => 4,
                "name" => "Manaus",
                "solar_incidence" => "4.05125"
            ],
            [
                "uuid" => "71474d3b-aca8-41e9-a5f8-8011a53ecb58",
                "state_id" => 16,
                "name" => "Mandaguaçu",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "e8ae4600-e289-44c5-bc2c-901aeaf4fedc",
                "state_id" => 16,
                "name" => "Mandaguari",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "46ca590a-7f57-46c9-86ad-f12d20300288",
                "state_id" => 16,
                "name" => "Mandirituba",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "c8c6efb9-e44a-4be9-bc96-a0333f5ed2b1",
                "state_id" => 13,
                "name" => "Manga",
                "solar_incidence" => "4.99625"
            ],
            [
                "uuid" => "a9da6e90-9ff5-49b0-a4ee-990726bc9d21",
                "state_id" => 16,
                "name" => "Mangueirinha",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "f142726e-9fda-40d5-a8ed-069b1dcbdc30",
                "state_id" => 16,
                "name" => "Manoel Ribas",
                "solar_incidence" => "4.19125"
            ],
            [
                "uuid" => "33bf64fd-88c9-48c8-906d-73fd03dfff31",
                "state_id" => 21,
                "name" => "Maquiné",
                "solar_incidence" => "3.80625"
            ],
            [
                "uuid" => "682357b0-6462-4634-8483-e29adf02a6c2",
                "state_id" => 14,
                "name" => "Marabá",
                "solar_incidence" => "4.2525"
            ],
            [
                "uuid" => "3e2b225f-dd69-4859-b7f0-787a98dfb896",
                "state_id" => 12,
                "name" => "Maracaju",
                "solar_incidence" => "4.40125"
            ],
            [
                "uuid" => "766d6194-c083-49bb-a17a-9c2c68a64763",
                "state_id" => 6,
                "name" => "Maracanaú",
                "solar_incidence" => "5.11"
            ],
            [
                "uuid" => "64fbc302-d576-4448-ace1-fa0f57d810b7",
                "state_id" => 6,
                "name" => "Maranguape",
                "solar_incidence" => "5.11"
            ],
            [
                "uuid" => "aecc49fd-032a-41cb-a574-1f10de62615c",
                "state_id" => 14,
                "name" => "Marapanim",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "ad49017a-5e68-45b2-aabb-24ac2897ce9e",
                "state_id" => 8,
                "name" => "Marataízes",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "f3219190-912f-4cc5-a9a6-1b6dc68bb3be",
                "state_id" => 21,
                "name" => "Marau",
                "solar_incidence" => "4.01625"
            ],
            [
                "uuid" => "3d0be086-fb54-4362-85a2-b25863f4ee79",
                "state_id" => 24,
                "name" => "Maravilha",
                "solar_incidence" => "4.8125"
            ],
            [
                "uuid" => "e2ecb84d-951b-4150-a20b-3660dc6ed90b",
                "state_id" => 16,
                "name" => "Marechal Cândido Rondon",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "b3ea20da-25f6-4058-a5f5-919b4a6e4026",
                "state_id" => 2,
                "name" => "Marechal Deodoro",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "93a011e0-facf-41aa-babd-5f27ddd2739a",
                "state_id" => 15,
                "name" => "Mari",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "55e8bf14-575e-4ffd-b729-dd60be85dd64",
                "state_id" => 13,
                "name" => "Maria da Fé",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "625fef66-2bf9-4dfb-a45c-7dd758ca3448",
                "state_id" => 16,
                "name" => "Marialva",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "fa8652bf-ce3e-4866-8211-bb520842e496",
                "state_id" => 13,
                "name" => "Mariana",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "83f0de5c-89d0-4350-8cc4-76d4e795b2d9",
                "state_id" => 19,
                "name" => "Maricá",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "bb82b4ae-89fc-4710-abd4-776e7ea76615",
                "state_id" => 8,
                "name" => "Marilândia",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "dda28643-1e99-4d9e-9fe9-ebcc1d3fc4e4",
                "state_id" => 16,
                "name" => "Marilândia do Sul",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "ee518527-7e3c-468f-91b9-45f4de903a90",
                "state_id" => 25,
                "name" => "Marília",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "b7cce229-39af-4557-86fc-d13f98b7fadc",
                "state_id" => 16,
                "name" => "Maringá",
                "solar_incidence" => "4.92"
            ],
            [
                "uuid" => "8e0a532d-9e8b-4441-b847-64b47eea57dd",
                "state_id" => 14,
                "name" => "Marituba",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "4a7d3e23-88e2-40cb-81c6-25500f48d2ef",
                "state_id" => 15,
                "name" => "Marizópolis",
                "solar_incidence" => "5.0575"
            ],
            [
                "uuid" => "61f1ecc5-347f-4886-b0e6-61357b44dbe7",
                "state_id" => 16,
                "name" => "Marmeleiro",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "8eb17872-7622-48f7-ac30-bec7670c4fc7",
                "state_id" => 25,
                "name" => "Martinópolis",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "399364c6-b717-43ca-b0e6-6a2bd05054f5",
                "state_id" => 5,
                "name" => "Mata de São João",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "b3ea8bec-b6d3-4f37-a1f0-ef202b1abba3",
                "state_id" => 10,
                "name" => "Mata Roma",
                "solar_incidence" => "4.5325"
            ],
            [
                "uuid" => "6d20d561-9f01-4630-9183-ee7703d9a755",
                "state_id" => 25,
                "name" => "Matão",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "cf2c6660-adf2-4d51-86b1-8c1c218d3fb5",
                "state_id" => 15,
                "name" => "Mataraca",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "603b4611-0dff-47a8-b444-ca09e853edc2",
                "state_id" => 16,
                "name" => "Matelândia",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "074e8b7d-96a6-48e6-8c10-7d67af9a374e",
                "state_id" => 13,
                "name" => "Mateus Leme",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "bd375160-d947-4568-a557-d1f9fd3902a7",
                "state_id" => 16,
                "name" => "Matinhos",
                "solar_incidence" => "3.50875"
            ],
            [
                "uuid" => "e982a118-6a8a-409c-a781-37238fec97be",
                "state_id" => 9,
                "name" => "Matrinchã",
                "solar_incidence" => "4.6375"
            ],
            [
                "uuid" => "75e6e532-6321-4aef-b2fc-472fb54a36f9",
                "state_id" => 11,
                "name" => "Matupá",
                "solar_incidence" => "4.45375"
            ],
            [
                "uuid" => "05c22e50-1e39-47fb-b6c0-62391da5ead1",
                "state_id" => 25,
                "name" => "Mauá",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "8acd30fb-e1cc-4887-8fa2-60d88531a357",
                "state_id" => 16,
                "name" => "Mauá da Serra",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "89ada8fb-517a-42a2-ba0c-b257c15f7e39",
                "state_id" => 4,
                "name" => "Maués",
                "solar_incidence" => "4.1125"
            ],
            [
                "uuid" => "cf1600a4-2ca8-4f4f-a89e-c5c2699a2226",
                "state_id" => 5,
                "name" => "Medeiros Neto",
                "solar_incidence" => "4.13"
            ],
            [
                "uuid" => "67fb0c5b-af0e-4990-9254-6505d34f6a09",
                "state_id" => 16,
                "name" => "Medianeira",
                "solar_incidence" => "4.1825"
            ],
            [
                "uuid" => "3e6ac5f5-134d-4d13-9937-7c3e9496a2be",
                "state_id" => 19,
                "name" => "Mesquita",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "56b79301-54d0-4e47-8585-6e3bcee4996d",
                "state_id" => 19,
                "name" => "Miguel Pereira",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "4a954074-15d1-47f2-a83d-10fa72f01b40",
                "state_id" => 9,
                "name" => "Mineiros",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "343669cf-d2b4-403d-b1ef-5054a76b42ed",
                "state_id" => 25,
                "name" => "Miracatu",
                "solar_incidence" => "3.5525"
            ],
            [
                "uuid" => "6aba3903-0b5f-4fcd-b9e6-f19860086113",
                "state_id" => 19,
                "name" => "Miracema",
                "solar_incidence" => "3.9725"
            ],
            [
                "uuid" => "4ed8388b-5fb1-4696-8f97-a367be79826a",
                "state_id" => 13,
                "name" => "Miraí",
                "solar_incidence" => "3.9725"
            ],
            [
                "uuid" => "ff93dc53-a7c7-407b-b3ec-0adb54749536",
                "state_id" => 25,
                "name" => "Mirandópolis",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "447717fa-80fe-40ff-bdec-602b9d1cca4b",
                "state_id" => 25,
                "name" => "Mirante do Paranapanema",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "b44a7758-fb3f-418c-8fa0-49967974add6",
                "state_id" => 25,
                "name" => "Mirassol",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "5e84f772-7383-45d3-9fd3-24542dda2a9b",
                "state_id" => 11,
                "name" => "Mirassol do Oeste",
                "solar_incidence" => "4.3225"
            ],
            [
                "uuid" => "177718ce-e1f5-4971-94f6-7497b84d8532",
                "state_id" => 16,
                "name" => "Missal",
                "solar_incidence" => "4.1825"
            ],
            [
                "uuid" => "f550e558-292b-41f5-ada4-fbd88077a1da",
                "state_id" => 25,
                "name" => "Mococa",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "125424fd-5d11-4e73-9376-3e55732560b1",
                "state_id" => 25,
                "name" => "Mogi das Cruzes",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "37c0d074-4eb7-4f4d-aa2f-f74fedcef5c5",
                "state_id" => 25,
                "name" => "Mogi Guaçu",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "ec327031-e54a-48c3-aff9-2c8162165d85",
                "state_id" => 25,
                "name" => "Mogi Mirim",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "c880c3fd-b2de-4742-8bdd-6aee977c1d5e",
                "state_id" => 14,
                "name" => "Mojuí dos Campos",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "1453c3ad-e563-405d-a4c2-3f202f640862",
                "state_id" => 6,
                "name" => "Mombaça",
                "solar_incidence" => "4.8475"
            ],
            [
                "uuid" => "7fbc5580-fcbc-4905-9567-fad2b4a045a5",
                "state_id" => 24,
                "name" => "Mondaí",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "972c031f-673c-407a-a3f7-e1eeacfd6782",
                "state_id" => 18,
                "name" => "Monsenhor Gil",
                "solar_incidence" => "4.85625"
            ],
            [
                "uuid" => "fd545b27-b78d-405a-99fe-a8e7f5eb3f9d",
                "state_id" => 13,
                "name" => "Monsenhor Paulo",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "dd334b54-64e6-49d8-b7d1-08501ec8a592",
                "state_id" => 15,
                "name" => "Montadas",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "695c5bda-f0a1-4bf2-a0cc-d6fe39f25a34",
                "state_id" => 13,
                "name" => "Montalvânia",
                "solar_incidence" => "4.8825"
            ],
            [
                "uuid" => "fa9acb83-066a-4f8c-a1d7-78a859dbcdcd",
                "state_id" => 8,
                "name" => "Montanha",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "2f50e556-fe0a-446b-a8c9-92ad53495ff9",
                "state_id" => 21,
                "name" => "Montauri",
                "solar_incidence" => "4.01625"
            ],
            [
                "uuid" => "a4e91766-b9ee-4199-a649-e8472ddef23a",
                "state_id" => 13,
                "name" => "Monte Alegre de Minas",
                "solar_incidence" => "4.6375"
            ],
            [
                "uuid" => "b665ceaa-99d8-49ee-bce1-fc9232df97c9",
                "state_id" => 25,
                "name" => "Monte Alto",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "c79cf987-f01d-4db3-ac68-b2636f7cb27d",
                "state_id" => 25,
                "name" => "Monte Aprazível",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "fb4f98cb-d676-4123-ba5b-8c4be166c723",
                "state_id" => 25,
                "name" => "Monte Azul Paulista",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "ff6dbc25-fbcd-4585-83e1-b9784a934587",
                "state_id" => 13,
                "name" => "Monte Carmelo",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "7f681579-37f3-4d67-8477-df00d4d06d7a",
                "state_id" => 24,
                "name" => "Monte Castelo",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "1528902c-78cc-4534-9792-ba98818919c4",
                "state_id" => 25,
                "name" => "Monte Mor",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "56d30d8f-a194-4867-bf99-7e770ec76197",
                "state_id" => 15,
                "name" => "Monteiro",
                "solar_incidence" => "5.1625"
            ],
            [
                "uuid" => "f8d4f7d3-1d95-4501-bbb0-f5df3e5354b4",
                "state_id" => 21,
                "name" => "Montenegro",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "3c40bf2b-d782-4219-ac16-3774235d2650",
                "state_id" => 13,
                "name" => "Montes Claros",
                "solar_incidence" => "4.83"
            ],
            [
                "uuid" => "4c674ff5-514b-4802-b58d-ea8165d6fb47",
                "state_id" => 6,
                "name" => "Morada Nova",
                "solar_incidence" => "4.935"
            ],
            [
                "uuid" => "72933abf-609b-4ff7-8486-e1e8c3ae7ae9",
                "state_id" => 9,
                "name" => "Morrinhos",
                "solar_incidence" => "4.7775"
            ],
            [
                "uuid" => "3168e659-88f9-4b1d-b452-bbda0155450f",
                "state_id" => 25,
                "name" => "Morro Agudo",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "827ecc2a-7b98-429d-a1a3-fd09dcc73367",
                "state_id" => 5,
                "name" => "Morro do Chapéu",
                "solar_incidence" => "4.96125"
            ],
            [
                "uuid" => "d9c95770-0749-4b9c-9a70-fecc72e7ab46",
                "state_id" => 5,
                "name" => "Mortugaba",
                "solar_incidence" => "4.83875"
            ],
            [
                "uuid" => "04917116-a471-418a-80b1-054339f148f0",
                "state_id" => 25,
                "name" => "Morungaba",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "a8d43e77-ba60-4921-8d17-dce5d8c01963",
                "state_id" => 20,
                "name" => "Mossoró",
                "solar_incidence" => "5.08375"
            ],
            [
                "uuid" => "55ce9628-6e5a-4467-879b-0870a3a8092a",
                "state_id" => 12,
                "name" => "Mundo Novo",
                "solar_incidence" => "4.235"
            ],
            [
                "uuid" => "d78597df-a525-46b6-a28a-78253567bf7c",
                "state_id" => 8,
                "name" => "Muqui",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "66d229ce-c02c-4213-a648-c9f5e3e43f2f",
                "state_id" => 13,
                "name" => "Muriaé",
                "solar_incidence" => "3.9725"
            ],
            [
                "uuid" => "4f270eff-e25c-4d62-95ea-3eccd50ad798",
                "state_id" => 25,
                "name" => "Murutinga do Sul",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "b7a9a52f-9b0e-403c-84a8-24e99cd951ff",
                "state_id" => 5,
                "name" => "Mutuípe",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "16895676-e5d2-4019-8791-ad3d9b24315d",
                "state_id" => 13,
                "name" => "Muzambinho",
                "solar_incidence" => "4.45375"
            ],
            [
                "uuid" => "858112fa-003b-40cd-a585-1bc546f390b2",
                "state_id" => 20,
                "name" => "Natal",
                "solar_incidence" => "4.8825"
            ],
            [
                "uuid" => "8179c431-9112-41db-8604-f469ef208450",
                "state_id" => 19,
                "name" => "Natividade",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "f09dbd61-0d58-4a70-898c-5cb7e5f36f0a",
                "state_id" => 24,
                "name" => "Navegantes",
                "solar_incidence" => "3.45625"
            ],
            [
                "uuid" => "0b767853-e2a3-4aec-9104-ec6240d31883",
                "state_id" => 12,
                "name" => "Naviraí",
                "solar_incidence" => "4.235"
            ],
            [
                "uuid" => "dd9bc398-0fa2-4843-acd8-930a7f008a71",
                "state_id" => 18,
                "name" => "Nazária",
                "solar_incidence" => "4.85625"
            ],
            [
                "uuid" => "fe33ee68-6f3f-4c0e-be76-0663528e767a",
                "state_id" => 9,
                "name" => "Nerópolis",
                "solar_incidence" => "4.62"
            ],
            [
                "uuid" => "2698df41-580e-40e3-8c7d-e3c9782141c4",
                "state_id" => 25,
                "name" => "Nhandeara",
                "solar_incidence" => "4.5325"
            ],
            [
                "uuid" => "572a8b1b-e038-4490-8d7a-a44b78f5ecb8",
                "state_id" => 21,
                "name" => "Nicolau Vergueiro",
                "solar_incidence" => "4.01625"
            ],
            [
                "uuid" => "271cbc6c-4d00-4ada-9457-7d381ea4a278",
                "state_id" => 25,
                "name" => "Nipoã",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "122e496d-35d0-4c80-bc0e-cfb9a767d669",
                "state_id" => 9,
                "name" => "Niquelândia",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "6332b76d-202c-4ed9-8370-341004dbe6bf",
                "state_id" => 19,
                "name" => "Niterói",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "4f80d613-8845-4a2f-b81f-6a07bde9f643",
                "state_id" => 11,
                "name" => "Nobres",
                "solar_incidence" => "4.34875"
            ],
            [
                "uuid" => "d02288bf-f4b8-4eb5-99c6-3e9d74f077ee",
                "state_id" => 21,
                "name" => "Nonoai",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "d3246966-988a-43cc-806d-2ff94022f69e",
                "state_id" => 23,
                "name" => "Normandia",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "b4483c14-71af-4ad0-8318-1b6a2d435d68",
                "state_id" => 16,
                "name" => "Nossa Senhora das Graças",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "31e1faa2-4752-4b9f-b1ea-6192e263a835",
                "state_id" => 26,
                "name" => "Nossa Senhora de Lourdes",
                "solar_incidence" => "4.59375"
            ],
            [
                "uuid" => "826a5302-8195-44bb-a5aa-b39628077ecd",
                "state_id" => 26,
                "name" => "Nossa Senhora do Socorro",
                "solar_incidence" => "4.59375"
            ],
            [
                "uuid" => "bf64f503-1cea-41f9-8984-3c86b487383c",
                "state_id" => 12,
                "name" => "Nova Andradina",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "c038f6c9-fcd2-4a09-b0b7-99df71d7fb02",
                "state_id" => 11,
                "name" => "Nova Bandeirantes",
                "solar_incidence" => "4.27"
            ],
            [
                "uuid" => "6a263a13-c972-49d4-8d4d-eff839d5d07c",
                "state_id" => 21,
                "name" => "Nova Bassano",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "a6b803c0-b65e-49c5-b41d-66cb2db2e26c",
                "state_id" => 22,
                "name" => "Nova Brasilândia D Oeste",
                "solar_incidence" => "4.1475"
            ],
            [
                "uuid" => "08c5104a-331c-4c51-8981-04c9244aa17d",
                "state_id" => 9,
                "name" => "Nova Crixás",
                "solar_incidence" => "4.64625"
            ],
            [
                "uuid" => "4fd6d06f-0209-4191-a4f9-feb0001bad82",
                "state_id" => 20,
                "name" => "Nova Cruz",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "a75b3337-dfe6-4703-8957-f41612566ea0",
                "state_id" => 16,
                "name" => "Nova Esperança",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "37d4d5af-f3c8-4d9c-8442-94cfcab1358d",
                "state_id" => 19,
                "name" => "Nova Friburgo",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "31221c95-62d2-44e0-b74b-d832054ad2b3",
                "state_id" => 19,
                "name" => "Nova Iguaçu",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "3aa246e1-a722-4d41-b0af-e434b88fd732",
                "state_id" => 13,
                "name" => "Nova Lima",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "31d10b15-65a1-42da-83dd-1c6165485c6e",
                "state_id" => 11,
                "name" => "Nova Monte Verde",
                "solar_incidence" => "4.27"
            ],
            [
                "uuid" => "83a54d6c-3c4d-4683-8e65-4eb03d5bf6fc",
                "state_id" => 11,
                "name" => "Nova Mutum",
                "solar_incidence" => "4.45375"
            ],
            [
                "uuid" => "7d307618-f69c-4f30-8e23-1ac5436696d8",
                "state_id" => 21,
                "name" => "Nova Petrópolis",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "1580af17-0b5f-405b-b606-a4616534c6ef",
                "state_id" => 13,
                "name" => "Nova Ponte",
                "solar_incidence" => "4.5675"
            ],
            [
                "uuid" => "642a5ca0-4c85-4d10-a64d-e77076acfc5c",
                "state_id" => 6,
                "name" => "Nova Russas",
                "solar_incidence" => "4.94375"
            ],
            [
                "uuid" => "d0d20128-b262-43bf-9973-484f68b6eab6",
                "state_id" => 21,
                "name" => "Nova Santa Rita",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "12ba9131-35bd-4ec9-9f19-9055bc0aa765",
                "state_id" => 16,
                "name" => "Nova Santa Rosa",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "ffb98ebf-fad7-47cd-baf7-f42f05f043b1",
                "state_id" => 11,
                "name" => "Nova Ubiratã",
                "solar_incidence" => "4.43625"
            ],
            [
                "uuid" => "95325daf-48a3-4602-983d-6f3247eca2e6",
                "state_id" => 9,
                "name" => "Nova Veneza",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "797f1d83-7d6e-42d7-b0ce-210be3909382",
                "state_id" => 9,
                "name" => "Novo Gama",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "23686f1a-491b-440b-b7a4-99867e60551f",
                "state_id" => 21,
                "name" => "Novo Hamburgo",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "a84a4b47-494f-435e-a0c4-88f06a04de10",
                "state_id" => 25,
                "name" => "Novo Horizonte",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "c622a936-d062-477f-a807-cf9c01007612",
                "state_id" => 14,
                "name" => "Novo Progresso",
                "solar_incidence" => "4.27875"
            ],
            [
                "uuid" => "ca96a282-6bad-4334-a626-d3428a29d1e4",
                "state_id" => 14,
                "name" => "Novo Repartimento",
                "solar_incidence" => "4.27875"
            ],
            [
                "uuid" => "7fe348d5-730f-4c97-bf37-b201fbe40e4f",
                "state_id" => 25,
                "name" => "Nuporanga",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "ecfcae28-60c4-4fc2-8ef8-88b99bb2d230",
                "state_id" => 18,
                "name" => "Oeiras",
                "solar_incidence" => "4.8475"
            ],
            [
                "uuid" => "2e80d816-c356-4448-a300-c881050bbd0d",
                "state_id" => 10,
                "name" => "Olho Água das Cunhãs",
                "solar_incidence" => "4.34875"
            ],
            [
                "uuid" => "3ddacf54-2f9b-487c-9ba9-60df6e20ad2c",
                "state_id" => 25,
                "name" => "Olímpia",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "5b9dede5-255b-40ba-839a-662bf28f3d6c",
                "state_id" => 17,
                "name" => "Olinda",
                "solar_incidence" => "5.15375"
            ],
            [
                "uuid" => "e1639007-48f6-492b-9287-c03dfebd0a1c",
                "state_id" => 13,
                "name" => "Oliveira Fortes",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "cea36671-6d13-4f3e-99a4-fcb2239f8697",
                "state_id" => 9,
                "name" => "Orizona",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "8e82ab72-14e8-4a1c-86c4-a0d6fb7db122",
                "state_id" => 25,
                "name" => "Orlândia",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "6a720c75-8958-4908-9d5e-59c0d7c729ed",
                "state_id" => 16,
                "name" => "Ortigueira",
                "solar_incidence" => "4.15625"
            ],
            [
                "uuid" => "5c3c4206-fd71-473b-bf79-c3c2d6416d92",
                "state_id" => 25,
                "name" => "Osasco",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "a994c8ca-12d3-43a5-9c0a-4e3473bfa29b",
                "state_id" => 25,
                "name" => "Osvaldo Cruz",
                "solar_incidence" => "4.50625"
            ],
            [
                "uuid" => "6a5bd4fd-ebbb-48f6-8e70-2aae3e2464f9",
                "state_id" => 17,
                "name" => "Ouricuri",
                "solar_incidence" => "4.97875"
            ],
            [
                "uuid" => "26db6c71-7a4d-454d-8e86-ffa9c9e10633",
                "state_id" => 14,
                "name" => "Ourilândia do Norte",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "7a830d22-abd5-4ca8-b1ea-6aa879791dd7",
                "state_id" => 25,
                "name" => "Ourinhos",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "741b7abb-8f7c-4969-a8e0-aa1d69872353",
                "state_id" => 13,
                "name" => "Ouro Fino",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "6ea0bfdf-ba87-41b1-a570-cf7e876fc9ce",
                "state_id" => 13,
                "name" => "Ouro Preto",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "19f9d2c9-c1ed-4871-a524-05c2a6387438",
                "state_id" => 22,
                "name" => "Ouro Preto do Oeste",
                "solar_incidence" => "4.17375"
            ],
            [
                "uuid" => "3632ad2b-2a70-47df-aba4-ebfec9009475",
                "state_id" => 25,
                "name" => "Ouroeste",
                "solar_incidence" => "4.5325"
            ],
            [
                "uuid" => "746d8ffd-52f1-4097-bba5-87cb75545487",
                "state_id" => 5,
                "name" => "Ourolândia",
                "solar_incidence" => "5.13625"
            ],
            [
                "uuid" => "af593cf3-287b-41b3-bc6d-3409727d2dc9",
                "state_id" => 9,
                "name" => "Ouvidor",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "ab56a902-e4a3-4c6b-81d5-36642a60a870",
                "state_id" => 6,
                "name" => "Pacajus",
                "solar_incidence" => "4.71625"
            ],
            [
                "uuid" => "ec4431c2-3618-40da-aa6b-a95c98e4a192",
                "state_id" => 10,
                "name" => "Paço do Lumiar",
                "solar_incidence" => "4.2525"
            ],
            [
                "uuid" => "b289f17e-f0cb-4a56-840d-f415a1f3c636",
                "state_id" => 18,
                "name" => "Padre Marcos",
                "solar_incidence" => "4.97875"
            ],
            [
                "uuid" => "d9ee8b8c-2b1d-4542-ac60-3a3261556d06",
                "state_id" => 16,
                "name" => "Paiçandu",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "13b66cd8-20d2-4738-a7b4-7797d9fe2f32",
                "state_id" => 21,
                "name" => "Paim Filho",
                "solar_incidence" => "4.03375"
            ],
            [
                "uuid" => "2a093ae5-19ee-4adc-821b-d4aaaba41458",
                "state_id" => 24,
                "name" => "Palhoça",
                "solar_incidence" => "3.535"
            ],
            [
                "uuid" => "9e8b971b-d273-4b45-af77-4cf630a45790",
                "state_id" => 13,
                "name" => "Palma",
                "solar_incidence" => "3.9725"
            ],
            [
                "uuid" => "a8119b23-7ebc-466b-bb77-688fb1976cd0",
                "state_id" => 21,
                "name" => "Palmares do Sul",
                "solar_incidence" => "3.8325"
            ],
            [
                "uuid" => "ec95f8ae-82de-46b0-8ac6-4f267c1f2c96",
                "state_id" => 27,
                "name" => "Palmas",
                "solar_incidence" => "4.5675"
            ],
            [
                "uuid" => "81ed9be7-bffe-4a76-84fa-772a70f382ed",
                "state_id" => 5,
                "name" => "Palmas de Monte Alto",
                "solar_incidence" => "4.99625"
            ],
            [
                "uuid" => "b0fbed57-ea23-4064-ad2a-64f810835fbb",
                "state_id" => 16,
                "name" => "Palmeira",
                "solar_incidence" => "3.91125"
            ],
            [
                "uuid" => "d66e1652-645b-4494-81e4-6a2641b04027",
                "state_id" => 9,
                "name" => "Palminópolis",
                "solar_incidence" => "4.61125"
            ],
            [
                "uuid" => "ae39db9d-1f02-4c35-82d6-75e1817f4746",
                "state_id" => 25,
                "name" => "Palmital",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "9292cf44-c8c5-4962-94ee-aa6bc1a5c7e0",
                "state_id" => 16,
                "name" => "Palotina",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "da75bc30-a2e5-41e4-9e45-1e99436fe764",
                "state_id" => 21,
                "name" => "Panambi",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "91e71c45-91f1-4da8-af9c-171ec78f9b68",
                "state_id" => 25,
                "name" => "Panorama",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "ebd64913-34ce-4caf-95d6-46205d112766",
                "state_id" => 24,
                "name" => "Papanduva",
                "solar_incidence" => "3.75375"
            ],
            [
                "uuid" => "113c4895-c1a9-41d9-a83f-40a8bd09e5d6",
                "state_id" => 13,
                "name" => "Pará de Minas",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "b9da7587-2e54-4b17-b9ea-3087ceeb1b81",
                "state_id" => 14,
                "name" => "Paragominas",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "8cd755a5-4d3c-4018-8d5b-ffc666df4d40",
                "state_id" => 13,
                "name" => "Paraguaçu",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "bc1a5a5f-ac1b-4143-b55b-c6eccedace72",
                "state_id" => 25,
                "name" => "Paraguaçu Paulista",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "c30f260d-1c6d-4a06-9327-ff4ab70c2c61",
                "state_id" => 21,
                "name" => "Paraí",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "0eb086f2-5ade-4edd-afcb-ec0419a32741",
                "state_id" => 19,
                "name" => "Paraíba do Sul",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "457a3fa1-a256-4ec4-abb4-317339895ac3",
                "state_id" => 25,
                "name" => "Paraíso",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "d2cc50f4-b125-4e18-a31a-0d666702b813",
                "state_id" => 16,
                "name" => "Paraíso do Norte",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "b6a5632a-3a00-4ae4-96f5-5ac845349490",
                "state_id" => 27,
                "name" => "Paraíso do Tocantins",
                "solar_incidence" => "4.5675"
            ],
            [
                "uuid" => "0fc877b5-69f9-4be5-9662-a590fccc45fe",
                "state_id" => 6,
                "name" => "Parambu",
                "solar_incidence" => "4.90875"
            ],
            [
                "uuid" => "a9174e4c-7ead-469d-8335-9923da18636d",
                "state_id" => 5,
                "name" => "Paramirim",
                "solar_incidence" => "5.0925"
            ],
            [
                "uuid" => "bf7f2ea3-68e7-4e73-a302-da75bd8ac2c7",
                "state_id" => 16,
                "name" => "Paranacity",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "eb067e9f-e274-4157-90d4-2ac9dab3903e",
                "state_id" => 16,
                "name" => "Paranaguá",
                "solar_incidence" => "3.50875"
            ],
            [
                "uuid" => "046cbd40-150c-4e1f-95cd-7872847d67aa",
                "state_id" => 12,
                "name" => "Paranaíba",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "1a4ee2c8-6eb2-45f9-a8d3-02dbc471ca87",
                "state_id" => 11,
                "name" => "Paranaíta",
                "solar_incidence" => "4.34"
            ],
            [
                "uuid" => "996c2f17-5147-49a8-a95d-c72ffddfecd4",
                "state_id" => 25,
                "name" => "Paranapanema",
                "solar_incidence" => "4.20875"
            ],
            [
                "uuid" => "c49b0aff-6106-4107-9656-0a4b7c318450",
                "state_id" => 11,
                "name" => "Paranatinga",
                "solar_incidence" => "4.48"
            ],
            [
                "uuid" => "bcd617eb-0069-45fb-b48a-2409d42a8681",
                "state_id" => 16,
                "name" => "Paranavaí",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "c649444d-decd-4f5b-a872-e2ed91582b7e",
                "state_id" => 13,
                "name" => "Paraopeba",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "a8819f10-1c99-4340-8e45-f85c62f64152",
                "state_id" => 19,
                "name" => "Paraty",
                "solar_incidence" => "4.01625"
            ],
            [
                "uuid" => "a6097587-0ad0-41e0-80e1-5073bd357aa0",
                "state_id" => 14,
                "name" => "Parauapebas",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "869bb374-8887-4c8a-86d8-5e8223c8602f",
                "state_id" => 25,
                "name" => "Pardinho",
                "solar_incidence" => "4.20875"
            ],
            [
                "uuid" => "65c214ef-8042-46ba-b15e-2bdc16133dec",
                "state_id" => 21,
                "name" => "Pareci Novo",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "1ded805d-213d-4fc6-8173-e9ba2753028d",
                "state_id" => 20,
                "name" => "Parelhas",
                "solar_incidence" => "5.1275"
            ],
            [
                "uuid" => "65f207c6-ca1e-4926-a978-f72f1e1af237",
                "state_id" => 5,
                "name" => "Paripiranga",
                "solar_incidence" => "4.59375"
            ],
            [
                "uuid" => "c014ecdf-33dc-4b95-a9ea-0e2196cf1edb",
                "state_id" => 18,
                "name" => "Parnaíba",
                "solar_incidence" => "5.36375"
            ],
            [
                "uuid" => "94635d08-a1c1-4203-a9cd-8371d78ab44c",
                "state_id" => 20,
                "name" => "Parnamirim",
                "solar_incidence" => "4.8825"
            ],
            [
                "uuid" => "4f115748-dad9-411e-9b9f-acd7383978fa",
                "state_id" => 21,
                "name" => "Parobé",
                "solar_incidence" => "3.80625"
            ],
            [
                "uuid" => "d7ac35be-90a3-43fb-b12f-2723ebe95bfc",
                "state_id" => 21,
                "name" => "Passo do Sobrado",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "160384ce-66bc-44c1-ac6b-dd79ac565e83",
                "state_id" => 21,
                "name" => "Passo Fundo",
                "solar_incidence" => "4.01625"
            ],
            [
                "uuid" => "aab7938d-b9d3-4a99-b427-a2c68200bcba",
                "state_id" => 13,
                "name" => "Passos",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "e2a313d3-8885-491c-9280-a24efc33b077",
                "state_id" => 16,
                "name" => "Pato Bragado",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "57633cbf-c498-4394-81b2-cbcf5f5ae2b3",
                "state_id" => 16,
                "name" => "Pato Branco",
                "solar_incidence" => "4.08625"
            ],
            [
                "uuid" => "918f19fd-b199-453e-bce0-0162333b8c8d",
                "state_id" => 15,
                "name" => "Patos",
                "solar_incidence" => "5.1625"
            ],
            [
                "uuid" => "9330c7c1-6740-403a-9f6f-0377fa08d438",
                "state_id" => 13,
                "name" => "Patos de Minas",
                "solar_incidence" => "4.62875"
            ],
            [
                "uuid" => "f67dd69a-8eeb-49ef-93ae-7b886123afd2",
                "state_id" => 13,
                "name" => "Patrocínio",
                "solar_incidence" => "4.62875"
            ],
            [
                "uuid" => "08db0d99-fa58-475f-bc15-e8318132bd4b",
                "state_id" => 20,
                "name" => "Patu",
                "solar_incidence" => "5.20625"
            ],
            [
                "uuid" => "35701fa5-75bc-4019-9dad-3b07a77d325d",
                "state_id" => 19,
                "name" => "Paty do Alferes",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "838b712a-0c09-493e-838d-fe890b23c22f",
                "state_id" => 20,
                "name" => "Pau dos Ferros",
                "solar_incidence" => "5.0575"
            ],
            [
                "uuid" => "a22bd0ed-ecb6-427a-974b-c9a96c3da8f2",
                "state_id" => 25,
                "name" => "Paulínia",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "26239532-c1c2-4101-88e3-ea6c92693ae6",
                "state_id" => 17,
                "name" => "Paulista",
                "solar_incidence" => "5.20625"
            ],
            [
                "uuid" => "d1fe6d5e-0866-4622-931d-53068a6fa7ca",
                "state_id" => 18,
                "name" => "Paulistana",
                "solar_incidence" => "5.01375"
            ],
            [
                "uuid" => "84161aca-f7d5-4e39-a3af-eee218b8bb6d",
                "state_id" => 5,
                "name" => "Paulo Afonso",
                "solar_incidence" => "4.7775"
            ],
            [
                "uuid" => "a5e0e41f-e8bb-4377-b8f1-4c5bdc97d678",
                "state_id" => 21,
                "name" => "Paverama",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "2f264a88-bf69-4440-a98e-e6a289d04cd9",
                "state_id" => 25,
                "name" => "Pederneiras",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "b31c76a2-1001-4795-b2b6-6e8217779f23",
                "state_id" => 17,
                "name" => "Pedra",
                "solar_incidence" => "4.9175"
            ],
            [
                "uuid" => "c9752e96-39d4-45b5-aba4-d3b52a1f1519",
                "state_id" => 13,
                "name" => "Pedra Azul",
                "solar_incidence" => "4.38375"
            ],
            [
                "uuid" => "c624b3af-2f24-4abb-a47c-40479934ccca",
                "state_id" => 25,
                "name" => "Pedra Bela",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "cfd3d91a-6a50-47de-b2f2-7ba10b72be84",
                "state_id" => 13,
                "name" => "Pedra Bonita",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "82a0c332-6896-40fd-b515-f7cfbea2be50",
                "state_id" => 25,
                "name" => "Pedranópolis",
                "solar_incidence" => "4.5325"
            ],
            [
                "uuid" => "f3502312-bd9b-48b5-b601-bde35d4a8a8c",
                "state_id" => 15,
                "name" => "Pedras de Fogo",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "cb8f1ee8-f8b7-41e4-96f7-3f079b96bd13",
                "state_id" => 13,
                "name" => "Pedras de Maria da Cruz",
                "solar_incidence" => "4.85625"
            ],
            [
                "uuid" => "79cf5820-9389-491c-8894-30e23c2314c9",
                "state_id" => 24,
                "name" => "Pedras Grandes",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "56e8e9ed-0b66-48cd-a69d-ba7785fe2f9a",
                "state_id" => 8,
                "name" => "Pedro Canário",
                "solar_incidence" => "4.05125"
            ],
            [
                "uuid" => "9894b3e5-4c99-41a6-af2d-e15a9d34fa40",
                "state_id" => 13,
                "name" => "Pedro Leopoldo",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "7dc194ad-f9f3-4c35-8ace-3eef9cde4438",
                "state_id" => 11,
                "name" => "Peixoto de Azevedo",
                "solar_incidence" => "4.45375"
            ],
            [
                "uuid" => "0462bcfe-7db6-477f-8562-e633dbecd1d7",
                "state_id" => 21,
                "name" => "Pelotas",
                "solar_incidence" => "3.8325"
            ],
            [
                "uuid" => "1c8003b8-6c53-47e2-b877-104309e2768c",
                "state_id" => 6,
                "name" => "Penaforte",
                "solar_incidence" => "4.85625"
            ],
            [
                "uuid" => "efc2aca7-43a5-4cb2-9351-6d3659722262",
                "state_id" => 10,
                "name" => "Penalva",
                "solar_incidence" => "4.3575"
            ],
            [
                "uuid" => "ffcc9dd8-8b6d-45cf-9ece-5fb550bb3d3a",
                "state_id" => 13,
                "name" => "Perdões",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "6452dd7c-83cb-4b07-8fe2-4b355940be2b",
                "state_id" => 16,
                "name" => "Pérola",
                "solar_incidence" => "4.2875"
            ],
            [
                "uuid" => "a0d4745b-0ab2-4afb-b2be-925c37512697",
                "state_id" => 25,
                "name" => "Peruíbe",
                "solar_incidence" => "3.5525"
            ],
            [
                "uuid" => "f8475fdf-e202-4cb4-a9c5-abebc77a677c",
                "state_id" => 17,
                "name" => "Petrolina",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "3dbd8c4f-e4bd-4369-8eec-897a58ca7b7b",
                "state_id" => 9,
                "name" => "Petrolina de Goiás",
                "solar_incidence" => "4.62"
            ],
            [
                "uuid" => "b4401bb2-8e82-4431-9ee2-c1990f39e6bb",
                "state_id" => 19,
                "name" => "Petrópolis",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "85e26eac-9b06-49f1-90e2-7337388ba0b4",
                "state_id" => 18,
                "name" => "Picos",
                "solar_incidence" => "4.97"
            ],
            [
                "uuid" => "a191176f-72f3-4627-b91d-aaf0e72db0b7",
                "state_id" => 25,
                "name" => "Piedade",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "1a1d0e16-cfc9-477d-ac05-9e88159b5589",
                "state_id" => 2,
                "name" => "Pilar",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "22342ba6-7cfa-4ea8-9009-9ce3f9acf5dc",
                "state_id" => 25,
                "name" => "Pilar do Sul",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "dace6bd9-9e47-4f1a-a823-93ea419b5534",
                "state_id" => 13,
                "name" => "Pimenta",
                "solar_incidence" => "4.445"
            ],
            [
                "uuid" => "0a5bde82-a60d-4288-9ad3-009f079c8ba7",
                "state_id" => 22,
                "name" => "Pimenta Bueno",
                "solar_incidence" => "4.20875"
            ],
            [
                "uuid" => "2855aff7-7ee6-4730-a960-4cd1859480ab",
                "state_id" => 25,
                "name" => "Pindamonhangaba",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "00bc75c0-0f32-4aff-a1e5-43e01d2e973e",
                "state_id" => 5,
                "name" => "Pindobaçu",
                "solar_incidence" => "4.8125"
            ],
            [
                "uuid" => "f9b0c0dc-dcd2-4a6f-8079-aafd73f04497",
                "state_id" => 6,
                "name" => "Pindoretama",
                "solar_incidence" => "4.71625"
            ],
            [
                "uuid" => "08d51e3a-1a27-4349-aa11-c94dfba5d9fe",
                "state_id" => 16,
                "name" => "Pinhais",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "6a7455e2-bc43-4f63-a2bd-ce41368d8c0c",
                "state_id" => 25,
                "name" => "Pinhalzinho",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "9e430139-f4ba-422d-ac91-9c090c4b9e5e",
                "state_id" => 16,
                "name" => "Pinhão",
                "solar_incidence" => "4.59375"
            ],
            [
                "uuid" => "1e8b699f-8ddb-48ab-a0d4-82446afe65e7",
                "state_id" => 19,
                "name" => "Pinheiral",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "139da95e-9c1c-49bf-9f14-0dd9cdd63163",
                "state_id" => 10,
                "name" => "Pinheiro",
                "solar_incidence" => "4.2525"
            ],
            [
                "uuid" => "d80a4fe6-0691-45be-b2a0-9e932f6ac3a3",
                "state_id" => 5,
                "name" => "Pintadas",
                "solar_incidence" => "4.375"
            ],
            [
                "uuid" => "19979459-7869-4abd-bc0a-3fe1d6f3081b",
                "state_id" => 6,
                "name" => "Piquet Carneiro",
                "solar_incidence" => "4.8475"
            ],
            [
                "uuid" => "024ed232-b3a5-43bb-aa4a-b6351382675f",
                "state_id" => 25,
                "name" => "Piracaia",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "cea693e1-b3bd-41b7-9fe4-e6ea9eb8f599",
                "state_id" => 25,
                "name" => "Piracicaba",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "f5957bd2-7772-474c-ab48-b2ca8300a63e",
                "state_id" => 18,
                "name" => "Piracuruca",
                "solar_incidence" => "4.90875"
            ],
            [
                "uuid" => "df0271fd-bf92-41c8-845f-0a7c7d6376ec",
                "state_id" => 13,
                "name" => "Pirajuba",
                "solar_incidence" => "4.62875"
            ],
            [
                "uuid" => "06883504-d77c-4eb7-9f1c-b4619d873202",
                "state_id" => 25,
                "name" => "Pirajuí",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "c6ef1186-8f1a-4964-85fd-60e7388209f7",
                "state_id" => 9,
                "name" => "Piranhas",
                "solar_incidence" => "4.8125"
            ],
            [
                "uuid" => "d85b308e-e2d3-445b-8f9d-a4f65550a17b",
                "state_id" => 13,
                "name" => "Pirapora",
                "solar_incidence" => "4.76875"
            ],
            [
                "uuid" => "0d52fe57-0a6a-47ba-ac90-6710e732e84a",
                "state_id" => 25,
                "name" => "Pirapozinho",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "37838b8f-385b-4fe2-a4e4-ed7a67a6f713",
                "state_id" => 25,
                "name" => "Pirassununga",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "3958c67d-7389-4670-af77-91e584173875",
                "state_id" => 13,
                "name" => "Piraúba",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "243c0c2b-3a45-4b3e-8a6f-362703869dce",
                "state_id" => 9,
                "name" => "Pires do Rio",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "30b5cc7f-7fe5-461f-8d57-dd5f494d3b27",
                "state_id" => 16,
                "name" => "Pitanga",
                "solar_incidence" => "4.19125"
            ],
            [
                "uuid" => "08fcf8ca-ac2d-4007-b86a-473b78c814f4",
                "state_id" => 25,
                "name" => "Pitangueiras",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "dadba48d-116c-4dc8-aa7d-b6badcd07abd",
                "state_id" => 8,
                "name" => "Piúma",
                "solar_incidence" => "3.955"
            ],
            [
                "uuid" => "c8d94566-9db9-42d4-ac22-3a22828b3890",
                "state_id" => 13,
                "name" => "Piumhi",
                "solar_incidence" => "4.445"
            ],
            [
                "uuid" => "3023a45e-9f63-4245-a4ce-ee30491752bf",
                "state_id" => 9,
                "name" => "Planaltina",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "0da03d91-3ec7-4c17-ac63-443a36d6b1df",
                "state_id" => 5,
                "name" => "Planalto",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "e211ce48-fea6-4477-919b-382ce0eed5d2",
                "state_id" => 26,
                "name" => "Poço Redondo",
                "solar_incidence" => "4.8125"
            ],
            [
                "uuid" => "61d5e1b7-364e-492e-bb1d-d8a65f2d96f5",
                "state_id" => 11,
                "name" => "Poconé",
                "solar_incidence" => "4.45375"
            ],
            [
                "uuid" => "5cfdabe9-ddcc-4a61-8316-bebcd65cb522",
                "state_id" => 13,
                "name" => "Poços de Caldas",
                "solar_incidence" => "4.45375"
            ],
            [
                "uuid" => "b3b87588-4ada-4b75-a82a-5c0e2c5c17bc",
                "state_id" => 5,
                "name" => "Pojuca",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "e20f401b-9e96-4ae4-85a6-e91ddcbf98dd",
                "state_id" => 15,
                "name" => "Pombal",
                "solar_incidence" => "5.20625"
            ],
            [
                "uuid" => "467dc6b8-de5f-46f9-939a-5162eb414fa2",
                "state_id" => 24,
                "name" => "Pomerode",
                "solar_incidence" => "3.5875"
            ],
            [
                "uuid" => "75159e3f-e6b9-4bbb-8c87-43ebbe446d36",
                "state_id" => 13,
                "name" => "Pompéu",
                "solar_incidence" => "4.4625"
            ],
            [
                "uuid" => "7861fb89-793d-4810-a21b-2a8cd0640438",
                "state_id" => 16,
                "name" => "Ponta Grossa",
                "solar_incidence" => "3.89375"
            ],
            [
                "uuid" => "92255a77-9efb-40a4-8beb-f6839d5b439e",
                "state_id" => 12,
                "name" => "Ponta Porã",
                "solar_incidence" => "4.3575"
            ],
            [
                "uuid" => "2ba8f91d-5489-4d2a-9668-795349c55a70",
                "state_id" => 13,
                "name" => "Ponte Nova",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "55f406cd-fd3c-4c8d-b53e-bb203917359c",
                "state_id" => 21,
                "name" => "Ponte Preta",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "8b16efc4-3ce7-4608-bda9-49785476a1e9",
                "state_id" => 24,
                "name" => "Ponte Serrada",
                "solar_incidence" => "4.08625"
            ],
            [
                "uuid" => "28ad0a7d-8764-414e-9719-8e89071c0d4a",
                "state_id" => 11,
                "name" => "Pontes e Lacerda",
                "solar_incidence" => "4.3575"
            ],
            [
                "uuid" => "2c98a862-57d2-4910-a9e7-250a34d55dbe",
                "state_id" => 8,
                "name" => "Ponto Belo",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "c67fc66f-284f-4c70-85b2-8ceb38d8a730",
                "state_id" => 9,
                "name" => "Porangatu",
                "solar_incidence" => "4.62875"
            ],
            [
                "uuid" => "2f530e31-9c3a-4eb7-b077-f0be80308e5d",
                "state_id" => 19,
                "name" => "Porciúncula",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "46d84613-2cd5-4797-8dc0-a0f3bfc01f0d",
                "state_id" => 16,
                "name" => "Porecatu",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "03ad8a2c-45a7-4a72-9e05-cde5491ccfaa",
                "state_id" => 18,
                "name" => "Porto",
                "solar_incidence" => "4.73375"
            ],
            [
                "uuid" => "f0b3d151-fd31-4e7f-9272-b7a6226f8e7e",
                "state_id" => 21,
                "name" => "Porto Alegre",
                "solar_incidence" => "3.8675"
            ],
            [
                "uuid" => "3f6807e6-1550-4223-88eb-dffab3d1da55",
                "state_id" => 11,
                "name" => "Porto Alegre do Norte",
                "solar_incidence" => "4.50625"
            ],
            [
                "uuid" => "3d811c00-4dee-40a0-a393-c56e6f08f35c",
                "state_id" => 27,
                "name" => "Porto Alegre do Tocantins",
                "solar_incidence" => "4.725"
            ],
            [
                "uuid" => "195c1ca8-c15b-48a8-b655-6bd575c96918",
                "state_id" => 11,
                "name" => "Porto dos Gaúchos",
                "solar_incidence" => "4.34"
            ],
            [
                "uuid" => "ebe06beb-ddf6-4f16-9bde-e882aaa18fd9",
                "state_id" => 25,
                "name" => "Porto Feliz",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "8ad1e92d-d218-474b-b3b6-fca831e1adbe",
                "state_id" => 25,
                "name" => "Porto Ferreira",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "ed336d2b-2fa3-41b0-af31-678f92380dbe",
                "state_id" => 13,
                "name" => "Porto Firme",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "041cf214-5fbf-4775-a715-a3bd538dbe54",
                "state_id" => 10,
                "name" => "Porto Franco",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "09a1f1d8-dfe1-4c58-bbbf-a5276ff998c8",
                "state_id" => 3,
                "name" => "Porto Grande",
                "solar_incidence" => "4.2875"
            ],
            [
                "uuid" => "1bbbc4a1-4197-4c05-a704-3f2063d2f349",
                "state_id" => 27,
                "name" => "Porto Nacional",
                "solar_incidence" => "4.5675"
            ],
            [
                "uuid" => "fbbf7e76-f1ad-4e8f-91f4-af0882939146",
                "state_id" => 5,
                "name" => "Porto Seguro",
                "solar_incidence" => "4.10375"
            ],
            [
                "uuid" => "1f6316c3-c438-47b5-90a8-bb049177e699",
                "state_id" => 24,
                "name" => "Porto União",
                "solar_incidence" => "4.025"
            ],
            [
                "uuid" => "c903fd58-cad4-4332-aa17-9cceaa6658ee",
                "state_id" => 22,
                "name" => "Porto Velho",
                "solar_incidence" => "4.15625"
            ],
            [
                "uuid" => "1ce7389c-a196-45a4-bebb-58392ea2904e",
                "state_id" => 21,
                "name" => "Porto Xavier",
                "solar_incidence" => "4.15625"
            ],
            [
                "uuid" => "4400b09a-246d-41e8-b95d-86145f39a42d",
                "state_id" => 25,
                "name" => "Potirendaba",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "219ad5c9-c3ef-4094-8e88-973b697cc96c",
                "state_id" => 13,
                "name" => "Pouso Alegre",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "e8193ccd-73e1-47ce-a6f9-509cdf6dd5a9",
                "state_id" => 24,
                "name" => "Pouso Redondo",
                "solar_incidence" => "3.605"
            ],
            [
                "uuid" => "8577a568-7c27-4647-b390-dae15faa05c0",
                "state_id" => 11,
                "name" => "Poxoréu",
                "solar_incidence" => "4.38375"
            ],
            [
                "uuid" => "3b085985-d200-4e0f-be0b-80d9d4d54829",
                "state_id" => 16,
                "name" => "Prado Ferreira",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "078f45b2-e2d0-44c3-962c-43e73d9d02ab",
                "state_id" => 25,
                "name" => "Praia Grande",
                "solar_incidence" => "3.815"
            ],
            [
                "uuid" => "19a3d6c7-0136-4a2b-88ee-8210c60ccb5c",
                "state_id" => 14,
                "name" => "Prainha",
                "solar_incidence" => "4.48"
            ],
            [
                "uuid" => "46d708d7-91fc-405f-b199-5e89ab88f8b6",
                "state_id" => 16,
                "name" => "Pranchita",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "7773d6eb-1b3d-42a3-ab10-b40fc9305596",
                "state_id" => 10,
                "name" => "Presidente Dutra",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "a3d06530-2887-4d69-8932-7c432a572278",
                "state_id" => 25,
                "name" => "Presidente Epitácio",
                "solar_incidence" => "4.43625"
            ],
            [
                "uuid" => "444810c7-bd5d-4c2c-867c-70097fc5dfea",
                "state_id" => 25,
                "name" => "Presidente Prudente",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "3a42d6c4-9b77-4476-be7f-115637831118",
                "state_id" => 10,
                "name" => "Presidente Vargas",
                "solar_incidence" => "4.4275"
            ],
            [
                "uuid" => "61890497-140b-4318-bbfc-e6bd45ce021c",
                "state_id" => 25,
                "name" => "Presidente Venceslau",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "b4d107b4-332c-4d2e-b96f-875e41244eb3",
                "state_id" => 11,
                "name" => "Primavera do Leste",
                "solar_incidence" => "4.38375"
            ],
            [
                "uuid" => "61cef3f9-0e65-422c-92e7-5f326ea724f7",
                "state_id" => 16,
                "name" => "Primeiro de Maio",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "0f8e285e-986f-49c0-80a1-c5ac9306f93d",
                "state_id" => 25,
                "name" => "Promissão",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "e06b3a37-9ad4-40da-9927-a0140dce11c6",
                "state_id" => 26,
                "name" => "Propriá",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "243f0269-6070-446f-84f3-03cedf197bde",
                "state_id" => 16,
                "name" => "Prudentópolis",
                "solar_incidence" => "3.89375"
            ],
            [
                "uuid" => "66c05fd1-caff-4ca1-bbef-a01d13f5bbb7",
                "state_id" => 21,
                "name" => "Quaraí",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "32ab6f35-513f-4598-a030-91e8705bf96e",
                "state_id" => 25,
                "name" => "Quatá",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "7c36f93a-e16d-44b2-af9d-2663978a12f1",
                "state_id" => 16,
                "name" => "Quatro Barras",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "b02af4f6-91fc-4daa-abf6-6e73844cb4c8",
                "state_id" => 21,
                "name" => "Quatro Irmãos",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "f7f47438-e51a-49ff-a580-ea8640879e65",
                "state_id" => 16,
                "name" => "Quedas do Iguaçu",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "39e68dba-e539-4875-ab93-c89e8bd6a9c5",
                "state_id" => 19,
                "name" => "Queimados",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "01947b90-69d8-4f4d-bd01-9a39338cc715",
                "state_id" => 16,
                "name" => "Querência do Norte",
                "solar_incidence" => "4.2875"
            ],
            [
                "uuid" => "d15556f2-b70e-43db-b23f-43537acae36e",
                "state_id" => 24,
                "name" => "Quilombo",
                "solar_incidence" => "4.08625"
            ],
            [
                "uuid" => "5197df14-a530-49a5-885c-b4044a89aa63",
                "state_id" => 16,
                "name" => "Quinta do Sol",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "58218685-ab88-41e8-9ac9-bb19ebc282d4",
                "state_id" => 9,
                "name" => "Quirinópolis",
                "solar_incidence" => "4.55875"
            ],
            [
                "uuid" => "2116572f-e001-4c3b-b373-0152321d07aa",
                "state_id" => 6,
                "name" => "Quixadá",
                "solar_incidence" => "4.7775"
            ],
            [
                "uuid" => "b8a00094-dc60-4ba7-9ad8-31d7afc20ebd",
                "state_id" => 6,
                "name" => "Quixelô",
                "solar_incidence" => "4.9175"
            ],
            [
                "uuid" => "530ea58b-04d8-4d98-ae3a-4c57ad520366",
                "state_id" => 6,
                "name" => "Quixeramobim",
                "solar_incidence" => "4.8475"
            ],
            [
                "uuid" => "29b087cc-d0ba-4fe4-bf42-7a4c3d1c03d4",
                "state_id" => 25,
                "name" => "Rancharia",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "51234804-c8ab-4fdd-aee0-45a53da39134",
                "state_id" => 16,
                "name" => "Realeza",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "df1c31c8-caf3-4111-bd9b-35bcf91eb8c4",
                "state_id" => 16,
                "name" => "Rebouças",
                "solar_incidence" => "3.89375"
            ],
            [
                "uuid" => "0f16750c-5126-425e-a7bc-e30fd0dd2a5e",
                "state_id" => 17,
                "name" => "Recife",
                "solar_incidence" => "4.7"
            ],
            [
                "uuid" => "2b7b7f44-01b8-4306-a263-4186ee1a5dbe",
                "state_id" => 14,
                "name" => "Redenção",
                "solar_incidence" => "4.71625"
            ],
            [
                "uuid" => "fa09c6cf-a22b-4776-a0d0-acb63134af57",
                "state_id" => 25,
                "name" => "Registro",
                "solar_incidence" => "3.5525"
            ],
            [
                "uuid" => "448bc03b-6de1-4e40-8a9f-f612f545b949",
                "state_id" => 16,
                "name" => "Renascença",
                "solar_incidence" => "4.08625"
            ],
            [
                "uuid" => "856cbead-4d44-4e7d-b020-8f161e39381b",
                "state_id" => 19,
                "name" => "Resende",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "c0decfc2-0160-4f7d-81f1-aebfb72dab00",
                "state_id" => 16,
                "name" => "Reserva",
                "solar_incidence" => "4.15625"
            ],
            [
                "uuid" => "4ef69c28-39d0-4cf2-a9ba-f80253f14024",
                "state_id" => 10,
                "name" => "Riachão",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "871f6858-7410-4e21-8735-9ebf64316a50",
                "state_id" => 9,
                "name" => "Rialma",
                "solar_incidence" => "4.61125"
            ],
            [
                "uuid" => "d067ab61-86f2-474b-8e27-3375080610f8",
                "state_id" => 9,
                "name" => "Rianápolis",
                "solar_incidence" => "4.61125"
            ],
            [
                "uuid" => "bb2d58d6-5ea5-4a4c-acf3-a021dc335245",
                "state_id" => 12,
                "name" => "Ribas do Rio Pardo",
                "solar_incidence" => "4.40125"
            ],
            [
                "uuid" => "5a5277da-9cce-4ba7-8b35-3b618b91d4cc",
                "state_id" => 5,
                "name" => "Ribeira do Pombal",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "301d958d-b218-4aeb-8c3f-edc0a1372565",
                "state_id" => 16,
                "name" => "Ribeirão Claro",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "f1304844-e033-4c58-9618-daed39d480cb",
                "state_id" => 13,
                "name" => "Ribeirão das Neves",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "31c5891b-bf52-4a4a-b658-211e7a53c6fa",
                "state_id" => 16,
                "name" => "Ribeirão do Pinhal",
                "solar_incidence" => "4.27875"
            ],
            [
                "uuid" => "9fc9f959-f51b-480d-bb3f-1b29308da349",
                "state_id" => 25,
                "name" => "Ribeirão Pires",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "eab9565d-bb7e-42e8-8875-b6308676465b",
                "state_id" => 25,
                "name" => "Ribeirão Preto",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "906104af-c0a0-475e-a80c-5f60acd93fe4",
                "state_id" => 13,
                "name" => "Rio Acima",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "c992c530-24fb-4ac9-a386-806995cf05f8",
                "state_id" => 8,
                "name" => "Rio Bananal",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "fb85600f-b7b5-477f-97c1-8a2b02b98325",
                "state_id" => 19,
                "name" => "Rio Bonito",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "115d9ecd-1fc7-4b59-a831-4f450661f3e2",
                "state_id" => 1,
                "name" => "Rio Branco",
                "solar_incidence" => "4.15625"
            ],
            [
                "uuid" => "7bb7ab3f-1aae-44a0-bd35-8d858cbbe2c6",
                "state_id" => 12,
                "name" => "Rio Brilhante",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "fe24845d-3c21-4cfb-9e64-5dbafff7223f",
                "state_id" => 13,
                "name" => "Rio Casca",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "ec650ee4-e919-4010-9cab-0232b697b4f1",
                "state_id" => 25,
                "name" => "Rio Claro",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "19075e1b-0459-439b-ad37-c0a05a483275",
                "state_id" => 19,
                "name" => "Rio das Flores",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "d256fe09-7861-41c4-84a4-017f00e6da53",
                "state_id" => 19,
                "name" => "Rio das Ostras",
                "solar_incidence" => "4.0425"
            ],
            [
                "uuid" => "0c73a607-8871-409f-89a0-7374e72e8f66",
                "state_id" => 25,
                "name" => "Rio das Pedras",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "857706bc-cf36-4f62-800d-860559305372",
                "state_id" => 19,
                "name" => "Rio de Janeiro",
                "solar_incidence" => "4.7"
            ],
            [
                "uuid" => "0f46b5f5-415c-478d-afd2-e52286407ed9",
                "state_id" => 24,
                "name" => "Rio do Sul",
                "solar_incidence" => "3.605"
            ],
            [
                "uuid" => "8b246110-a96f-4692-8a0a-e38d9de15f80",
                "state_id" => 24,
                "name" => "Rio Fortuna",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "0e4ce360-2925-4630-9449-862ca22a4ffa",
                "state_id" => 21,
                "name" => "Rio Grande",
                "solar_incidence" => "3.815"
            ],
            [
                "uuid" => "8e7dc46f-c34d-4616-895d-109808cd09b1",
                "state_id" => 14,
                "name" => "Rio Maria",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "c06f287e-34ac-463e-b0f9-69b59902faa2",
                "state_id" => 24,
                "name" => "Rio Negrinho",
                "solar_incidence" => "3.5875"
            ],
            [
                "uuid" => "064a37de-03be-45eb-9926-094ffcbd9221",
                "state_id" => 16,
                "name" => "Rio Negro",
                "solar_incidence" => "4.48875"
            ],
            [
                "uuid" => "efd151e6-574c-4c69-a164-85c42a821399",
                "state_id" => 13,
                "name" => "Rio Paranaíba",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "6e8a72d8-020b-46f9-b757-5919ec483687",
                "state_id" => 5,
                "name" => "Rio Real",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "8327b8c0-38ee-4bd7-b1c3-763b818de1a6",
                "state_id" => 9,
                "name" => "Rio Verde",
                "solar_incidence" => "4.5325"
            ],
            [
                "uuid" => "bf29ea6f-474b-4407-a864-611eadf6392d",
                "state_id" => 12,
                "name" => "Rio Verde de Mato Grosso",
                "solar_incidence" => "4.55"
            ],
            [
                "uuid" => "4fc688a7-74c7-4a28-bf1f-b592bd010011",
                "state_id" => 13,
                "name" => "Rochedo de Minas",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "35503d12-c895-4d6d-bebb-6c7db0b45629",
                "state_id" => 16,
                "name" => "Rolândia",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "5f66c2f9-3944-4115-bc9e-37354fb130f1",
                "state_id" => 21,
                "name" => "Rolante",
                "solar_incidence" => "3.80625"
            ],
            [
                "uuid" => "ad9633bc-7e9c-4269-88ad-281db4f388ac",
                "state_id" => 22,
                "name" => "Rolim de Moura",
                "solar_incidence" => "4.20875"
            ],
            [
                "uuid" => "3a9c06e3-759c-4214-aae5-e1f3d100dbb9",
                "state_id" => 21,
                "name" => "Rondinha",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "23505004-de27-415c-bdaa-081b400f24e7",
                "state_id" => 16,
                "name" => "Rondon",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "918e383f-1046-4ece-8512-3d9fd657afc2",
                "state_id" => 14,
                "name" => "Rondon do Pará",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "5a38f9b0-3ad3-4559-b420-34f0e6b34bf7",
                "state_id" => 11,
                "name" => "Rondonópolis",
                "solar_incidence" => "4.43625"
            ],
            [
                "uuid" => "57590efc-b1db-40e1-b526-620042cac41b",
                "state_id" => 21,
                "name" => "Roque Gonzales",
                "solar_incidence" => "4.13"
            ],
            [
                "uuid" => "7b9aaf95-ce8a-40bc-84ea-6a192d78b575",
                "state_id" => 25,
                "name" => "Rosana",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "41d529a0-e62c-46a3-ae27-80b85ffebcf8",
                "state_id" => 13,
                "name" => "Rubelita",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "8ff389c3-5acd-4259-aea5-caca8ed8e4d9",
                "state_id" => 6,
                "name" => "Russas",
                "solar_incidence" => "5.08375"
            ],
            [
                "uuid" => "2d854fdd-c09f-41f0-a64e-1b40b36848a1",
                "state_id" => 5,
                "name" => "Ruy Barbosa",
                "solar_incidence" => "4.8825"
            ],
            [
                "uuid" => "13006586-1343-47fe-825a-2b93eafdcc3e",
                "state_id" => 16,
                "name" => "Sabáudia",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "0dbcddfa-3a74-44f1-a563-f1b8f70399d9",
                "state_id" => 13,
                "name" => "Sacramento",
                "solar_incidence" => "4.5675"
            ],
            [
                "uuid" => "8ea17861-bef2-43ae-9f2f-5ed4a0917f0b",
                "state_id" => 21,
                "name" => "Saldanha Marinho",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "034443db-6d7e-4f32-be8f-f504df9fa963",
                "state_id" => 25,
                "name" => "Sales Oliveira",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "cd647c2b-208c-47ae-82e3-54cd950a41e1",
                "state_id" => 15,
                "name" => "Salgadinho",
                "solar_incidence" => "5.06625"
            ],
            [
                "uuid" => "4d51d07b-276e-432f-b301-7e354c8454cb",
                "state_id" => 13,
                "name" => "Salinas",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "add2e783-9a5b-421f-abde-7df7069f44e9",
                "state_id" => 25,
                "name" => "Salto",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "594869ba-0ec2-4cbb-b8c2-ef42d5b51895",
                "state_id" => 21,
                "name" => "Salto do Jacuí",
                "solar_incidence" => "3.98125"
            ],
            [
                "uuid" => "a66300b7-775a-4938-81ff-012edb8e9cf5",
                "state_id" => 5,
                "name" => "Salvador",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "e78ef130-a6bf-401c-b906-a5facc0fa075",
                "state_id" => 21,
                "name" => "Sananduva",
                "solar_incidence" => "4.03375"
            ],
            [
                "uuid" => "d08b7f8f-2b71-4e62-8894-b71a101a7760",
                "state_id" => 9,
                "name" => "Sanclerlândia",
                "solar_incidence" => "4.61125"
            ],
            [
                "uuid" => "808ccaa9-876f-40dd-974c-01a1e67ce1fe",
                "state_id" => 27,
                "name" => "Sandolândia",
                "solar_incidence" => "4.64625"
            ],
            [
                "uuid" => "0c57e3e6-409a-4752-8dd8-ded012345af8",
                "state_id" => 13,
                "name" => "Santa Bárbara",
                "solar_incidence" => "4.43625"
            ],
            [
                "uuid" => "2c7f4b42-f2c7-43e9-8db0-f3b80083b0a6",
                "state_id" => 25,
                "name" => "Santa Bárbara do Oeste",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "5982026c-b4c4-4628-a4de-2e838bae883a",
                "state_id" => 25,
                "name" => "Santa Cruz da Esperança",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "474f13b7-d3e6-4b7c-b6ac-50c98b885554",
                "state_id" => 16,
                "name" => "Santa Cruz de Monte Castelo",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "652f8ce2-9a73-40e6-b1a2-64fdf004a6fe",
                "state_id" => 17,
                "name" => "Santa Cruz do Capibaribe",
                "solar_incidence" => "5.06625"
            ],
            [
                "uuid" => "b574c214-2783-4528-bf3b-d62c7f5c580d",
                "state_id" => 25,
                "name" => "Santa Cruz do Rio Pardo",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "26262735-7802-4822-b0d8-8213661e4bcb",
                "state_id" => 21,
                "name" => "Santa Cruz do Sul",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "91aa08a1-f18e-428f-9435-1496f9615831",
                "state_id" => 16,
                "name" => "Santa Fé",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "341eebd9-6c89-4b79-93dc-5680df7b3349",
                "state_id" => 25,
                "name" => "Santa Fé do Sul",
                "solar_incidence" => "4.5325"
            ],
            [
                "uuid" => "84558478-4d28-4f60-8faf-a8087b457af3",
                "state_id" => 16,
                "name" => "Santa Helena",
                "solar_incidence" => "5.0575"
            ],
            [
                "uuid" => "02181acb-3e1d-489e-aaa5-6da03d2cdea9",
                "state_id" => 9,
                "name" => "Santa Helena de Goiás",
                "solar_incidence" => "4.5325"
            ],
            [
                "uuid" => "c64fb85d-d96b-4f1b-9b22-53905910f7db",
                "state_id" => 10,
                "name" => "Santa Inês",
                "solar_incidence" => "4.9875"
            ],
            [
                "uuid" => "4b1e9610-27c8-47e9-9d5e-a65a8cc1dfd9",
                "state_id" => 16,
                "name" => "Santa Izabel do Oeste",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "809b6908-8dcd-4bf7-83ed-dea7804f7946",
                "state_id" => 14,
                "name" => "Santa Izabel do Pará",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "ffdc47d9-2f2f-4f92-896c-19da250dfd4c",
                "state_id" => 13,
                "name" => "Santa Juliana",
                "solar_incidence" => "4.5675"
            ],
            [
                "uuid" => "100bff38-7b24-4a9e-b05c-9584cfa49a94",
                "state_id" => 16,
                "name" => "Santa Lúcia",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "d1ccb108-988a-417d-b2bf-ec8382cfccf2",
                "state_id" => 13,
                "name" => "Santa Luzia",
                "solar_incidence" => "5.1275"
            ],
            [
                "uuid" => "fb3b5bff-c7cc-4ec1-8474-b37d2d368c47",
                "state_id" => 14,
                "name" => "Santa Luzia do Pará",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "3d94224c-639b-4a7e-9008-b0c53e89b157",
                "state_id" => 10,
                "name" => "Santa Luzia do Paruá",
                "solar_incidence" => "4.2525"
            ],
            [
                "uuid" => "37586197-ad69-4d41-b988-6ad9149f0a31",
                "state_id" => 21,
                "name" => "Santa Maria",
                "solar_incidence" => "3.98125"
            ],
            [
                "uuid" => "9c0274ef-1ce2-4a3c-ba32-4209ffe24519",
                "state_id" => 5,
                "name" => "Santa Maria da Vitória",
                "solar_incidence" => "4.8825"
            ],
            [
                "uuid" => "f4576dcc-82d0-4761-b363-61886d2588a2",
                "state_id" => 17,
                "name" => "Santa Maria do Cambucá",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "37514c08-3e67-4e10-ae5b-5900870f235c",
                "state_id" => 19,
                "name" => "Santa Maria Madalena",
                "solar_incidence" => "3.9725"
            ],
            [
                "uuid" => "b44ba37a-26e8-4e8b-a35c-04f4199408cd",
                "state_id" => 15,
                "name" => "Santa Rita",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "7e7bc674-7d35-4c0e-9900-15f1631c4822",
                "state_id" => 13,
                "name" => "Santa Rita de Ibitipoca",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "6dfa914d-341c-4397-85fb-7d5fcadf9766",
                "state_id" => 12,
                "name" => "Santa Rita do Pardo",
                "solar_incidence" => "4.43625"
            ],
            [
                "uuid" => "bb2ad489-10fc-4f78-b47d-e1a720cc37cf",
                "state_id" => 13,
                "name" => "Santa Rita do Sapucaí",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "3c7d59fe-4156-40c7-8fc8-eac107430f99",
                "state_id" => 21,
                "name" => "Santa Rosa",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "4998117d-4252-4da8-883d-75a9bf469b77",
                "state_id" => 24,
                "name" => "Santa Rosa do Sul",
                "solar_incidence" => "3.7275"
            ],
            [
                "uuid" => "a72cb8bd-3bf9-47d6-8461-401ad5c669af",
                "state_id" => 13,
                "name" => "Santa Vitória",
                "solar_incidence" => "4.55875"
            ],
            [
                "uuid" => "71351c8e-5bde-4bd7-956d-c9817b5f3139",
                "state_id" => 5,
                "name" => "Santana",
                "solar_incidence" => "4.34"
            ],
            [
                "uuid" => "df222d5e-1fa2-4c0a-ab18-90bb6709962c",
                "state_id" => 25,
                "name" => "Santana de Parnaíba",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "5f016e83-3e80-4e89-ab71-d646c0679f82",
                "state_id" => 13,
                "name" => "Santana de Pirapama",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "74771910-da48-45ea-b59d-74ca2e63445f",
                "state_id" => 14,
                "name" => "Santana do Araguaia",
                "solar_incidence" => "4.48875"
            ],
            [
                "uuid" => "6320d755-c72a-4b40-8cde-a2da97fbea4d",
                "state_id" => 2,
                "name" => "Santana do Ipanema",
                "solar_incidence" => "4.8125"
            ],
            [
                "uuid" => "5c43d5f2-09b8-414e-855b-9e5a3b2c1d0c",
                "state_id" => 21,
                "name" => "Santana do Livramento",
                "solar_incidence" => "4.1125"
            ],
            [
                "uuid" => "a75842cd-597d-4619-a608-6e6889292be5",
                "state_id" => 14,
                "name" => "Santarém",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "e82c9bd5-7f82-4269-9913-61a8e44b5116",
                "state_id" => 21,
                "name" => "Santiago",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "7a2c0966-56e9-4ee8-a303-73147faa1600",
                "state_id" => 24,
                "name" => "Santo Amaro da Imperatriz",
                "solar_incidence" => "3.535"
            ],
            [
                "uuid" => "3c3e00f6-b7c9-4ac0-a092-2c4b81e98c9b",
                "state_id" => 25,
                "name" => "Santo Anastácio",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "963ba93f-53b2-42da-8b9e-1ae3dd66ecab",
                "state_id" => 25,
                "name" => "Santo André",
                "solar_incidence" => "5.06625"
            ],
            [
                "uuid" => "7989835d-c7c1-4e51-8bd0-1ae2652dcf9a",
                "state_id" => 21,
                "name" => "Santo Ângelo",
                "solar_incidence" => "4.10375"
            ],
            [
                "uuid" => "c99bace9-b6c0-4254-9dd3-7528910abed0",
                "state_id" => 25,
                "name" => "Santo Antônio da Alegria",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "7d327bf1-c351-45bc-8516-b5917b27fe92",
                "state_id" => 21,
                "name" => "Santo Antônio da Patrulha",
                "solar_incidence" => "3.80625"
            ],
            [
                "uuid" => "976ae903-e324-4625-8909-32317ee4ed0f",
                "state_id" => 16,
                "name" => "Santo Antônio da Platina",
                "solar_incidence" => "4.27875"
            ],
            [
                "uuid" => "77c9c398-bbaf-4003-8ae2-869a1006f226",
                "state_id" => 21,
                "name" => "Santo Antônio das Missões",
                "solar_incidence" => "4.13"
            ],
            [
                "uuid" => "c69df9a6-2f8c-4d22-875d-cbb9389540f5",
                "state_id" => 9,
                "name" => "Santo Antônio de Goiás",
                "solar_incidence" => "4.62"
            ],
            [
                "uuid" => "bf61ad60-41a2-48b6-8a70-324155f3b978",
                "state_id" => 5,
                "name" => "Santo Antônio de Jesus",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "0ebc8233-6a28-45cc-959b-4f2c35d95d10",
                "state_id" => 19,
                "name" => "Santo Antônio de Pádua",
                "solar_incidence" => "3.9725"
            ],
            [
                "uuid" => "8f815d5d-daff-44d6-8d9e-829dcc24d71b",
                "state_id" => 9,
                "name" => "Santo Antônio do Descoberto",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "595f82e8-baeb-4815-8352-cf689c5b6a01",
                "state_id" => 11,
                "name" => "Santo Antônio do Leverger",
                "solar_incidence" => "4.4275"
            ],
            [
                "uuid" => "b39b4d7c-ca43-4a3f-ac1b-67b4f56816ab",
                "state_id" => 21,
                "name" => "Santo Cristo",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "e4be4788-dd89-4d09-8a77-85c896b39bcf",
                "state_id" => 5,
                "name" => "Santo Estêvão",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "26a7ad1f-a3fa-4597-bcbd-c9fa0292dab8",
                "state_id" => 16,
                "name" => "Santo Inácio",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "4d818738-7547-4895-82d5-c0176685e96c",
                "state_id" => 25,
                "name" => "Santos",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "627c91b4-eb20-4bed-9399-86d499c04102",
                "state_id" => 15,
                "name" => "São Bento",
                "solar_incidence" => "5.20625"
            ],
            [
                "uuid" => "7406fd41-84d2-42a4-8bcd-55055915de9b",
                "state_id" => 25,
                "name" => "São Bernardo do Campo",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "247130dc-7d09-406e-8ce2-011582f6849b",
                "state_id" => 24,
                "name" => "São Bonifácio",
                "solar_incidence" => "3.535"
            ],
            [
                "uuid" => "97cfb15c-99f0-4cb2-bbd2-58b7422b8fe6",
                "state_id" => 21,
                "name" => "São Borja",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "603e0ecf-476d-4467-a041-58c8dfdf6318",
                "state_id" => 17,
                "name" => "São Caetano",
                "solar_incidence" => "4.9175"
            ],
            [
                "uuid" => "231d046f-bd97-46ec-abb2-d8e5e743bed4",
                "state_id" => 25,
                "name" => "São Caetano do Sul",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "68d8b051-3b2d-4f65-bda6-af7ea7ca0665",
                "state_id" => 25,
                "name" => "São Carlos",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "75b713ed-6df6-4127-adbf-3d5fe924c39e",
                "state_id" => 16,
                "name" => "São Carlos do Ivaí",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "e5ed635a-86de-4554-98aa-60bf02c90a30",
                "state_id" => 26,
                "name" => "São Cristóvão",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "f515c5d5-8af1-4212-b67c-e9c7f6df984a",
                "state_id" => 5,
                "name" => "São Desidério",
                "solar_incidence" => "4.935"
            ],
            [
                "uuid" => "082b265c-9209-48b8-b5d3-4166d387c853",
                "state_id" => 24,
                "name" => "São Domingos",
                "solar_incidence" => "4.59375"
            ],
            [
                "uuid" => "5f3ab363-564e-4aed-a31d-44180d61381b",
                "state_id" => 13,
                "name" => "São Domingos das Dores",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "2bd12319-5f95-4d14-a7ab-4f6469c79836",
                "state_id" => 14,
                "name" => "São Domingos do Araguaia",
                "solar_incidence" => "4.34"
            ],
            [
                "uuid" => "2bc7edf4-9ae7-4e8b-84ca-c75f43ecc40a",
                "state_id" => 14,
                "name" => "São Domingos do Capim",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "42a8f537-7d89-4a1d-8f87-8918b81fab39",
                "state_id" => 10,
                "name" => "São Domingos do Maranhão",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "f6fc7e8e-515a-4da4-ad3f-fe785492f6cf",
                "state_id" => 5,
                "name" => "São Felipe",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "d519ce57-9968-41c3-8a67-ef3080dfd7bf",
                "state_id" => 5,
                "name" => "São Félix do Coribe",
                "solar_incidence" => "4.8825"
            ],
            [
                "uuid" => "767bd7c6-48aa-493e-a967-dd26c306dea5",
                "state_id" => 19,
                "name" => "São Fidélis",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "619a08c4-9df3-4b21-bb47-e93aafe275c3",
                "state_id" => 21,
                "name" => "São Francisco de Assis",
                "solar_incidence" => "4.15625"
            ],
            [
                "uuid" => "75760df7-b0db-4099-b81d-806ac5f40605",
                "state_id" => 19,
                "name" => "São Francisco de Itabapoana",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "fd98be78-379a-497e-868e-39907afd3e3f",
                "state_id" => 21,
                "name" => "São Gabriel",
                "solar_incidence" => "4.05125"
            ],
            [
                "uuid" => "e1bb60be-2b24-4c95-a0e3-f352ac1e6ad6",
                "state_id" => 12,
                "name" => "São Gabriel do Oeste",
                "solar_incidence" => "4.48875"
            ],
            [
                "uuid" => "3233548e-c9d6-4577-bb33-bdd5bd83b89e",
                "state_id" => 19,
                "name" => "São Gonçalo",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "8e8cc7f7-2dd8-4496-9d2f-79c6ef4db4c9",
                "state_id" => 20,
                "name" => "São Gonçalo do Amarante",
                "solar_incidence" => "4.8825"
            ],
            [
                "uuid" => "82008436-8fe1-423f-a501-1f3d8ab75557",
                "state_id" => 13,
                "name" => "São Gotardo",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "d3781c01-611e-4fe4-be60-6f66f8efb442",
                "state_id" => 9,
                "name" => "São João da Aliança",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "5b1e4913-2235-43eb-91a9-ad31e6f93d1e",
                "state_id" => 19,
                "name" => "São João da Barra",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "4b126104-82a3-41f0-ab66-25ff8f442359",
                "state_id" => 25,
                "name" => "São João da Boa Vista",
                "solar_incidence" => "4.45375"
            ],
            [
                "uuid" => "c294729a-2b31-4417-b25c-44c7894cbfcf",
                "state_id" => 19,
                "name" => "São João de Meriti",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "16810173-1569-46fc-8b88-33c3178e3125",
                "state_id" => 13,
                "name" => "São João del Rei",
                "solar_incidence" => "4.34875"
            ],
            [
                "uuid" => "112df267-e32b-4035-aea3-dba49d2fb506",
                "state_id" => 14,
                "name" => "São João do Araguaia",
                "solar_incidence" => "4.34"
            ],
            [
                "uuid" => "926b2902-1673-4ea7-a876-c7f910ee9abb",
                "state_id" => 16,
                "name" => "São João do Ivaí",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "7fe5a069-c27a-49a2-bc4e-7b8632d6df8f",
                "state_id" => 6,
                "name" => "São João do Jaguaribe",
                "solar_incidence" => "4.935"
            ],
            [
                "uuid" => "95efeefc-b647-4e41-b76d-650797e0de5e",
                "state_id" => 13,
                "name" => "São João do Manteninha",
                "solar_incidence" => "4.10375"
            ],
            [
                "uuid" => "55aaf1f0-e7b3-4bd4-b760-a70296794a42",
                "state_id" => 24,
                "name" => "São João do Oeste",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "fa646287-47ac-403c-b434-bcb84a2117b2",
                "state_id" => 13,
                "name" => "São João do Paraíso",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "6a03623e-6a59-4c01-a58b-e50b71fd0027",
                "state_id" => 18,
                "name" => "São João do Piauí",
                "solar_incidence" => "4.8825"
            ],
            [
                "uuid" => "9f0a9a15-2bac-4bf0-add0-7c6cbbfdc833",
                "state_id" => 15,
                "name" => "São João do Rio do Peixe",
                "solar_incidence" => "5.0575"
            ],
            [
                "uuid" => "a77b1036-c588-4614-b0bd-53225c31efb6",
                "state_id" => 10,
                "name" => "São João dos Patos",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "eb379d93-996f-4ff7-b178-6d50d6f8299a",
                "state_id" => 13,
                "name" => "São João Evangelista",
                "solar_incidence" => "4.1475"
            ],
            [
                "uuid" => "8f5812f7-720f-4880-bdf4-9c490243f1be",
                "state_id" => 13,
                "name" => "São João Nepomuceno",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "e815c265-eb9f-45b8-92c9-4e5a1d7abf08",
                "state_id" => 13,
                "name" => "São Joaquim de Bicas",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "880e45fa-5193-4946-911b-177f0183dd43",
                "state_id" => 16,
                "name" => "São Jorge do Ivaí",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "566166f8-7948-4155-8148-31045d712ce0",
                "state_id" => 24,
                "name" => "São José",
                "solar_incidence" => "3.535"
            ],
            [
                "uuid" => "cccdc3d0-a9e1-42b7-a124-387c2311ee91",
                "state_id" => 13,
                "name" => "São José da Barra",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "0c60a0b5-ba1f-4be0-b332-3ef1ea30da14",
                "state_id" => 15,
                "name" => "São José da Lagoa Tapada",
                "solar_incidence" => "5.0575"
            ],
            [
                "uuid" => "fe62e961-03c7-4fa2-9805-db9000fc97cb",
                "state_id" => 13,
                "name" => "São José da Lapa",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "661cfafb-8d85-45e7-b5cb-102654ccfe35",
                "state_id" => 10,
                "name" => "São José de Ribamar",
                "solar_incidence" => "4.2525"
            ],
            [
                "uuid" => "2b82db1c-2680-413e-97ab-cf8a282b795f",
                "state_id" => 19,
                "name" => "São José de Ubá",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "81edcb44-d3f3-4e44-8ae4-3612671ade76",
                "state_id" => 25,
                "name" => "São José do Rio Preto",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "be16c1ec-864a-4339-838c-67468411ba44",
                "state_id" => 25,
                "name" => "São José dos Campos",
                "solar_incidence" => "3.85875"
            ],
            [
                "uuid" => "cb86757a-ce88-46e0-a8fc-5915ab9d2b0b",
                "state_id" => 16,
                "name" => "São José dos Pinhais",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "c3bbbbf2-8119-4a2a-8cda-22bb6743e28f",
                "state_id" => 21,
                "name" => "São Leopoldo",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "973693d4-d866-40be-92ce-e5641c5ed581",
                "state_id" => 13,
                "name" => "São Lourenço",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "94dfb12e-6026-4b88-acad-13b4a6f91663",
                "state_id" => 17,
                "name" => "São Lourenço da Mata",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "bd25d3ed-1ee4-4c19-baa8-fbe12bd05442",
                "state_id" => 24,
                "name" => "São Lourenço do Oeste",
                "solar_incidence" => "4.08625"
            ],
            [
                "uuid" => "7c6469cc-5c65-41b8-b653-1ef111869201",
                "state_id" => 21,
                "name" => "São Lourenço do Sul",
                "solar_incidence" => "3.7975"
            ],
            [
                "uuid" => "1ab968b9-61a9-49c3-a597-19d329fd6366",
                "state_id" => 10,
                "name" => "São Luís",
                "solar_incidence" => "4.2525"
            ],
            [
                "uuid" => "f7ca912b-758c-4359-bab2-46f322439d87",
                "state_id" => 9,
                "name" => "São Luís de Montes Belos",
                "solar_incidence" => "4.61125"
            ],
            [
                "uuid" => "047e7dff-fd6f-4e61-af54-28b689cdcbd1",
                "state_id" => 10,
                "name" => "São Luís Gonzaga do Maranhão",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "e42952ce-d5ba-47f7-b280-60188d51ddb8",
                "state_id" => 21,
                "name" => "São Luiz Gonzaga",
                "solar_incidence" => "4.10375"
            ],
            [
                "uuid" => "cb2e2396-5cd8-492e-92b2-1c4b5e89ad1c",
                "state_id" => 21,
                "name" => "São Marcos",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "b802b4c2-df2a-4a42-b2b7-0645e477b534",
                "state_id" => 8,
                "name" => "São Mateus",
                "solar_incidence" => "4.05125"
            ],
            [
                "uuid" => "0b62a6eb-445d-42c3-acfb-5dec862cea0d",
                "state_id" => 16,
                "name" => "São Mateus do Sul",
                "solar_incidence" => "3.89375"
            ],
            [
                "uuid" => "710bfc87-2175-4dcd-b2eb-7969752eedbf",
                "state_id" => 25,
                "name" => "São Miguel Arcanjo",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "73c9de39-6d15-4101-aef8-5dc72485405f",
                "state_id" => 21,
                "name" => "São Miguel das Missões",
                "solar_incidence" => "4.10375"
            ],
            [
                "uuid" => "23815eeb-8811-4977-817c-f31bfc73ecf2",
                "state_id" => 9,
                "name" => "São Miguel do Araguaia",
                "solar_incidence" => "4.62"
            ],
            [
                "uuid" => "f41832e8-2b43-4797-be0c-cde1113d67b7",
                "state_id" => 14,
                "name" => "São Miguel do Guamá",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "3606138f-5b0f-41f7-9b33-5179b66eb3ee",
                "state_id" => 22,
                "name" => "São Miguel do Guaporé",
                "solar_incidence" => "4.1475"
            ],
            [
                "uuid" => "591a3f95-8c5c-46d8-be9a-95f0d9caf39a",
                "state_id" => 16,
                "name" => "São Miguel do Iguaçu",
                "solar_incidence" => "4.1825"
            ],
            [
                "uuid" => "0d9a4bb5-8f71-4009-a402-31f4d41765e1",
                "state_id" => 24,
                "name" => "São Miguel do Oeste",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "239da8f8-1967-4998-a8d2-46663b3e6aa7",
                "state_id" => 2,
                "name" => "São Miguel dos Campos",
                "solar_incidence" => "4.73375"
            ],
            [
                "uuid" => "bcf2e28e-cebe-4d36-9504-9d5f112f8aa1",
                "state_id" => 25,
                "name" => "São Paulo",
                "solar_incidence" => "4.64"
            ],
            [
                "uuid" => "7afdf507-2c89-4664-a05b-9db25128987e",
                "state_id" => 21,
                "name" => "São Paulo das Missões",
                "solar_incidence" => "4.10375"
            ],
            [
                "uuid" => "18db679c-393d-4e7f-8f9a-d6abf738c49a",
                "state_id" => 25,
                "name" => "São Pedro",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "8350b24a-5dc1-40ec-a951-3577acbaa796",
                "state_id" => 19,
                "name" => "São Pedro da Aldeia",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "c35d077a-1be0-4193-b1f8-3172928ddd99",
                "state_id" => 16,
                "name" => "São Pedro do Ivaí",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "549448f6-400a-4096-a33d-1458d2970121",
                "state_id" => 21,
                "name" => "São Pedro do Sul",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "d33b586b-d5de-4cef-9c72-fa74db3a8645",
                "state_id" => 10,
                "name" => "São Raimundo das Mangabeiras",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "002d27db-96d4-4871-8aa1-f97319a18a80",
                "state_id" => 18,
                "name" => "São Raimundo Nonato",
                "solar_incidence" => "4.99625"
            ],
            [
                "uuid" => "a304cc55-bada-4c05-9fe6-cad12b530358",
                "state_id" => 25,
                "name" => "São Roque",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "66d80dee-790d-41ec-ad58-3ee527e3b40a",
                "state_id" => 25,
                "name" => "São Sebastião",
                "solar_incidence" => "4.73375"
            ],
            [
                "uuid" => "58c49210-7768-4947-9fcf-b2db306ed0be",
                "state_id" => 21,
                "name" => "São Sebastião do Caí",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "52140339-b9cb-4bbb-ba98-0b9f7104e0fc",
                "state_id" => 13,
                "name" => "São Sebastião do Paraíso",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "107f1262-97dc-47f9-adf8-19ad888ff9f1",
                "state_id" => 5,
                "name" => "São Sebastião do Passé",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "de3bbd63-b889-4325-831d-57b80c6bf897",
                "state_id" => 9,
                "name" => "São Simão",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "9443b097-8b66-4983-9b61-3d5173b2e382",
                "state_id" => 16,
                "name" => "São Tomé",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "88087d07-b9fb-48f8-8497-659a52faea49",
                "state_id" => 21,
                "name" => "São Valentim",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "7dab89d2-7594-47a4-bb3c-f694a153535b",
                "state_id" => 25,
                "name" => "São Vicente",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "ccc9f3d4-d326-4e41-a201-9646c73eb9db",
                "state_id" => 13,
                "name" => "São Vicente de Minas",
                "solar_incidence" => "4.34875"
            ],
            [
                "uuid" => "46bcfed1-191c-4f67-ae26-5b528f855b79",
                "state_id" => 15,
                "name" => "Sapé",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "ed0e013e-2fd5-4e2f-95b1-6b341bdf68f2",
                "state_id" => 11,
                "name" => "Sapezal",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "b1d612ae-bc1f-4ae1-a77d-94f93ab6a586",
                "state_id" => 21,
                "name" => "Sapiranga",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "7608b94b-6ca1-42e0-b8b2-550552818141",
                "state_id" => 21,
                "name" => "Sapucaia do Sul",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "01d7ff19-2589-4596-9588-49388b438861",
                "state_id" => 19,
                "name" => "Saquarema",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "b3fbc055-f861-42d6-b222-fbea40e6e3f9",
                "state_id" => 16,
                "name" => "Sarandi",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "1c5274d1-ad59-46df-aa72-48dfd7e5c965",
                "state_id" => 16,
                "name" => "Saudade do Iguaçu",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "bceaa4b6-4afd-48b4-b7b7-cc344acde1ca",
                "state_id" => 5,
                "name" => "Seabra",
                "solar_incidence" => "4.8475"
            ],
            [
                "uuid" => "a95c6d54-f14b-4fc5-97e7-e5b56ef68244",
                "state_id" => 24,
                "name" => "Seara",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "db5850cc-84f4-4e21-a843-9e342eda1048",
                "state_id" => 5,
                "name" => "Sebastião Laranjeiras",
                "solar_incidence" => "5.005"
            ],
            [
                "uuid" => "90e85a0f-54d8-4d57-beff-21b13a1382be",
                "state_id" => 21,
                "name" => "Seberi",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "738581b3-dbbc-4b44-bdc1-421c8e564d2c",
                "state_id" => 1,
                "name" => "Sena Madureira",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "0bb143cb-2eb5-41ae-8a70-a1c03f6706a4",
                "state_id" => 9,
                "name" => "Senador Canedo",
                "solar_incidence" => "4.62"
            ],
            [
                "uuid" => "75527777-e259-4e0f-9889-b4ccadeadd73",
                "state_id" => 13,
                "name" => "Senador Firmino",
                "solar_incidence" => "4.31375"
            ],
            [
                "uuid" => "3435efb7-3cfb-4489-9975-b9e99c88434c",
                "state_id" => 6,
                "name" => "Senador Pompeu",
                "solar_incidence" => "4.8475"
            ],
            [
                "uuid" => "e556cf4a-e44d-421b-8ec0-88bb4b24e5f4",
                "state_id" => 16,
                "name" => "Sengés",
                "solar_incidence" => "4.03375"
            ],
            [
                "uuid" => "45226e16-6e9e-47a0-b2f6-12a632e985c5",
                "state_id" => 5,
                "name" => "Senhor do Bonfim",
                "solar_incidence" => "4.8125"
            ],
            [
                "uuid" => "cb93700f-a47c-4724-b6e2-37c2903aa910",
                "state_id" => 5,
                "name" => "Sento Sé",
                "solar_incidence" => "5.11"
            ],
            [
                "uuid" => "e46133b1-75a3-4590-a732-9ebc7419c8e8",
                "state_id" => 22,
                "name" => "Seringueiras",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "5358a059-d4ee-436a-98b1-e864b3f214e4",
                "state_id" => 19,
                "name" => "Seropédica",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "b9e96ac0-cc85-44e5-afd8-34271a943ff2",
                "state_id" => 8,
                "name" => "Serra",
                "solar_incidence" => "3.955"
            ],
            [
                "uuid" => "42533115-62ac-4bd5-a5fa-3527de9ed9f0",
                "state_id" => 25,
                "name" => "Serra Azul",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "afb1bdd3-1290-4e5b-be11-89d0df385e31",
                "state_id" => 5,
                "name" => "Serra do Ramalho",
                "solar_incidence" => "5.01375"
            ],
            [
                "uuid" => "b1d5b3dc-80cd-4891-a4de-43cedf306e4d",
                "state_id" => 13,
                "name" => "Serra do Salitre",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "6faec3cd-3055-4e5e-94c7-acb253dc4e7c",
                "state_id" => 25,
                "name" => "Serra Negra",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "5cba054d-9ec9-4855-9eb3-90fc4ccbb8c9",
                "state_id" => 17,
                "name" => "Serra Talhada",
                "solar_incidence" => "4.9875"
            ],
            [
                "uuid" => "84e618b8-9639-4ea6-bb06-08d5a4851d8f",
                "state_id" => 5,
                "name" => "Serrinha",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "83544372-562c-4cd1-87f7-95f56413a0d7",
                "state_id" => 5,
                "name" => "Serrolândia",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "229efbde-6402-4dd7-826d-b8bfd0b18422",
                "state_id" => 16,
                "name" => "Sertanópolis",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "508ff92a-8d62-4d61-ab45-3b7289f6c1bb",
                "state_id" => 21,
                "name" => "Sertão Santana",
                "solar_incidence" => "3.8675"
            ],
            [
                "uuid" => "aeaf7f0b-9e5e-49a0-b1bc-560da6abe9d2",
                "state_id" => 25,
                "name" => "Sertãozinho",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "9e7c0239-6fce-4501-b507-fc8ef93d9425",
                "state_id" => 13,
                "name" => "Sete Lagoas",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "3c543793-d148-44a5-9b8f-eb8263288694",
                "state_id" => 12,
                "name" => "Sete Quedas",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "252e9e1d-c2e7-40a3-805c-88c7edfeffb5",
                "state_id" => 25,
                "name" => "Severínia",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "8842bdb4-17a7-4c6b-bd3d-abfbfa62e617",
                "state_id" => 24,
                "name" => "Siderópolis",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "09d5c621-6081-424d-acd3-3d71d281a467",
                "state_id" => 9,
                "name" => "Silvânia",
                "solar_incidence" => "4.6025"
            ],
            [
                "uuid" => "50deb47d-b585-43c6-99d8-28fd49d77676",
                "state_id" => 13,
                "name" => "Silveirânia",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "d3b3c64e-7f06-4ba8-8ad7-3f3f24e7005b",
                "state_id" => 26,
                "name" => "Simão Dias",
                "solar_incidence" => "4.59375"
            ],
            [
                "uuid" => "612070e0-0e37-43f6-a791-6a0d6097c560",
                "state_id" => 13,
                "name" => "Simonésia",
                "solar_incidence" => "4.0775"
            ],
            [
                "uuid" => "edb0b6c9-3366-4373-a068-3ef2c87ba3d6",
                "state_id" => 11,
                "name" => "Sinop",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "20462be7-da4d-402b-98f4-e5f801b05542",
                "state_id" => 16,
                "name" => "Siqueira Campos",
                "solar_incidence" => "4.29625"
            ],
            [
                "uuid" => "da982cfa-9e7f-4dea-a323-a6d6081b4d61",
                "state_id" => 5,
                "name" => "Sobradinho",
                "solar_incidence" => "3.98125"
            ],
            [
                "uuid" => "531ea9a4-b002-4c2e-8168-a62031eb9399",
                "state_id" => 6,
                "name" => "Sobral",
                "solar_incidence" => "4.7775"
            ],
            [
                "uuid" => "3e380e77-90e9-4ce7-92b7-41a15b545872",
                "state_id" => 25,
                "name" => "Socorro",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "a8ad738f-45b1-45d0-b58c-574f7dc77948",
                "state_id" => 15,
                "name" => "Solânea",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "cd312972-0091-40a3-a4fa-7d7cc0dd0720",
                "state_id" => 21,
                "name" => "Soledade",
                "solar_incidence" => "5.06625"
            ],
            [
                "uuid" => "65ecac6f-6be3-4c40-8891-6a0d2e0f3df6",
                "state_id" => 24,
                "name" => "Sombrio",
                "solar_incidence" => "3.7275"
            ],
            [
                "uuid" => "405ffc4d-8911-4a04-a511-ce80e4ed370b",
                "state_id" => 12,
                "name" => "Sonora",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "8c6855a7-8efc-44d6-8ea4-74758a7a1d66",
                "state_id" => 8,
                "name" => "Sooretama",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "1aaf4732-732b-4f73-9d12-2160f1232ea3",
                "state_id" => 25,
                "name" => "Sorocaba",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "7cdf1552-c4ff-4354-9605-b31982de091d",
                "state_id" => 11,
                "name" => "Sorriso",
                "solar_incidence" => "4.43625"
            ],
            [
                "uuid" => "2ef43e3a-8135-4f8d-b6c4-e90e2dfceb9d",
                "state_id" => 15,
                "name" => "Sousa",
                "solar_incidence" => "5.0575"
            ],
            [
                "uuid" => "7aa94209-aab4-456e-bb2d-aee6372aeae7",
                "state_id" => 25,
                "name" => "Sumaré",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "b4000370-5b28-40dd-8430-73a2e766bfc2",
                "state_id" => 25,
                "name" => "Suzano",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "dd1c5288-f2ad-4ca8-84ca-5253246efc82",
                "state_id" => 21,
                "name" => "Tabaí",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "8b751dd5-6e56-48d9-82dd-f88c0f220da8",
                "state_id" => 11,
                "name" => "Tabaporã",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "dac920da-cc16-4de4-926f-060fa2405ee6",
                "state_id" => 25,
                "name" => "Tabapuã",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "837adcd9-2959-4e46-8920-a2474598c3e4",
                "state_id" => 6,
                "name" => "Tabuleiro do Norte",
                "solar_incidence" => "4.935"
            ],
            [
                "uuid" => "90b0bd2d-3dfe-4b7b-a080-b28c232dceec",
                "state_id" => 25,
                "name" => "Taiaçu",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "baabaf04-7a8b-414b-84b6-1194048b29f2",
                "state_id" => 13,
                "name" => "Taiobeiras",
                "solar_incidence" => "4.83875"
            ],
            [
                "uuid" => "9fdbef00-c274-461c-817f-0b6ba5e71a5e",
                "state_id" => 17,
                "name" => "Tamandaré",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "0fa3d240-b5ed-40bf-800c-47a014aef802",
                "state_id" => 16,
                "name" => "Tamarana",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "2f153583-6069-488f-82db-747806e06038",
                "state_id" => 24,
                "name" => "Tangará",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "017e77b2-eb74-4615-bb5c-f047d2e462cc",
                "state_id" => 11,
                "name" => "Tangará da Serra",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "58f3cbe8-13d2-4770-9af6-62b78430ea26",
                "state_id" => 16,
                "name" => "Tapejara",
                "solar_incidence" => "4.01625"
            ],
            [
                "uuid" => "9708260b-02e7-4c94-b045-78b5736ee2d6",
                "state_id" => 21,
                "name" => "Tapera",
                "solar_incidence" => "4.01625"
            ],
            [
                "uuid" => "bf7627d9-2a07-4788-9ae7-e977022127e1",
                "state_id" => 25,
                "name" => "Tapiraí",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "f6cc57b2-9fc1-45a2-beaa-0759c24a55f9",
                "state_id" => 11,
                "name" => "Tapurah",
                "solar_incidence" => "4.45375"
            ],
            [
                "uuid" => "e58b9b3d-864c-4351-8e80-e921fb161657",
                "state_id" => 21,
                "name" => "Taquara",
                "solar_incidence" => "3.80625"
            ],
            [
                "uuid" => "b9e75232-b729-4461-92bd-3f1702b066d2",
                "state_id" => 25,
                "name" => "Taquaritinga",
                "solar_incidence" => "4.52375"
            ],
            [
                "uuid" => "a5386e29-922a-4619-8148-cc3358e3eaf0",
                "state_id" => 1,
                "name" => "Tarauacá",
                "solar_incidence" => "4.08625"
            ],
            [
                "uuid" => "b12f96d1-b273-45e8-88cc-7999b9834051",
                "state_id" => 3,
                "name" => "Tartarugalzinho",
                "solar_incidence" => "4.15625"
            ],
            [
                "uuid" => "e4ad7c41-e5f6-45c2-86d9-434a88cfbcab",
                "state_id" => 25,
                "name" => "Tatuí",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "24203d5f-ffa9-475f-8c64-ff0defa87737",
                "state_id" => 6,
                "name" => "Tauá",
                "solar_incidence" => "4.92625"
            ],
            [
                "uuid" => "c9a936c4-9578-4a9d-a11a-a07bd19b3f3c",
                "state_id" => 25,
                "name" => "Taubaté",
                "solar_incidence" => "3.85875"
            ],
            [
                "uuid" => "6c24dd20-0b92-4ccb-8caf-c13a9b2e92b2",
                "state_id" => 5,
                "name" => "Teixeira de Freitas",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "f5479e70-5ca5-470b-9e4f-2ae8b1ee45dc",
                "state_id" => 16,
                "name" => "Teixeira Soares",
                "solar_incidence" => "3.89375"
            ],
            [
                "uuid" => "5604c3eb-184e-4092-807f-9c89da2945b0",
                "state_id" => 16,
                "name" => "Telêmaco Borba",
                "solar_incidence" => "4.15625"
            ],
            [
                "uuid" => "6e013879-7daf-4ef3-9b7d-9372a4ef5e8e",
                "state_id" => 25,
                "name" => "Teodoro Sampaio",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "eb5d71be-bf9a-4679-826b-ef0f98bc2ccf",
                "state_id" => 13,
                "name" => "Teófilo Otoni",
                "solar_incidence" => "4.20875"
            ],
            [
                "uuid" => "80ae851e-d398-4a26-9ade-b2a7e9c68894",
                "state_id" => 18,
                "name" => "Teresina",
                "solar_incidence" => "4.85625"
            ],
            [
                "uuid" => "c6224354-155f-4225-93e0-8e790450d587",
                "state_id" => 19,
                "name" => "Teresópolis",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "2076ab58-3b79-4031-977d-595579ae836f",
                "state_id" => 16,
                "name" => "Terra Boa",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "61f3955c-9b5b-4fff-bbb4-19eb579fb401",
                "state_id" => 16,
                "name" => "Terra Rica",
                "solar_incidence" => "4.3925"
            ],
            [
                "uuid" => "ae329d9c-fece-447e-99b1-e3b2aba446c0",
                "state_id" => 16,
                "name" => "Terra Roxa",
                "solar_incidence" => "4.585"
            ],
            [
                "uuid" => "36058ded-656b-4ea3-9da7-059a803812aa",
                "state_id" => 25,
                "name" => "Tietê",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "6d0f47e2-db57-4a6f-a3ab-a2afbff5358d",
                "state_id" => 17,
                "name" => "Timbaúba",
                "solar_incidence" => "4.6725"
            ],
            [
                "uuid" => "e78815b1-a6c4-4dcf-875b-801fdaf6aaf8",
                "state_id" => 24,
                "name" => "Timbó",
                "solar_incidence" => "3.5875"
            ],
            [
                "uuid" => "a2ef69b4-9e19-48a7-b682-9dc976e550ec",
                "state_id" => 10,
                "name" => "Timon",
                "solar_incidence" => "4.85625"
            ],
            [
                "uuid" => "3bfea7e6-8c10-44d7-b7b3-c9aeedecf78c",
                "state_id" => 13,
                "name" => "Timóteo",
                "solar_incidence" => "4.12125"
            ],
            [
                "uuid" => "87138f76-4349-48fe-8856-3a4e59bb35a4",
                "state_id" => 13,
                "name" => "Tiradentes",
                "solar_incidence" => "4.34875"
            ],
            [
                "uuid" => "45fb5dd8-688d-46f2-8616-d7bf6b407b98",
                "state_id" => 27,
                "name" => "Tocantinópolis",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "e50fc0ad-f6e7-4094-a81c-ac509260bf92",
                "state_id" => 16,
                "name" => "Toledo",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "b212dc09-5151-4959-9739-ebb2db2ddd7b",
                "state_id" => 17,
                "name" => "Toritama",
                "solar_incidence" => "4.9175"
            ],
            [
                "uuid" => "6560fa80-78b0-4ac2-8df1-76503353d93f",
                "state_id" => 25,
                "name" => "Torre de Pedra",
                "solar_incidence" => "4.20875"
            ],
            [
                "uuid" => "0e5c582e-6e4d-44b1-afd6-588dac883a51",
                "state_id" => 25,
                "name" => "Tremembé",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "bd2ac3b4-9015-41e8-967a-17c08666aaf3",
                "state_id" => 16,
                "name" => "Três Barras do Paraná",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "b6582a43-04e7-4b88-ab18-2a1a70f831fe",
                "state_id" => 13,
                "name" => "Três Corações",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "dadeb8a1-a84b-46f5-b3b3-832de9120f54",
                "state_id" => 21,
                "name" => "Três Coroas",
                "solar_incidence" => "3.80625"
            ],
            [
                "uuid" => "17d2eb85-5081-4064-a550-891d14abf02f",
                "state_id" => 21,
                "name" => "Três de Maio",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "26abd47d-d00f-470f-90b5-244aa6d64d33",
                "state_id" => 12,
                "name" => "Três Lagoas",
                "solar_incidence" => "4.515"
            ],
            [
                "uuid" => "bb352762-b46f-41b3-ad75-4fba508e284b",
                "state_id" => 13,
                "name" => "Três Marias",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "e2748615-f89d-491e-ab58-05d45d3a60b7",
                "state_id" => 21,
                "name" => "Três Passos",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "b9f90160-956d-4f2f-9ecb-2b175c0775f3",
                "state_id" => 13,
                "name" => "Três Pontas",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "b2247f84-5b5b-4525-98c1-e6bb81fa0fda",
                "state_id" => 9,
                "name" => "Três Ranchos",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "339761c0-64cb-41c5-bae1-73e3e8d95fe2",
                "state_id" => 17,
                "name" => "Trindade",
                "solar_incidence" => "4.97875"
            ],
            [
                "uuid" => "e6c70a5d-e650-4703-8865-bc90292878d9",
                "state_id" => 21,
                "name" => "Trindade do Sul",
                "solar_incidence" => "4.06875"
            ],
            [
                "uuid" => "775f9fbb-5687-4d95-bbe8-a5dd703349a7",
                "state_id" => 21,
                "name" => "Triunfo",
                "solar_incidence" => "5.0575"
            ],
            [
                "uuid" => "3c5f0caf-4357-477b-bf98-080b0f0eb5b1",
                "state_id" => 24,
                "name" => "Tubarão",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "5d0b599e-6657-4393-b3dc-de6054f8b6fc",
                "state_id" => 5,
                "name" => "Tucano",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "e9e6b53d-c8dd-458f-af32-c6d1b1be45b8",
                "state_id" => 14,
                "name" => "Tucumã",
                "solar_incidence" => "4.305"
            ],
            [
                "uuid" => "a460ffe4-dd93-4665-ad12-964bbd26f219",
                "state_id" => 14,
                "name" => "Tucuruí",
                "solar_incidence" => "4.38375"
            ],
            [
                "uuid" => "95aee86d-efdf-4b47-b35a-fee7e98623f6",
                "state_id" => 24,
                "name" => "Tunápolis",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "1f440206-3b3a-45eb-8a6e-d42dde0a4b25",
                "state_id" => 25,
                "name" => "Tupã",
                "solar_incidence" => "4.50625"
            ],
            [
                "uuid" => "e66d6827-c61c-455d-a20c-7569a49fcce8",
                "state_id" => 21,
                "name" => "Tupanciretã",
                "solar_incidence" => "3.98125"
            ],
            [
                "uuid" => "5658d374-b2af-4998-b6ce-9f28f571d6bd",
                "state_id" => 16,
                "name" => "Tupãssi",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "5b746b75-3ebd-4b70-a549-8078dd091ec0",
                "state_id" => 25,
                "name" => "Tupi Paulista",
                "solar_incidence" => "4.47125"
            ],
            [
                "uuid" => "6ff4c10b-5c1c-468e-ac44-e7784ef10ae8",
                "state_id" => 9,
                "name" => "Turvânia",
                "solar_incidence" => "4.61125"
            ],
            [
                "uuid" => "48a8c19e-18e8-4008-a02b-ee60ea70bb9f",
                "state_id" => 16,
                "name" => "Turvo",
                "solar_incidence" => "3.77125"
            ],
            [
                "uuid" => "2f579692-22a8-4737-90b7-c078544f0db7",
                "state_id" => 13,
                "name" => "Ubá",
                "solar_incidence" => "3.9725"
            ],
            [
                "uuid" => "bafeb13d-3552-4186-a67b-6e6351aca1ff",
                "state_id" => 6,
                "name" => "Ubajara",
                "solar_incidence" => "4.7775"
            ],
            [
                "uuid" => "c3146838-afb1-4d80-91db-866826dfdb2d",
                "state_id" => 5,
                "name" => "Ubatã",
                "solar_incidence" => "4.22625"
            ],
            [
                "uuid" => "9fc3286c-9137-4e78-bd8f-aaa7a2c156e6",
                "state_id" => 25,
                "name" => "Ubatuba",
                "solar_incidence" => "3.85875"
            ],
            [
                "uuid" => "316db5c8-a4d6-421b-a908-592e43036873",
                "state_id" => 13,
                "name" => "Uberaba",
                "solar_incidence" => "4.5675"
            ],
            [
                "uuid" => "60af12fe-8f58-4492-aef5-8a962fd95aa4",
                "state_id" => 13,
                "name" => "Uberlândia",
                "solar_incidence" => "4.6375"
            ],
            [
                "uuid" => "ee0ad6e0-a0cf-4b8e-a092-f5d8da581788",
                "state_id" => 16,
                "name" => "Ubiratã",
                "solar_incidence" => "4.2175"
            ],
            [
                "uuid" => "5e5b0a01-ea2a-49e6-a470-0725c0d36a04",
                "state_id" => 15,
                "name" => "Uiraúna",
                "solar_incidence" => "5.0575"
            ],
            [
                "uuid" => "f25887ae-b8c7-45c1-be4a-5ed93e651790",
                "state_id" => 16,
                "name" => "Umuarama",
                "solar_incidence" => "4.2875"
            ],
            [
                "uuid" => "f36382ad-1ac7-49a6-b3e2-07774a96589a",
                "state_id" => 13,
                "name" => "Unaí",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "affa56c0-8b73-4064-9d21-2bb31c60ef10",
                "state_id" => 18,
                "name" => "União",
                "solar_incidence" => "4.94375"
            ],
            [
                "uuid" => "487af20b-115a-47ad-b142-0726f8cc08a1",
                "state_id" => 16,
                "name" => "União da Vitória",
                "solar_incidence" => "4.025"
            ],
            [
                "uuid" => "bbe097b7-e727-4783-b21f-c529e20aae69",
                "state_id" => 24,
                "name" => "União do Oeste",
                "solar_incidence" => "4.08625"
            ],
            [
                "uuid" => "8e3717ea-e69d-4d14-8460-f75b5f4d53b0",
                "state_id" => 16,
                "name" => "Uniflor",
                "solar_incidence" => "4.33125"
            ],
            [
                "uuid" => "5041f77d-edc5-473c-9428-a7886b63e90b",
                "state_id" => 9,
                "name" => "Uruaçu",
                "solar_incidence" => "4.655"
            ],
            [
                "uuid" => "0548d620-41f1-4ef5-bc9f-65a06bcf050f",
                "state_id" => 6,
                "name" => "Uruburetama",
                "solar_incidence" => "4.7075"
            ],
            [
                "uuid" => "706a7de5-badb-4b90-a43f-b9d560d7522a",
                "state_id" => 21,
                "name" => "Uruguaiana",
                "solar_incidence" => "4.17375"
            ],
            [
                "uuid" => "d995ff5a-0516-41d6-b9ad-d72f4becc38d",
                "state_id" => 24,
                "name" => "Urupema",
                "solar_incidence" => "3.605"
            ],
            [
                "uuid" => "ffbe3b25-8887-46cd-abdc-946517b88582",
                "state_id" => 21,
                "name" => "Vacaria",
                "solar_incidence" => "3.9725"
            ],
            [
                "uuid" => "1eba4229-e0b9-463f-8390-0be371175b61",
                "state_id" => 22,
                "name" => "Vale do Anari",
                "solar_incidence" => "4.20875"
            ],
            [
                "uuid" => "e41c8cdf-e1bf-4e7e-bf4e-b85ee77f290d",
                "state_id" => 22,
                "name" => "Vale do Paraíso",
                "solar_incidence" => "4.17375"
            ],
            [
                "uuid" => "cde4cdbe-de8d-4b33-a440-2083f498858a",
                "state_id" => 19,
                "name" => "Valença",
                "solar_incidence" => "3.92875"
            ],
            [
                "uuid" => "0b2e9163-534b-4f45-9c12-1af288dd1238",
                "state_id" => 18,
                "name" => "Valença do Piauí",
                "solar_incidence" => "4.89125"
            ],
            [
                "uuid" => "f7bf4b31-a384-49fc-8862-305f3cf097f0",
                "state_id" => 25,
                "name" => "Valinhos",
                "solar_incidence" => "4.41"
            ],
            [
                "uuid" => "ecb9bc1e-7d59-4ed5-80c8-a68f9a74d4eb",
                "state_id" => 9,
                "name" => "Valparaíso de Goiás",
                "solar_incidence" => "4.62875"
            ],
            [
                "uuid" => "df1fdb8e-fe65-4b91-9112-af246a0262b8",
                "state_id" => 8,
                "name" => "Vargem Alta",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "3c44540a-66dc-46c0-815b-87c1d48ae43a",
                "state_id" => 24,
                "name" => "Vargem Bonita",
                "solar_incidence" => "4.03375"
            ],
            [
                "uuid" => "cd8ffc17-4ee7-4c80-94dd-c1b4bb38b301",
                "state_id" => 25,
                "name" => "Vargem Grande do Sul",
                "solar_incidence" => "4.45375"
            ],
            [
                "uuid" => "211d215f-2533-4e48-b4b8-bcf92e1cc840",
                "state_id" => 25,
                "name" => "Vargem Grande Paulista",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "9f34063b-6e56-463b-93d8-05df2d9e70fd",
                "state_id" => 13,
                "name" => "Varginha",
                "solar_incidence" => "4.36625"
            ],
            [
                "uuid" => "d785149b-e4bf-43d6-a320-fc27b344de3a",
                "state_id" => 13,
                "name" => "Varjão de Minas",
                "solar_incidence" => "4.62875"
            ],
            [
                "uuid" => "ca84d198-b7a4-4663-a5b5-a9d3f1556d95",
                "state_id" => 6,
                "name" => "Varjota",
                "solar_incidence" => "4.94375"
            ],
            [
                "uuid" => "71f6f7fd-ee37-4b1d-bd31-e291d371b47b",
                "state_id" => 11,
                "name" => "Várzea Grande",
                "solar_incidence" => "4.4275"
            ],
            [
                "uuid" => "a8fb782d-396a-4b9a-a491-aca1341ebc51",
                "state_id" => 21,
                "name" => "Venâncio Aires",
                "solar_incidence" => "3.9025"
            ],
            [
                "uuid" => "c28ea500-ea85-4fc7-8f40-0be9338f5b8a",
                "state_id" => 8,
                "name" => "Venda Nova do Imigrante",
                "solar_incidence" => "4.0075"
            ],
            [
                "uuid" => "0bd72e29-fbb7-4242-b6f8-38809c28c2c1",
                "state_id" => 11,
                "name" => "Vera",
                "solar_incidence" => "4.43625"
            ],
            [
                "uuid" => "3903fed8-655c-4726-800d-4eeec3b72ef0",
                "state_id" => 21,
                "name" => "Vera Cruz",
                "solar_incidence" => "4.41875"
            ],
            [
                "uuid" => "3d5941a1-731c-4fa9-9428-8b7966c96da4",
                "state_id" => 16,
                "name" => "Vera Cruz do Oeste",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "b835cca1-99f3-4617-9153-342da50b8a49",
                "state_id" => 16,
                "name" => "Verê",
                "solar_incidence" => "4.165"
            ],
            [
                "uuid" => "d8fd23b1-a498-4161-9cd5-a63c06a4e850",
                "state_id" => 21,
                "name" => "Viamão",
                "solar_incidence" => "3.8675"
            ],
            [
                "uuid" => "4f3c8519-1a3d-48cf-9850-48db248d9f1c",
                "state_id" => 10,
                "name" => "Viana",
                "solar_incidence" => "3.955"
            ],
            [
                "uuid" => "01c94268-2e1b-43b7-be47-9eae8827de2d",
                "state_id" => 9,
                "name" => "Vicentinópolis",
                "solar_incidence" => "4.66375"
            ],
            [
                "uuid" => "603009b4-409f-4b05-86ea-8cb0ac8c1b3f",
                "state_id" => 13,
                "name" => "Viçosa",
                "solar_incidence" => "4.73375"
            ],
            [
                "uuid" => "36cabbce-673a-4ea1-ad2d-8751d3b58830",
                "state_id" => 24,
                "name" => "Videira",
                "solar_incidence" => "4.03375"
            ],
            [
                "uuid" => "4cb1a1a6-eda3-4bc3-a62f-d5fcb5348d14",
                "state_id" => 8,
                "name" => "Vila Velha",
                "solar_incidence" => "3.955"
            ],
            [
                "uuid" => "08e53d2a-62b0-4086-8655-c0c2d7d2b9c4",
                "state_id" => 22,
                "name" => "Vilhena",
                "solar_incidence" => "4.235"
            ],
            [
                "uuid" => "3a3d8955-3e7f-49cf-a4d5-9d146853fd08",
                "state_id" => 25,
                "name" => "Vinhedo",
                "solar_incidence" => "4.06"
            ],
            [
                "uuid" => "6507639c-e104-4c3d-9356-84da43b764f0",
                "state_id" => 8,
                "name" => "Vitória",
                "solar_incidence" => "3.955"
            ],
            [
                "uuid" => "d79ad487-0e6a-4863-89bb-36684d924455",
                "state_id" => 5,
                "name" => "Vitória da Conquista",
                "solar_incidence" => "4.54125"
            ],
            [
                "uuid" => "b38535e2-a0eb-40a8-be7a-162912d4c93b",
                "state_id" => 17,
                "name" => "Vitória de Santo Antão",
                "solar_incidence" => "4.4975"
            ],
            [
                "uuid" => "727a9afa-1058-4221-929e-f8595e01ebc7",
                "state_id" => 10,
                "name" => "Vitória do Mearim",
                "solar_incidence" => "4.4275"
            ],
            [
                "uuid" => "9fa95e53-f373-4a3a-a39f-b32566a4e25b",
                "state_id" => 10,
                "name" => "Vitorino Freire",
                "solar_incidence" => "4.34875"
            ],
            [
                "uuid" => "35709f80-8eff-4554-8bf2-60d5803b3e6c",
                "state_id" => 19,
                "name" => "Volta Redonda",
                "solar_incidence" => "4.095"
            ],
            [
                "uuid" => "5adcbdcf-1dd9-44e0-8c4c-170c057c522b",
                "state_id" => 25,
                "name" => "Votuporanga",
                "solar_incidence" => "4.57625"
            ],
            [
                "uuid" => "57c8bffa-88a1-4da4-81a7-d5dab256424b",
                "state_id" => 5,
                "name" => "Wagner",
                "solar_incidence" => "4.8475"
            ],
            [
                "uuid" => "b5471eea-ee7f-4010-8742-9fb38990f105",
                "state_id" => 21,
                "name" => "Westfália",
                "solar_incidence" => "3.84125"
            ],
            [
                "uuid" => "c4254a1c-720f-4947-8e94-9cc5fe01210a",
                "state_id" => 24,
                "name" => "Xanxerê",
                "solar_incidence" => "4.08625"
            ],
            [
                "uuid" => "8db9d7ed-a514-4b40-9ed7-e73b527aada6",
                "state_id" => 14,
                "name" => "Xinguara",
                "solar_incidence" => "4.40125"
            ],
            [
                "uuid" => "c94d4cac-2ffe-447b-9b6b-ddd1658af600",
                "state_id" => 5,
                "name" => "Xique-Xique",
                "solar_incidence" => "5.1275"
            ],
            [
                "uuid" => "75ddd435-09ec-4cd9-b320-a4f2d6f1db91",
                "state_id" => 25,
                "name" => "Zacarias",
                "solar_incidence" => "4.50625"
            ],
            [
                "uuid" => "1d63b16d-e847-4c6a-9764-f26c45e9c09a",
                "state_id" => 10,
                "name" => "Zé Doca",
                "solar_incidence" => "4.3575"
            ]
        ]);
    }
}
