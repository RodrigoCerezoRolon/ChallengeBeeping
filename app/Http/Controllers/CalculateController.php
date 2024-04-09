<?php

namespace App\Http\Controllers;

use App\Models\Executed;
use App\Models\OrdersLine;
use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function execute(Request $request){
        Executed::create([
            'total_orders'=>$request->total_orders,
            'total_cost'=>$request->total_cost
        ]);
    }
}
