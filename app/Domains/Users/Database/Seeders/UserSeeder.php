<?php

namespace App\Domains\Users\Database\Seeders;

use App\Domains\Users\Entities\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('users')->insert([
      'name' => 'Douglas Zuqueto',
      'email' => 'douglas.zuqueto@gmail.com',
      'password' => bcrypt('admin'),
    ]);

//        factory(User::class)->create();
  }
}