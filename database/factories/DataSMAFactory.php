<?php

namespace Database\Factories\Pendidikan;

use App\Models\Pendidikan\DataSMA;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataSMAFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataSMA::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Desa' => $this->faker->word,
        'JumlahSekolahMenengahAtas' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
