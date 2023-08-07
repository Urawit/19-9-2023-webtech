<?php

namespace Database\Seeders;

use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Playlist::factory(100)->create();
        for($i = 0;$i<Playlist::count();$i++){
            $playlist = Playlist::find($i+1);
            for($j=0;$j<10;$j++){
                $playlist->songs()->attach(fake()->numberBetween(1,Song::count()));
            }
        }
    }
}
