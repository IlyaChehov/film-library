<?php

global $db;
require_once DIR_MODELS . '/films/getFilmToBd.php';
$idFilm = $_GET['id'] ?? null;

$film = getFilmToBd($db, $idFilm);

if (!$film) {
    showError();
}

require_once DIR_VIEWS . '/film.php';
