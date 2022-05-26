<?php

namespace Database\Factories\Pertanian;

use App\Models\Pertanian\DataProduksiTomat;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataProduksiTomatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataProduksiTomat::class;

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
