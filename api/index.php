<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/config.php';

$app = require_once __DIR__ . '/src/app.php';

$app->run();