<?php

return [
    'debug'      => true,
    'title'      => 'Cecil test',
    'taxonomies' => [
        'tests' => 'disabled',
    ],
    'menus' => [
        'main' => [
            [
                'id'   => 'index',
                'name' => 'Da home! \o/',
            ],
            [
                'id'      => 'about',
                'enabled' => false,
            ],
            [
                'id'     => 'aligny',
                'name'   => 'The author',
                'url'    => 'https://arnaudligny.fr',
                'weight' => 9999,
            ],
        ],
    ],
    'pagination' => [
        'enabled' => true,
    ],
    'theme' => [
        'a-theme',
        'hyde',
    ],
    'googleanalytics' => 'UA-XXXXX',
    'output'          => [
        'formats' => [
            [
                'name'      => 'netlify_redirects',
                'mediatype' => 'text/plain',
                'extension' => '',
            ],
        ],
        'pagetypeformats' => [
            'page'       => ['html', 'json'],
            'homepage'   => ['html', 'atom', 'rss', 'json'],
            'section'    => ['html', 'atom', 'rss', 'json'],
            'vocabulary' => ['html'],
            'term'       => ['html', 'atom', 'rss'],
        ],
    ],
    'language'  => 'en',
    'languages' => [
        [
            'code'   => 'en',
            'name'   => 'English',
            'locale' => 'en_US',
        ],
        [
            'code'   => 'fr',
            'name'   => 'Français',
            'locale' => 'fr_FR',
            'config' => [
                'title'       => 'Cecil FR',
                'description' => 'En français !',
            ],
        ],
    ],
    'virtualpages' => [
        [
            'path'   => '_redirects',
            'output' => 'netlify_redirects',
        ],
        [
            'path'      => 'rss',
            'published' => false,
        ],
    ],
    'defaultpages'    => [
        'sitemap' => [
            'published' => false,
            'priority'  => 99,
        ],
    ],
    'static' => [
        'exclude' => [
            'test*.txt',
            '/\.php$/',
            '*.scss',
            'path',
        ],
        'load' => true,
    ],
    'generators' => [
        99  => 'Cecil\Generator\Test',
        100 => 'Cecil\Generator\TitleReplace',
    ],
    'cache' => [
        'enabled' => true,
    ],
    'assets' => [
        'fingerprint' => [
            'enabled' => false,
        ],
        'compile' => [
            'enabled'   => true,
            'style'     => 'compressed',
            'variables' => ['test' => '#FFF'],
        ],
        'minify' => [
            'enabled' => false,
        ],
    ],
    'postprocess' => [
        'enabled' => true,
    ],
    'paths' => [
        [
            'section' => 'Blog',
            'path'    => ':section/:year/:month/:day/:slug',
        ],
    ],
    'podcast' => [
        'author' => 'Cecil',
        'owner'  => [
            'name'  => 'Cecil',
            'email' => 'contact@cecil.app',
        ],
        'image'      => '/images/cecil-logo.png',
        'categories' => [
            'Society & Culture',
            'History',
        ],
    ],
];
