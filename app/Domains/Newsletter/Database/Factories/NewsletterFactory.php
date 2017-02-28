<?php

namespace App\Domains\Newsletter\Database\Factories;

use App\Domains\Newsletter\Entities\Newsletter;
use App\Support\Database\ModelFactory;

class NewsletterFactory extends ModelFactory
{

  protected $model = Newsletter::class;

  /**
   * @return array
   */
  protected function fields()
  {

    return [
      'campaign' => $this->faker->name,
      'state' => 0,
    ];
  }
}