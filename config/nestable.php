<?php

return [
    'parent'=> 'parent_id',
    'primary_key' => 'id',
    'generate_url'   => true,
    'childNode' => 'children',
    'can_move_to_children' => true,
    'body' => [
        'id',
        'text',
        'parent',
    ],
    'jstree' => [
        'id',
        'text',
        'state',
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
            'ul' => 'nav flex-column',
            'li' => 'nav-item',
            'link' => 'nav-link',
        ]
    ]
];
