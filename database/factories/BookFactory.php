<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $genre = $this->faker->randomElement(['Horror', 'Comedy', 'Romance']);
        
        return [
            'isbn' => $this->faker->unique()->isbn13,
            'name' => $this->faker->words(6, true),
            'genre' => $genre,
            'author' => $this->faker->name(),
            'description' => $this->faker->sentence(20),
        ];
    }
}