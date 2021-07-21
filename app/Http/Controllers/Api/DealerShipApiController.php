<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DealershipResource;
use App\Services\DealershipService;
use Illuminate\Http\Request;

class DealerShipApiController extends Controller
{
    protected $dealershipService;

    public function __construct(DealershipService $dealershipService)
    {
        $this->dealershipService = $dealershipService;
    }

    public function index(Request $request)
    {
        $per_page = $request->get('per_page', 15);
        return DealershipResource::collection($this->dealershipService->getAllDealerships($per_page));
    }

    public function getDealershipsByState(string $uuid, Request $request)
    {
        $per_page = $request->get('per_page', 15);
        return DealershipResource::collection($this->dealershipService->getDealershipsByStateUuid($uuid,$per_page));
    }
}
