<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SimulationRequest;
use App\Services\SimulationService;
use Illuminate\Http\Request;

class SimulationController extends Controller
{
    private $simulation_service;

    public function __construct(SimulationService $dealership_service)
    {
        $this->dealership_service = $dealership_service;
    }

    public function generate(SimulationRequest $request)
    {
    }
}
