<?php

namespace App\Services;

use App\Repositories\Contracts\CityRepositoryInterface;

class CityService
{
    private $repository;

    public function __construct(CityRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllCities(int $per_page)
    {
        return $this->repository->getAllCities($per_page);
    }

    public function getCitiesByStateUuid(string $uuid)
    {
        return $this->repository->getCitiesByStateUuid($uuid);
    }
}
