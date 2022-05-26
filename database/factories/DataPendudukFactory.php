<?php

namespace Database\Factories\Kependudukan;

use App\Models\Kependudukan\DataPenduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataPendudukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataPenduduk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Desa' => $this->faker->word,
        'LakiLaki' => $this->faker->word,
        'Perempuan' => $this->faker->word,
        'Rasio' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
