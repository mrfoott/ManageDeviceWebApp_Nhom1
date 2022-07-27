<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tickets>
 */
class TicketsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nameTickets' => $this->faker->name,
            'descriptionTickets' => $this->faker->sentence,
            'stateTickets' => $this->faker->randomDigit(),
            'idUsers_Tickets' => $this->faker->randomDigit()
        ];
    }
}
