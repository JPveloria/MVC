<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'roomDescription'=>fake()->catchPhrase(),
            'roomCapacity'=>fake()->randomNumber(),
            'dateFrom'=>fake()->date($format = 'y-m-d', $max = 'now'),
            'dateTo'=>fake()->date($format = 'y-m-d', $max = 'now'),
        ];
    }
}
