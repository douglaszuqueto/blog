<?php

namespace App\Domains\Contact\Database\Factories;

use App\Domains\Contact\Entities\Contact;
use App\Support\Database\ModelFactory;

class ContactFactory extends ModelFactory
{

  protected $model = Contact::class;

  /**
   * @return array
   */
  protected function fields()
  {

    return [
      'name' => $this->faker->name,
      'email' => $this->faker->unique()->safeEmail,
      'subject' => $this->faker->title,
      'message' => $this->faker->text
    ];
  }
}