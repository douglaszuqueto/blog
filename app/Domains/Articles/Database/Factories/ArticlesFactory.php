<?php

namespace App\Domains\Articles\Database\Factories;

use App\Domains\Articles\Entities\Articles;
use App\Support\Database\ModelFactory;

class ArticlesFactory extends ModelFactory
{

  protected $model = Articles::class;

  /**
   * @return array
   */
  protected function fields()
  {

    return [
      'title' => $this->faker->title,
      'subtitle' => $this->faker->title,
      'image' => $this->faker->url,
      'url' => $this->faker->url,
      'state' => 1,
    ];
  }
}