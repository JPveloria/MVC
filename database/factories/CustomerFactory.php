<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lastname'=>fake()->lastname(),
            'firstname'=>fake()->firstname(),
            'email'=>fake()->safeemail(),
            'address'=>fake()->address(),
            'contactNumber'=>fake()->phoneNumber()
        ];
    }
}
