<?php

return [
    'default' => [
        'barryvdh/laravel-debugbar --dev',
        'pkboom/laravel-dump-tinker --dev',
    ],

    'optional' => [
        'spatie/data-transfer-object',
        'spatie/guzzle-rate-limiter-middleware',
        'spatie/laravel-validation-rules',
    ],
];
