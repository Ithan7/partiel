<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tours')->insert([
            ['election_id' => 1, 'tour_nb' => 1, 'pourcentage' => 25, 'parti_id' => 1],
            ['election_id' => 1, 'tour_nb' => 2, 'pourcentage' => 31, 'parti_id' => 1],
            ['election_id' => 1, 'tour_nb' => 1, 'pourcentage' => 73, 'parti_id' => 3],
            ['election_id' => 1, 'tour_nb' => 2, 'pourcentage' => 11, 'parti_id' => 3],
            ['election_id' => 2, 'tour_nb' => 1, 'pourcentage' => 35, 'parti_id' => 1],
            ['election_id' => 2, 'tour_nb' => 2, 'pourcentage' => 11, 'parti_id' => 1],
            ['election_id' => 2, 'tour_nb' => 1, 'pourcentage' => 93, 'parti_id' => 3],
            ['election_id' => 2, 'tour_nb' => 2, 'pourcentage' => 21, 'parti_id' => 3],
        ]);
    }
}
