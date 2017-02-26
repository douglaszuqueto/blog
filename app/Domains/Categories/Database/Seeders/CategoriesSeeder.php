<?php

namespace App\Domains\Categories\Database\Seeders;

use App\Domains\Categories\Entities\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('categories')->insert([
      'category' => 'Category 1',
      'state' => 1,
    ]);

//        factory(categories::class)->create();
  }
}