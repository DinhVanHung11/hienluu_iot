<?php

namespace App\Http\Controllers;

use App\Http\Services\MainService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MainController extends Controller
{
    public function __construct(
        protected MainService $mainService
    ) {}

    public function home()
    {
        $nodes = $this->mainService->listNode();

        return view('welcome', [
            'nodes' => $nodes
        ]);
    }

    public function store(Request $request)
    {
        try {
            $params = $request->all();
            $this->mainService->create($params);

            return redirect()->back();
        } catch (\Throwable $th) {
            Log::error('Create Node Error: ' . $th->getMessage());

            return $this->serverErrorResponse();
        }
    }

    public function show($id)
    {
        try {
            $node = $this->mainService->getDetail($id);
            $listWaterLevel = $this->mainService->getListWaterLevel($id);
            $listWaterFlow = $this->mainService->getListWaterFlow($id);
            $listRainfall = $this->mainService->getListRainFall($id);
            $listWindSpeed = $this->mainService->getListWindSpeed($id);

            return view('node.detail', [
                'heading' => 'Node ' .$node->name,
                'node' => $node,
                'listWaterLevel' => $listWaterLevel,
                'listWaterFlow' => $listWaterFlow,
                'listRainfall' => $listRainfall,
                'listWindSpeed' => $listWindSpeed,
            ]);
        } catch (\Throwable $th) {
            Log::error('Create Node Error: ' . $th->getMessage());

            return $this->serverErrorResponse();
        }
    }
}
