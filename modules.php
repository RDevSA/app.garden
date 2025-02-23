<?php

use App\Admin\Controllers\PageAdminController;
use App\Lk\Controllers\PageLkController;
use App\Public\Controllers\PagePublicController;

return [
    'controllers' => [
        PagePublicController::class,
        PageAdminController::class,
        PageLkController::class,
    ],
    'repository' => [

    ]
];

