<?php

namespace Database\Factories\Kesehatan;

use App\Models\Kesehatan\DataPusKb;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataPusKbFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataPusKb::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Desa' => $this->faker->word,
        'JumlahPus' => $this->faker->word,
        'JumlahPesertaKb' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
