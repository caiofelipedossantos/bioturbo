<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Services\CityService;
use Illuminate\Http\Request;

class CityApiController extends Controller
{
    protected $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    public function index(Request $request)
    {
        $per_page = $request->get('per_page', 15);
        return CityResource::collection($this->cityService->getAllCities($per_page));
    }

    public function getCitiesByState(string $uuid)
    {
        return CityResource::collection($this->cityService->getCitiesByStateUuid($uuid));
    }
}
