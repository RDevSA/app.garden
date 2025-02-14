<?php

use admin\Controllers\PageAdminController;
use lk\Controllers\PageLkController;
use public\Controllers\PagePublicController;

return [
    'controllers' => [
        PagePublicController::class,
        PageAdminController::class,
        PageLkController::class,
    ],
    'repository' => [

    ]
];

