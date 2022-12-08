<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kurir;
use App\Models\Primalac;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posiljka>
 */
class PosiljkaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sifraPosiljke'=> $this->faker->unique()->domainWord(),
            'tezina'=> $this->faker->numberBetween($min=1 ,$max=500),
            'adresa'=> $this->faker->streetAddress(),
            'kurir_id'=> Kurir::factory(),
            'primalac_id'=> Primalac::factory()

        
        
        ];
    }
}
