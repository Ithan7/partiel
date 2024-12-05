<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PartiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partis')->insert([
            ['mouvement_id' => 1, 'name' => 'RN', 'description' => 'Rassemblement National'],
            ['mouvement_id' => 5, 'name' => 'NFP', 'description' => 'Nouveau Front Populaire'],
            ['mouvement_id' => 1, 'name' => 'LR', 'description' => 'Les républicains'],
            ['mouvement_id' => 2, 'name' => 'PA', 'description' => 'Parti Animaliste'],
            ['mouvement_id' => 2, 'name' => 'PS', 'description' => 'Parti Socialiste'],
            ['mouvement_id' => 5, 'name' => 'PC', 'description' => 'Parti Communiste'],
            ['mouvement_id' => 4, 'name' => 'R', 'description' => 'Reconquete'],
            ['mouvement_id' => 3, 'name' => 'MD', 'description' => 'Mouvement Démocrate'],
        ]);
    }
}
