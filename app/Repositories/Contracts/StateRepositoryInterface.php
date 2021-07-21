<?php

namespace App\Repositories\Contracts;

interface StateRepositoryInterface
{
    public function getAllStates(int $per_page);
    public function getStateByUuid(string $uuid);
}
