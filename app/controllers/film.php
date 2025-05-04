<?php

global $db;
require_once DIR_MODELS . '/films/getFilmToBd.php';
$idFilm = $_GET['id'] ?? null;

$film = getFilmToBd($db, $idFilm);

if (!$film) {
    showError();
}

$title = "{$film['title']} | Фильмотека";

require_once DIR_VIEWS . '/film.php';
