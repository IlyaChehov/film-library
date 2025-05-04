<?php

global $db;
require_once DIR_MODELS . '/films/getAllFilmsToDb.php';

$category = $_GET['category'] ?? null;

$films = getAllFilmsToDb($db, $category);
$title = 'Главная | Фильмотека';

require_once DIR_VIEWS . '/index.php';
