<?php

namespace App\Domains\Sponsors\Database\Seeders;

use App\Domains\Sponsorss\Entities\Sponsors;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SponsorsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sponsors')->insert([
            'id' => 1,
            'sponsor' => 'Sponsor 1',
            'url' => 'url',
            'image' => 'image',
            'state' => 1,
        ]);

//        factory(sponsors::class)->create();
    }
}