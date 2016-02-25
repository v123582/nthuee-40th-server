<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use App\Activity;

class ActivityTableSeeder extends Seeder {

    public function run()
    {
        DB::table('activities')->delete();
        for ($i = 1; $i <= 5; $i++) {
            Activity::create(array(
                'title' => '標題'.str_random(4),
                'topic' => '主題'.str_random(4),
                'time' => '時間'.str_random(4),
                'location' => '地點'.str_random(4),
                'introduction' => '介紹'.str_random(4),
                'content' => '內容'.str_random(4),
                'others' => '其他'.str_random(4),
                'url' => 'http://'.str_random(4)
            ));
        }
    }

}
