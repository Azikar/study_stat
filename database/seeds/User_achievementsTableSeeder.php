<?php

use App\Achievement;
use App\User;
use Illuminate\Database\Seeder;

class User_achievementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::all();
        $achievements = App\Achievement::all();
        DB::table('user_achievements')->insert([
            'user_id' => $users[0]->id,
            'achievement_id' => $achievements[0]->id,
        ]);

        DB::table('user_achievements')->insert([
            'user_id' => $users[0]->id,
            'achievement_id' => $achievements[1]->id,
        ]);
        DB::table('user_achievements')->insert([
            'user_id' => $users[0]->id,
            'achievement_id' => $achievements[2]->id,
        ]);
        DB::table('user_achievements')->insert([
            'user_id' => $users[0]->id,
            'achievement_id' => $achievements[3]->id,
        ]);

    }
}
