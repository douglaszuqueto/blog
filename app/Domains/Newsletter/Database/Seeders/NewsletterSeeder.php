<?php

namespace App\Domains\Newsletter\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsletterSeeder extends Seeder
{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('newsletter')->insert([
      'name' => 'Douglas Zuqueto',
      'email' => 'douglas.zuqueto@gmail.com',
    ]);

  }
}