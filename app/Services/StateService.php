<?php

namespace App\Services;

use App\Repositories\Contracts\StateRepositoryInterface;

class StateService
{
    private $repository;

    public function __construct(StateRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllStates(int $per_page)
    {
        return $this->repository->getAllStates($per_page);
    }

    public function getStateByUuid(string $uuid)
    {
        return $this->repository->getStateByUuid($uuid);
    }
}
