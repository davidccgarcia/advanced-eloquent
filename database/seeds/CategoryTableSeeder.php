<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create(['name' => 'PHP']);
        App\Category::create(['name' => 'Laravel']);
        App\Category::create(['name' => 'CSS']);
        App\Category::create(['name' => 'Backend']);
    }
}
