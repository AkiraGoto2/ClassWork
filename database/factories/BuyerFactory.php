<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buyer>
 */
class BuyerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address'=>fake() ->streetAddress(),
            'phone'=>fake() ->e164PhoneNumber(),
            'discount'=>fake()->numberBetween(0,100),
            'user_id'=> User::inRandomOrder()->first()->id
        ];
    }
}
