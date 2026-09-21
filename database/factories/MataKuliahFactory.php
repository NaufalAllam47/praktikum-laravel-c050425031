<?php

namespace Database\Factories;

use App\Models\MataKuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MataKuliah>
 */
class MataKuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'kode_mk' => $this->faker->unique()->bothify('MK-####'), // Menghasilkan format seperti MK-1234
            'nama_mk' => $this->faker->words(3, true), // Menghasilkan 3 kata acak
            'sks' => $this->faker->numberBetween(1, 4),
            'semester' => $this->faker->numberBetween(1, 8),
            'dosen_id' => \App\Models\User::factory(), // Membuat user dummy otomatis sebagai dosen pengampu 
        ];
    }
}
