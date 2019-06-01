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
        $achievements=App\Achievement::all();
        DB::table('complexities')->insert([
            'title' => 'BEGINNER',
            'given_xp' => 5,
            'xp_threshold'=>200,
        ]);
        DB::table('complexities')->insert([
            'title' => 'ADVANCED',
            'given_xp' => 20,
            'xp_threshold'=>600,
        ]);
        DB::table('complexities')->insert([
            'title' => 'INTERMEDIATE',
            'given_xp' => 60,
            'xp_threshold'=>2000,
        ]);
    }
}
