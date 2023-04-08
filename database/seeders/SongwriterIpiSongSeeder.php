<?php

namespace Database\Seeders;

use App\Models\Songwriter;
use App\Models\Ipi;
use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongwriterIpiSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Songwriter::factory(3)->create()->each(
            function($songwriter){
                //seeding fake data
                $ipi = Ipi::factory()->make();      //one ipi for each songwriter
                $song = Song::factory(5)->make();   //5 songs for each songwriter

                //save the generated data
                $songwriter->ipis()->save($ipi);
                $ipi->songs()->saveMany($song);
            }
        );
    }
}
