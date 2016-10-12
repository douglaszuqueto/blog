<?php

namespace App\Domains\Contact\Database\Seeders;

use App\Domains\Contacts\Entities\Contact;
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
        DB::table('Contact')->insert([
            'id' => 1,
            'name' => 'Douglas Zuqueto',
            'email' => 'douglas.zuqueto@gmail.com',
            'password' => bcrypt('admin'),
        ]);

//        factory(Contact::class)->create();
    }
}