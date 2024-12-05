<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mouvements')->insert([
            ['name' => 'Droite', 'description' => 'Droite'],
            ['name' => 'Gauche', 'description' => 'Gauche'],
            ['name' => 'Centre', 'description' => 'Centre'],
            ['name' => 'Extreme Droite', 'description' => 'Extreme Droite'],
            ['name' => 'Extreme Gauche', 'description' => 'Extreme Gauche'],
            ['name' => 'Extreme Centre', 'description' => 'Extreme Centre'],
        ]);
    }
}
