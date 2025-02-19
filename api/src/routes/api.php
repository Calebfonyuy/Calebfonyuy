<?php

return [
    '/api/send-email' => [
        'method' => 'POST',
        'controller' => 'Controllers\MailController',
        'action' => 'sendEmail',
    ],
    '/api/gallery' => [
        'method' => 'GET',
        'controller' => 'Controllers\GalleryController',
        'action' => 'index',
    ],
    '/api/experience' => [
        'method' => 'GET',
        'controller' => 'Controllers\CVController',
        'action' => 'experience',
    ],
    '/api/projects' => [
        'method' => 'GET',
        'controller' => 'Controllers\CVController',
        'action' => 'projects',
    ],
    '/api/skills' => [
        'method' => 'GET',
        'controller' => 'Controllers\CVController',
        'action' => 'skills',
    ],
    '/api/publications' => [
        'method' => 'GET',
        'controller' => 'Controllers\CVController',
        'action' => 'publications',
    ],
    '/api/teaching' => [
        'method' => 'GET',
        'controller' => 'Controllers\CVController',
        'action' => 'teaching',
    ],
    '/api/presentations' => [
        'method' => 'GET',
        'controller' => 'Controllers\CVController',
        'action' => 'presentations',
    ],
    '/api/service' =>[
        'method' => 'GET',
        'controller' => 'Controllers\CVController',
        'action' => 'service'
    ]
];