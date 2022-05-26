<?php

namespace Database\Factories\Pendidikan;

use App\Models\Pendidikan\DataMTS;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataMTSFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataMTS::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Desa' => $this->faker->word,
        'JumlahSekolahMadrasahTsanawiyah' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
