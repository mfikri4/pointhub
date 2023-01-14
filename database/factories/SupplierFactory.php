<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

    $factory->define(\App\Models\Supplier::class, function (Faker $faker) {
        return [
            'code' => $faker->words(5, true),
            'name' => $faker->words(5, true),
            'email'  => $faker->words(5, true),
            'address' => $faker->words(5, true),
            'phone' => $faker->words(5, true),
        ];
    });
    
    }
}
