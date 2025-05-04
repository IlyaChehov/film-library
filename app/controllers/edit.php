<?php
$title = "Удаление фильма | Фильмотека";

global $db;
require_once DIR_MODELS . '/films/getFilmToBd.php';
$idFilm = $_GET['id'] ?? null;

$film = getFilmToBd($db, $idFilm);

if (!$film) {
    showError();
}

$title = "Удаление фильма | Фильмотека";
require_once DIR_VIEWS . '/edit.php';
