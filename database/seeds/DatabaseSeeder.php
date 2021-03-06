<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('CategoryTableSeeder');
        $this->call('BookTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('BookUserTableSeeder');
        $this->call('ExamTableSeeder');
        $this->call('PageTableSeeder');
        $this->call('PostTableSeeder');

        Model::reguard();
    }
}
