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
];