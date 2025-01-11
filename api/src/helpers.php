<?php

function get_allowed_origins() {
    $config = require 'config.php';
    return $config['ALLOWED_ORIGIN'];
}

function get_allowed_routes() {
    $config = require 'config.php';
    return $config['ALLOWED_ROUTES'];
}

function get_current_route() {
    $uri = $_SERVER['REQUEST_URI'];
    $uri = explode('?', $uri)[0];
    return $uri;
}

function get_env(string $key){
    $env = parse_ini_file(__DIR__ . '/../.env');
    return $env[$key] ?? null;
}