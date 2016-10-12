<?php

namespace App\Domains\Articles\Database\Seeders;

use App\Domains\Articles\Entities\Articles;
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
            'title' => 'Title 1',
            'subtitle' => 'Subtitle 1',
            'image' => 'Image 1',
            'url' => 'Url 1',
            'state' => 1,
        ]);

//        factory(Articles::class)->create();
    }
}