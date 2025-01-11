<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');


require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/src/app.php';

$app->run();