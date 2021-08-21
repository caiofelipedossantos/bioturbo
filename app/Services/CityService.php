<?php

namespace App\Services;

use App\Repositories\Contracts\CityRepositoryInterface;
use App\Repositories\Contracts\StateRepositoryInterface;
use Illuminate\Support\Str;

class CityService
{
    private $city_repository, $state_repository;

    public function __construct(CityRepositoryInterface $city_repository, StateRepositoryInterface $state_repository)
    {
        $this->city_repository = $city_repository;
        $this->state_repository = $state_repository;
    }

    public function list()
    {
        return $this->city_repository->orderBy('name', 'ASC')->getAll();
    }

    public function find(string $code)
    {
        return $this->city_repository->findByUuid($code);
    }

    public function store(array $data)
    {
        if (
            !Str::isUuid($data['state']) ||
            !$state_id = $this->state_repository->findByUuidFilterColumns($data['state'], ['id'])
        ) {
            return false;
        }

        $data['uuid'] = (string) Str::uuid();
        $data['state_id'] = $state_id->id;
        $data['name'] = trim($data['name']);
        $data['solar_incidence'] = $this->convertRealToDecimal($data['solar_incidence']);

        unset($data['state']);

        return $this->city_repository->store($data);
    }

    public function update(array $data, string $code)
    {
        if (
            !Str::isUuid($data['state']) ||
            !$state_id = $this->state_repository->findByUuidFilterColumns($data['state'],['id'])
        ) {
            return false;
        }

        $data['state_id'] = $state_id->id;
        $data['name'] = trim($data['name']);
        $data['solar_incidence'] = $this->convertRealToDecimal($data['solar_incidence']);
        unset($data['state']);
        return $this->city_repository->updateByUuid($code, $data);
    }

    public function delete(string $code)
    {
        return $this->city_repository->deleteByUuid($code);
    }


    private function convertRealToDecimal(string $value)
    {
        if (str_contains($value, ',')) {
            return number_format(str_replace(",", ".", str_replace(".", "", $value)), 2, '.', '');
        }
        return number_format($value, 2, '.', '');
    }
}
