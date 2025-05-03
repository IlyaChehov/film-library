<?php

function getAllFilms(PDO $db): array
{
    try {
        $stmt = $db->prepare("SELECT * FROM `films` ORDER BY `id` DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        error_log($e->getMessage());
        return [];
    }
}
