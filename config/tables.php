<?php

return [
    'users' => [
        'per_page' => 10,
        'columns' => [
            'first_name' => [
                'title' => 'tables.users.first_name',
                'searchable' => true,
                'orderable' => true,
                'closeable' => true,
            ],
            'last_name' => [
                'title' => 'tables.users.last_name',
                'searchable' => true,
                'orderable' => true,
                'closeable' => true,
            ],
            'birthday' => [
                'title' => 'tables.users.birthday',
                'searchable' => false,
                'orderable' => true,
                'closeable' => true,
            ],
        ],
    ],
];
