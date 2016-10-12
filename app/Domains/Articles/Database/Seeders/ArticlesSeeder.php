<?php

namespace App\Domains\Articles\Database\Seeders;

use App\Domains\Articless\Entities\Articles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'id' => 1,
            'name' => 'Douglas Zuqueto',
            'email' => 'douglas.zuqueto@gmail.com',
            'password' => bcrypt('admin'),
        ]);

//        factory(Articles::class)->create();
    }
}