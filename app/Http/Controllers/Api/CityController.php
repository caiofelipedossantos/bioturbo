<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Http\Resources\CityResource;
use App\Services\CityService;
use Illuminate\Support\Str;

class CityController extends Controller
{
    private $city_service;

    public function __construct(CityService $city_service)
    {
        $this->city_service = $city_service;
    }

    public function list()
    {
        return CityResource::collection($this->city_service->list());
    }

    public function find(string $code)
    {
        if (!Str::isUuid($code)) {
            return response()->json(['status' => false, 'message' => 'Invalid code!'], 404);
        }

        if (!$city = $this->city_service->find($code)) {
            return response()->json(['status' => false, 'message' => 'City not found!'], 404);
        }

        return new CityResource($city);
    }

    public function store(CityRequest $request)
    {
        if ($this->city_service->store($request->all())) {
            return response()->json(['status' => true, 'message' => 'Registered successfully!'], 200);
        }
        return response()->json(['status' => false, 'message' => 'Ops!, Failed to register.'], 500);
    }

    public function update(CityRequest $request, string $code)
    {
        if (!Str::isUuid($code)) {
            return response()->json(['status' => false, 'message' => 'Código inválido!'], 404);
        }

        if ($this->city_service->update($request->all(), $code)) {
            return response()->json(['status' => true, 'message' => 'Registration updated successfully!'], 200);
        }
        return response()->json(['status' => false, 'message' => 'Ops!, Failed to updater.'], 500);
    }

    public function delete(string $code)
    {
        if (!Str::isUuid($code)) {
            return response()->json(['status' => false, 'message' => 'Invalid code!'], 404);
        }
        if ($this->city_service->delete($code)) {
            return response()->json(['status' => true, 'message' => 'Record successfully deleted!'], 200);
        }
        return response()->json(['status' => false, 'message' => 'Ops!, Failed to delete!'], 500);
    }
}
