<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $songs = [
            [
                'id' => 1,
                'title' => 'Lost in Time',
                'artist' => 'Artist A',
                'album' => 'Timeless',
                'genre' => 'Pop',
                'duration' => 210,
                'release_year' => 2021,
                'play_count' => 150,
                'rating' => 4.5
            ],
            [
                'id' => 2,
                'title' => 'Echoes',
                'artist' => 'Artist B',
                'album' => 'Reverberations',
                'genre' => 'Rock',
                'duration' => 185,
                'release_year' => 2019,
                'play_count' => 75,
                'rating' => 4.0
            ],
            [
                'id' => 3,
                'title' => 'Journey\'s End',
                'artist' => 'Artist C',
                'album' => 'Final Destination',
                'genre' => 'Alternative',
                'duration' => 240,
                'release_year' => 2020,
                'play_count' => 200,
                'rating' => 4.8
            ],
            [
                'id' => 4,
                'title' => 'Midnight Sun',
                'artist' => 'Artist D',
                'album' => 'Solar Flare',
                'genre' => 'Jazz',
                'duration' => 195,
                'release_year' => 2018,
                'play_count' => 50,
                'rating' => 3.9
            ],
            [
                'id' => 5,
                'title' => 'Ocean Waves',
                'artist' => 'Artist E',
                'album' => 'Tranquility',
                'genre' => 'Chillout',
                'duration' => 300,
                'release_year' => 2022,
                'play_count' => 100,
                'rating' => 4.7
            ],
            [
                'id' => 6,
                'title' => 'Electric Dreams',
                'artist' => 'Artist F',
                'album' => 'Future Sounds',
                'genre' => 'Electronic',
                'duration' => 220,
                'release_year' => 2021,
                'play_count' => 120,
                'rating' => 4.2
            ],
            [
                'id' => 7,
                'title' => 'Rhythmic Pulse',
                'artist' => 'Artist G',
                'album' => 'Beat Machine',
                'genre' => 'Hip-Hop',
                'duration' => 180,
                'release_year' => 2017,
                'play_count' => 90,
                'rating' => 4.1
            ],
            [
                'id' => 8,
                'title' => 'Silent Whisper',
                'artist' => 'Artist H',
                'album' => 'Whispering Winds',
                'genre' => 'Ambient',
                'duration' => 250,
                'release_year' => 2020,
                'play_count' => 60,
                'rating' => 4.4
            ],
            [
                'id' => 9,
                'title' => 'All About That Bass',
                'artist' => 'Meghan Trainor',
                'album' => 'All About That Bass',
                'genre' => 'Country',
                'duration' => 230,
                'release_year' => 2016,
                'play_count' => 80,
                'rating' => 3.8
            ],
            [
                'id' => 10,
                'title' => 'Dear Future Husband',
                'artist' => 'Meghan Trainor',
                'album' => 'Galactic Journey',
                'genre' => 'Classical',
                'duration' => 275,
                'release_year' => 2023,
                'play_count' => 110,
                'rating' => 4.9
            ],
        ];

        DB::table('playlists')->insert($songs);
    }
}
