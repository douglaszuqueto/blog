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
      'sponsor' => 'Sponsor 1',
      'url' => 'https://douglaszuqueto.com',
      'image_name' => 'image_name',
      'image_url' => 'image_url',
      'state' => 1,
    ]);

//        factory(sponsors::class)->create();
  }
}