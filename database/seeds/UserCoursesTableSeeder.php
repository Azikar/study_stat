<?php

use Illuminate\Database\Seeder;

class UserCoursesTableSeeder extends Seeder
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
        DB::table('user_courses')->insert([
            'user_id' => $users[0]->id,
            'course_id' => $courses[0]->id,
            'completion'=>1, //1= completed, 0= nope
            'last_accessed'=>date("Y-m-d h:i:s",time()),
            'time_spent'=>36000 //in seconds
        ]);
        DB::table('user_courses')->insert([
            'user_id' => $users[0]->id,
            'course_id' => $courses[1]->id,
            'completion'=>1, //1= completed, 0= nope
            'last_accessed'=>date("Y-m-d h:i:s",time()),
            'time_spent'=>36000 //in seconds
        ]);
        DB::table('user_courses')->insert([
            'user_id' => $users[0]->id,
            'course_id' => $courses[2]->id,
            'completion'=>1, //1= completed, 0= nope
            'last_accessed'=>date("Y-m-d h:i:s",time()),
            'time_spent'=>36000 //in seconds
        ]);
        DB::table('user_courses')->insert([
            'user_id' => $users[0]->id,
            'course_id' => $courses[3]->id,
            'completion'=>1, //1= completed, 0= nope
            'last_accessed'=>date("Y-m-d h:i:s",time()),
            'time_spent'=>36000 //in seconds
        ]);
    }
}
