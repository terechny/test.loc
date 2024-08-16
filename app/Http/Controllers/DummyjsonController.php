<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DummyjsonService;

class DummyjsonController extends Controller
{
    public function DummyjsonProducts(DummyjsonService $dummyjsonService){

        $data = $dummyjsonService->DummyjsonProductSearch('phone');

        return response()->json(['data' =>  $data ]);
    }

}
