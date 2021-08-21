<?php

namespace App\Repositories;

use App\Models\City;
use App\Repositories\Contracts\CityRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;

class CityEloquentRepository extends BaseEloquentRepository implements CityRepositoryInterface
{
    //Retorna o model a ser utilizado pelo repository
    public function model()
    {
        return City::class;
    }
}
