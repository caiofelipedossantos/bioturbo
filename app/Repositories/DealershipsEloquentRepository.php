<?php

namespace App\Repositories;

use App\Models\Dealership;
use App\Repositories\Contracts\DealershipRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;

class DealershipEloquentRepository extends BaseEloquentRepository implements DealershipRepositoryInterface
{
    //Retorna o model a ser utilizado pelo repository
    public function model()
    {
        return Dealership::class;
    }
}
