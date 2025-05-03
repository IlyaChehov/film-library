<?php

$routers = require_once DIR_CONFIG . '/routers.php';

$uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($uri)['path'];
$uri = trim($uri, '/');

if (array_key_exists($uri, $routers)
    && file_exists(DIR_CONTROLLERS . "/{$routers[$uri]}")) {
    require_once DIR_CONTROLLERS . "/{$routers[$uri]}";
} else {
    require_once DIR_VIEWS . "/404.php";
}
