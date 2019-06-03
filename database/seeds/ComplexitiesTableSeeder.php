<?php

use Illuminate\Database\Seeder;

class ComplexitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $achievements = App\Achievement::all();
        DB::table('complexities')->insert([
            'title' => 'BEGINNER',
            'given_xp' => 40,
            'xp_threshold' => 0,
        ]);
        DB::table('complexities')->insert([
            'title' => 'ADVANCED',
            'given_xp' => 320,
            'xp_threshold' => 800,
        ]);
        DB::table('complexities')->insert([
            'title' => 'INTERMEDIATE',
            'given_xp' => 500,
            'xp_threshold' => 1600,
        ]);
    }
}
