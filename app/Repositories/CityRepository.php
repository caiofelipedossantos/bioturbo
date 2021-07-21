<?php

namespace App\Repositories;

use App\Models\City;
use App\Repositories\Contracts\CityRepositoryInterface;

class CityRepository implements CityRepositoryInterface
{

    protected $entity;

    public function __construct(City $city)
    {
        $this->entity = $city;
    }

    public function getAllCities(int $per_page)
    {
        return $this->entity->paginate($per_page);
    }

    public function getCitiesByStateUuid(string $uuid)
    {
        return $this->entity
            ->select('cities.*')
            ->join('states', 'states.id', 'cities.state_id')
            ->where('states.uuid', $uuid)
            ->orderBy('cities.name', 'asc')
            ->get();
    }
}
