<?php

namespace Database\Factories\Pendidikan;

use App\Models\Pendidikan\DataMA;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataMAFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataMA::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Desa' => $this->faker->word,
        'JumlahSekolahMadrasahAliyah' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
