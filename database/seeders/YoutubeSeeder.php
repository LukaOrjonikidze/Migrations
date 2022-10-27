<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Youtube;

class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Youtube::create([
            'name' => 'Fallen Angel',
            'link' => 'https://youtu.be/qU8tMdSVRBA',
            'views' => 661,
            'description' => '',
            'likes' => 61
        ]);
        Youtube::create([
            'name' => 'Rick Astley - Never Gonna Give You Up (Official Music Video)',
            'link' => 'https://youtu.be/dQw4w9WgXcQ',
            'views' => 1306073060,
            'description' => 'The official video for “Never Gonna Give You Up” by Rick Astley',
            'likes' => 15000000
        ]);
        Youtube::create([
            'name' => 'Laravel Error php artisan migrate : Could not find driver In Connector.php',
            'link' => 'https://youtu.be/mRzNziw1evo',
            'views' => 2508,
            'description' => 'Buy me coffee? ☕',
            'likes' => 28
        ]);
        Youtube::create([
            'name' => 'Wise Mystical Tree 10 Hours',
            'link' => 'https://youtu.be/wv969vgqwDw',
            'views' => 334956,
            'description' => 'if youre over 25 and own a computer, this game is a must-have!',
            'likes' => 13000
        ]);
        Youtube::create([
            'name' => '"Revenge" (Official Lyrics) - A Minecraft Parody of Ushers DJ Got Us Fallin In Love',
            'link' => 'https://youtu.be/NeI-1Aq5CJw',
            'views' => 15765073,
            'description' => 'Due to popular demand somehow.',
            'likes' => 716000
        ]);
    }
}
