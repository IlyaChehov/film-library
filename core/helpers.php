<?php

function dump(mixed $array): void
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function dumpDie(mixed $array): void
{
    dump($array);
    die;
}

function filterAllowedFields(array $data, array $allowed): array
{
    $fields = [];
    foreach ($data as $k => $v) {
        if (in_array($k, $allowed)) {
            $fields[$k] = trim($v);
        }
    }
    return $fields;
}

function showError(): void
{
    http_response_code(404);
    require_once DIR_VIEWS . "/404.php";
    die();
}

function showTextToHtml(mixed $text): string
{
    return $text ? htmlspecialchars($text) : '';
}

function validateGenre(string $genre, array $validGenres, string $fallback = 'Без категории')
{
    return in_array($genre, $validGenres) ? $genre : $fallback;
}
