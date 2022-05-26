<?php

namespace Database\Factories\Pendidikan;

use App\Models\Pendidikan\DataSekolahDasar;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataSekolahDasarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataSekolahDasar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Desa' => $this->faker->word,
        'JumlahSekolahDasar' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
