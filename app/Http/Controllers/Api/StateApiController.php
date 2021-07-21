<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StateResource;
use App\Services\StateService;
use Illuminate\Http\Request;

class StateApiController extends Controller
{
    protected $stateService;

    public function __construct(StateService $stateService)
    {
        $this->stateService = $stateService;
    }

    public function index(Request $request)
    {
        $per_page = $request->get('per_page', 15);
        return StateResource::collection($this->stateService->getAllStates($per_page));
    }

    public function show(string $uuid)
    {
        if (!$state = $this->stateService->getStateByUuid($uuid)) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        return new StateResource($state);
    }
}
