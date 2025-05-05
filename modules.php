<?php

use App\Admin\Controllers\PageAdminController;
use App\Public\Controllers\PagePublicController;

use Lk\Controller\PageLkController;

return [
    'controllers' => [
        PagePublicController::class,
        PageAdminController::class,
        PageLkController::class,
    ],
    'repository' => [

    ]
];

