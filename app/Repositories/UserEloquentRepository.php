<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Core\BaseEloquentRepository;

class UserEloquentRepository extends BaseEloquentRepository implements UserRepositoryInterface
{
    //Retorna o model a ser utilizado pelo repository
    public function model()
    {
        return User::class;
    }
}
