<?php

return [
    'app' => [
        'name' => config('app.name'),
        'url' => config('app.url'),
        'copyright' => [
            'year' => date('Y'),
            'owner' => 'John Doe',
            'text' => 'All rights reserved',
        ],
        'version' => '0.0.1',
        'logo' => null,
    ],
    'admin' => [
        'name' => config('nova.name'),
        'url' => config('nova.url').config('nova.path'),
        'copyright' => [
            'year' => date('Y'),
            'owner' => 'Laravel LLC',
            'text' => 'By Taylor Otwell, David Hemphill, and Steve Schoger.',
        ],
        'version' => Laravel\Nova\Nova::version(),
        'logo' => null,
    ],
];
