<?php

namespace Database\Factories;

use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfficeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Office::class;


    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'address' => $this->faker->word(),
        ];
    }
}
