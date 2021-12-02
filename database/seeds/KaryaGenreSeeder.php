<?php

use App\KaryaGenre;
use Illuminate\Database\Seeder;

class KaryaGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KaryaGenre::create([
            'karya_id' => '1',
            'genre_id' => '1',
        ]);

        KaryaGenre::create([
            'karya_id' => '1',
            'genre_id' => '2',
        ]);

        KaryaGenre::create([
            'karya_id' => '1',
            'genre_id' => '3',
        ]);

        KaryaGenre::create([
            'karya_id' => '2',
            'genre_id' => '4',
        ]);

        KaryaGenre::create([
            'karya_id' => '2',
            'genre_id' => '5',
        ]);

        KaryaGenre::create([
            'karya_id' => '2',
            'genre_id' => '6',
        ]);
    }
}
