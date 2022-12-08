<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Primalac>
 */
class PrimalacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'ime'=> $this->faker->firstName(),
            'prezime'=> $this->faker->lastName(),
            'brTelefona'=> $this->faker->e164PhoneNumber(),
            'adresa'=> $this->faker->streetAddress()
            
        ];
    }
}
