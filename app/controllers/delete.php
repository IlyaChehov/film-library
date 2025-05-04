<?php

global $db;
require_once DIR_MODELS . '/films/getFilmToDb.php';
require_once DIR_MODELS . '/films/deleteFilmToDb.php';
$idFilm = $_GET['id'] ?? null;

$film = getFilmToBd($db, $idFilm);

if (!$film) {
    showError();
}

$title = "Удаление фильма | Фильмотека";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isDeleteFilm = deleteFilmToDb($db, $idFilm);
}

require_once DIR_VIEWS . '/delete.php';
