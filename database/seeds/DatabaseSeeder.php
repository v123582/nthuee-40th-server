<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActivityTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(FileTableSeeder::class);
        $this->call(BasicTableSeeder::class);

    }
}
