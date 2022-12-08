<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kurir>
 */
class KurirFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nazivFirme'=> $this->faker->company(),
            'pib'=> $this->faker->numerify('#######'),
            'maticniBroj'=> $this->faker->numerify('#######'),
            'adresa'=> $this->faker->streetAddress(),
            'website'=> $this->faker->url()
        ];
    }
}
