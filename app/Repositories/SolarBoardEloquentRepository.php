<?php

namespace App\Repositories;

use App\Models\SolarBoard;
use App\Repositories\Contracts\SolarBoardRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;

class SolarBoardEloquentRepository extends BaseEloquentRepository implements SolarBoardRepositoryInterface
{
    //Retorna o model a ser utilizado pelo repository
    public function model()
    {
        return SolarBoard::class;
    }
}
