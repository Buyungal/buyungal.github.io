<?php

namespace Database\Factories\Energi;

use App\Models\Energi\DataListrikdesa;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataListrikdesaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataListrikdesa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Desa' => $this->faker->word,
        'PenggunaListrikPln' => $this->faker->word,
        'PenggunaNonListrikPln' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
