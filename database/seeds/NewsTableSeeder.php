<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use App\News;

class NewsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('news')->delete();
        for ($i = 1; $i <= 5; $i++) {
            News::create(array(
                'title' => '標題'.str_random(4),
                'content' => '內容'.str_random(4),
            ));
        }
    }

}