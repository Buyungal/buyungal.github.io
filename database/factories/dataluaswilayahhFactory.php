<?php

namespace Database\Factories\Geografi;

use App\Models\Geografi\dataluaswilayahh;
use Illuminate\Database\Eloquent\Factories\Factory;

class dataluaswilayahhFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = dataluaswilayahh::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Desa' => $this->faker->word,
        'LuasWilayah' => $this->faker->word,
        'Persentase' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
