<?php

namespace App\Domains\News\Database\Seeders;

use App\Domains\News\Entities\News;
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
        DB::table('news')->insert([
            'title' => 'Title',
            'url' => 'https://douglaszuqueto.com',
            'image_name' => 'image_name',
            'image_url' => 'image_url',
        ]);

//        factory(News::class)->create();
    }
}