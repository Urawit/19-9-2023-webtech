<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index() {
        $songs = collect([
            [
                'title' => 'Kill Bill',
                'artist' => 'SZA',
                'album' => 'Good Days',
                'duration' => [
                    'minutes' => 2,
                    'seconds' => 33
                ]
            ],
            [
                'title' => 'Leave the door open',
                'artist' => 'SilkSonic',
                'album' => 'An Evening with Silk Sonic',
                'duration' => [
                    'minutes' => 4,
                    'seconds' => 18
                ]
            ],
            [
                'title' => "Marry You",
                'artist' => 'Bruno Mars',
                'album' => 'Doo-Wops & Hooligans',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 47
                ]
            ],
        ]);

        return view('songs.index', [
            'title' => 'Song Playlist',
            'songs' => $songs
        ]);
    }
}
