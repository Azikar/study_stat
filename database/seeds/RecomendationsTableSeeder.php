<?php

use Illuminate\Database\Seeder;

class RecomendationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=App\User::all();
        DB::table('recommendations')->insert([
            'title' => 'Some interesting title',
            'review'=> "a lot of text should be placed here, so here it goes (Lorem ipsum dolor sit amet, consectetuer consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim)",
            'user_id'=>$users[0]->id,
            'author_id' => $users[1]->id,
        ]);
        DB::table('recommendations')->insert([
            'title' => 'Some interesting title',
            'review'=> "a lot of text should be placed here, so here it goes (Lorem ipsum dolor sit amet, consectetuer consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim)",
            'user_id'=>$users[0]->id,
            'author_id' => $users[1]->id,
        ]);
    }
}
