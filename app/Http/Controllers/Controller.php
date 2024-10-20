<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected function serverErrorResponse()
    {
        return response()->json([
            'data' => [
                'code' => 500,
                'message' => 'Internal Server Error'
            ]
        ], 500);
    }
}
