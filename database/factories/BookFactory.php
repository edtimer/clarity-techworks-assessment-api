<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'isbn' => fake()->uniqid(),
            'name' => fake()->name(),
            'genre' => Str::random(10),
            'Author' => Str::name(),
            'description' => Str::random(10),
            'createdAt' => date_time(),
            'updatedAt' => now(), 
        ];
    }

    
}
