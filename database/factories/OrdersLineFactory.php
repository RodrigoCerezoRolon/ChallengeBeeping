<?php

namespace Database\Factories;

use App\Models\OrdersLine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrdersLineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = OrdersLine::class;

    public function definition()
    {
        return [
            'order_id' => function () {
                // Obtener un ID aleatorio de una orden existente
                return \App\Models\Order::inRandomOrder()->first()->id;
            },
            'qty' => $this->faker->numberBetween(1, 10),
            'product_id' => function () {
                // Obtener un ID aleatorio de un producto existente
                return \App\Models\Product::inRandomOrder()->first()->id;
            },
        ];
    }
}
