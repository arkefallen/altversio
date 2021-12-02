<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jessica',
            'email' => 'jessica@mail.com',
            'password' => bcrypt('userjessica'),
        ]);

        User::create([
            'name' => 'Raul',
            'email' => 'raul@mail.com',
            'password' => bcrypt('userraul'),
        ]);

        $this->call(GenreSeeder::class);
        $this->call(KaryaSeeder::class);
        $this->call(KaryaGenreSeeder::class);
    }
}
