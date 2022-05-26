<?php

namespace Database\Factories\Energi;

use App\Models\Energi\DataListrik;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataListrikFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataListrik::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ListrikPln' => $this->faker->word,
        'ListrikNonPln' => $this->faker->word,
        'BukanPenggunaListrik' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
