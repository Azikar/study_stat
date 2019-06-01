<?php

use Illuminate\Database\Seeder;

class UserCertificatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=App\User::all();
        $courses=App\Course::all();
        DB::table('user_certificates')->insert([
            'user_id' => $users[0]->id,
            'course_id' => $courses[0]->id,
            'created_at'
        ]);
        DB::table('user_certificates')->insert([
            'user_id' => $users[0]->id,
            'course_id' => $courses[1]->id,
        ]);
        DB::table('user_certificates')->insert([
            'user_id' => $users[0]->id,
            'course_id' => $courses[2]->id,
        ]);
    }
}
