<?php

namespace App\Repositories;

use App\Models\Dealership;
use App\Repositories\Contracts\DealershipRepositoryInterface;

class DealershipRepository implements DealershipRepositoryInterface
{

    protected $entity;

    public function __construct(Dealership $dealership)
    {
        $this->entity = $dealership;
    }

    public function getAllDealerships(int $per_page)
    {
        return $this->entity->paginate($per_page);
    }

    public function getDealershipsByStateUuid(string $uuid, int $per_page)
    {
        return $this->entity
            ->select('dealerships.*')
            ->join('states', 'states.id', 'dealerships.state_id')
            ->where('states.uuid', $uuid)
            ->orderBy('dealerships.description', 'asc')
            ->paginate($per_page);
    }
}
