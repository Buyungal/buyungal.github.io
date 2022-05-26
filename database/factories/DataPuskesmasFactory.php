<?php

namespace Database\Factories\Kesehatan;

use App\Models\Kesehatan\DataPuskesmas;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataPuskesmasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataPuskesmas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Desa' => $this->faker->word,
        'PuskesmasRawatInap' => $this->faker->word,
        'PuskesmasTanpaRawatInap' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
