<?php

namespace App\Domains\News\Database\Seeders;

use App\Domains\Newss\Entities\News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('News')->insert([
            'id' => 1,
            'name' => 'Douglas Zuqueto',
            'email' => 'douglas.zuqueto@gmail.com',
            'password' => bcrypt('admin'),
        ]);

//        factory(News::class)->create();
    }
}