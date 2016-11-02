<?php

namespace App\Domains\Tracker\Database\Seeders;

use App\Domains\Tracker\Entities\Tracker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrackerSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tracker')->insert([
            'tag' => 'Tag 1',
            'state' => 1,
        ]);

//        factory(tracker::class)->create();
    }
}