<?php

namespace Database\Factories\Pertanian;

use App\Models\Pertanian\DataLuasPanenCabeRawit;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataLuasPanenCabeRawitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataLuasPanenCabeRawit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'JenisTanaman' => $this->faker->randomElement(['CabeRawit']),
        'Tahun2017' => $this->faker->word,
        'Tahun2018' => $this->faker->word,
        'Tahun2019' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
