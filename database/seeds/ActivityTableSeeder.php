<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use App\Activity;

class ActivityTableSeeder extends Seeder {

    public function run()
    {
        DB::table('activities')->delete();
        for ($i = 1; $i <= 25; $i++) {
            Activity::create(array(
                'title' => str_random(10),
                'introduction' => str_random(10),
                'content' => str_random(10),
                'others' => str_random(10),
                'url' => str_random(10)
            ));
        }
    }

}
