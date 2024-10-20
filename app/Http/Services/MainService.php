<?php

namespace App\Http\Services;

use App\Models\Node;
use App\Models\Rainfall;
use App\Models\WaterFlow;
use App\Models\WaterLevel;
use App\Models\WindSpeed;

class MainService
{
    public function listNode()
    {
        return Node::all();
    }

    public function create($params)
    {
        return Node::create($params);
    }

    public function getDetail($id)
    {
        return Node::find($id);
    }

    public function getListWaterFlow($nodeId)
    {
        return WaterFlow::where('node_id', $nodeId)->get();
    }

    public function getListWaterLevel($nodeId)
    {
        return WaterLevel::where('node_id', $nodeId)->get();
    }

    public function getListRainFall($nodeId)
    {
        return Rainfall::where('node_id', $nodeId)->get();
    }

    public function getListWindSpeed($nodeId)
    {
        return WindSpeed::where('node_id', $nodeId)->get();
    }
}
