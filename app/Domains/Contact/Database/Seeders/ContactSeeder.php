<?php

namespace App\Domains\Contact\Database\Seeders;

use App\Domains\Contact\Entities\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            'title' => 'News 1',
            'subject' => 'Subject 1',
            'message' => 'Message 1',
            'email' => 'email@mail.com',
            'state' => 0,
        ]);

//        factory(Contact::class)->create();
    }
}