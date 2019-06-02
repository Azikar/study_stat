<?php

use Illuminate\Database\Seeder;

class course_masteriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses=App\Course::all();
        $masteries=App\Mastery::all();
        DB::table('course_masteries')->insert([
            'course_id' =>  $courses[0]->id,
            'mastery_id'=>$masteries[0]->id
        ]);
        DB::table('course_masteries')->insert([
            'course_id' =>  $courses[0]->id,
            'mastery_id'=>$masteries[1]->id
        ]);
        DB::table('course_masteries')->insert([
            'course_id' =>  $courses[1]->id,
            'mastery_id'=>$masteries[1]->id
        ]);
    }
}
