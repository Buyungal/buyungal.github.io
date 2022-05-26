<?php

namespace Database\Factories\Pertanian;

use App\Models\Pertanian\DataTernak;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataTernakFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataTernak::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'JenisTernak' => $this->faker->word,
        'Tahun2018' => $this->faker->word,
        'Tahun2019' => $this->faker->word,
        'Tahun2020' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
