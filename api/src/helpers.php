<?php

$config = require_once 'config.php';

function get_allowed_origins() {
    return $config['ALLOWED_ORIGIN'];
}

function get_allowed_routes() {
    return $config['ALLOWED_ROUTES'];
}

function get_env(string $key){
    $env = parse_ini_file(__DIR__ . '/../.env');
    return $env[$key] ?? null;
}