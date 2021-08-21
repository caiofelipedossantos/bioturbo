<?php

namespace App\Repositories;

use App\Models\State;
use App\Repositories\Contracts\StateRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;

class StateEloquentRepository extends BaseEloquentRepository implements StateRepositoryInterface
{
    //Retorna o model a ser utilizado pelo repository
    public function model()
    {
        return State::class;
    }
}
