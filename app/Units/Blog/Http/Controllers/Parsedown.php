<?php

namespace App\Units\Blog\Http\Controllers;


class Parsedown extends \Parsedown
{

    protected function inlineImage($Excerpt)
    {
        $Image = parent::inlineImage($Excerpt);

        $path = explode('/', $Image['element']['attributes']['src']);

        $image_name = $this->transformToTitle(urldecode($path[6]));

//        $figure = "<figure>
//                    <img src='ok'>
//                    <figcaption>Fig1. - A view of the pulpit rock in Norway.</figcaption>
//                  </figure>";

        $Image['element']['attributes']['title'] = $image_name;
        $Image['element']['attributes']['alt'] = $image_name;

        return $Image;
    }

    protected function transformToTitle($string)
    {
        $string = explode('-', $string);

        $title = array_map(function ($index) {
            return ucfirst($index);
        }, $string);

        return implode(' ', $title);
    }
}