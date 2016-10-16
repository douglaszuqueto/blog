<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Blog - @douglaszuqueto", // set false to total remove
            'description'  => 'Blog - @douglaszuqueto', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['@douglaszuqueto', 'Blog', 'IoT', 'Internet of Things', 'Maker'],
            'canonical'    => true, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => true,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Blog @douglaszuqueto!', // set false to total remove
            'description' => 'Blog for makers and hobbyists', // set false to total remove
            'url'         => true,
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          //'site'        => '@douglaszuqueto',
        ],
    ],
];
