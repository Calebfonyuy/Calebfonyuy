<?php

return [
    '/api/send-email' => [
        'method' => 'POST',
        'controller' => 'Controllers\MailController',
        'action' => 'sendEmail',
    ],
];