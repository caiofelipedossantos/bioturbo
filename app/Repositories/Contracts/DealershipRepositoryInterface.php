<?php

namespace App\Repositories\Contracts;

interface DealershipRepositoryInterface
{
    public function getAllDealerships(int $per_page);
    public function getDealershipsByStateUuid(string $uuid, int $per_page);
}
