<?php

global $db;
require_once DIR_MODELS . '/films/getAllFilms.php';

$category = $_GET['category'] ?? null;

$films = getAllFilms($db, $category);

require_once DIR_VIEWS . '/index.php';
