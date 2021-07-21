<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SolarBoardResource;
use App\Repositories\Contracts\SolarBoardRepositoryInterface;
use Illuminate\Http\Request;

class SolarBoardApiController extends Controller
{
    private $solarBoardService;

    public function __construct(SolarBoardRepositoryInterface $repository)
    {
        $this->solarBoardService = $repository;
    }

    public function index(Request $request)
    {
        $per_page = $request->get('per_page', 15);
        return SolarBoardResource::collection($this->solarBoardService->getAllBoards($per_page));
    }

    public function show(string $uuid)
    {
        if (!$board = $this->solarBoardService->getBoardByUuid($uuid)) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        return new SolarBoardResource($board);
    }
}
