<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Support\Str;

class UserController extends Controller
{
    private $user_service;

    public function __construct(UserService $user_service)
    {
        $this->user_service = $user_service;
    }

    public function list()
    {
    }

    public function find(string $code)
    {
        if (!Str::isUuid($code)) {
            return response()->json(['status' => false, 'message' => 'Código inválido!'], 404);
        }
    }

    public function store()
    {
    }

    public function update(UserRequest $request, string $code)
    {
        if (!Str::isUuid($code)) {
            return response()->json(['status' => false, 'message' => 'Código inválido!'], 404);
        }


    }

    public function delete(string $code)
    {
        if (!Str::isUuid($code)) {
            return response()->json(['status' => false, 'message' => 'Código inválido!'], 404);
        }
    }
}
