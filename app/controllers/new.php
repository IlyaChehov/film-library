<?php

global $db;
require_once DIR_MODELS . '/films/addFilmToDb.php';

$title = 'Добавить фильм | Фильмотека';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $allowedFields = ['title', 'genre', 'year', 'description'];
    $fields = filterAllowedFields($_POST, $allowedFields);
    $errors = [];

    if (empty($fields['title'])) {
        $errors['title'] = 'Введите название фильма!';
    }

    if (empty($fields['year'])) {
        $errors['year'] = 'Введите год премьеры фильма!';
    } elseif (empty((int)$fields['year'])) {
        $errors['year'] = 'Год введен неправильно, введите целое число!';
        $fields['year'] = '';
    }

    if (empty($fields['genre'])) {
        $errors['genre'] = 'Введите жанр фильма!';
    }

    if (empty($errors)) {
        $idFilm = addFilmToDb($db, $fields);
        unset($fields);
    }
}

require_once DIR_VIEWS . '/new.php';
