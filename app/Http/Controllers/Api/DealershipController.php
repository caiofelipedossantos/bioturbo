<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DealershipRequest;
use App\Services\DealershipService;
use Illuminate\Support\Str;

class DealershipController extends Controller
{
    private $dealership_service;

    public function __construct(DealershipService $dealership_service)
    {
        $this->dealership_service = $dealership_service;
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

    public function update(DealershipRequest $request, string $code)
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
