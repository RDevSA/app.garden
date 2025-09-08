<?php

use App\Admin\Controllers\PageAdminController;
use Core\PagePublic\PagePublicController;
use Lk\Controller\PageLkController;

return [
    'section_controllers' => [
        PagePublicController::class,
        PageAdminController::class,
        PageLkController::class,
    ],
    'page_controllers' => [
        
    ],
    'repository' => [

    ]
];

