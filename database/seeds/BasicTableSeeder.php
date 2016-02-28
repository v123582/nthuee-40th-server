<?php
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use App\Basic;

class BasicTableSeeder extends Seeder {
    public function run()
    {
        DB::table('basics')->delete();
        Basic::create([
        	'headerTitle' => 'headerTitle',
            'headerDescription'    => 'headerDescription',
            'headerContent' => 'headerContent',
            'state1Title' => 'state1Title',
            'state1Description'    => 'state1Description',
            'state1Content' => 'state1Content',
            'state2Title' => 'state2Titie',
            'state2Description'    => 'state2Description',
            'state2Content' => 'state2Content',
            'state3Title' => 'state3Titie',
            'state3Description'    => 'state3Description',
            'state3Content' => 'state3Content',
        ]);
    }
}

    