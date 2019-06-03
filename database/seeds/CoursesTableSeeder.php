<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=App\User::all();
        $complexities=App\Complexity::all();
        DB::table('courses')->insert([
            'title' => 'Some interesting title',
            'author_id' => $users[1]->id,
            'complexity_id'=>$complexities[1]->id,
            'certified'=>1,
        ]);
        DB::table('courses')->insert([
            'title' => 'Some interesting title',
            'author_id' => $users[1]->id,
            'complexity_id'=>$complexities[2]->id,
            'certified'=>0,
        ]);
        DB::table('courses')->insert([
            'title' => 'Some interesting title',
            'author_id' => $users[1]->id,
            'complexity_id'=>$complexities[2]->id,
            'certified'=>1,
        ]);
        DB::table('courses')->insert([
            'title' => 'Some interesting title',
            'author_id' => $users[1]->id,
            'complexity_id'=>$complexities[0]->id,
            'certified'=>1,
        ]);
    }
}
