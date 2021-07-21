<?php

namespace App\Repositories;

use App\Models\SolarBoard;
use App\Repositories\Contracts\SolarBoardRepositoryInterface;

class SolarBoardRepository implements SolarBoardRepositoryInterface
{
    protected $entity;

    public function __construct(SolarBoard $board)
    {
        $this->entity = $board;
    }

    public function getAllBoards(int $per_page)
    {
        return $this->entity->paginate($per_page);
    }

    public function getBoardByUuid(string $uuid)
    {
        return $this->entity->where('uuid', $uuid)->first();
    }
}
