<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0 ; $i < 10 ; $i++) {
            Book::create([
                'title' => $faker->sentence,
                'ISBN' => $faker->unique()->isbn13,
                'author' => $faker->name,
                'year_published' => $faker->year
            ]);
        }
    }
}