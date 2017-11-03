<?php

use Illuminate\Database\Seeder;

class BookUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) { 
            $user = App\User::find($i);

            for ($j = 1; $j <= 5; $j++) { 
                $user->books()->attach(rand(1, 20));
            }
        }
    }
}
