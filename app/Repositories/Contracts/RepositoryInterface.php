<?php

namespace App\Repositories\Contracts;

interface RepositoryInterface
{
    public function getAll();
    public function findByUuid(string $code);
    public function findWhere(string $column, string $value);
    public function findWhereFirst(string $column, string $value);
    public function store(array $data);
    public function updateByUuid(string $code, array $data);
    public function deleteByUuid(string $code);
    public function orderBy(string $column, string $order);
}
