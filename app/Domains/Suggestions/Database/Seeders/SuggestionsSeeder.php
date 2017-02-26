<?php

namespace App\Domains\Suggestions\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuggestionsSeeder extends Seeder
{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('suggestions')->insert([
      'title' => 'Title',
      'description' => 'https://douglaszuqueto.com',
      'name' => 'Douglas Zuqueto',
      'email' => 'douglas.zuqueto@gmail.com',
    ]);

  }
}