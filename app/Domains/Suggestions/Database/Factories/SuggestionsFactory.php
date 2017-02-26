<?php

namespace App\Domains\Suggestions\Database\Factories;

use App\Domains\Suggestions\Entities\Suggestions;
use App\Support\Database\ModelFactory;

class SuggestionsFactory extends ModelFactory
{

  protected $model = Suggestions::class;

  /**
   * @return array
   */
  protected function fields()
  {

    return [
      'title' => $this->faker->title,
      'description' => $this->faker->text(),
      'name' => $this->faker->name,
      'email' => $this->faker->email,
    ];
  }
}