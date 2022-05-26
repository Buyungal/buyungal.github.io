<?php

namespace Database\Factories\Kesehatan;

use App\Models\Kesehatan\DataTenagaKesehatan;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataTenagaKesehatanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataTenagaKesehatan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'JumlahDokter' => $this->faker->word,
        'JumlahPerawat' => $this->faker->word,
        'JumlahBidan' => $this->faker->word,
        'JumlahFarmasi' => $this->faker->word,
        'JumlahAhliGizi' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
