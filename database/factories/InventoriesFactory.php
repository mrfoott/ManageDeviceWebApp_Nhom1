<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventories>
 */
class InventoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nameInventories' => $this->faker->name,
            'nameUsers' => $this->faker->name,
            'statusUsers' => $this->faker->randomDigit(),
            'idUsers_Roles' => $this->faker->randomDigit(),
            'idUsers_Departments' => $this->faker->randomDigit()
        ];
    }
}
