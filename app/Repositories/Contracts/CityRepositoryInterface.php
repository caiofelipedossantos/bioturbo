<?php

namespace App\Repositories\Contracts;

interface CityRepositoryInterface
{
    public function getAllCities(int $per_page);
    public function getCitiesByStateUuid(string $uuid);
}
