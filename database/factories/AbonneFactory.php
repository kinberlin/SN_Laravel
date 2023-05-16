<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Abonne>
 */
class AbonneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "age" =>rand(21,100),
            "motivation" =>rand(1,40),
            "rue" =>Str::upper(Str::random(10)),
            "profession" =>Str::upper(Str::random(10)),
            "code_postal" =>Str::upper(Str::random(10)),
            "prenom" =>$this->faker->name(),
            "telephone" =>$this->faker->phoneNumber(),//Str::upper(Str::random(10)),
            "sexe" =>$this->faker->randomElement(['male', 'female']),
            "ville" =>$this->faker->city,
            "pays" =>Str::upper(Str::random(10)),
            "email" =>$this->faker->email(),//Str::upper(Str::random(10)),
            "nom" =>$this->faker->name() //Str::upper(Str::random(10))

        ];
    }
}
