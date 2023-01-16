<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->sentence(2),
            'deskripsi' => $this->faker->paragraph(),
            'lokasi' => $this->faker->address(),
            'tgl_mulai' => now(),
            'tgl_selesai' => '2023-10-01',
        ];
    }
}
