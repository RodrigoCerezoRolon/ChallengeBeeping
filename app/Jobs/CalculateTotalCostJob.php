<?php

namespace App\Jobs;

use App\Models\Order;
use App\Models\OrdersLine;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;

class CalculateTotalCostJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $totalCost = OrdersLine::with('product')->get()->reduce(function ($total, $orderLine) {
            return $total + ($orderLine->qty * $orderLine->product->cost);
        }, 0);
        $totalOrders = Order::count();
        $body = [
            'total_cost' => $totalCost,
            'total_orders' => $totalOrders
        ];
      
        $client = new \GuzzleHttp\Client();
        $client->post(env('APP_URL').'/api/executed/create', [
            'json' => $body
        ]);

    }
}
