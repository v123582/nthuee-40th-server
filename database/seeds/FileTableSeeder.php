<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use App\File;

class FileTableSeeder extends Seeder {

    public function run()
    {
        DB::table('files')->delete();
    }

}