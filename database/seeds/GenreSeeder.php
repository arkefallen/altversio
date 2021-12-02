<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'name' => 'Action',
        ]);

        Genre::create([
            'name' => 'Adventure',
        ]);

        Genre::create([
            'name' => 'Angst',
        ]);

        Genre::create([
            'name' => 'Comedy',
        ]);

        Genre::create([
            'name' => 'Family',
        ]);

        Genre::create([
            'name' => 'Fantasy',
        ]);

        Genre::create([
            'name' => 'Fluffy',
        ]);

        Genre::create([
            'name' => 'Friendship',
        ]);

        Genre::create([
            'name' => 'Horror',
        ]);

        Genre::create([
            'name' => 'Mystery',
        ]);

        Genre::create([
            'name' => 'Marriage Life',
        ]);

        Genre::create([
            'name' => 'Thriller',
        ]);

        Genre::create([
            'name' => 'Romance',
        ]);
    }
}
