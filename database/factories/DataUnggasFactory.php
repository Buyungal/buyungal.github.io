<?php

namespace Database\Factories\Pertanian;

use App\Models\Pertanian\DataUnggas;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataUnggasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataUnggas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'JenisUnggas' => $this->faker->word,
        'Tahun2018' => $this->faker->word,
        'Tahun2019' => $this->faker->word,
        'Tahun2020' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
