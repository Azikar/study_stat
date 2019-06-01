<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AchievementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('achievements')->insert([
            'icon' => 'crown.png',
            'name' => 'crown',
            
        ]);
        DB::table('achievements')->insert([
            'icon' => 'nr1.png',
            'name' => 'crown',
            
        ]);
        DB::table('achievements')->insert([
            'icon' => 'nr3.png',
            'name' => 'crown',
            
        ]);
        DB::table('achievements')->insert([
            'icon' => 'shield.png',
            'name' => 'crown',
            
        ]);
    }
}
