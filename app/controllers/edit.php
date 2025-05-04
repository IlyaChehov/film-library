<?php

global $db, $categories;
require_once DIR_MODELS . '/films/getFilmToDb.php';
require_once DIR_MODELS . '/films/editFilmToDb.php';

$title = "Редактирование фильма | Фильмотека";

$idFilm = $_GET['id'] ?? null;

$film = getFilmToBd($db, $idFilm);

if (!$film) {
    showError();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $allowedFields = ['title', 'year', 'genre', 'description'];
    $fields = filterAllowedFields($_POST, $allowedFields);
    $errors = [];

    foreach ($film as $key => $value) {
        if ($key === 'year' && !is_numeric($fields[$key])) {
            continue;
        }

        if (!empty($fields[$key])) {
            $film[$key] = $fields[$key];
        }
    }

    if (empty($fields['title'])) {
        $errors['title'] = 'Введите название фильма!';
    }

    if (empty($fields['year'])) {
        $errors['year'] = 'Введите год премьеры фильма!';
    } elseif (!is_numeric(($fields['year']))) {
        $errors['year'] = 'Год введен неправильно, введите целое число!';
        $fields['year'] = '';
    }

    if (empty($fields['genre'])) {
        $errors['genre'] = 'Введите жанр фильма!';
    }

    if (empty($errors)) {
        $fields['genre'] = validateGenre($fields['genre'], $categories);
        $resultEditFilm = editFilmToDb($db, $fields, $idFilm);
        $film = $fields;
    }
}

require_once DIR_VIEWS . '/edit.php';
