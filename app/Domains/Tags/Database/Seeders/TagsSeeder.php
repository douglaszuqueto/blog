<?php

namespace App\Domains\Tags\Database\Seeders;

use App\Domains\Tags\Entities\Tags;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'tag' => 'Tag 1',
            'state' => 1,
        ]);

//        factory(tags::class)->create();
    }
}