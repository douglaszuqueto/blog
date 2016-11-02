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
            'title' => 'Controlando Led usando MQTT e ESP8266',
            'subtitle' => 'Controlando Led usando MQTT e ESP8266',
            'url' => 'https://douglaszuqueto.com/artigos',
            'image' => 'https://douglaszuqueto.com/images/arduino.png',
            'state' => 0,
            'text' => '# Article',
        ]);

//        factory(Articles::class)->create();
    }
}