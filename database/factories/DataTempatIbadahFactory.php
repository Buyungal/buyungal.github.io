<?php

namespace Database\Factories\Agama;

use App\Models\Agama\DataTempatIbadah;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataTempatIbadahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataTempatIbadah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Desa' => $this->faker->word,
        'JumlahMasjid' => $this->faker->word,
        'JumlahMushola' => $this->faker->word,
        'JumlahGerejaProtestan' => $this->faker->word,
        'JumlahGerejaKatholik' => $this->faker->word,
        'JumlahPura' => $this->faker->word,
        'JumlahVihara' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
