<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 12 movies, random episodes 10-16
        for($i = 1; $i <= 12; $i++){
            $ep = rand(10, 16);
            for($j = 1; $j <= $ep; $j++){
                DB::table('episodes')->insert([
                    'movie_id' => $i, 'episode' => $j, 'title' => 'Episode ' . $j
                ]);
            }
        }
        
    }
}
