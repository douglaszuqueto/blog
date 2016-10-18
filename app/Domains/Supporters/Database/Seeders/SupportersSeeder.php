<?php

namespace App\Domains\Supporters\Database\Seeders;

use App\Domains\Supporters\Entities\Supporters;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupportersSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supporters')->insert([
            'supporter' => 'Supporter 1',
            'url' => 'url',
            'image_name' => 'image_name',
            'image_url' => 'image_url',
            'state' => 1,
        ]);

//        factory(Supporters::class)->create();
    }
}