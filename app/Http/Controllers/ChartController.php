<?php

namespace App\Http\Controllers;

class ChartController extends Controller
{
    public function index()
    {
        $data = [
            [ 
                "name" => "week 1",
                "data" => [130, 130, 180, 175, 200, 170, 250]
            ],
            [ 
                "name" => "week 2",
                "data" => [150, 140, 200, 175, 120, 270, 210]
            ]
        ];
        return response()->json($data);
    }
}
