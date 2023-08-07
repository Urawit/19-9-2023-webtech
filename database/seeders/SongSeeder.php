<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Song::count() > 0) {
            echo "There are some songs in Database";
            return;
        }
        // $song = new Song();
        // $song->title = "Kill Bill";
        // $song->artist = "SZA";
        // $song->duration = 2 * 60 + 33;
        // $song->save();

        // $song = new Song();
        // $song->title = "Marry You";
        // $song->artist = "Bruno Mars";
        // $song->duration = 3 * 60 + 47;
        // $song->save();

        // $song = new Song();
        // $song->title = "Leave the door open";
        // $song->artist = "SilkSonic";
        // $song->duration = 4 * 60 + 18;
        // $song->save();

        Song::factory(100)->create();
    }
}
