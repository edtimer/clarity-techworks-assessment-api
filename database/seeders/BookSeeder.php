<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //I could use faker instead
    //     DB::table('books')->insert([
    //         'isbn' => Str::uniqid(10),
    //         'name' => Str::random(10).' Book',
    //         'genre' => Str::random(5).' genre',
    //         'author' => Str::random(20),
    //         'description' => Str::random(20).'some description',
    //         'createdAt' => date('Y-m-d H:i:s'),
    //         'updatedAt' => date('Y-m-d H:i:s'),
    //     ],
    
    // );

        //or use factory
        Book::factory()->count(5)->create();
    }
}
