<?php

namespace App\Domains\Newsletter\Database\Factories;

use App\Domains\Newsletter\Entities\NewsletterSubscribers;
use App\Support\Database\ModelFactory;

class NewsletterSubscribersFactory extends ModelFactory
{

  protected $model = NewsletterSubscribers::class;

  /**
   * @return array
   */
  protected function fields()
  {

    return [
      'name' => $this->faker->name,
      'email' => $this->faker->email,
    ];
  }
}