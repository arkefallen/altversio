<?php

use Illuminate\Database\Seeder;
use App\Karya;

class KaryaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Karya::create([
            'thumbnail' => 'asset/tmb/1638247458.jpg',
            'title' => 'Qrt ghaib is not always creepy',
            'link_prompt' => 'https://twitter.com/y_ourloneliness/status/1411235960398827520?s=20',
            'link_karya' => 'https://twitter.com/tenfeetsunder/status/1432196342118436868?s=20',
            'reader_target' => 'Minor / Remaja ( 15-18 tahun )',
            'language' => 'Indonesia',
            'status' => 'Completed',
            'author_id' => '1'
        ]);

        Karya::create([
            'thumbnail' => 'asset/tmb/1638249097.png',
            'title' => '{ truth or dare }  “let\'s begin the game”',
            'link_prompt' => '-',
            'link_karya' => 'https://twitter.com/_satuperdua/status/1417122154143879172?s=20',
            'reader_target' => 'Dewasa Baru (18-25 tahun )',
            'language' => 'Indonesia',
            'status' => 'Completed',
            'author_id' => '2'
        ]);
    }
}
