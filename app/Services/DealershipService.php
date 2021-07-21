<?php

namespace App\Services;

use App\Repositories\Contracts\DealershipRepositoryInterface;

class DealershipService
{
    private $repository;

    public function __construct(DealershipRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllDealerships(int $per_page)
    {
        return $this->repository->getAllDealerships($per_page);
    }

    public function getDealershipsByStateUuid(string $uuid, int $per_page)
    {
        return $this->repository->getDealershipsByStateUuid($uuid, $per_page);
    }
}
