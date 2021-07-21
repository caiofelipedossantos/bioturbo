<?php

namespace App\Repositories;

use App\Models\State;
use App\Repositories\Contracts\StateRepositoryInterface;

class StateRepository implements StateRepositoryInterface
{

    protected $entity;

    public function __construct(State $state)
    {
        $this->entity = $state;
    }

    public function getAllStates(int $per_page)
    {
        return $this->entity->paginate($per_page);
    }

    public function getStateByUuid(string $uuid)
    {
        return $this->entity->where('uuid', $uuid)->first();
    }
}
