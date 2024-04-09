<?php

namespace App\Console\Commands;

use App\Jobs\CalculateTotalCostJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;

class ExecuteTotal extends Command
{
    protected $signature = 'execute:total';
    protected $description = 'Calculate total cost of all orders and save it to executed table.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        CalculateTotalCostJob::dispatch()->onQueue('calculate_costs_queue');
    }
}
