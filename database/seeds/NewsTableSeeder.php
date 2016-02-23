<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use App\News;

class NewsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('activities')->delete();
        for ($i = 1; $i <= 10; $i++) {
            News::create(array(
                'title' => str_random(10),
                'content' => str_random(10),
            ));
        }
    }

}