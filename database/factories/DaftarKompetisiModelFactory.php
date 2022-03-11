<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DaftarKompetisiModel>
 */
class DaftarKompetisiModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_kompetisi' => $this->faker->name(),
            'tanggal_kompetisi' => $this->faker->date('Y-m-d'),
            'kuota_peserta' => $this->faker->name()
        ];
    }
}
