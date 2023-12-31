<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'facility' => fake()->unique()->name(),
            'sector' => fake()->unique()->name(),
            'certificate' => fake()->unique()->name(),
            'contact_info' => json_encode(['email'=>fake()->unique()->safeEmail(),'phone'=>fake()->phoneNumber()])
        ];
    }
}
