<?php

namespace Database\Factories\Pertanian;

use App\Models\Pertanian\DataProduksiCabeRawit;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataProduksiCabeRawitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataProduksiCabeRawit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'JenisTanaman' => $this->faker->word,
        'Tahun2017' => $this->faker->word,
        'Tahun2018' => $this->faker->word,
        'Tahun2019' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
