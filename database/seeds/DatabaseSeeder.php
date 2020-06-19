<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Question;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(User::class, 50)->create()->each(function($u){
            $u->questions()
              ->saveMany(
                  factory(Question::class, rand(10, 15))->make()
              );
        });
    }
}
