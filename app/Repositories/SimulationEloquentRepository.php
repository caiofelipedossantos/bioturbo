<?php

namespace App\Repositories;

use App\Models\Simulation;
use App\Repositories\Contracts\SimulationRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;

class SimulationEloquentRepository extends BaseEloquentRepository implements SimulationRepositoryInterface
{
    //Retorna o model a ser utilizado pelo repository
    public function model()
    {
        return Simulation::class;
    }

    public function generate(array $data)
    {
    }
}
