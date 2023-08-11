<?php

return [
    'parent'=> 'parent_id',
    'primary_key' => 'id',
    'generate_url'   => true,
    'childNode' => 'child',
    'body' => [
        'id',
        'name',
        'url',
    ],
    'html' => [
        'label' => 'name',
        'href'  => 'slug'
    ],
    'dropdown' => [
        'prefix' => '',
        'label' => 'name',
        'value' => 'id'
    ],
    'menu' => [
        'label' => 'title',
        'href' => 'url',
        'classes' => [
            'ul' => 'sidebar-nav',
            'li' => 'sidebar-item',
            'link' => 'sidebar-link',
        ]
    ]
];
