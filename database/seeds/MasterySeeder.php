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
        ]);
        DB::table('masteries')->insert([
            'title' => 'css',
        ]);
        DB::table('masteries')->insert([
            'title' => 'javascript',
        ]);
        DB::table('masteries')->insert([
            'title' => 'java',
        ]);
    }
}
