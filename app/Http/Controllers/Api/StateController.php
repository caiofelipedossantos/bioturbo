<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StateRequest;
use App\Services\StateService;
use Illuminate\Support\Str;

class StateController extends Controller
{
    private $state_service;

    public function __construct(StateService $state_service)
    {
        $this->state_service = $state_service;
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

    public function findAll(string $code)
    {
        if (!Str::isUuid($code)) {
            return response()->json(['status' => false, 'message' => 'Código inválido!'], 404);
        }
    }

    public function store(StateRequest $request)
    {
    }

    public function update(StateRequest $request, string $code)
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
