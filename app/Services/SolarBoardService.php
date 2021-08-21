<?php

namespace App\Services;

use App\Repositories\Contracts\SolarBoardRepositoryInterface;
use Illuminate\Support\Str;

class SolarBoardService
{
    private $solarboard_repository;

    public function __construct(SolarBoardRepositoryInterface $solarboard_repository)
    {
        $this->solarboard_repository = $solarboard_repository;
    }

    public function list()
    {
        return $this->solarboard_repository->orderBy('description', 'ASC')->getAll();
    }

    public function find(string $code)
    {
        return $this->solarboard_repository->findByUuid($code);
    }

    public function store(array $data)
    {
        $data['uuid'] = Str::uuid();
        $data['description'] = strtolower(trim($data['description']));
        $data['potency'] = $this->convertRealToDecimal($data['potency']);
        $data['price'] = $this->convertRealToDecimal($data['price']);

        return $this->solarboard_repository->store($data);
    }

    public function update(array $data, string $code)
    {
        $data['description'] = strtolower(trim($data['description']));
        $data['potency'] = $this->convertRealToDecimal($data['potency']);
        $data['price'] = $this->convertRealToDecimal($data['price']);

        return $this->solarboard_repository->updateByUuid($code, $data);
    }

    public function delete(string $code)
    {
        return $this->solarboard_repository->deleteByUuid($code);
    }


    private function convertRealToDecimal(string $value)
    {
        if (str_contains($value, ',')) {
            return number_format(str_replace(",", ".", str_replace(".", "", $value)), 2, '.', '');
        }
        return number_format($value, 2, '.', '');
    }
}
