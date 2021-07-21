<?php

namespace App\Repositories\Contracts;

interface SolarBoardRepositoryInterface
{
    public function getAllBoards(int $per_page);
    public function getBoardByUuid(string $uuid);
}
