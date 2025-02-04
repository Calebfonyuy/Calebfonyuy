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

function get_gallery(){
    $gallery = require 'gallery.php';
    return $gallery;
}

function get_experience(){
    $experience = require 'data/experience.php';
    return $experience;
}

function get_projects(){
    $projects = require 'data/projects.php';
    return $projects;
}

function get_skills(){
    $skills = require 'data/skills.php';
    return $skills;
}

function get_publications(){
    $publications = require 'data/publications.php';
    return $publications;
}

function get_teaching(){
    $teaching = require 'data/teaching.php';
    return $teaching;
}

function get_presentations(){
    $presentations = require 'data/presentations.php';
    return $presentations;
}
