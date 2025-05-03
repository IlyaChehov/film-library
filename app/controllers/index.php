<?php

global $db;
require_once DIR_MODELS . '/films/getAllFilms.php';

$films = getAllFilms($db);

require_once DIR_VIEWS . '/index.php';
