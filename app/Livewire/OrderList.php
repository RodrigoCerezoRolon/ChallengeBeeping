<?php

namespace App\Livewire;

use App\Models\Executed;
use App\Models\Order;
use App\Models\OrdersLine;
use Livewire\Component;

class OrderList extends Component
{
    public function render()
    {
        $orders=Order::all();
        $last_execution=Executed::latest()->first();
        return view('livewire.order-list',['orders'=>$orders,'last_execution'=>$last_execution])->layout('livewire.layouts.app');;
    }
}
