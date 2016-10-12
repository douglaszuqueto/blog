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
        DB::table('Sponsors')->insert([
            'id' => 1,
            'name' => 'Douglas Zuqueto',
            'email' => 'douglas.zuqueto@gmail.com',
            'password' => bcrypt('admin'),
        ]);

//        factory(Sponsors::class)->create();
    }
}