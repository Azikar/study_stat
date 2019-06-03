<?php

use Illuminate\Database\Seeder;

class MasterySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('masteries')->insert([
            'title' => 'php',
            'color' => '#3399ff',
        ]);
        DB::table('masteries')->insert([
            'title' => 'css',
            'color' => '#ccff33',
        ]);
        DB::table('masteries')->insert([
            'title' => 'javascript',
            'color' => '#99ff99',
        ]);
        DB::table('masteries')->insert([
            'title' => 'java',
            'color' => '#6666ff',
        ]);
        DB::table('masteries')->insert([
            'title' => 'python',
            'color' => '#cc99ff',
        ]);
    }
}
