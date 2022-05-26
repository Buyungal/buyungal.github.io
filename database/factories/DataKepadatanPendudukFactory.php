<?php

namespace Database\Factories\Kependudukan;

use App\Models\Kependudukan\DataKepadatanPenduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataKepadatanPendudukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataKepadatanPenduduk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Desa' => $this->faker->word,
        'Penduduk' => $this->faker->word,
        'LuasWilayah' => $this->faker->word,
        'KepadatanPenduduk' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
