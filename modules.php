<?php

use App\Admin\Controllers\PageAdminController;
use Core\PagePublic\PagePublicController;
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

