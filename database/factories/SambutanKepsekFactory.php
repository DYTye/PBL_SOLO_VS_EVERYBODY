<?php

namespace Database\Factories;

use App\Models\SambutanKepsek; // Pastikan ini mengarah ke model kamu
use Illuminate\Database\Eloquent\Factories\Factory;

class SambutanKepsekFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SambutanKepsek::class; // Sesuaikan jika nama model berbeda

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Menggunakan Faker untuk membuat teks paragraf panjang
        return [
            'sambutan' => $this->faker->paragraphs(5, true),
        ];
    }
}